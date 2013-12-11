<?php
/**
 * Mailer objects are responsible for actually sending emails.
 * The default Mailer class will use PHP's mail() function.
 * 
 * @package sapphire
 * @subpackage email
 */
class Mailer extends Object {
	/**
	 * Send a plain-text email.
	 *  
	 * @param string $to
	 * @param string $from
	 * @param string §subject
	 * @param string $plainContent
	 * @param bool $attachedFiles
	 * @param array $customheaders
	 * @return bool
	 */
	public function sendPlain($to, $from, $subject, $plainContent, $attachedFiles = false, $customheaders = false) {
		$vars = $this->preparePlaintextEmail($to, $from, $subject, $body, $attachedFiles, $customheaders);
		return $this->sendEmail($vars) ? $vars : false;
	}
	
	/**
	 * Sends an email as a both HTML and plaintext
	 *   $attachedFiles should be an array of file names
	 *    - if you pass the entire $_FILES entry, the user-uploaded filename will be preserved
	 *   use $plainContent to override default plain-content generation
	 * 
	 * @return bool
	 */
	public function sendHTML($to, $from, $subject, $htmlContent, $attachedFiles = false, $customheaders = false, $plainContent = false, $inlineImages = false) {
		$vars = $this->prepareHTMLEmail($to, $from, $subject, $htmlContent, $attachedFiles, $customheaders, $plainContent, $inlineImages);
		return $this->sendEmail($vars) ? $vars : false;
	}

	/**
	 * Take variables filtered and formatted by either preparePlaintextEmail() or prepareHTMLEmail()
	 * and send the email via PHP mail
	 *
	 * @param  array
	 * @return bool
	 */
	public function sendEmail($vars) {
		// Try it without the -f option if it fails
		if (!$result = @mail($vars['to'], $vars['subject'], $vars['fullBody'], $vars['headers'], "-f{$vars['bounceAddress']}")) {
			$result = mail($vars['to'], $vars['subject'], $vars['fullBody'], $vars['headers']);
		}
		return $result;
	}

	/**
	 * Configures all the headers and variables needed to send a plain text email with sendPlainTextEmail.
	 * It has been extracted from plaintextEmail so decendants can reuse this code without sending the email
	 *
	 * @return array
	 */
	public function preparePlaintextEmail($to, $from, $subject, $body, $attachedFiles = false, $customheaders = false) {
		$this->cleanCustomHeaders($customheaders);

		$from = $this->validEmailAddr($from);
		$to = $this->validEmailAddr($to);

		$body = $this->QuotedPrintable_encode($body);
		$bounceAddress = $this->getBounceAddress($from, $customheaders);
		$headers = $this->getStandardHeaders($from);
		$subject = $this->cleanSubject($subject);

		$this->addAttachments($attachedFiles, $headers, $body);

		// Combine all headers into a string
		$headers = $this->processHeaders(array_merge($headers, $customheaders));

		return array(
			'bounceAddress' => $bounceAddress,
			'from' => $from,
			'fullBody' => $body,
			'headers' => $headers,
			'subject' => $subject,
			'to' => $to
		);
	}

	/**
	 * Configures all the headers and variables needed to send a HTML email with sendHTMLEmail.
	 * It has been extracted from htmlEmail so decendants can reuse this code without sending the email
	 *
	 * @return array
	 */
	public function prepareHTMLEmail($to, $from, $subject, $htmlContent, $attachedFiles = false, $customheaders = false, $plainContent = false, $inlineImages = false) {
		$this->cleanCustomHeaders($customheaders);

		if (!$plainContent) {
			$plainContent = Convert::xml2raw($htmlContent);
		}

		$from = $this->validEmailAddr($from);
		$to = $this->validEmailAddr($to);

		$base64Encoded = $this->isUnicode($htmlContent);
		$bounceAddress = $this->getBounceAddress($from, $customheaders);
		$headers = $this->getStandardHeaders($from, true, $base64Encoded);
		$subject = $this->cleanSubject($subject);

		$plainPart = $this->processHeaders(
			$headers,
			$base64Encoded
				? chunk_split(base64_encode($plainContent), 60)
				: wordwrap($this->QuotedPrintable_encode($plainContent), 120)
		);

		// Add basic wrapper tags if the body tag hasn't been given
		if (stripos($htmlContent, '<body') === false) {
			$htmlContent =
				"<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\">\n" .
				"<HTML><HEAD>\n" .
				"<META http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\n" .
				"<STYLE type=\"text/css\"></STYLE>\n\n".
				"</HEAD>\n" .
				"<BODY bgColor=\"#ffffff\">\n" .
					$htmlContent .
				"\n</BODY>\n" .
				"</HTML>";
		}

		if ($inlineImages) {
			$htmlPart = $this->wrapImagesInline($htmlContent);
		} else {
			$headers['Content-Transfer-Encoding'] = 'quoted-printable';
			$htmlPart = $this->processHeaders(
				$headers,
				wordwrap($this->QuotedPrintable_encode($htmlContent), 120)
			);
		}

		list($messageBody, $messageHeaders) = $this->encodeMultipart(array($plainPart,$htmlPart), 'multipart/alternative');
		$this->addAttachments($attachedFiles, $headers, $messageBody, $messageHeaders);

		$headers = $this->processHeaders(array_merge($headers, $customheaders));

		return array(
			'bounceAddress' => $bounceAddress,
			'from' => $from,
			'fullBody' => $messageBody,
			'headers' => $headers,
			'subject' => $subject,
			'to' => $to
		);
	}

	public function isUnicode($str) {
		return strpos($str,"&#") !== false;
	}

	/**
	 * Test that $customheaders is an array.
	 * If truthy but not an array, throw an exception
	 *
	 * Check keys for cc and bcc fields for case-sensitivity issues
	 *
	 * @param mixed false|array
	 */
	public function cleanCustomHeaders(&$customheaders) {
		if($customheaders && !is_array($customheaders)) {
			throw new Exception('Could not send email, $customheaders must be falsey or an array');
		}
		$customheaders = (array) $customheaders;

		// the carbon copy headers are case sensitive
		// Ensure only 'Cc' and 'Bcc' are used
		$toCapitalise = array(
			'BCC', 'bcc', 'CC', 'cc'
		);
		foreach ($toCapitalise as $val) {
			if (isset($headers[$val])) {
				$headers[ucfirst(strtolower($val))] = $headers[$val];
				unset($headers[$val]);
			}
		}
	}

	/**
	 * Prepare subject string for email including possibly base64 encoding
	 *
	 * @param  string $subject
	 * @return string
	 */
	public function cleanSubject($subject) {
		// If the subject line contains extended characters, we must encode it
		$subject = Convert::xml2raw($subject);
		if ($this->isUnicode($subject)) {
			$subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
		}

		return $subject;
	}

	/**
	 * If there are attachments,
	 * insert them into the body of the email and add the appropriate headers
	 *
	 * @param  mixed  false|array $attachedFiles
	 * @param  array              $headers
	 * @param  string             $body           The email body content
	 * @param  array              $htmlMsgHeaders Headers added to the body of HTML emails can be different
	 * @return string                             The updated body string
	 */
	public function addAttachments($attachedFiles, &$headers, &$body, $htmlMsgHeaders = null) {
		if ($attachedFiles && is_array($attachedFiles)) {
			// The first part is the message itself
			$fullMessage = $this->processHeaders($htmlMsgHeaders ?: $headers, $body);
			$messageParts = array($fullMessage);

			// Include any specified attachments as additional parts
			foreach ($attachedFiles as $file) {
				$messageParts[] =
					isset($file['tmp_name']) && isset($file['name'])
						? $this->encodeFileForEmail($file['tmp_name'], $file['name'])
						: $this->encodeFileForEmail($file);
			}

			// We further wrap all of this into another multipart block
			list($body, $headers) = $this->encodeMultipart($messageParts, "multipart/mixed");
		// Messages without attachments do not require such treatment
		} else if ($htmlMsgHeaders) {
			$headers = array_merge($headers, $htmlMsgHeaders);
		}
	}

	/**
	 * Return the base header tags needed to send the email
	 *
	 * @param string      The email from address
	 * @param bool        Is this an HTML or plaintext email?
	 * @param bool|string Is the content base64 encoded?
	 */
	public function getStandardHeaders($from, $html = false, $base64 = false) {
		return array(
			'Content-Type' => 'text/' . ($html ? 'html' : 'plain') . '; charset="utf-8"',
			'Content-Transfer-Encoding' => $base64 ? 'base64' : 'quoted-printable',
			'From' => $from,
			'X-Mailer' => X_MAILER,
			'X-Priority' => 3
		);
	}

	/**
	 * If the constant BOUNCE_EMAIL and the custom header X-SilverStripeMessageID has been set
	 * Silverstripe can process and track bounced messages
	 *
	 * @param string      $from          The email from address
	 * @param false|array $headers
	 */
	public function getBounceAddress($from, $headers) {
		if (defined('BOUNCE_EMAIL') && !empty($customheaders["X-SilverStripeMessageID"])) {
			$bounceAddress = BOUNCE_EMAIL;
		}
		else {
			$bounceAddress = $from;
		}

		// Strip the human name from the bounce address
	    if (ereg('^([^<>]*)<([^<>]+)> *$', $bounceAddress, $parts)) {
			$bounceAddress = $parts[2];
		}

		return $bounceAddress;
	}

	public function encodeMultipart($parts, $contentType, $headers = false) {
		$separator = "----=_NextPart_" . ereg_replace('[^0-9]','',rand() * 10000000000);


		$headers["MIME-Version"] = "1.0";
		$headers["Content-Type"] = "$contentType; boundary=\"$separator\"";
		$headers["Content-Transfer-Encoding"] = "7bit";

		if($contentType == "multipart/alternative") {
			//$baseMessage = "This is an encoded HTML message.  There are two parts: a plain text and an HTML message, open whatever suits you better.";
			$baseMessage = "\nThis is a multi-part message in MIME format.";
		} else {
			//$baseMessage = "This is a message containing attachments.  The e-mail body is contained in the first attachment";
			$baseMessage = "\nThis is a multi-part message in MIME format.";
		}


		$separator = "\n--$separator\n";
		$body = "$baseMessage\n" .
			$separator . implode("\n".$separator, $parts) . "\n" . trim($separator) . "--";

		return array($body, $headers);
	}

	/*
	 * Return a multipart/related e-mail chunk for the given HTML message and its linked images
	 * Decodes absolute URLs, accessing the appropriate local images
	 */
	public function wrapImagesInline($htmlContent) {
		global $_INLINED_IMAGES;
		$_INLINED_IMAGES = array();

		// Make the HTML part
		$headers["Content-Type"] = "text/html; charset=\"utf-8\"";
		$headers["Content-Transfer-Encoding"] = "quoted-printable";
		$multiparts[] = $this->processHeaders($headers, $this->QuotedPrintable_encode($replacedContent));

		// Make all the image parts
		foreach($_INLINED_IMAGES as $url => $cid) {
			$multiparts[] = $this->encodeFileForEmail($url, false, "inline", "Content-ID: <$cid>\n");
		}

		// Merge together in a multipart
		list($body, $headers) = $this->encodeMultipart($multiparts, "multipart/related");
		return $this->processHeaders($headers, $body);
	}

	public function wrapImagesInline_rewriter($url) {
		$url = $this->relativiseURL($url);

		global $_INLINED_IMAGES;
		if(!$_INLINED_IMAGES[$url]) {
			$identifier = "automatedmessage." . rand(1000,1000000000) . "@silverstripe.com";
			$_INLINED_IMAGES[$url] = $identifier;
		}
		return "cid:" . $_INLINED_IMAGES[$url];

	}

	/*
	 * Combine headers w/ the body into a single string.
	 */
	public function processHeaders($headers, $body = false) {
		$res = '';
		if(is_array($headers)) while(list($k, $v) = each($headers))
			$res .= "$k: $v\n";
		if($body) $res .= "\n$body";
		return $res;
	}

	/**
	 * Encode the contents of a file for emailing, including headers
	 *
	 * $file can be an array, in which case it expects these members:
	 *   'filename'        - the filename of the file
	 *   'contents'        - the raw binary contents of the file as a string
	 *  and can optionally include these members:
	 *   'mimetype'        - the mimetype of the file (calculated from filename if missing)
	 *   'contentLocation' - the 'Content-Location' header value for the file
	 *
	 * $file can also be a string, in which case it is assumed to be the filename
	 *
	 * h5. contentLocation
	 *
	 * Content Location is one of the two methods allowed for embedding images into an html email. It's also the simplest, and best supported
	 *
	 * Assume we have an email with this in the body:
	 *
	 *   <img src="http://example.com/image.gif" />
	 *
	 * To display the image, an email viewer would have to download the image from the web every time it is displayed. Due to privacy issues, most
	 * viewers will not display any images unless the user clicks 'Show images in this email'. Not optimal.
	 *
	 * However, we can also include a copy of this image as an attached file in the email. By giving it a contentLocation of "http://example.com/image.gif"
	 * most email viewers will use this attached copy instead of downloading it. Better, most viewers will show it without a 'Show images in this email'
	 * conformation.
	 *
	 * Here is an example of passing this information through Email.php:
	 *
	 *   $email = new Email();
	 *   $email->attachments[] = array(
	 *     'filename' => BASE_PATH . "/themes/mytheme/images/header.gif",
	 *     'contents' => file_get_contents(BASE_PATH . "/themes/mytheme/images/header.gif"),
	 *     'mimetype' => 'image/gif',
	 *     'contentLocation' => Director::absoluteBaseURL() . "/themes/mytheme/images/header.gif"
	 *   );
	 *
	 */
	public function encodeFileForEmail($file, $destFileName = false, $disposition = NULL, $extraHeaders = "") {
		if(!$file) {
			user_error("encodeFileForEmail: not passed a filename and/or data", E_USER_WARNING);
			return;
		}

		if (is_string($file)) {
			$file = array('filename' => $file);
			$fh = fopen($file['filename'], "rb");
			if ($fh) {
				while(!feof($fh)) $file['contents'] .= fread($fh, 10000);
				fclose($fh);
			}
		}

		// Build headers, including content type
		if(!$destFileName) $base = basename($file['filename']);
		else $base = $destFileName;

		$mimeType = $file['mimetype'] ? $file['mimetype'] : $this->getMimeType($file['filename']);
		if(!$mimeType) $mimeType = "application/unknown";

		if (empty($disposition)) $disposition = isset($file['contentLocation']) ? 'inline' : 'attachment';

		// Encode for emailing
		if (substr($file['mimetype'], 0, 4) != 'text') {
			$encoding = "base64";
			$file['contents'] = chunk_split(base64_encode($file['contents']));
		} else {
			// This mime type is needed, otherwise some clients will show it as an inline attachment
			$mimeType = 'application/octet-stream';
			$encoding = "quoted-printable";
			$file['contents'] = $this->QuotedPrintable_encode($file['contents']);
		}

		$headers = "Content-type: $mimeType;\n\tname=\"$base\"\n".
		           "Content-Transfer-Encoding: $encoding\n".
		           "Content-Disposition: $disposition;\n\tfilename=\"$base\"\n" ;

		if ( isset($file['contentLocation']) ) $headers .= 'Content-Location: ' . $file['contentLocation'] . "\n" ;

		$headers .= $extraHeaders . "\n";

		// Return completed packet
		return $headers . $file['contents'];
	}

	public function QuotedPrintable_encode($quotprint) {
			$quotprint = preg_replace('/(\\\r)?(\\\n)/', "\r\n", $quotprint);
			$quotprint = preg_replace("~([\x01-\x1F\x3D\x7F-\xFF])~e", "sprintf('=%02X', ord('\\1'))", $quotprint);
			$quotprint = preg_replace('/(=0[AD]){1,2}/', "\n", $quotprint);

			return $quotprint;
	}

	public function validEmailAddr($emailAddress) {
		$emailAddress = trim($emailAddress);
		$angBrack = strpos($emailAddress, '<');

		if ($angBrack === 0) {
			$emailAddress = substr($emailAddress, 1, strpos($emailAddress,'>')-1);
		} else if ($angBrack) {
			$emailAddress = str_replace('@', '', substr($emailAddress, 0, $angBrack))
								.substr($emailAddress, $angBrack);
		}

		return $emailAddress;
	}

	/*
	 * Get mime type based on extension
	 */
	public function getMimeType($filename) {
		global $global_mimetypes;
		if(!$global_mimetypes) $this->loadMimeTypes();
		$ext = strtolower(substr($filename,strrpos($filename,'.')+1));
		return isset($global_mimetypes[$ext]) ? $global_mimetypes[$ext] : null;
	}

	/*
	 * Load the mime-type data from the system file
	 */
	public function loadMimeTypes() {
		$mimetypePathCustom = '/etc/mime.types';
		$mimetypePathGeneric = Director::baseFolder() . '/sapphire/email/mime.types';
		$mimeTypes = file_exists($mimetypePathGeneric) ?  file($mimetypePathGeneric) : file($mimetypePathCustom);
		foreach($mimeTypes as $typeSpec) {
			if(($typeSpec = trim($typeSpec)) && substr($typeSpec,0,1) != "#") {
				$parts = preg_split("/[ \t\r\n]+/", $typeSpec);
				if(sizeof($parts) > 1) {
					$mimeType = array_shift($parts);
					foreach($parts as $ext) {
						$ext = strtolower($ext);
						$mimeData[$ext] = $mimeType;
					}
				}
			}
		}

		global $global_mimetypes;
		$global_mimetypes = $mimeData;
		return $mimeData;
	}
}
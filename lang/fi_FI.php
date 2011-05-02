<?php

/**
 * Finnish (Finland) language pack
 * @package sapphire
 * @subpackage i18n
 */

i18n::include_locale_file('sapphire', 'en_US');

global $lang;

if(array_key_exists('fi_FI', $lang) && is_array($lang['fi_FI'])) {
	$lang['fi_FI'] = array_merge($lang['en_US'], $lang['fi_FI']);
} else {
	$lang['fi_FI'] = $lang['en_US'];
}

$lang['fi_FI']['AdvancedSearchForm']['ALLWORDS'] = 'Kaikki sanat';
$lang['fi_FI']['AdvancedSearchForm']['ATLEAST'] = 'Vähintään yksi sanoista';
$lang['fi_FI']['AdvancedSearchForm']['EXACT'] = 'Täsmällinen lause';
$lang['fi_FI']['AdvancedSearchForm']['FROM'] = 'Lähettäjä';
$lang['fi_FI']['AdvancedSearchForm']['GO'] = 'Mene';
$lang['fi_FI']['AdvancedSearchForm']['LASTUPDATED'] = 'Viimeeksi päivitetty';
$lang['fi_FI']['AdvancedSearchForm']['LASTUPDATEDHEADER'] = 'VIIMEEKSI PÄIVITETTY';
$lang['fi_FI']['AdvancedSearchForm']['PAGETITLE'] = 'Sivun otsikko';
$lang['fi_FI']['AdvancedSearchForm']['RELEVANCE'] = 'Asiaankuuluvuus';
$lang['fi_FI']['AdvancedSearchForm']['SEARCHBY'] = 'HAE EHDOILLA';
$lang['fi_FI']['AdvancedSearchForm']['SORTBY'] = 'JÄRJESTÄ TULOKSET ';
$lang['fi_FI']['AdvancedSearchForm']['TO'] = 'Vastaanottaja';
$lang['fi_FI']['AdvancedSearchForm']['WITHOUT'] = 'Ilman sanoja';
$lang['fi_FI']['BasicAuth']['ENTERINFO'] = 'Anna käyttäjänimi ja salasana';
$lang['fi_FI']['BasicAuth']['ERRORNOTADMIN'] = 'Tämä käyttäjä ei ole ylläpitäjä';
$lang['fi_FI']['BasicAuth']['ERRORNOTREC'] = 'Tätä käyttäjänimeä/salasanaa ei tunnistettu.';
$lang['fi_FI']['BBCodeParser']['ALIGNEMENT'] = 'Tasaus';
$lang['fi_FI']['BBCodeParser']['ALIGNEMENTEXAMPLE'] = 'tasattu oikealle';
$lang['fi_FI']['BBCodeParser']['BOLD'] = 'Lihavoitu teksti';
$lang['fi_FI']['BBCodeParser']['BOLDEXAMPLE'] = 'Lihavoitu';
$lang['fi_FI']['BBCodeParser']['COLORED'] = 'Väritetty teksti';
$lang['fi_FI']['BBCodeParser']['COLOREDEXAMPLE'] = 'sininen teksti';
$lang['fi_FI']['BBCodeParser']['EMAILLINKDESCRIPTION'] = 'Luo linkki sähköpostiosoitteeseen';
$lang['fi_FI']['BBCodeParser']['IMAGE'] = 'Kuva';
$lang['fi_FI']['BBCodeParser']['IMAGEDESCRIPTION'] = 'Näytä kuva viestissäsi';
$lang['fi_FI']['BBCodeParser']['ITALIC'] = 'Kursivoitu teksti';
$lang['fi_FI']['BBCodeParser']['ITALICEXAMPLE'] = 'Kursiivi';
$lang['fi_FI']['BBCodeParser']['LINK'] = 'Verkkosivun linkki';
$lang['fi_FI']['BBCodeParser']['LINKDESCRIPTION'] = 'Linkki toiselle verkkosivustolle tai URLiin ';
$lang['fi_FI']['BBCodeParser']['STRUCK'] = 'Yliviivattu teksti';
$lang['fi_FI']['BBCodeParser']['STRUCKEXAMPLE'] = 'Yliviivaa';
$lang['fi_FI']['BBCodeParser']['UNDERLINE'] = 'Alleviivattu teksti';
$lang['fi_FI']['BBCodeParser']['UNDERLINEEXAMPLE'] = 'Alleviivaa';
$lang['fi_FI']['BBCodeParser']['UNORDERED'] = 'Järjestämätön lista';
$lang['fi_FI']['BBCodeParser']['UNORDEREDDESCRIPTION'] = 'Järjestämätön lista';
$lang['fi_FI']['BBCodeParser']['UNORDEREDEXAMPLE1'] = 'järjestämätön lista 1';
$lang['fi_FI']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT1'] = 'Vaihdoit salasanasi osoitteelle';
$lang['fi_FI']['ChangePasswordEmail.ss']['CHANGEPASSWORDTEXT2'] = 'Kirjautuaksesi sisään voit käyttää seuraavia tietoja:';
$lang['fi_FI']['ChangePasswordEmail.ss']['EMAIL'] = 'Sähköposti';
$lang['fi_FI']['ChangePasswordEmail.ss']['HELLO'] = 'Hei';
$lang['fi_FI']['ChangePasswordEmail.ss']['PASSWORD'] = 'Salasana';
$lang['fi_FI']['ComplexTableField.ss']['ADDITEM'] = 'Lisää';
$lang['fi_FI']['ComplexTableField.ss']['NOITEMSFOUND'] = 'Kohteita ei löytynyt';
$lang['fi_FI']['ComplexTableField.ss']['SORTASC'] = 'Nouseva järjestys';
$lang['fi_FI']['ComplexTableField.ss']['SORTDESC'] = 'Laskeva järjestys';
$lang['fi_FI']['ComplexTableField']['SUCCESSADD'] = 'Lisätty %s %s %s';
$lang['fi_FI']['ComplexTableField']['SUCCESSEDIT'] = 'Tallennettu %s %s %s';
$lang['fi_FI']['ComplexTableField_popup.ss']['NEXT'] = 'Seuraava';
$lang['fi_FI']['ComplexTableField_popup.ss']['PREVIOUS'] = 'Edellinen';
$lang['fi_FI']['CompositeDateField']['DAY'] = 'Päivä';
$lang['fi_FI']['CompositeDateField']['DAYJS'] = 'päivä';
$lang['fi_FI']['CompositeDateField']['MONTH'] = 'Kuukausi';
$lang['fi_FI']['CompositeDateField']['MONTHJS'] = 'kuukausi';
$lang['fi_FI']['CompositeDateField']['VALIDATIONJS1'] = 'Varmista että olet asettanut';
$lang['fi_FI']['CompositeDateField']['VALIDATIONJS2'] = 'oikein';
$lang['fi_FI']['CompositeDateField']['YEARJS'] = 'vuosi';
$lang['fi_FI']['ConfirmedFormAction']['CONFIRMATION'] = 'Oletko aivan varma?';
$lang['fi_FI']['ConfirmedPasswordField']['ATLEAST'] = 'Salasanojen pitää olla vähintään %s merkkiä pitkä.';
$lang['fi_FI']['ConfirmedPasswordField']['BETWEEN'] = 'Salasanojen pitää olla %s-%s merkkiä pitkät.';
$lang['fi_FI']['ConfirmedPasswordField']['HAVETOMATCH'] = 'Salasanojen on oltava samat.';
$lang['fi_FI']['ConfirmedPasswordField']['LEASTONE'] = 'Salasanoissa pitää olla vähintään yksi numero ja yksi alfanumeerinen merkki.';
$lang['fi_FI']['ConfirmedPasswordField']['MAXIMUM'] = 'Salasanojen pitää olla korkeintaan %s merkkiä pitkät.';
$lang['fi_FI']['ConfirmedPasswordField']['NOEMPTY'] = 'Salasanat eivät voi olla tyhjiä.';
$lang['fi_FI']['ConfirmedPasswordField']['SHOWONCLICKTITLE'] = 'Vaihda salasana';
$lang['fi_FI']['ContentController']['DRAFT_SITE_ACCESS_RESTRICTION'] = 'Voidaksesi katsella luonnoksia tai arkistoitua sisältöä sinun täytyy kirjautua sisään CMS:n salasanallasi. <a href="%s">Palataksesi julkiselle sivulle paina tästä</a>.';
$lang['fi_FI']['Controller']['FILE'] = 'Tiedosto';
$lang['fi_FI']['Controller']['IMAGE'] = 'Kuva';
$lang['fi_FI']['CreditCardField']['FIRST'] = 'ensimmäinen';
$lang['fi_FI']['CreditCardField']['FOURTH'] = 'neljäs';
$lang['fi_FI']['CreditCardField']['SECOND'] = 'toinen';
$lang['fi_FI']['CreditCardField']['THIRD'] = 'kolmas';
$lang['fi_FI']['CreditCardField']['VALIDATIONJS1'] = 'Varmista että olet syöttänyt ';
$lang['fi_FI']['CreditCardField']['VALIDATIONJS2'] = 'luottokorttinumeron oikein.';
$lang['fi_FI']['CurrencyField']['CURRENCYSYMBOL'] = '$';
$lang['fi_FI']['DataObject']['PLURALNAME'] = 'Dataobjektit';
$lang['fi_FI']['DataObject']['SINGULARNAME'] = 'Dataobjekti';
$lang['fi_FI']['Date']['DAY'] = 'päivä';
$lang['fi_FI']['Date']['DAYS'] = ' päivää ';
$lang['fi_FI']['Date']['HOUR'] = ' tunti';
$lang['fi_FI']['Date']['HOURS'] = ' tuntia';
$lang['fi_FI']['Date']['MIN'] = 'min';
$lang['fi_FI']['Date']['MINS'] = 'min.';
$lang['fi_FI']['Date']['MONTH'] = 'kuukausi';
$lang['fi_FI']['Date']['MONTHS'] = 'kuukaudet';
$lang['fi_FI']['Date']['SEC'] = 'sek.';
$lang['fi_FI']['Date']['SECS'] = 'sek.';
$lang['fi_FI']['Date']['TIMEDIFFAGO'] = ' sitten';
$lang['fi_FI']['Date']['TIMEDIFFAWAY'] = ' poissa';
$lang['fi_FI']['Date']['YEAR'] = 'vuosi';
$lang['fi_FI']['Date']['YEARS'] = 'vuodet';
$lang['fi_FI']['DateField']['NOTSET'] = 'ei asetettu';
$lang['fi_FI']['DateField']['TODAY'] = 'tänään';
$lang['fi_FI']['DateField']['VALIDATIONJS'] = 'Ole hyvä ja syötä hyväksytty päivämäärä (DD/MM/VVVV).';
$lang['fi_FI']['DateField']['VALIDDATEFORMAT'] = 'Anna päivämäärä oikeassa muodossa (PP/KK/VVVV).';
$lang['fi_FI']['DMYDateField']['VALIDDATEFORMAT'] = 'Ole hyvä ja syötä hyväksytty päivämäärä (PP-KK-VVVV).';
$lang['fi_FI']['DropdownField']['CHOOSE'] = '(Valitse)';
$lang['fi_FI']['EmailField']['VALIDATION'] = 'Kirjoita sähköpostiosoite.';
$lang['fi_FI']['EmailField']['VALIDATIONJS'] = 'Ole hyvä ja syötä sähköpostiosoite.';
$lang['fi_FI']['ErrorPage']['400'] = '400 - Virheellinen Pyyntö';
$lang['fi_FI']['ErrorPage']['404'] = '404 - Ei löytynyt';
$lang['fi_FI']['ErrorPage']['408'] = '408 - Pyyntö Aikakatkaistiin';
$lang['fi_FI']['ErrorPage']['409'] = '409 - Ristiriita';
$lang['fi_FI']['ErrorPage']['414'] = '414 - Pyyntö-URI Liian Pitkä';
$lang['fi_FI']['ErrorPage']['500'] = '500 - Sisäinen Palvelin Virhe';
$lang['fi_FI']['ErrorPage']['502'] = '502 - Virheellinen Yhdyskäytävä';
$lang['fi_FI']['ErrorPage']['505'] = '505 - HTTP Versio Ei Tuettu';
$lang['fi_FI']['ErrorPage']['CODE'] = 'Virhekoodi';
$lang['fi_FI']['ErrorPage']['DEFAULTERRORPAGECONTENT'] = '<p>Valitettavasti sivua johon yritit päästä ei löytynyt.</p><p>Tarkista haluamasi kohteen URLin kirjoitusasu ja yritä uudelleen.</p>';
$lang['fi_FI']['ErrorPage']['DEFAULTERRORPAGETITLE'] = 'Sivua ei löytynyt';
$lang['fi_FI']['ErrorPage']['PLURALNAME'] = 'Virhesivut';
$lang['fi_FI']['ErrorPage']['SINGULARNAME'] = 'Virhesivu';
$lang['fi_FI']['File']['INVALIDEXTENSION'] = 'Laajennus ei ole mahdollinen (esim: %s)';
$lang['fi_FI']['File']['NOFILESIZE'] = 'Tiedostokoko on nolla tavua.';
$lang['fi_FI']['File']['PLURALNAME'] = 'Tiedostot';
$lang['fi_FI']['File']['SINGULARNAME'] = 'Tiedosto';
$lang['fi_FI']['File']['TOOLARGE'] = 'Tiedosto on liian iso, %s on suurin sallittu.';
$lang['fi_FI']['Folder']['CREATED'] = 'Ensimmäinen kopioitu palvelimelle';
$lang['fi_FI']['Folder']['DELETEUNUSEDTHUMBNAILS'] = 'Poista käyttämättömät pikkukuvat';
$lang['fi_FI']['Folder']['DELSELECTED'] = 'Poista valitut tiedostot';
$lang['fi_FI']['Folder']['DETAILSTAB'] = 'Tietoja';
$lang['fi_FI']['Folder']['FILENAME'] = 'Tiedostonimi';
$lang['fi_FI']['Folder']['FILESTAB'] = 'Tiedostot';
$lang['fi_FI']['Folder']['LASTEDITED'] = 'Viimeeksi päivitetty';
$lang['fi_FI']['Folder']['PLURALNAME'] = 'Tiedostot';
$lang['fi_FI']['Folder']['SINGULARNAME'] = 'Tiedosto';
$lang['fi_FI']['Folder']['TITLE'] = 'Otsikko';
$lang['fi_FI']['Folder']['TYPE'] = 'Tyyppi';
$lang['fi_FI']['Folder']['UNUSEDFILESTAB'] = 'Käyttämättömät tiedostot';
$lang['fi_FI']['Folder']['UNUSEDFILESTITLE'] = 'Käyttämättömät tiedostot';
$lang['fi_FI']['Folder']['UNUSEDTHUMBNAILSTITLE'] = 'Käyttämättömät pikkukuvat';
$lang['fi_FI']['Folder']['UPLOADTAB'] = 'Kopioi palvelimelle';
$lang['fi_FI']['Folder']['URL'] = 'URL';
$lang['fi_FI']['ForgotPasswordEmail.ss']['HELLO'] = 'Hei';
$lang['fi_FI']['Form']['DATENOTSET'] = '(Päivämäärää ei ole asetettu)';
$lang['fi_FI']['Form']['FIELDISREQUIRED'] = '%s tarvitaan';
$lang['fi_FI']['Form']['LANGAOTHER'] = 'Muut kielet';
$lang['fi_FI']['Form']['LANGAVAIL'] = 'Käytettävissä olevat kielet';
$lang['fi_FI']['Form']['NOTSET'] = '(ei asetettu)';
$lang['fi_FI']['Form']['VALIDATIONALLDATEVALUES'] = 'Varmista, että olet asettanut kaikki päivämäärät.';
$lang['fi_FI']['Form']['VALIDATIONBANKACC'] = 'Syötä kelvollinen pankkinumero';
$lang['fi_FI']['Form']['VALIDATIONCREDITNUMBER'] = 'Varmista, että olet syöttänyt luottokortin %s numeron oikein.';
$lang['fi_FI']['Form']['VALIDATIONFAILED'] = 'Varmistus epäonnistui';
$lang['fi_FI']['Form']['VALIDATIONNOTUNIQUE'] = 'Syötetty arvo ei ole yksilöllinen';
$lang['fi_FI']['Form']['VALIDATIONPASSWORDSDONTMATCH'] = 'Salasanat eivät täsmää';
$lang['fi_FI']['Form']['VALIDATIONPASSWORDSNOTEMPTY'] = 'Salasana ei voi olla tyhjä';
$lang['fi_FI']['Form']['VALIDATIONSTRONGPASSWORD'] = 'Salasanan täytyy sisältää vähintään yksi numero ja yksi kirjain.';
$lang['fi_FI']['Form']['VALIDCURRENCY'] = 'Syötä kelvollinen valuutta.';
$lang['fi_FI']['FormField']['NONE'] = 'Ei yhtään';
$lang['fi_FI']['GhostPage']['NOLINKED'] = 'Tällä haamusivulla ei ole linkitettyä sivua.';
$lang['fi_FI']['GhostPage']['PLURALNAME'] = 'Haamusivut';
$lang['fi_FI']['GhostPage']['SINGULARNAME'] = 'Haamusivu';
$lang['fi_FI']['Group']['Code'] = 'Ryhmän koodi';
$lang['fi_FI']['Group']['has_many_Permissions'] = 'Luvat';
$lang['fi_FI']['Group']['Locked'] = 'Lukittu?';
$lang['fi_FI']['Group']['many_many_Members'] = 'Jäsenet';
$lang['fi_FI']['Group']['Parent'] = 'Yliryhmä';
$lang['fi_FI']['Group']['PLURALNAME'] = 'Ryhmät';
$lang['fi_FI']['Group']['SINGULARNAME'] = 'Ryhmä';
$lang['fi_FI']['GSTNumberField']['VALIDATION'] = 'Anna kelvollinen GST-numero';
$lang['fi_FI']['GSTNumberField']['VALIDATIONJS'] = 'Ole hyvä ja syötä voimassaoleva GST-numero.';
$lang['fi_FI']['HtmlEditorField']['ALTTEXT'] = 'Kuvaus';
$lang['fi_FI']['HtmlEditorField']['ANCHOR'] = 'Lisää/muokkaa ankkuri(a)';
$lang['fi_FI']['HtmlEditorField']['ANCHORVALUE'] = 'Ankkuri';
$lang['fi_FI']['HtmlEditorField']['BULLETLIST'] = 'Luettelomerkit';
$lang['fi_FI']['HtmlEditorField']['BUTTONALIGNCENTER'] = 'Keskitetty';
$lang['fi_FI']['HtmlEditorField']['BUTTONALIGNJUSTIFY'] = 'Levitä vaakasuunnassa';
$lang['fi_FI']['HtmlEditorField']['BUTTONALIGNLEFT'] = 'Tasaa vasemmalle';
$lang['fi_FI']['HtmlEditorField']['BUTTONALIGNRIGHT'] = 'Tasaa oikealle';
$lang['fi_FI']['HtmlEditorField']['BUTTONBOLD'] = 'Lihavoitu (Ctrl+B)';
$lang['fi_FI']['HtmlEditorField']['BUTTONINSERTFLASH'] = 'Lisää Flash-video';
$lang['fi_FI']['HtmlEditorField']['BUTTONINSERTIMAGE'] = 'Lisää kuva';
$lang['fi_FI']['HtmlEditorField']['BUTTONINSERTLINK'] = 'Lisää linkki';
$lang['fi_FI']['HtmlEditorField']['BUTTONITALIC'] = 'Kursivoitu (Ctrl+I)';
$lang['fi_FI']['HtmlEditorField']['BUTTONREMOVELINK'] = 'Poista linkki';
$lang['fi_FI']['HtmlEditorField']['BUTTONSTRIKE'] = 'Yliviivattu';
$lang['fi_FI']['HtmlEditorField']['BUTTONUNDERLINE'] = 'Alleviivattu (Ctrl+U)';
$lang['fi_FI']['HtmlEditorField']['CHARMAP'] = 'Lisää merkki';
$lang['fi_FI']['HtmlEditorField']['CLOSE'] = 'sulje';
$lang['fi_FI']['HtmlEditorField']['COPY'] = 'Kopioi (Ctrl+C)';
$lang['fi_FI']['HtmlEditorField']['CREATEFOLDER'] = 'luo kansio';
$lang['fi_FI']['HtmlEditorField']['CSSCLASS'] = 'Tasaus/tyyli';
$lang['fi_FI']['HtmlEditorField']['CSSCLASSCENTER'] = 'Keskellä omillaan.';
$lang['fi_FI']['HtmlEditorField']['CSSCLASSLEFT'] = 'Vasemmalla, tekstin ympäröimänä.';
$lang['fi_FI']['HtmlEditorField']['CSSCLASSLEFTALONE'] = 'Vasemmalla, yksinään.';
$lang['fi_FI']['HtmlEditorField']['CSSCLASSRIGHT'] = 'Oikealla, tesktin ympätöimänä.';
$lang['fi_FI']['HtmlEditorField']['CUT'] = 'Leikkaa (Ctrl+X)';
$lang['fi_FI']['HtmlEditorField']['DELETECOL'] = 'Poista sarake';
$lang['fi_FI']['HtmlEditorField']['DELETEROW'] = 'Poista rivi';
$lang['fi_FI']['HtmlEditorField']['EDITCODE'] = 'Muokkaa HTML-koodia';
$lang['fi_FI']['HtmlEditorField']['EMAIL'] = 'Sähköpostiosoite';
$lang['fi_FI']['HtmlEditorField']['FILE'] = 'Tiedosto';
$lang['fi_FI']['HtmlEditorField']['FLASH'] = 'Lisää flash-video';
$lang['fi_FI']['HtmlEditorField']['FOLDER'] = 'Kansio';
$lang['fi_FI']['HtmlEditorField']['FOLDERCANCEL'] = 'peruuta';
$lang['fi_FI']['HtmlEditorField']['FORMATADDR'] = 'Osoite';
$lang['fi_FI']['HtmlEditorField']['FORMATH1'] = 'Otsikko 1';
$lang['fi_FI']['HtmlEditorField']['FORMATH2'] = 'Otsikko 2';
$lang['fi_FI']['HtmlEditorField']['FORMATH3'] = 'Otsikko 3';
$lang['fi_FI']['HtmlEditorField']['FORMATH4'] = 'Otsikko 4';
$lang['fi_FI']['HtmlEditorField']['FORMATH5'] = 'Otsikko 5';
$lang['fi_FI']['HtmlEditorField']['FORMATH6'] = 'Otsikko 6';
$lang['fi_FI']['HtmlEditorField']['FORMATP'] = 'Kappale';
$lang['fi_FI']['HtmlEditorField']['FORMATPRE'] = 'Esimuotoiltu';
$lang['fi_FI']['HtmlEditorField']['HR'] = 'Lisää vaakasuora viiva';
$lang['fi_FI']['HtmlEditorField']['IMAGE'] = 'Lisää kuva';
$lang['fi_FI']['HtmlEditorField']['IMAGEDIMENSIONS'] = 'Mitat';
$lang['fi_FI']['HtmlEditorField']['IMAGEHEIGHTPX'] = 'Korkeus';
$lang['fi_FI']['HtmlEditorField']['IMAGEWIDTHPX'] = 'Leveys';
$lang['fi_FI']['HtmlEditorField']['INDENT'] = 'Lisää sisennystä';
$lang['fi_FI']['HtmlEditorField']['INSERTCOLAFTER'] = 'Lisää sarake alas';
$lang['fi_FI']['HtmlEditorField']['INSERTCOLBEF'] = 'Lisää sarake ylös';
$lang['fi_FI']['HtmlEditorField']['INSERTROWAFTER'] = 'Lisää rivi alas';
$lang['fi_FI']['HtmlEditorField']['INSERTROWBEF'] = 'Lisää rivi ylös';
$lang['fi_FI']['HtmlEditorField']['INSERTTABLE'] = 'Lisää taulukko';
$lang['fi_FI']['HtmlEditorField']['LINK'] = 'Lisää/muokkaa linkki(ä) valittuun tekstiin';
$lang['fi_FI']['HtmlEditorField']['LINKANCHOR'] = 'Ankkuroi tähän sivuun';
$lang['fi_FI']['HtmlEditorField']['LINKDESCR'] = 'Linkin kuvaus';
$lang['fi_FI']['HtmlEditorField']['LINKEMAIL'] = 'Sähköpostiosoite';
$lang['fi_FI']['HtmlEditorField']['LINKEXTERNAL'] = 'Toinen verkkosivusto';
$lang['fi_FI']['HtmlEditorField']['LINKFILE'] = 'Lataa tiedosto';
$lang['fi_FI']['HtmlEditorField']['LINKINTERNAL'] = 'Sivu sivustolla';
$lang['fi_FI']['HtmlEditorField']['LINKOPENNEWWIN'] = 'Avataanko linkki uudessa ikkunassa?';
$lang['fi_FI']['HtmlEditorField']['LINKTO'] = 'Linkki';
$lang['fi_FI']['HtmlEditorField']['OK'] = 'ok';
$lang['fi_FI']['HtmlEditorField']['OL'] = 'Numerointi';
$lang['fi_FI']['HtmlEditorField']['OUTDENT'] = 'Vähennä sisennystä';
$lang['fi_FI']['HtmlEditorField']['PAGE'] = 'Sivu';
$lang['fi_FI']['HtmlEditorField']['PASTE'] = 'Liitä (Ctrl+V)';
$lang['fi_FI']['HtmlEditorField']['PASTETEXT'] = 'Liitä pelkkää tekstiä';
$lang['fi_FI']['HtmlEditorField']['PASTEWORD'] = 'Liitä Wordista';
$lang['fi_FI']['HtmlEditorField']['REDO'] = 'Tee uudelleen (Ctrl+Y)';
$lang['fi_FI']['HtmlEditorField']['SELECTALL'] = 'Valitse kaikki (Ctrl+A)';
$lang['fi_FI']['HtmlEditorField']['UNDO'] = 'Kumoa (Ctrl+Z)';
$lang['fi_FI']['HtmlEditorField']['UNLINK'] = 'Poista linkki';
$lang['fi_FI']['HtmlEditorField']['UPLOAD'] = 'lisää palvelimelle uusi tiedosto';
$lang['fi_FI']['HtmlEditorField']['URL'] = 'URL-osoite';
$lang['fi_FI']['HtmlEditorField']['VISUALAID'] = 'Näytä/piilota apuviivat';
$lang['fi_FI']['Image']['PLURALNAME'] = 'Tiedostot';
$lang['fi_FI']['Image']['SINGULARNAME'] = 'Tiedosto';
$lang['fi_FI']['ImageField']['NOTEADDIMAGES'] = 'Voit lisätä kuvia tallennettuasi ensimmäisen kerran.';
$lang['fi_FI']['ImageUplaoder']['ONEFROMFILESTORE'] = 'Tiedostolla tiedostovarastosta';
$lang['fi_FI']['ImageUploader']['ATTACH'] = 'Liite %s';
$lang['fi_FI']['ImageUploader']['DELETE'] = 'Poista %s';
$lang['fi_FI']['ImageUploader']['FROMCOMPUTER'] = 'Tietokoneeltasi';
$lang['fi_FI']['ImageUploader']['FROMFILESTORE'] = 'Tiedostovarastosta';
$lang['fi_FI']['ImageUploader']['ONEFROMCOMPUTER'] = 'Tiedostolla tietokoneeltasi';
$lang['fi_FI']['ImageUploader']['REALLYDELETE'] = 'Haluatko varmasti poistaa tämän: %s?';
$lang['fi_FI']['ImageUploader']['REPLACE'] = 'Korvaa %s';
$lang['fi_FI']['LoginAttempt']['PLURALNAME'] = 'Kirjautumisyritykset';
$lang['fi_FI']['LoginAttempt']['SINGULARNAME'] = 'Kirjautumisyritys';
$lang['fi_FI']['Member']['ADDRESS'] = 'Osoite';
$lang['fi_FI']['Member']['belongs_many_many_Groups'] = 'Ryhmät';
$lang['fi_FI']['Member']['BUTTONCHANGEPASSWORD'] = 'Vaihda salasana';
$lang['fi_FI']['Member']['BUTTONLOGIN'] = 'Kirjaudu sisään';
$lang['fi_FI']['Member']['BUTTONLOGINOTHER'] = 'Kirjaudu jonain muuna';
$lang['fi_FI']['Member']['BUTTONLOSTPASSWORD'] = 'Kadotin salasanani';
$lang['fi_FI']['Member']['CONFIRMNEWPASSWORD'] = 'Syötä uusi salasana uudelleen';
$lang['fi_FI']['Member']['CONFIRMPASSWORD'] = 'Syötä salasana uudelleen';
$lang['fi_FI']['Member']['CONTACTINFO'] = 'Yhteystiedot';
$lang['fi_FI']['Member']['db_LockedOutUntil'] = 'Lukittuna tähän asti:';
$lang['fi_FI']['Member']['db_PasswordExpiry'] = 'Salasanan viimeinen päivämäärä';
$lang['fi_FI']['Member']['EMAIL'] = 'Sähköposti';
$lang['fi_FI']['Member']['EMAILSIGNUPINTRO1'] = 'Onnea, sinusta tuli meidän uusi jäsen. Tietosi on kerrottu alla.';
$lang['fi_FI']['Member']['EMAILSIGNUPINTRO2'] = 'Voit kirjautua verkkosivustolle käyttäen seuraavia tietoja';
$lang['fi_FI']['Member']['EMAILSIGNUPSUBJECT'] = 'Kiitokset rekisteröinnistä';
$lang['fi_FI']['Member']['ERRORLOCKEDOUT'] = 'Tunnuksesti on väliaikaisesti poistettu käytöstä liian monien epäonnistuneiden sisäänkirjausyritysten takia. Ole hyvä ja yritä uudelleen 20 minuutin päästä.';
$lang['fi_FI']['Member']['ERRORNEWPASSWORD'] = 'Syötit uuden salasanasi erilailla, yritä uudelleen.';
$lang['fi_FI']['Member']['ERRORPASSWORDNOTMATCH'] = 'Nykyiset salasanasi eivät täsmää, yritä uudelleen.';
$lang['fi_FI']['Member']['ERRORWRONGCRED'] = 'Tämä ei näytä oikealta sähköpostiosoitteelta tai salasanalta. Yritä uudelleen.';
$lang['fi_FI']['Member']['FIRSTNAME'] = 'Etunimi';
$lang['fi_FI']['Member']['GREETING'] = 'Tervetuloa';
$lang['fi_FI']['Member']['INTERFACELANG'] = 'Käyttöliittymän kieli';
$lang['fi_FI']['Member']['LOGGEDINAS'] = 'Olet kirjautunut käyttäjänä %s.';
$lang['fi_FI']['Member']['MOBILE'] = 'Matkapuhelin';
$lang['fi_FI']['Member']['NAME'] = 'Nimi';
$lang['fi_FI']['Member']['NEWPASSWORD'] = 'Uusi salasana';
$lang['fi_FI']['Member']['PASSWORD'] = 'Salasana';
$lang['fi_FI']['Member']['PASSWORDCHANGED'] = 'Salasanasi on muutettu ja sähköpostiisi on lähetetty asiasta ilmoitus.';
$lang['fi_FI']['Member']['PERSONALDETAILS'] = 'Henkilökohtaiset tiedot';
$lang['fi_FI']['Member']['PHONE'] = 'Puhelin';
$lang['fi_FI']['Member']['PLURALNAME'] = 'Jäsenet';
$lang['fi_FI']['Member']['REMEMBERME'] = 'Muista seuraavalla kerralla?';
$lang['fi_FI']['Member']['SINGULARNAME'] = 'Jäsen';
$lang['fi_FI']['Member']['SUBJECTPASSWORDCHANGED'] = 'Salasanasi on vaihdettu';
$lang['fi_FI']['Member']['SUBJECTPASSWORDRESET'] = 'Salasanasi palautuslinkki';
$lang['fi_FI']['Member']['SURNAME'] = 'Sukunimi';
$lang['fi_FI']['Member']['USERDETAILS'] = 'Käyttäjätiedot';
$lang['fi_FI']['Member']['VALIDATIONMEMBEREXISTS'] = 'Rekisteröityneellä käyttäjällä on jo käytössä tämä sähköpostiosoite.';
$lang['fi_FI']['Member']['WELCOMEBACK'] = 'Tervetuloa takaisin, %s';
$lang['fi_FI']['Member']['YOUROLDPASSWORD'] = 'Vanha salasanasi';
$lang['fi_FI']['MemberAuthenticator']['TITLE'] = 'Sähköposti &amp; Salasana';
$lang['fi_FI']['MemberPassword']['PLURALNAME'] = 'Jäsenen salasanat';
$lang['fi_FI']['MemberPassword']['SINGULARNAME'] = 'Jäsenen salasana';
$lang['fi_FI']['NullableField']['IsNullLabel'] = 'On nolla';
$lang['fi_FI']['NumericField']['VALIDATION'] = '%s ei ole numero, tähän kenttään hyväksytään vain numeroita.';
$lang['fi_FI']['NumericField']['VALIDATIONJS'] = 'ei ole numero, tämä kenttä hyväksyy vain numeroita';
$lang['fi_FI']['Page']['PLURALNAME'] = 'Sivut';
$lang['fi_FI']['Page']['SINGULARNAME'] = 'Sivu';
$lang['fi_FI']['Permission']['FULLADMINRIGHTS'] = 'Täydet ylläpitäjän oikeudet';
$lang['fi_FI']['Permission']['PERMSDEFINED'] = 'Seuraavat pääsykoodit on määritelty';
$lang['fi_FI']['Permission']['PLURALNAME'] = 'Luvat';
$lang['fi_FI']['Permission']['SINGULARNAME'] = 'Lupa';
$lang['fi_FI']['PhoneNumberField']['VALIDATION'] = 'Kirjoita pätevä puhelinnumero';
$lang['fi_FI']['QueuedEmail']['PLURALNAME'] = 'Odottavat postit';
$lang['fi_FI']['QueuedEmail']['SINGULARNAME'] = 'Odottava posti';
$lang['fi_FI']['RedirectorPage']['HASBEENSETUP'] = 'Sivu, joka ohjaa käyttäjän toiselle sivulle on valmis, mutta sivua, jolle käyttäjä ohjataan, ei ole.';
$lang['fi_FI']['RedirectorPage']['HEADER'] = 'Tämä sivu ohjaa käyttäjän toiselle sivulle';
$lang['fi_FI']['RedirectorPage']['OTHERURL'] = 'Toisen verkkosivuston URL-osoite';
$lang['fi_FI']['RedirectorPage']['PLURALNAME'] = 'Uudelleenohjaavat sivut';
$lang['fi_FI']['RedirectorPage']['REDIRECTTO'] = 'Minne ohjataan?';
$lang['fi_FI']['RedirectorPage']['REDIRECTTOEXTERNAL'] = 'Muu verkkosivusto';
$lang['fi_FI']['RedirectorPage']['REDIRECTTOPAGE'] = 'Sivu verkkosivustollasi';
$lang['fi_FI']['RedirectorPage']['SINGULARNAME'] = 'Uudelleenohjaava sivu';
$lang['fi_FI']['RedirectorPage']['YOURPAGE'] = 'Sivu verkkosivustollasi';
$lang['fi_FI']['RelationComplexTableField.ss']['ADD'] = 'Lisää';
$lang['fi_FI']['RelationComplexTableField.ss']['DELETE'] = 'poista';
$lang['fi_FI']['RelationComplexTableField.ss']['EDIT'] = 'muokkaa';
$lang['fi_FI']['RelationComplexTableField.ss']['SHOW'] = 'näytä';
$lang['fi_FI']['SearchForm']['GO'] = 'Mene';
$lang['fi_FI']['SearchForm']['SEARCH'] = 'Etsi';
$lang['fi_FI']['Security']['ALREADYLOGGEDIN'] = 'Sinulla ei ole oikeuksia tälle sivulle. Jos sinulla on toinen tili, jolla on oikeudet tälle sivulle, voit kirjautua niillä sisään.';
$lang['fi_FI']['Security']['BUTTONSEND'] = 'Lähetä minulle salasanan palautuslinkki';
$lang['fi_FI']['Security']['CHANGEPASSWORDBELOW'] = 'Voit vaihtaa salasanaasi alla.';
$lang['fi_FI']['Security']['CHANGEPASSWORDHEADER'] = 'Vaihda salasanasi';
$lang['fi_FI']['Security']['EMAIL'] = 'Sähköpsti: ';
$lang['fi_FI']['Security']['ENCDISABLED1'] = 'Salasanan salaus pois käytöstä!';
$lang['fi_FI']['Security']['ENCDISABLED2'] = 'Salataksesi salasanasi vaihda salasana asetuksiasi lisäämällä ';
$lang['fi_FI']['Security']['ENCDISABLED3'] = 'tiedostoon mysite/_config.php';
$lang['fi_FI']['Security']['ENCRYPT'] = 'Salataan kaikki salasanat';
$lang['fi_FI']['Security']['ENCRYPTEDMEMBERS'] = 'Salatut tiedot käyttäjälle &quot;';
$lang['fi_FI']['Security']['ENCRYPTWITH'] = 'Salasanat salataan käyttäen &quot;%s&quot; algoritmia';
$lang['fi_FI']['Security']['ENCRYPTWITHOUTSALT'] = 'ilman tietoturvaa lisäävää suolausta.';
$lang['fi_FI']['Security']['ENCRYPTWITHSALT'] = 'suolan kanssa tietoturvan lisäämiseksi.';
$lang['fi_FI']['Security']['ENTERNEWPASSWORD'] = 'Syötä uusi salasanasi';
$lang['fi_FI']['Security']['ERRORPASSWORDPERMISSION'] = 'Sinun täytyy olla kirjautuneena sisään, jotta voit vaihtaa salasanasi.';
$lang['fi_FI']['Security']['ID'] = 'ID: ';
$lang['fi_FI']['Security']['IPADDRESSES'] = 'IP-osoitteet';
$lang['fi_FI']['Security']['LOGGEDOUT'] = 'Kirjauduit ulos. Jos haluat kirjautua sisään, syötä tietosi alle.';
$lang['fi_FI']['Security']['LOGIN'] = 'Kirjaudu sisään';
$lang['fi_FI']['Security']['LOSTPASSWORDHEADER'] = 'Salasana kadotettu';
$lang['fi_FI']['Security']['NOTEPAGESECURED'] = 'Tämä sivu on suojattu. Syötä tunnistetietosi alle ja annamme sinulle oikeat oikeudet.';
$lang['fi_FI']['Security']['NOTERESETPASSWORD'] = 'Syötä sähköpostiosoitteesi ja lähetämme sinulle linkin, jonka avulla saat palautettua salasanasi';
$lang['fi_FI']['Security']['NOTHINGTOENCRYPT1'] = 'Ei salasanoja salattavana';
$lang['fi_FI']['Security']['NOTHINGTOENCRYPT2'] = 'Sinulla ei ole jäseniä joilla olisi salattavia selväkielisiä salasanoja!';
$lang['fi_FI']['Security']['PASSWORDSENTHEADER'] = 'Salasanan palautuslinkki lähetettiin osoitteeseen %s';
$lang['fi_FI']['Security']['PASSWORDSENTTEXT'] = 'Kiitos! Salasanan palautuslinkki on lähetetty osoitteeseen %s.';
$lang['fi_FI']['SecurityAdmin']['ADVANCEDONLY'] = 'Tämä osio on vain edistyneemmille käyttäjille. Lue <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">tämä sivu</a> saadaksesi lisätietoja.';
$lang['fi_FI']['SecurityAdmin']['CODE'] = 'Koodi';
$lang['fi_FI']['SecurityAdmin']['GROUPNAME'] = 'Ryhmän nimi';
$lang['fi_FI']['SecurityAdmin']['IPADDRESSESHELP'] = '<p>Voit rajata tämän ryhmän käyttöoikeudet vain tiettyihin IP osoitteisiin (yksi raja riville).<br />Rajat voi olla seuraavissa muodoissa:<br />
203.96.152.12<br />
203.96.152/24<br />
203.96/16<br />
203/8<br /><br />Jos syötät yhden tai useamman IP osoitteen tähän laatikkoon, jäsenet saavat ryhmän oikeudet vain kirjautuessaan sallitusta IP osoitteesta. Kirjautumista ei kuitenkaan estetä muista IP osoitteesta ja käyttäjä pystyy toimimaan järjestelmän alueilla, joissa rajoitus ei ole käytössä.';
$lang['fi_FI']['SecurityAdmin']['MEMBERS'] = 'Jäsenet';
$lang['fi_FI']['SecurityAdmin']['OPTIONALID'] = 'Vapaaehtoinen ID';
$lang['fi_FI']['SecurityAdmin']['PERMISSIONS'] = 'Oikeudet';
$lang['fi_FI']['SecurityAdmin']['VIEWUSER'] = 'Näytä käyttäjä';
$lang['fi_FI']['SimpleImageField']['NOUPLOAD'] = 'Kuvaa ei kopioitu palvelimelle';
$lang['fi_FI']['SiteTree']['ACCESSANYONE'] = 'Jokainen';
$lang['fi_FI']['SiteTree']['ACCESSHEADER'] = 'Ketkä saavat katsoa tätä sivua?';
$lang['fi_FI']['SiteTree']['ACCESSLOGGEDIN'] = 'Kirjautuneet käyttäjät';
$lang['fi_FI']['SiteTree']['ACCESSONLYTHESE'] = 'Vain seuraavat henkilöt (valitse listalta)';
$lang['fi_FI']['SiteTree']['ADDEDTODRAFT'] = 'Lisätty luonnossivustolle';
$lang['fi_FI']['SiteTree']['ALLOWCOMMENTS'] = 'Sallitaanko kommenttien jättö tälle sivulle?';
$lang['fi_FI']['SiteTree']['BUTTONCANCELDRAFT'] = 'Peruuta muutokset, jotka teit luonnokseen';
$lang['fi_FI']['SiteTree']['BUTTONCANCELDRAFTDESC'] = 'Poista luonnoksesi ja palauta julkaistu sivu';
$lang['fi_FI']['SiteTree']['BUTTONSAVEPUBLISH'] = 'Tallenna & julkaise';
$lang['fi_FI']['SiteTree']['BUTTONUNPUBLISH'] = 'Poista julkaisu';
$lang['fi_FI']['SiteTree']['BUTTONUNPUBLISHDESC'] = 'Poista tämä sivu julkaistulta sivustolta';
$lang['fi_FI']['SiteTree']['CHANGETO'] = 'Muuta';
$lang['fi_FI']['SiteTree']['Content'] = 'Sisältö';
$lang['fi_FI']['SiteTree']['DEFAULTABOUTCONTENT'] = '<p>Voit täyttää tämän sivun omalla sisällölläsi tai poistaa sen ja luoda omia sivujasi.<br /></p>';
$lang['fi_FI']['SiteTree']['DEFAULTABOUTTITLE'] = 'Tietoa meistä';
$lang['fi_FI']['SiteTree']['DEFAULTCONTACTCONTENT'] = '<p>Voit täyttää tämän sivun omalla sisällölläsi tai poistaa sen ja luoda omia sivujasi.<br /></p>';
$lang['fi_FI']['SiteTree']['DEFAULTCONTACTTITLE'] = 'Ota yhteyttä meihin';
$lang['fi_FI']['SiteTree']['DEFAULTHOMECONTENT'] = '<p>Tervetuloa SilverStripeen! Tämä on oletus-kotisivu. Voit muokata tätä sivua avaamalla <a href="admin/">CMS:n</a>. Voit myös lukea <a href="http://doc.silverstripe.com">kehittäjä-dokumentaatiota</a> tai aloittaa <a href="http://doc.silverstripe.com/doku.php?id=tutorials">johdatuskursseista</a>.</p>';
$lang['fi_FI']['SiteTree']['DEFAULTHOMETITLE'] = 'Koti';
$lang['fi_FI']['SiteTree']['EDITANYONE'] = 'Jokainen, joka voi kirjautua sisään CMS:ään.';
$lang['fi_FI']['SiteTree']['EDITHEADER'] = 'Kuka voi muokata tätä CMS:ssä?';
$lang['fi_FI']['SiteTree']['EDITONLYTHESE'] = 'Vain seuraavat henkilöt (valitse listasta)';
$lang['fi_FI']['SiteTree']['GROUP'] = 'Ryhmä';
$lang['fi_FI']['SiteTree']['HASBROKENLINKS'] = 'Tällä sivulla on rikkinäisiä linkkejä';
$lang['fi_FI']['SiteTree']['has_one_Parent'] = 'Sivupohja';
$lang['fi_FI']['SiteTree']['HOMEPAGEFORDOMAIN'] = 'Verkkoalue(et)';
$lang['fi_FI']['SiteTree']['HTMLEDITORTITLE'] = 'Sisältö';
$lang['fi_FI']['SiteTree']['MENUTITLE'] = 'Navigoinnin nimike';
$lang['fi_FI']['SiteTree']['METADESC'] = 'Kuvaus';
$lang['fi_FI']['SiteTree']['METAEXTRA'] = 'Omat meta-tagit';
$lang['fi_FI']['SiteTree']['METAHEADER'] = 'Hakukoneen meta-tagit';
$lang['fi_FI']['SiteTree']['METAKEYWORDS'] = 'Avainsanat';
$lang['fi_FI']['SiteTree']['METATITLE'] = 'Otsikko';
$lang['fi_FI']['SiteTree']['MODIFIEDONDRAFT'] = 'Muokattu luonnossivustolla';
$lang['fi_FI']['SiteTree']['NOBACKLINKS'] = 'Miltään sivulta ei linkitetä tälle sivulle.';
$lang['fi_FI']['SiteTree']['NOTEUSEASHOMEPAGE'] = 'Käytä tätä sivua "kotisivuna" seuraaville verkkoalueille:
(erottele eri verkkoalueet pilkuilla)';
$lang['fi_FI']['SiteTree']['PAGESLINKING'] = 'Seuraavat sivut linkittävät tälle sivulle:';
$lang['fi_FI']['SiteTree']['PAGETITLE'] = 'Sivun nimi';
$lang['fi_FI']['SiteTree']['PAGETYPE'] = 'Sivun tyyppi';
$lang['fi_FI']['SiteTree']['PLURALNAME'] = 'Sivukartat';
$lang['fi_FI']['SiteTree']['REMOVEDFROMDRAFT'] = 'Poistettu luonnossivustolta';
$lang['fi_FI']['SiteTree']['SHOWINMENUS'] = 'Näytetäänkö valikoissa?';
$lang['fi_FI']['SiteTree']['SHOWINSEARCH'] = 'Näytetäänkö hauissa?';
$lang['fi_FI']['SiteTree']['SINGULARNAME'] = 'Sivukartta';
$lang['fi_FI']['SiteTree']['TABACCESS'] = 'Oikeudet';
$lang['fi_FI']['SiteTree']['TABBACKLINKS'] = 'Linkit tänne';
$lang['fi_FI']['SiteTree']['TABBEHAVIOUR'] = 'Käyttäytyminen';
$lang['fi_FI']['SiteTree']['TABCONTENT'] = 'Sisältö';
$lang['fi_FI']['SiteTree']['TABMAIN'] = 'Yleiset';
$lang['fi_FI']['SiteTree']['TABMETA'] = 'Meta-tiedot';
$lang['fi_FI']['SiteTree']['TABREPORTS'] = 'Raportit';
$lang['fi_FI']['SiteTree']['TOPLEVEL'] = 'Sivuston sisältö (ylin taso)';
$lang['fi_FI']['SiteTree']['URL'] = 'URL-osoite';
$lang['fi_FI']['SiteTree']['URLSegment'] = 'URL-kenttä';
$lang['fi_FI']['SiteTree']['VALIDATIONURLSEGMENT1'] = 'Toinen sivu käyttää tätä URL-osoitetta. URL-osoitteen täytyy olla erilainen joka sivulla.';
$lang['fi_FI']['SiteTree']['VALIDATIONURLSEGMENT2'] = 'URL-osoite saa sisältää vain kirjaimia, numeroita ja tavuviivoja.';
$lang['fi_FI']['TableField']['ISREQUIRED'] = '%s:ssa %s on tarvittu.';
$lang['fi_FI']['TableField.ss']['ADD'] = 'Lisää uusi rivi';
$lang['fi_FI']['TableField.ss']['CSVEXPORT'] = 'Vie CSV:nä';
$lang['fi_FI']['TableListField']['CSVEXPORT'] = 'Vie CSV:nä';
$lang['fi_FI']['TableListField']['PRINT'] = 'Tulosta';
$lang['fi_FI']['TableListField_PageControls.ss']['DISPLAYING'] = 'Näytetään';
$lang['fi_FI']['TableListField_PageControls.ss']['VIEWFIRST'] = 'Näytä ensimmäinen';
$lang['fi_FI']['TableListField_PageControls.ss']['VIEWLAST'] = 'Näytä viimeinen';
$lang['fi_FI']['TableListField_PageControls.ss']['VIEWNEXT'] = 'Näytä seuraava';
$lang['fi_FI']['TableListField_PageControls.ss']['VIEWPREVIOUS'] = 'Näytä edellinen';
$lang['fi_FI']['ToggleCompositeField.ss']['HIDE'] = 'Piilota';
$lang['fi_FI']['ToggleCompositeField.ss']['SHOW'] = 'Näytä';
$lang['fi_FI']['ToggleField']['LESS'] = 'vähemmän';
$lang['fi_FI']['ToggleField']['MORE'] = 'lisää';
$lang['fi_FI']['Translatable']['CREATE'] = 'Luo uusi käännös';
$lang['fi_FI']['Translatable']['CREATEBUTTON'] = 'Luo';
$lang['fi_FI']['Translatable']['EXISTING'] = 'Olemassa olevat käännökset: ';
$lang['fi_FI']['Translatable']['NEWLANGUAGE'] = 'Uusi kieli';
$lang['fi_FI']['Translatable']['TRANSLATIONS'] = 'Käännökset';
$lang['fi_FI']['TreeSelectorField']['CANCEL'] = 'peruuta';
$lang['fi_FI']['TreeSelectorField']['SAVE'] = 'tallenna';
$lang['fi_FI']['TypeDropdown']['NONE'] = 'Ei mitään';
$lang['fi_FI']['Versioned']['has_many_Versions'] = 'Versiot';
$lang['fi_FI']['VirtualPage']['CHOOSE'] = 'Valitse sivu, jolle linkitetään';
$lang['fi_FI']['VirtualPage']['EDITCONTENT'] = 'muokataksesi sisältöä paina tästä';
$lang['fi_FI']['VirtualPage']['HEADER'] = 'Tämä on virtuaalinen sivu';
$lang['fi_FI']['VirtualPage']['PLURALNAME'] = 'Virtuaaliset sivut';
$lang['fi_FI']['VirtualPage']['SINGULARNAME'] = 'Virtuaalinen sivu';
$lang['fi_FI']['Widget']['PLURALNAME'] = 'Widgetit';
$lang['fi_FI']['Widget']['SINGULARNAME'] = 'Widgetti';
$lang['fi_FI']['WidgetArea']['PLURALNAME'] = 'Widget-alueet';
$lang['fi_FI']['WidgetArea']['SINGULARNAME'] = 'Widget-alue';

?>

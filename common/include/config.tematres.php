<?php
if ((stristr($_SERVER['REQUEST_URI'], "session.php") ) || ( !defined('T3_ABSPATH') )) {
    die("no access");
}
// TemaTres : aplicación para la gestión de lenguajes documentales #       #
//
// Copyright (C) 2004-2008 Diego Ferreyra tematres@r020.com.ar
// Distribuido bajo Licencia GNU Public License, versión 2 (de junio de 1.991) Free Software Foundation
//
//
// ARCHIVO DE CONFIGURACION == CONFIG FILE #

date_default_timezone_set("America/Argentina/Buenos_Aires");

$CFG["Version"]        = "TemaTres 3.3";

$CFG["VersionWebService"]        = "2.0";

// ID del Tesauro por DEFAULT
$CFG["DFT_TESA"] ='1';

// Config URI base for XML URI as identifiers. If null, use URI vocabulary
$CFG["_URI_BASE_ID"] = '';

// Config char beween _URI_BASE_ID and term ID. If null, use 'xml.php?skosTema=' for HTTP response
$CFG["_URI_SEPARATOR_ID"] ='xml.php?skosTema=';

// Config char encode (only can be: utf-8 or iso-8859-1)
$CFG["_CHAR_ENCODE"] ='utf-8';

// Config minimun value to evaluate distance between to strings (Levenstein distance)
$CFG["_MIN_DISTANCE_"] ='6';

// Define way to display top terms, 0=AJAX, 1=HTML div, default = 0
$CFG["_TOP_TERMS_BROWSER"] ='0';

// Define char to recognice tag separator in txt import procedure. default = ":"
$CFG["IMP_TAG_SEPARATOR"]  =':';

// Define char to recognice as tabulator, tabulator is char used in txt import procedure to asig to the term the same relation as previous relation. default = "==="
$CFG["IMP_TAG_TABULATOR"]  ='===';

// Define symbols to type of relations
$CFG["REL_SYMBOLS"]=array("BT"=>'↑',"NT"=>'↓',"UF"=>'↸',"RT"=>'⇆',"NOTE"=>'✎');

// Google Analytics  GA_TRACKING_ID, Default false=0
$CFG["GA_TRACKING_ID"] ='0';

// Default NAAN assigned by ARK agency https://n2t.net/e/pub/naan_table.html
define('NAAN', '99152/t3');


// Enable copy the string value of valid terms with on click. Default true=1
//$CFG["COPY_CLICK"] ='1';

//Define specific excluded characters from the alphabetic menu
$CFG["_EXCLUDED_CHARS"]=array("<",">","[","]","(",")",'"',"'","|");

//default values for config
$arrayCFGs =array(  'CFG_PUBLISH'=>'1',
                    'COPY_CLICK'=>'1',
                    'CFG_ALLOW_DUPLICATED'=>'0',
                    'CFG_MAX_TREE_DEEP'=>'3',
                     '_SHOW_TREE'=>'1',
                    '_SHOW_RANDOM_TERM'=>'0',
                    '_GLOSS_NOTES'=>'NA',
                    '_USE_CODE'=>'0',
                    '_SHOW_CODE'=>'0',
                    'CFG_NUM_SHOW_TERMSxSTATUS'=>'200',
                    'CFG_VIEW_STATUS'=>'0',
                    'CFG_MIN_SEARCH_SIZE'=>'2',
                    'CFG_SEARCH_METATERM'=>'0',
                    'CFG_SUGGESTxWORD'=>'1',
                    'CFG_SIMPLE_WEB_SERVICE'=>'1',
                    '_PUBLISH_SKOS'=>'2',
                    'CFG_ENABLE_SPARQL'=>'0'
                  );
//list of config values registred in __values table
$CFG["CONFIG_VAR"]=array('2','3','4','config','DATESTAMP','t_estado','t_nota','t_relacion','t_usuario','URI_TYPE','METADATA','CONTACT_MAIL','CFG_ARK_NAAN');

$CFG["ISO639-1"]=array(
    "ab-AB"=>array("ab","Abkhazian"),
    "ar-AR"=>array("ar","Arabic"),
    "hy-HY"=>array("hy","Armenian"),
    "ay-AY"=>array("ay","Aymara"),
    "eu-ES"=>array("eu","Basque"),
    "ca-ES"=>array("ca","Catalan"),
    "zh-CN"=>array("zh","Chinese (Simplified)"),
    "co-CO"=>array("co","Corsican"),
    "hr-HR"=>array("hr","Croatian"),
    "cs-CS"=>array("cs","Czech"),
    "da-DA"=>array("da","Danish"),
    "nl-NL"=>array("nl","Dutch"),
    "en-EN"=>array("en","English"),
    "en-GB"=>array("en-GB","English GB"),
    "en-US"=>array("en-US","English US"),
    "et-ET"=>array("et","Estonian"),
    "fa-FA"=>array("fa","Farsi"),
    "fi-FI"=>array("fi","Finnish"),
    "fr-FR"=>array("fr","French"),
    "gl-ES"=>array("gl","Galician"),
    "de-DE"=>array("de","German"),
    "el-EL"=>array("el","Greek"),
    "gn-GN"=>array("gn","Guarani"),
    "iw-IW"=>array("iw","Hebrew"),
    "hi-HI"=>array("hi","Hindi"),
    "hu-HU"=>array("hu","Hungarian"),
    "it-IT"=>array("it","Italian"),
    "ja-JA"=>array("ja","Japanese"),
    "lt-LT"=>array("lt","Lithuanian"),
    "mi-MI"=>array("mi","Maori"),
    "pl-PL"=>array("pl","Polish"),
    "pt-BR"=>array("pt-BR","Portuguese (Brasil)"),
    "pt-PT"=>array("pt-PT","Portuguese (Portugal)"),
    "qu-QU"=>array("qu","Quechua"),
    "ro-RO"=>array("ro","Romanian"),
    "ru-RO"=>array("ru","Russian"),
    "sr-SR"=>array("sr","Serbian"),
    "sh-SH"=>array("sh","Serbo-Croatian"),
    "si-SI"=>array("si","සිංහල"),
    "sk-SK"=>array("sk","Slovak"),
    "sl-SL"=>array("sl","Slovenian"),
    "so-SO"=>array("so","Somali"),
    "es-ES"=>array("es","Spanish"),
    "sv-SV"=>array("sv","Swedish"),
    "tr-TR"=>array("tr","Turkish"),
    "uk-UK"=>array("uk","Ukrainian"),
    "uz-UZ"=>array("uz","Uzbek")
    );


// Idiomas disponibles: código interno => "nombre del idioma","nombre del script de idioma", "código del idioma",código ISO del idioma"
// El primer idioma del array es el que toma como idioma por defecto.

$CFG["_CHAR_ENCODE"]=(in_array($CFG["_CHAR_ENCODE"], array('utf-8','iso-8859-1'))) ? $CFG["_CHAR_ENCODE"] : 'iso-8859-1';

$idiomas_disponibles = array(
     "ca-ES"  => array("català", "ca-ES-$CFG[_CHAR_ENCODE].inc.php", "ca-ES","ca-$CFG[_CHAR_ENCODE]"),
     "de-DE"  => array("deutsch","de-DE-$CFG[_CHAR_ENCODE].inc.php", "de-DE","de-$CFG[_CHAR_ENCODE]"),
     "en-EN"  => array("english", "en-$CFG[_CHAR_ENCODE].inc.php", "en-EN","en-$CFG[_CHAR_ENCODE]"),
     "en-US"  => array("english (US)", "en-US-$CFG[_CHAR_ENCODE].inc.php", "en-US","en-EU-$CFG[_CHAR_ENCODE]"),
     "en-GB"  => array("english (GB)", "en-GB-$CFG[_CHAR_ENCODE].inc.php", "en-GB","en-GB-$CFG[_CHAR_ENCODE]"),
     "es-ES"  => array("español", "es-ES-$CFG[_CHAR_ENCODE].inc.php", "es-ES","es-$CFG[_CHAR_ENCODE]"),
     "eu-ES"  => array("euskeda", "eu-ES-$CFG[_CHAR_ENCODE].inc.php", "eu-EU","eu-$CFG[_CHAR_ENCODE]"),
     "fr-FR"  => array("français","fr-FR-$CFG[_CHAR_ENCODE].inc.php", "fr-FR","fr-$CFG[_CHAR_ENCODE]"),
     "gl-ES"  => array("galego","gl-ES-$CFG[_CHAR_ENCODE].inc.php", "gl-ES","gl-$CFG[_CHAR_ENCODE]"),
     "it-IT"  => array("italiano","it-IT-$CFG[_CHAR_ENCODE].inc.php", "it-IT","it-$CFG[_CHAR_ENCODE]"),
     "nl-NL"  => array("Vlaams","nl-NL-$CFG[_CHAR_ENCODE].inc.php", "nl-NL","nl-$CFG[_CHAR_ENCODE]"),
     "zh-TW"  => array("简体中文","zh-TW-$CFG[_CHAR_ENCODE].inc.php", "zh-TW","zh-$CFG[_CHAR_ENCODE]"),
     "zh-CN"  => array("简体中文","zh-CN-$CFG[_CHAR_ENCODE].inc.php", "zh-CN","zh-$CFG[_CHAR_ENCODE]"),
     "pl-PL"  => array("polski","pl-PL-$CFG[_CHAR_ENCODE].inc.php", "pl-PL","pl-$CFG[_CHAR_ENCODE]"),
     "pt-BR"  => array("português (Brasil)","pt-BR-$CFG[_CHAR_ENCODE].inc.php", "pt-BR","ptBR-$CFG[_CHAR_ENCODE]"),
     "pt-PT"  => array("português (Portugal)","pt-PT-$CFG[_CHAR_ENCODE].inc.php", "pt-PT","ptPT-$CFG[_CHAR_ENCODE]"),
     "ru-RU"  => array("Pусский","ru-RU-$CFG[_CHAR_ENCODE].inc.php", "ru-RU","ru-$CFG[_CHAR_ENCODE]")
    );

// Contantes
define("id_TR", "2"); //Tipo relacion término relacionado
define("id_TG", "3"); //Tipo relacion término superior
define("id_UP", "4"); //Tipo relacion término no preferido

define("id_EQ", "6");//Tipo relacion término equivalente
define("id_EQ_PARCIAL", "5");//Tipo relacion término equivalente parcialmente
define("id_EQ_NO", "7");//Tipo relacion término no equivalente
define("id_EQ_INEXACTA", "8");//Tipo relacion término equivalente inexacta

define("SI", "1");
define("NO", "2");

//term x page in translator bulk editor
define('CFG_NUM_SHOW_TERMSxTRAD', 30);

//enable HTML tags in web services and metadata data
$CFG["_HTMLinDATA"]=1;

//Config Sites availables for URL search
$CFG["SEARCH_URL_SITES"] =array("wikipedia","Google exacto","Google scholar","Google images","Google books");


$CFG["SEARCH_URL_SITES_SINTAX"] = array(
    'del.icio.us' => array(
        'favicon' => 'delicious.png',
        'leyenda' => 'del.icio.us',
        'url' => 'http://del.icio.us/search/?fr=del_icio_us&amp;p=STRING_BUSQUEDA&amp;type=all',
        'encode'=>'utf8'),

    'e-lis' => array(
        'favicon' => 'e-lis_mini.png',
        'leyenda' => 'e-lis',
        'url' => 'http://eprints.rclis.org/perl/search/simple?title%2Fabstract%2Fkeywords=STRING_BUSQUEDA&amp;_action_search=Submit&amp;_order=bytitle&amp;title%2Fabstract%2Fkeywords_srchtype=ALL&amp;_satisfyall=ALL',
        'encode'=>'utf8'
    ),

    'wikipedia' => array(
        'favicon' => 'wikipedia_mini.png',
        'leyenda' => 'Wikipedia',
        'url' => 'http://es.wikipedia.org/wiki/Especial:Search?search=STRING_BUSQUEDA&amp;fulltext=Buscar+en+texto',
        'encode'=>false
    ),


    'cc' => array(
        'favicon' => 'cc.png',
        'leyenda' => 'CreativeCommon',
        'url' => 'http://search.creativecommons.org/?q=STRING_BUSQUEDA',
        'encode'=>'utf8'
    ),


    'Google exacto' => array(
        'favicon' => 'google.gif',
        'leyenda' => 'Google b&uacute;squeda exacta',
        'url' => 'http://www.google.com/search?as_epq=STRING_BUSQUEDA',
        'encode'=>false
    ),


    'Google' => array(
        'favicon' => 'google.gif',
        'leyenda' => 'Google',
        'url' => 'http://www.google.com/search?channel=fs&q=STRING_BUSQUEDA',
        'encode'=>false
    ),

    'Google scholar' => array(
        'favicon' => 'goo_scholar.png',
        'leyenda' => 'Google scholar',
        'url' => 'http://scholar.google.com/scholar?lr=&amp;ie=UTF-8&amp;q=%22STRING_BUSQUEDA%22&amp;btnG=Search&amp;oe=UTF-8',
        'encode'=>false
    ),

    'Google images' => array(
        'favicon' => 'goo_images.png',
        'leyenda' => 'Google images',
        'url' => 'http://images.google.com/images?q=STRING_BUSQUEDA',
        'encode'=>false
    ),

    'Google books' => array(
        'favicon' => 'goo_books.gif',
        'leyenda' => 'Google books',
        'url' => 'http://books.google.com/?ie=UTF-8&amp;as_epq=%22STRING_BUSQUEDA%22&amp;btnG=Search',
        'encode'=>false
    ),

    'INTI libros' => array(
        'favicon' => 'inti.ico',
        'leyenda' => 'Libros INTI',
        'url' => 'http://www-biblio.inti.gob.ar/cgi-bin/wxis/wxis.exe?IsisScript=descri.xis&bool=STRING_BUSQUEDA&base=cat&inf=1&sup=20',
        'encode'=>true
    ),

    'INTI revistas' => array(
        'favicon' => 'inti.ico',
        'leyenda' => 'Revistas INTI',
        'url' => 'http://www-biblio.inti.gob.ar/cgi-bin/wxis/wxis.exe?IsisScript=descri.xis&bool=STRING_BUSQUEDA&base=kardex&inf=1&sup=20',
        'encode'=>true
    )
    );

//
// Reporte de errores pero no de noticias (variables no inicializadas);
    error_reporting(E_ALL ^ E_NOTICE);
//

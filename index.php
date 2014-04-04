<?php

// error reporting
//error_reporting(E_ALL ^ E_NOTICE);

// start buffer => prevent header already sent
ob_start();

// include URL Stuff
require_once "functions/navigation-functions.php";

// include auth.php if page != login
//if ($page != "login") require_once "functions/auth.php";

// get PAGE settings & DB details
require_once "functions/config/config.php";

// include db-functions
require_once "functions/db-functions.php";

//-----------------------------------------------------------------------------------------------
// BUILT PAGE
//-----------------------------------------------------------------------------------------------

// include header
require_once 'header.php';

// switch case for nav
switch ($page) {
    
    default: 
        //$page == 'home';
        //if (file_exists('pages/' . $page . '.php')) require_once 'pages/' . $page . '.php';
        //echo "bla";
        //echo $page;
        break;
		
    case 'charts':
    case 'index':
    case 'tables':
    case 'result':
    
        if (file_exists('pages/' . $page . '.php')) require_once 'pages/' . $page . '.php';
        break;
	
}

// include footer
require_once 'footer.php';

// end buffer => prevent header already sent
ob_end_flush();

?>
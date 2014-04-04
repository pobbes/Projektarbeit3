<?php

    session_start();

    // GET path
	$hostname  =   $_SERVER['HTTP_HOST'];
    $path      =   dirname($_SERVER['PHP_SELF']);
	
    // if NOT logged in
    if($_SESSION['loggedin'] != true) { 
     
        // REDIRECT to loginpage
        header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index.php?page=login');
        exit();
    }

    // if logout pressed
    if(isset($_GET['action']) && ($_GET['action'] == 'logout')) { 
        
        // DELETE session
	    session_unset();            
	    session_destroy(); 
	 
        // REDIRECT to loginpage
	    header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index.php?page=login');
        exit();
	}

?>
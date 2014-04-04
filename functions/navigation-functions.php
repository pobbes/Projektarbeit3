<?php
//-----------------------------------------------------------------------------------------------
// NAVIGATION FUNCTION - EXPERIMENTAL 
//-----------------------------------------------------------------------------------------------

// default level (getURL)
defined('LEVEL')        ||  define('LEVEL', 0); 				

// default page = index (for dashboard)
$page = isset($_GET['page']) ? $_GET['page'] : 'index';	        

// used for getURL paths
$_LEVEL = LEVEL; 

function getLEVEL() {
    
	global $_LEVEL;
	$level = $_LEVEL == 0 ? '' : '';
	$level = $_LEVEL > 0 ? str_repeat('../', $_LEVEL) : $level;

	return $level;
}

// path to file / URL root directory
function getURL($query = false) {
        
    // if $query is not array
	if (!is_array($query)) {
        
		return $query ? 'index.php' : getLEVEL();
    }
    
	else {
        
		return ( !isset($query[0]) ? "?" . http_build_query($query, '', '&amp;') : 'index.php?page=' . $query[0] );
        
    }
}

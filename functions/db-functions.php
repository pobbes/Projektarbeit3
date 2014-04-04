<?php
error_reporting(E_ALL ^ E_NOTICE);
 
require_once 'db-connect.php';

//-----------------------------------------------------------------------------------------------
// Check DB-Entrys => SQL Injektions
//-----------------------------------------------------------------------------------------------

function clean_it($dirty){
         
    // Auswirkungen von magic_quotes_gpc zuruecksetzen, wenn ON
    if (get_magic_quotes_gpc()) {
        $clean = mysql_real_escape_string(stripslashes(htmlspecialchars($dirty)));
    }
    
    else{
        $clean = mysql_real_escape_string(htmlspecialchars($dirty));
    }
    return $clean;
}

//-----------------------------------------------------------------------------------------------
// Login
//-----------------------------------------------------------------------------------------------

function login($log_email, $log_pass){  
    ob_start(); 
    session_start();
    
    
    
    $hostname = $_SERVER['HTTP_HOST'];
    $path = dirname($_SERVER['PHP_SELF']);
    
    $login_email = clean_it($log_email);
    $login_pass = md5(clean_it($log_pass));
        
    $login = mysql_query("SELECT customers_id FROM customers WHERE customers_email_address='$login_email' AND customers_password='$login_pass'");
	     
    // if login SUCCESSFUL
	if(mysql_num_rows($login) == "1"){   
        
        $_SESSION['login'] = true;    
        header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index.php');
        exit;      
    }
    
    else{       
        
        $message = 'Zugriff verweigert ... <br />';
        $error = "1"; // Fehler        
    }
    
    if($error != "1"){ // Wenn kein Fehler    
        
        $_SESSION['login'] = $_SERVER['REMOTE_ADDR'];    
        header('Location: http://'.$hostname.($path == '/' ? '' : $path).'/index.php');
        exit;
    }    
    
    if($error == "1"){ // error
        
        echo "<div class=\"error\"><h1>Error ...</h1>\n <p>$message</p></div>";
    }
}

//-----------------------------------------------------------------------------------------------
// Logout
//-----------------------------------------------------------------------------------------------

function logout(){   
    
    // if logged in
    if(isset($_SESSION['login'])){
        
        echo "<div class=\"btn btn-red small right clearfix\"><a href=\"$pfad?action=logout\">logout</a></div>";
    }
}

//-----------------------------------------------------------------------------------------------
// GET row by ID
//-----------------------------------------------------------------------------------------------

function getRow($id) {
    
    $result = mysql_query("SELECT * FROM test WHERE id = '$id' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
        
        $row = mysql_fetch_array($result) or die(mysql_error());
        
        return $row;        
        
    } 
	else 
	{
        return false;
    }
} 

//-----------------------------------------------------------------------------------------------
// GET country by COUNTRY
//-----------------------------------------------------------------------------------------------

function getCountry($db, $country) {
/*    
    $result = mysql_query("SELECT * FROM test WHERE country = '$country' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{                    
        return $result;                
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT * FROM test WHERE country = '$country' ";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET numbers of entries for country by COUNTRY
//-----------------------------------------------------------------------------------------------

function getNrEntryCountry($db, $country) {
/*    
    $result = mysql_query("SELECT * FROM test WHERE country = '$country' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        $num_rows = mysql_num_rows($result);
    
		return $num_rows;    
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT COUNT(hits) FROM test WHERE country = '$country' ";    
            
    $sth = $db->query($query);
    $result = $sth->fetch();
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET number of distinct entries
//-----------------------------------------------------------------------------------------------

function getDistinctEntry($db) {
   
/*   
    $result = mysql_query("SELECT DISTINCT entry FROM test");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        $num_rows = mysql_num_rows($result);
    
		return $num_rows;    
        
    } 
	else 
	{
        return false;
    }
*/

$query = "SELECT COUNT(DISTINCT entry) FROM test";    
            
    $sth = $db->query($query);
    $result = $sth->fetch();
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET number of distinct entry for one country
//-----------------------------------------------------------------------------------------------

function getDistinctEntryCountry($db, $country) {
/*    
    $result = mysql_query("SELECT DISTINCT entry FROM test WHERE country = '$country' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        $num_rows = mysql_num_rows($result);
    
		return $num_rows;    
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT DISTINCT entry FROM test WHERE country = '$country'";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET all countries
//-----------------------------------------------------------------------------------------------

function getDistinctCountry($db) {
/*   
    $result = mysql_query("SELECT DISTINCT country FROM test");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        $num_rows = mysql_num_rows($result);
    
		return $num_rows;    
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT DISTINCT country FROM test";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
    
	print_r($result);
    echo $result;
} 


//-----------------------------------------------------------------------------------------------
// GET entry by ENTRY
//-----------------------------------------------------------------------------------------------

function getEntry($db, $entry) {
/*    
    $result = mysql_query("SELECT * FROM test WHERE entry = '$entry' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        return $result;        
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT * FROM test WHERE entry = '$entry'";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET entry for 1 country by ENTRY and COUNTRY
//-----------------------------------------------------------------------------------------------

function getEntryCountry($db, $entry, $country) {
/*    
    $result = mysql_query("SELECT * FROM test WHERE name = '$entry' AND country = '$country' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        return $result;        
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT * FROM test WHERE name = '$entry' AND country = '$country'";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET max hits for country BY country (wie viel Suchanfragen für Land XY)
//-----------------------------------------------------------------------------------------------

function getMaxHitsCountry($db, $country) {
/*    
    $result = mysql_query("SELECT SUM(hits) AS value_sum FROM test WHERE country = '$country' ");
	$row = mysql_fetch_assoc($result); 
	$sum = $row['value_sum'];
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        return $result;        
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT SUM(hits) AS value_sum FROM test WHERE country = '$country'";    
            
    $sth = $db->query($query);
    $result = $sth->fetch();
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// GET average hits for entry BY entry
//-----------------------------------------------------------------------------------------------

function getAvgEntry($db, $entry) {
/*    
    $result = mysql_query("SELECT AVG(hits) FROM test WHERE entry = '$entry' ");
	$row = mysql_fetch_assoc($result); 
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        return $row;        
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT AVG(hits) FROM test WHERE entry = '$entry'";    
            
    $sth = $db->query($query);
    $result = $sth->fetch();
    
	print_r($result);
    echo $result;
} 


//-----------------------------------------------------------------------------------------------
// GET TopX of all Entry
//-----------------------------------------------------------------------------------------------

function getTopAll($db) {
/*    
    $result = mysql_query("SELECT * FROM test ORDER BY hits DESC LIMIT 10"); 
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        echo $result;        
        
    } 
	else 
	{
        echo "fehler";
    }
*/
$query = "SELECT * FROM test ORDER BY hits DESC LIMIT 10";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
	print_r($result);
    echo $result;

} 


//-----------------------------------------------------------------------------------------------
// GET entry BETWEEN two dates
//-----------------------------------------------------------------------------------------------

function getEntryTimespan($db) {
/*    
    $result = mysql_query("SELECT * FROM test WHERE name = '$entry' AND date BETWEEN '$dateStart' AND '$dateEnd' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        return $result;        
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT * FROM test WHERE entry = '$entry' AND date BETWEEN '$dateStart' AND '$dateEnd'";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
	print_r($result);

	}

//-----------------------------------------------------------------------------------------------
// GET country BETWEEN two dates
//-----------------------------------------------------------------------------------------------

function getCountryTimespan($db, $country, $dateStart, $dateEnd) {
/*    
    $result = mysql_query("SELECT * FROM test WHERE country = '$country' AND date BETWEEN '$dateStart' AND '$dateEnd' ");
        
    // check for empty result
	if (mysql_num_rows($result) > 0)
	{    
                
        return $result;        
        
    } 
	else 
	{
        return false;
    }
*/
$query = "SELECT * FROM test WHERE country = '$country' AND date BETWEEN '$dateStart' AND '$dateEnd'";    
            
    $sth = $db->query($query);
    $result = $sth->fetchAll();
	$result = json_encode($result);
    
	print_r($result);
    echo $result;
} 

//-----------------------------------------------------------------------------------------------
// COUNT all rows
//-----------------------------------------------------------------------------------------------

/*
function countRows() {
    
    $result = mysql_query("SELECT * FROM test ");
    $num_rows = mysql_num_rows($result);
    
    echo $num_rows;
}
*/

function countRows($db) {
    
    $query = "SELECT COUNT(hits) FROM test";    
            
    $sth = $db->query($query);
    $result = $sth->fetchColumn();
    
    echo $result;
}



//-----------------------------------------------------------------------------------------------
// GET number of countries
//-----------------------------------------------------------------------------------------------

function getNumberOfCountry($db) {
/*   
    $result = mysql_query("SELECT DISTINCT country FROM test");
        
    // check for empty result
 if (mysql_num_rows($result) > 0)
 {    
                
        $num_rows = mysql_num_rows($result);
    
  return $num_rows;    
        
    } 
 else 
 {
        return false;
    }
*/
$query = "SELECT COUNT(DISTINCT country) FROM test";    
            
    $sth = $db->query($query);
    $result = $sth->fetch();
    
    echo $result[0];
}




?>
<?php

require_once 'config/config.php';
        		
try {
    $db = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE . ';charset=utf8',DB_SERVER_USERNAME, DB_SERVER_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>
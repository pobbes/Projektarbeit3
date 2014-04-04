<?php
require_once 'functions/db-functions.php';

$country = 'de';
$entry = 'Paul_Walker';
$hits = '5';
$dateStart = ' ';
$dateEnd = ' ';


echo "<h1>getCountry</h1>";

getCountry($db, $country);

echo "<br />";




echo "<h1>getCountry</h1>";

$NrOfEntryForCountry      =   getNrEntryCountry($db, $country);

echo $NrOfEntryForCountry;

echo "<br />";




$AlleVerschEntries      =   getDistinctEntry($db);

echo $AlleVerschEntries;

echo "<br />";




$VerschEntriesProLand      =   getDistinctEntryCountry($db, $country);

echo $VerschEntriesProLand;

echo "<br />";




$VerschCountryInDB       =   getDistinctCountry($db);

echo $VerschCountryInDB;

echo "<br />";




$AnzahlCountry       =   getNumberOfCountry($db);

echo $AnzahlCountry;

echo "<br />";




$GetDataForEntry       =   getEntry($db, $entry);

echo $GetDataForEntry;

echo "<br />";




$GetEntryCountry       =   getEntryCountry($db, $entry, $country);

echo $GetEntryCountry;

echo "<br />";




$MaxHitsCountry      =   getMaxHitsCountry($db, $country);

echo $MaxHitsCountry;

echo "<br />";




$AvgOfEntry      =   getAvgEntry($db, $entry);

echo $AvgOfEntry ;

echo "<br />";




$TopTen       =   getTopAll($db);

echo $TopTen;

echo "<br />";




$EntryTimeSpan       =   getEntryTimespan($db);

echo $EntryTimeSpan;

echo "<br />";




$CountryTimeSpan       =   getCountryTimespan($db, $country, $dateStart, $dateEnd);

echo $CountryTimeSpan;

echo "<br />";




$countRows       =   countRows($db);

echo $countRows;

?>
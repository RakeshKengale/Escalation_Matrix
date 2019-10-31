<?php
//Database credentials
$dbhHost     = 'localhost';
$dbhUsername = 'root';
$dbhPassword = '';
$dbhName     = 'rakken';

//Connect and select the database
$dbh = new mysqli($dbhHost, $dbhUsername, $dbhPassword, $dbhName);

if ($dbh->connect_error) {
    die("Connection failed: " . $dbh->connect_error);
}

?>







 
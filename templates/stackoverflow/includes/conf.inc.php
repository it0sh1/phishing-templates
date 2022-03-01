<?php
# Config file for phishing with stackoverflow

$stackoverflow_link = "http://stackoverflow.com"; // linking

// if you want to save your stolen credentials in
// a database, set this to true (DEFAULT: false);
$use_db = false;

// mysql properties
$db_host = "localhost"; // your mysql host
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty)
$db_name = "so_stolen_credentials"; // database name
?>

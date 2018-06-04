<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8">
    <title>Realty Space - Real Estate Responsive HTML Theme</title><!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Loading Source Sans Pro font that is used in this theme-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7cSource+Sans+Pro:200,400,600,700,900,400italic,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Boostrap and other lib styles-->
    <!-- build:cssvendor-->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <!-- endbuild-->
    <!-- Font-awesome lib-->
    <!-- build:cssfontawesome-->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <!-- endbuild-->
    <!-- Theme styles, please replace "default" with other color scheme from the list available in template/css-->
    <!-- build:csstheme-default-->
    <link rel="stylesheet" href="assets/css/theme-default.css">
    <!-- endbuild-->
    <!-- Your styles should go in this file-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Fixes for IE-->
    <!--[if lt IE 11]>
    <link rel="stylesheet" href="assets/css/ie-fix.css"><![endif]-->
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  </head>
  <body class="index menu-default hover-default scroll-animation">


    <div>
      <a href="#"><img src="assets/img/banner1.png" width="100%"></a>
    </div>


    <div class="box js-box">
      <!-- BEGIN HEADER-->
      <header class="header header--overlay header--dark">
        <div class="container">

          <div class="header__row"><a href="index.html" class="header__logo">
              <svg>
                <use xlink:href="#icon-logo--mob"></use>
              </svg></a>
              <div class="header__settings">
                <div class="header__settings-column">
                  <h5 style="color:black "> Cryptocurrencies: 154678 </h5 >
                </div>
                <div class="header__settings-column">
                  <h5 style="color:black "> Markets: 11054 </h5 >
                </div>
                <div class="header__settings-column">
                  <h5 style="color:black "> Market Cap: $323.894.109.214 </h5 >
                </div>
                <div class="header__settings-column">
                  <h5 style="color:black "> 24Hs. Vol.: $323.894.109.214 </h5 >
                </div>
                <div class="header__settings-column">
                  <h5 style="color:black "> BTC Dominance: 39 % </h5 >
                </div>
              </div>
            <div class="crypto_info">

            </div>


            <div class="auth auth--header">
              <ul class="auth__nav">
                <li class="dropdown auth__nav-item">
                  <button data-toggle="dropdown" type="button" class="dropdown-toggle js-auth-nav-btn auth__nav-btn">
                    <svg class="auth__icon-user">
                      <use xlink:href="#icon-user"></use>
                    </svg><span class="header__span"> Log in /</span>
                  </button>
                  <div class="dropdown__menu auth__dropdown--login">
                    <!-- BEGIN AUTH LOGIN-->
                    <h5 class="auth__title">Login in your account</h5>
                    <form action="#" class="form form--flex form--auth js-login-form js-parsley">
                      <div class="row">
                        <div class="form-group">
                          <label for="login-username-dropdown" class="control-label">Username</label>
                          <input type="text" name="username" id="login-username-dropdown" required data-parsley-trigger="keyup" data-parsley-minlength="6" data-parsley-validation-threshold="5" data-parsley-minlength-message="Login should be at least 6 chars" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="login-password-dropdown" class="control-label">Password</label>
                          <input type="password" name="password" id="login-password-dropdown" required class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form__options form__options--forgot">
                          <button type="button" class="js-user-restore">Forgot password ?</button>
                        </div>
                        <button type="submit" class="form__submit">Sign in</button>
                      </div>
                      <div class="form__remember">
                        <input type="checkbox" id="remember-in-dropdown" class="in-checkbox">
                        <label for="remember-in-dropdown" class="in-label">Remember me</label>
                      </div>
                      <div class="row">
                        <div class="form__options">Not a user yet?
                          <button type="button" class="js-user-register">Get an account</button>
                        </div>
                      </div>
                    </form>
                    <!-- end of block .auth__form-->
                    <!-- END AUTH LOGIN-->
                  </div>
                </li>
                <li class="dropdown auth__nav-item">
                  <button data-toggle="dropdown" type="button" class="dropdown-toggle auth__nav-btn"><span class="header__span">  Sign up</span></button>
                  <div class="dropdown__menu auth__dropdown--register">
                    <!-- BEGIN AUTH REGISTER-->
                    <h5 class="auth__title">Sign up a new account</h5>
                    <form action="#" class="form form--flex form--auth js-register-form js-parsley">
                      <div class="row">
                        <div class="form-group form-group--col-6">
                          <label for="register-name-dropdown" class="control-label">First name</label>
                          <input type="text" name="username" id="register-name-dropdown" required class="form-control">
                        </div>
                        <div class="form-group form-group--col-6">
                          <label for="register-lastname-dropdown" class="control-label">Last name</label>
                          <input type="text" name="name" id="register-lastname-dropdown" required class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group form-group--col-6">
                          <label for="register-email-dropdown" class="control-label">E-mail</label>
                          <input type="email" name="email" id="register-email-dropdown" required class="form-control">
                        </div>
                        <div class="form-group form-group--col-6">
                          <label for="register-password-dropdown" class="control-label">Password</label>
                          <input type="password" name="password" id="register-password-dropdown" required class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form__options">Back to
                          <button type="button" class="js-user-login">Log In</button>
                        </div>
                        <button type="submit" class="form__submit">Sign up</button>
                      </div>
                    </form>
                    <!-- end of block .auth__form-->
                    <!-- END AUTH REGISTER-->
                  </div>
                </li>
              </ul>
              <!-- end of block .auth header-->
            </div>
            <button type="button" class="header__navbar-toggle js-navbar-toggle">
              <svg class="header__navbar-show">
                <use xlink:href="#icon-menu"></use>
              </svg>
              <svg class="header__navbar-hide">
                <use xlink:href="#icon-menu-close"></use>
              </svg>
            </button>
            <!-- end of block .header__navbar-toggle-->
          </div>
        </div>
      </header>
      <!-- END HEADER-->




      <div class="row">
          <div class="col-md-1">



          </div>
          <div class="col-md-10">

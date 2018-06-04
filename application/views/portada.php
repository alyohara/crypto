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
      <!-- BEGIN NAVBAR-->
      <div id="header-nav-offset"></div>
      <nav id="header-nav" class="navbar navbar--header navbar--overlay">
        <div class="container">
          <div class="navbar__row js-navbar-row">
            <a href="index.html" class="navbar__brand">
                <img src="assets/img/logoCoinMarket.png" width="1000" >
            </a>
            <div id="navbar-collapse-1" class="navbar__wrap">
              <ul class="navbar__nav">
                <li class="navbar__item js-dropdown active ">
                    <a class="navbar__link">COINMARKETCAP</a>
                </li>
                <li class="navbar__item js-dropdown ">
                    <a class="navbar__link">CRYPTOMONEDAS</a>
                </li>
                <li class="navbar__item js-dropdown ">
                    <a class="navbar__link">NOTICIAS</a>
                </li>
                <li class="navbar__item js-dropdown ">
                    <a class="navbar__link">CALCULADORA</a>
                </li>
                <li class="navbar__item js-dropdown ">
                    <a class="navbar__link">ICOS</a>
                </li>
                <li class="navbar__item js-dropdown ">
                    <a class="navbar__link">FORMACION</a>
                </li>
              </ul>
              <!-- end of block  navbar__nav-->
            </div>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR-->
      <div class="site-wrap js-site-wrap">
        <div class="widget js-widget">
          <div class="widget__content">
            <div class="banner js-banner banner--wide">
              <div style="background-image: url(&quot;assets/media-demo/banner/banner-1.jpg&quot;);" class="banner__item">
                <div class="map map--index map--banner">
                  <div class="map__buttons">
                    <button type="button" class="map__change-map js-map-btn">Property Map</button>
                  </div>
                  <div class="map__wrap">
                    <div data-infobox-theme="white" class="map__view js-map-index-canvas"></div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">

                    <div class="banner__caption">
                        <img src="assets/img/criptolist.png" height="100%" width="100%">
                    </div>


                    <div class="banner__search">
                      <!-- BEGIN SEARCH-->
                      <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--banner-sidebar">
                        <div class="row">
                          <div class="form-group">
                            <label for="in-keyword" class="control-label">Cryptomonedas</label>
                            <input type="text" id="in-keyword" placeholder="Text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="in-keyword" class="control-label">Palabras clave</label>
                            <input type="text" id="in-keyword" placeholder="Text" class="form-control">
                          </div>
                          <div class="form-group"><span class="control-label">Estado Actual</span>
                            <div class="dropdown dropdown--select">
                              <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">----</button>
                              <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                                <ul>
                                  <li>
                                    <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                                    <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Ejemplo</label>
                                  </li>
                                </ul>
                                <!-- end of block .dropdown-menu-->
                              </div>
                            </div>
                          </div>
                          <div class="form-group"><span class="control-label">%7D</span>
                            <div class="dropdown dropdown--select">
                              <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">----</button>
                              <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                                <ul>
                                  <li>
                                    <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                                    <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Ejemplo</label>
                                  </li>
                                </ul>
                                <!-- end of block .dropdown-menu-->
                              </div>
                            </div>
                          </div>
                          <div class="form-group"><span class="control-label">%24HS</span>
                            <div class="dropdown dropdown--select">
                              <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">----</button>
                              <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                                <ul>
                                  <li>
                                    <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                                    <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Ejemplo</label>
                                  </li>
                                </ul>
                                <!-- end of block .dropdown-menu-->
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="in-datetime" class="control-label">Date Range</label>
                            <input type="text" id="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="true" data-single-picker="false" class="js-datetimerange form-control">
                          </div>

                          <div class="form__buttons">
                            <button type="submit" class="form__submit">Buscar</button>
                          </div>
                        </div>
                      </form>
                      <!-- end of block-->
                      <!-- END SEARCH-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="widget js-widget">
          <div class="widget__content">
            <!-- BEGIN SUBSCRIBE-->
            <div class="subscribe">
              <form action="#" class="subscribe__form js-subscribe-form">
                <h4 class="subscribe__title">Newsletters</h4>
                <div class="subscribe__group form-group">
                  <label class="sr-only">Newsletters</label>
                  <input type="email" placeholder="Input your e-mail" name="email" required data-parsley-trigger="change" class="subscribe__field form-control js-subscribe-email">
                </div>
                <button type="submit" class="btn--action subscribe__submit js-subscribe-submit">SUBMIT</button>
              </form>
              <!-- end of block .subscribe__form-->
            </div>
            <!-- END SUBSCRIBE-->
          </div>
        </div>
        <!-- END AFTER CENTER SECTION-->
        <!-- BEGIN FOOTER-->
        <footer class="footer">
          <div class="container">
            <div class="footer__wrap">
              <div class="footer__col footer__col--first">
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Menu</h2>
                  </div>
                  <div class="widget__content">
                    <nav class="nav nav--footer"><a href="index.html">COINMARKETCAP</a><a href="properties_listing_grid.html">CRYPTOMONEDAS</a><a href="agents_listing_grid.html">NOTICIAS</a><a href="gallery.html">CALCULADORA</a><a href="blog.html">ICOS</a><a href="pricing.html">FORMACION</a></a></nav>
                    <!-- end of block .nav-footer-->
                  </div>
                </div>
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">ACERCA DE</h2>
                  </div>
                  <div class="widget__content">
                    <aside class="widget_text">
                      <div class="">
                        <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        </p><p>ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderi</p>
                        <a href="index.html" class="navbar__brand">
                            <img src="assets/img/logoCoinMarketBlanco.png" width="1000" >
                        </a>
                      </div>

                    </aside>
                  </div>
                </div>
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Social</h2>
                  </div>
                  <div class="widget__content">
                    <div class="social social--footer"><a href="#" class="social__item"><i class="fa fa-facebook"></i></a><a href="#" class="social__item"><i class="fa fa-twitter"></i></a><a href="#" class="social__item"><i class="fa fa-google-plus"></i></a></div>
                    <!-- end of block .social-footer-->
                  </div>
                </div>
              </div>
              <!-- end of block .footer__col-first-->
              <div class="footer__col footer__col--second">
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">USEFUL LINKS</h2>
                  </div>
                  <div class="widget__content">
                    <ul>
                      <li >
                          <a>Advertise</a>
                      </li>
                      <li >
                          <a>API</a>
                      </li>
                      <li >
                          <a>Disclaimer</a>
                      </li>
                      <li >
                          <a>Privacy</a>
                      </li>
                      <li >
                          <a>Terms</a>
                      </li>
                      <li >
                          <a>FAQ</a>
                      </li>
                      <li >
                          <a>Request Form</a>
                      </li>
                      <li >
                          <a>Blog</a>
                      </li>
                      <li >
                          <a>Newsletter</a>
                      </li>
                    </ul>
                    <!-- end of block .address-->
                  </div>
                </div>
              </div>
              <!--end of block .footer__col-second-->
              <div class="footer__col footer__col--third">
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Donate</h2>
                  </div>
                  <div class="widget__content">
                    <ul>
                      <li >
                          <a>BTC: </a><a href="#">ajshdlfkjhsad98fy3iof834fwuihf</a>
                      </li>
                      <li >
                          <a>LTC: </a><a href="#">sdaf723640f872ufgwFASWIU2</a>
                      </li>
                      <li >
                          <a>ETH: </a><a href="#">FI9fieldset7TY23F87TWUEFUSG</a>
                      </li>
                      <li >
                          <a>BCH: </a><a href="#">sdiuyfgi72t2gfuwhgfp9823fgy</a>
                      </li>
                    </ul>
                    <!-- end of block .address-->
                  </div>
                </div>
              </div>
              <!-- end of block .footer__col-third-->
              <div class="clearfix"></div><span class="footer__copyright">&copy; 2018 CoinMarketCap. All rights reserved</span>
              <!-- end of block .footer__copyright-->
            </div>
          </div>
        </footer>
        <!-- end of block .footer-->
        <!-- END FOOTER-->
      </div>
    </div>
    <button type="button" class="scrollup js-scrollup"></button>
    <!-- end of block .scrollup-->
    <!-- BEGIN SCRIPTS and INCLUDES-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?libraries=places,drawing,geometry"></script>
    <script type="text/javascript" src="http://cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
    <!--
    Contains vendor libraries (Bootstrap3, Jquery, Chosen, etc) already compiled into a single file, with
    versions that are verified to work with our theme. Normally, you should not edit that file.
    -->
    <!-- build:jsvendor-->
    <script type="text/javascript" src="assets/js/vendor.js"></script>
    <!-- endbuild-->
    <!--
    This file is used for demonstration purposes and contains example property items, that are mostly used to
    render markers on the map. You can safely delete this file, after you've adapted the demo.js code
    to use your own data.
    -->
    <!-- build:jsdemodata-->
    <script type="text/javascript" src="assets/js/demodata.js"></script>
    <!-- endbuild-->
    <!--
    The library code that Realtyspace theme relies on, in order to function properly.
    Normally, you should not edit this file or add your own code there.
    -->
    <!-- build:jsapp-->
    <script type="text/javascript" src="assets/js/app.js"></script>
    <!-- endbuild-->
    <!--
    the main file, that you should modify. It contains lots of examples of
    plugin usage, with detailed comments about specific sections of the code.
    -->
    <!-- build:jsdemo-->
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <!-- endbuild--><!-- inject:ga  -->
    <!-- endinject -->
    <!-- END SCRIPTS and INCLUDES-->
  </body>
</html>

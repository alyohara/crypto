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


            <div class="crypto_info">

            </div>


            <div class="auth auth--header">
              <ul class="auth__nav">
                <li class="dropdown auth__nav-item">
                  <div class="dropdown__menu auth__dropdown--restore">
                    <!-- BEGIN AUTH RESTORE-->
                    <h5 class="auth__title">Resetear contraseña</h5>
                    <form action="#" class="form form--flex form--auth form--restore js-restore-form js-parsley">
                      <div class="row">
                        <div class="form-group">
                          <label for="restore-email-dropdown" class="control-label">Ingrese su Usuario o email</label>
                          <input type="email" name="email" id="restore-email-dropdown" required class="form-control">
                        </div>
                      </div>
                      <div class="row">
                        <button type="submit" class="form__submit">Resetear contraseña</button>
                      </div>
                      <div class="row">
                        <div class="form__options">Volver a
                          <button type="button" class="js-user-login">Iniciar sesión</button> ó
                          <button type="button" class="js-user-register">Registrarse</button>
                        </div>
                        <!-- end of block .auth__links-->
                      </div>
                    </form>
                    <!-- end of block .auth__form-->
                    <!-- END AUTH RESTORE-->
                  </div>
                </li>
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
          <div class="navbar__row js-navbar-row"><a href="index.html" class="navbar__brand">
              <svg class="navbar__brand-logo">
                <use xlink:href="#icon-logo"></use>
              </svg></a>
            <div id="navbar-collapse-1" class="navbar__wrap">
              <ul class="navbar__nav">
                <li class="navbar__item js-dropdown active"><a class="navbar__link">Home
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem active"><a href="index.html" class="navbar__sublink js-navbar-sublink">Banner & Search</a></li>
                        <li class="navbar__subitem"><a href="index_slider.html" class="navbar__sublink js-navbar-sublink">Property slider</a></li>
                        <li class="navbar__subitem"><a href="index_projects.html" class="navbar__sublink js-navbar-sublink">Property projects</a></li>
                        <li class="navbar__subitem"><a href="index_slider_search.html" class="navbar__sublink js-navbar-sublink">Slider & Search</a></li>
                        <li class="navbar__subitem"><a href="index_slider_auth.html" class="navbar__sublink js-navbar-sublink">Slider & Authorization</a></li>
                        <li class="navbar__subitem"><a href="index_vmap_light.html" class="navbar__sublink js-navbar-sublink">Google Map & Light search</a></li>
                        <li class="navbar__subitem"><a href="index_vmap_dark.html" class="navbar__sublink js-navbar-sublink">Google Map & Dark search</a></li>
                        <li class="navbar__subitem"><a href="index_hmap_light.html" class="navbar__sublink js-navbar-sublink">Google Map & Horizontal search</a></li>
                        <li class="navbar__subitem"><a href="feature_map_leaflet.html" class="navbar__sublink js-navbar-sublink">Openstreet Map & Filter</a></li>
                        <li class="navbar__subitem"><a href="feature_vmap_fullscreen.html" class="navbar__sublink js-navbar-sublink">Fullscreen Google Map</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">Properties
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-2">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <h5 class="navbar__subtitle">Details</h5>
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="property_details.html" class="navbar__sublink js-navbar-sublink">Property</a></li>
                        <li class="navbar__subitem"><a href="property_details_projected.html" class="navbar__sublink js-navbar-sublink">Property projected</a></li>
                        <li class="navbar__subitem"><a href="property_details_agent.html" class="navbar__sublink js-navbar-sublink">Property & agent</a></li>
                      </ul>
                    </div>
                    <div class="navbar__submenu">
                      <h5 class="navbar__subtitle">Listing</h5>
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a class="navbar__sublink js-navbar-sublink">Grid
                            <svg class="navbar__arrow">
                              <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                          <div class="navbar__submenu navbar__submenu--level">
                            <button class="navbar__back js-navbar-submenu-back">
                              <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                              </svg>Back
                            </button>
                            <ul class="navbar__subnav">
                              <li class="navbar__subitem"><a href="feature_grid_large.html" class="navbar__sublink js-navbar-sub-sublink">Large</a></li>
                              <li class="navbar__subitem"><a href="properties_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Medium</a></li>
                              <li class="navbar__subitem"><a href="feature_grid_small.html" class="navbar__sublink js-navbar-sub-sublink">Small</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="navbar__subitem"><a href="properties_listing_list.html" class="navbar__sublink js-navbar-sublink">List</a></li>
                        <li class="navbar__subitem"><a href="properties_listing_table.html" class="navbar__sublink js-navbar-sublink">Table</a></li>
                        <li class="navbar__subitem"><a href="properties_listing_empty.html" class="navbar__sublink js-navbar-sublink">Empty</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">Agents
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="agent_profile.html" class="navbar__sublink js-navbar-sub-sublink">Agent's profile</a></li>
                        <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a href="agents_listing_list.html" class="navbar__sublink js-navbar-sublink">Agent's listing
                            <svg class="navbar__arrow">
                              <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                          <div class="navbar__submenu navbar__submenu--level">
                            <button class="navbar__back js-navbar-submenu-back">
                              <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                              </svg>Back
                            </button>
                            <ul class="navbar__subnav">
                              <li class="navbar__subitem"><a href="agents_listing_list.html" class="navbar__sublink js-navbar-sub-sublink">List</a></li>
                              <li class="navbar__subitem"><a href="agents_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Grid</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a href="agent_profile_blog_list.html" class="navbar__sublink js-navbar-sublink">Agent's blog
                            <svg class="navbar__arrow">
                              <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                          <div class="navbar__submenu navbar__submenu--level">
                            <button class="navbar__back js-navbar-submenu-back">
                              <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                              </svg>Back
                            </button>
                            <ul class="navbar__subnav">
                              <li class="navbar__subitem"><a href="agent_profile_blog_list.html" class="navbar__sublink js-navbar-sub-sublink">List</a></li>
                              <li class="navbar__subitem"><a href="agent_profile_blog_grid.html" class="navbar__sublink js-navbar-sub-sublink">Grid</a></li>
                              <li class="navbar__subitem"><a href="agent_profile_blog_details.html" class="navbar__sublink js-navbar-sub-sublink">Details</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a href="agent_profile_listing_list.html" class="navbar__sublink js-navbar-sublink">Agent's properties
                            <svg class="navbar__arrow">
                              <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                          <div class="navbar__submenu navbar__submenu--level">
                            <button class="navbar__back js-navbar-submenu-back">
                              <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                              </svg>Back
                            </button>
                            <ul class="navbar__subnav">
                              <li class="navbar__subitem"><a href="agent_profile_listing_list.html" class="navbar__sublink js-navbar-sub-sublink">List</a></li>
                              <li class="navbar__subitem"><a href="agent_profile_listing_grid.html" class="navbar__sublink js-navbar-sub-sublink">Grid</a></li>
                              <li class="navbar__subitem"><a href="agent_profile_listing_table.html" class="navbar__sublink js-navbar-sub-sublink">Table</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="navbar__subitem"><a href="agent_profile_testimonials.html" class="navbar__sublink js-navbar-sub-sublink">Agent's testimonials</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">User
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-2">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <h5 class="navbar__subtitle">Pages</h5>
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="my_listings.html" class="navbar__sublink js-navbar-sublink">My listings</a></li>
                        <li class="navbar__subitem"><a href="my_listings_add_edit.html" class="navbar__sublink js-navbar-sublink">Property submit</a></li>
                        <li class="navbar__subitem"><a href="my_profile.html" class="navbar__sublink js-navbar-sublink">Profile</a></li>
                      </ul>
                    </div>
                    <div class="navbar__submenu">
                      <h5 class="navbar__subtitle">Auth</h5>
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="user_login.html" class="navbar__sublink js-navbar-sublink">Login</a></li>
                        <li class="navbar__subitem"><a href="user_register.html" class="navbar__sublink js-navbar-sublink">Register</a></li>
                        <li class="navbar__subitem"><a href="user_restore_pass.html" class="navbar__sublink js-navbar-sublink">Restore</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">Blog
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="blog.html" class="navbar__sublink js-navbar-sublink">Blog list</a></li>
                        <li class="navbar__subitem"><a href="blog_details.html" class="navbar__sublink js-navbar-sublink">Blog details</a></li>
                        <li class="navbar__subitem"><a href="blog_empty.html" class="navbar__sublink js-navbar-sublink">Blog empty</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">Pages
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="page.html" class="navbar__sublink js-navbar-sublink">Сontent page</a></li>
                        <li class="navbar__subitem"><a href="faq.html" class="navbar__sublink js-navbar-sublink">Faq</a></li>
                        <li class="navbar__subitem"><a href="reviews.html" class="navbar__sublink js-navbar-sublink">Testimonials</a></li>
                        <li class="navbar__subitem"><a href="pricing.html" class="navbar__sublink js-navbar-sublink">Pricing</a></li>
                        <li class="navbar__subitem"><a href="gallery.html" class="navbar__sublink js-navbar-sublink">Gallery</a></li>
                        <li class="navbar__subitem"><a href="email.html" class="navbar__sublink js-navbar-sublink">Email template</a></li>
                        <li class="navbar__subitem navbar__subitem-dropdown js-dropdown"><a class="navbar__sublink js-navbar-sublink">Errors
                            <svg class="navbar__arrow">
                              <use xlink:href="#icon-arrow-right"></use>
                            </svg></a>
                          <div class="navbar__submenu navbar__submenu--level">
                            <button class="navbar__back js-navbar-submenu-back">
                              <svg class="navbar__arrow">
                                <use xlink:href="#icon-arrow-left"></use>
                              </svg>Back
                            </button>
                            <ul class="navbar__subnav">
                              <li class="navbar__subitem"><a href="error_403.html" class="navbar__sublink js-navbar-sub-sublink">403 Error</a></li>
                              <li class="navbar__subitem"><a href="error_404.html" class="navbar__sublink js-navbar-sub-sublink">404 Error</a></li>
                              <li class="navbar__subitem"><a href="error_500.html" class="navbar__sublink js-navbar-sub-sublink">500 Error</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item"><a href="contacts.html" class="navbar__link">Contacts</a></li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">Dashboard
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--colls-1">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="dashboard.html" class="navbar__sublink">Dashboard</a></li>
                        <li class="navbar__subitem"><a href="dashboard_property_new.html" class="navbar__sublink">Add Listing</a></li>
                        <li class="navbar__subitem"><a href="dashboard_news.html" class="navbar__sublink">News Feed</a></li>
                        <li class="navbar__subitem"><a href="dashboard_profile.html" class="navbar__sublink">Profile</a></li>
                        <li class="navbar__subitem"><a href="dashboard_activity.html" class="navbar__sublink">Activity Log</a></li>
                        <li class="navbar__subitem"><a href="dashboard_favorites_listings.html" class="navbar__sublink">Favorite Listings</a></li>
                        <li class="navbar__subitem"><a href="dashboard_favorites_agents.html" class="navbar__sublink">Favorite Agents</a></li>
                        <li class="navbar__subitem"><a href="dashboard_favorites_search.html" class="navbar__sublink">Favorite search</a></li>
                        <li class="navbar__subitem"><a href="dashboard_financials.html" class="navbar__sublink">Financials</a></li>
                        <li class="navbar__subitem"><a href="dashboard_statistics.html" class="navbar__sublink">Statistics</a></li>
                        <li class="navbar__subitem"><a href="dashboard_property.html" class="navbar__sublink">Property management</a></li>
                        <li class="navbar__subitem"><a href="dashboard_blog.html" class="navbar__sublink">Blog Management</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item js-dropdown"><a class="navbar__link">UI
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right navbar__dropdown--colls-2">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <h5 class="navbar__subtitle">Variations</h5>
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="index_not_available.html" class="navbar__sublink js-navbar-sublink">Feature not available</a></li>
                        <li class="navbar__subitem"><a href="feature_boxed.html" class="navbar__sublink js-navbar-sublink">Layout boxed</a></li>
                        <li class="navbar__subitem"><a href="feature_left_sidebar.html" class="navbar__sublink js-navbar-sublink">Sidebar left</a></li>
                      </ul>
                    </div>
                    <div class="navbar__submenu">
                      <h5 class="navbar__subtitle">Elements</h5>
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem"><a href="feature_ui.html" class="navbar__sublink js-navbar-sublink">UI</a></li>
                        <li class="navbar__subitem"><a href="feature_typography.html" class="navbar__sublink js-navbar-sublink">Typography</a></li>
                        <li class="navbar__subitem"><a href="feature_loaders.html" class="navbar__sublink js-navbar-sublink">Feature loaders</a></li>
                        <li class="navbar__subitem"><a href="bootstrap.html" class="navbar__sublink js-navbar-sublink">Twitter Bootstrap</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Language
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem active"><a href="" class="navbar__sublink js-navbar-sublink">English</a></li>
                        <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">Francais</a></li>
                        <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">Italian</a></li>
                        <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">Russian</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Currency
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <ul class="navbar__subnav">
                        <li class="navbar__subitem active"><a href="" class="navbar__sublink js-navbar-sublink">USD</a></li>
                        <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">EURO</a></li>
                        <li class="navbar__subitem"><a href="" class="navbar__sublink js-navbar-sublink">RUB</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="navbar__item navbar__item--mob js-dropdown"><a class="navbar__link">Measures
                    <svg class="navbar__arrow">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg></a>
                  <div role="menu" class="js-dropdown-menu navbar__dropdown navbar__dropdown--right">
                    <button class="navbar__back js-navbar-submenu-back">
                      <svg class="navbar__arrow">
                        <use xlink:href="#icon-arrow-left"></use>
                      </svg>Back
                    </button>
                    <div class="navbar__submenu">
                      <div class="switch switch--menu">
                        <label>M <sup>2</sup>
                          <input type="checkbox" checked><span class="lever"></span>Sq Ft
                        </label>
                      </div>
                    </div>
                  </div>
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
                      <h4 class="banner__sidebar-title">The Best Way to Find Your Perfect Home</h4>
                      <!-- BEGIN SEARCH-->
                      <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--banner-sidebar">
                        <div class="row">
                          <div class="form-group">
                            <label for="in-keyword" class="control-label">Keyword</label>
                            <input type="text" id="in-keyword" placeholder="Text" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="in-contract-type" class="control-label">Listing Type</label>
                            <select id="in-contract-type" data-placeholder="Contract type" class="form-control">
                              <option label=" "></option>
                              <option>Sale</option>
                              <option>Rent</option>
                            </select>
                          </div>
                          <div class="form-group"><span class="control-label">Property type</span>
                            <div class="dropdown dropdown--select">
                              <button type="button" data-toggle="dropdown" data-placeholder="Property type" class="dropdown-toggle js-select-checkboxes-btn">Property type</button>
                              <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                                <ul>
                                  <li>
                                    <input id="checkbox_type_1" type="checkbox" name="checkbox_type_1" class="in-checkbox">
                                    <label for="checkbox_type_1" data-toggle="tooltip" data-placement="left" title="Tooltip on top" class="in-label">Privat apartment</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_2" type="checkbox" name="checkbox_type_2" class="in-checkbox">
                                    <label for="checkbox_type_2" data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="in-label">Apartment</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_3" type="checkbox" name="checkbox_type_3" class="in-checkbox">
                                    <label for="checkbox_type_3" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_4" type="checkbox" name="checkbox_type_4" class="in-checkbox">
                                    <label for="checkbox_type_4" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_5" type="checkbox" name="checkbox_type_5" class="in-checkbox">
                                    <label for="checkbox_type_5" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">House</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_6" type="checkbox" name="checkbox_type_6" class="in-checkbox">
                                    <label for="checkbox_type_6" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_7" type="checkbox" name="checkbox_type_7" class="in-checkbox">
                                    <label for="checkbox_type_7" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_8" type="checkbox" name="checkbox_type_8" class="in-checkbox">
                                    <label for="checkbox_type_8" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Flat</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_9" type="checkbox" name="checkbox_type_9" class="in-checkbox">
                                    <label for="checkbox_type_9" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Cottage</label>
                                  </li>
                                  <li>
                                    <input id="checkbox_type_10" type="checkbox" name="checkbox_type_10" class="in-checkbox">
                                    <label for="checkbox_type_10" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top" class="in-label">Condominium</label>
                                  </li>
                                </ul>
                                <!-- end of block .dropdown-menu-->
                              </div>
                            </div>
                          </div>
                          <div class="form-group"><span class="control-label">Location level 1</span>
                            <div class="dropdown dropdown--select">
                              <button type="button" data-toggle="dropdown" data-placeholder="States" class="dropdown-toggle js-select-checkboxes-btn">States</button>
                              <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                                          <div class="region-select">
                                            <ul class="js-checkboxes-tree bonsai region-select__list">
                                              <li>
                                                          <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-0" class="in-checkbox">
                                                          <label for="region-select-states-0" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                                <ul>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Clovis" id="region-select-states-1" class="in-checkbox">
                                                              <label for="region-select-states-1" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Fresno" id="region-select-states-2" class="in-checkbox">
                                                              <label for="region-select-states-2" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                                                  </li>
                                                </ul>
                                              </li>
                                              <li>
                                                          <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-3" class="in-checkbox">
                                                          <label for="region-select-states-3" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                                <ul>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Glendale" id="region-select-states-4" class="in-checkbox">
                                                              <label for="region-select-states-4" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Long Beach" id="region-select-states-5" class="in-checkbox">
                                                              <label for="region-select-states-5" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-states-6" class="in-checkbox">
                                                              <label for="region-select-states-6" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                                    <ul>
                                                      <li>
                                                                  <input type="checkbox" name="location[]" value="Bel Air" id="region-select-states-7" class="in-checkbox">
                                                                  <label for="region-select-states-7" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                                      </li>
                                                      <li>
                                                                  <input type="checkbox" name="location[]" value="Brentwood" id="region-select-states-8" class="in-checkbox">
                                                                  <label for="region-select-states-8" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                                      </li>
                                                      <li>
                                                                  <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-states-9" class="in-checkbox">
                                                                  <label for="region-select-states-9" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                                      </li>
                                                      <li>
                                                                  <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-states-10" class="in-checkbox">
                                                                  <label for="region-select-states-10" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                                      </li>
                                                      <li>
                                                                  <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-states-11" class="in-checkbox">
                                                                  <label for="region-select-states-11" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                                      </li>
                                                    </ul>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-states-12" class="in-checkbox">
                                                              <label for="region-select-states-12" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                                                  </li>
                                                </ul>
                                              </li>
                                              <li>
                                                          <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-states-13" class="in-checkbox">
                                                          <label for="region-select-states-13" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                                                <ul>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Cupertino" id="region-select-states-14" class="in-checkbox">
                                                              <label for="region-select-states-14" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Mountain View" id="region-select-states-15" class="in-checkbox">
                                                              <label for="region-select-states-15" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-states-16" class="in-checkbox">
                                                              <label for="region-select-states-16" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                                                  </li>
                                                  <li>
                                                              <input type="checkbox" name="location[]" value="San Jose" id="region-select-states-17" class="in-checkbox">
                                                              <label for="region-select-states-17" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
                                                  </li>
                                                </ul>
                                              </li>
                                            </ul>
                                            <div class="region-select__buttons">
                                              <button type="button" class="region-select__btn region-select__btn--reset js-select-checkboxes-reset">Clear</button>
                                              <button type="button" class="region-select__btn js-select-checkboxes-accept">Accept</button>
                                            </div>
                                          </div>
                                          <!-- end of block .region-select-->
                              </div>
                              <!-- end of block .dropdown-menu-->
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="in-datetime" class="control-label">Date Range</label>
                            <input type="text" id="in-datetime" data-start-date="12/03/2015" data-end-date="12/22/2015" data-time-picker="true" data-single-picker="false" class="js-datetimerange form-control">
                          </div>
                          <div class="form-group">
                            <div class="form__mode">
                              <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                            </div>
                            <label for="range_price" class="control-label">Price</label>
                            <div class="form__ranges">
                              <input id="range_price" class="js-search-range form__ranges-in">
                            </div>
                            <div class="form__inputs js-search-inputs">
                              <input type="text" id="in-price-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                              <input type="text" id="in-price-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="form__mode">
                              <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                            </div>
                            <label for="range_area" class="control-label">Area</label>
                            <div class="form__ranges">
                              <input id="range_area" class="js-search-range form__ranges-in">
                            </div>
                            <div class="form__inputs js-search-inputs">
                              <input type="text" id="in-area-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                              <input type="text" id="in-area-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                            </div>
                          </div>
                          <div class="form__buttons">
                            <button type="submit" class="form__submit">Search</button>
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
                    <nav class="nav nav--footer"><a href="index.html">Home</a><a href="properties_listing_grid.html">Realty</a><a href="agents_listing_grid.html">Agents</a><a href="gallery.html">Gallery</a><a href="blog.html">Blog</a><a href="pricing.html">Pricing</a><a href="contacts.html">Contacts</a><a href="feature_ui.html">UI</a></nav>
                    <!-- end of block .nav-footer-->
                  </div>
                </div>
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">About</h2>
                  </div>
                  <div class="widget__content">
                    <aside class="widget_text">
                      <div class="textwidget">
                        RealtySpace is the leader in online real estate and operator of the WK of real estate web site for consumers and real estate professionals. Real Estate of websites captures more than 20 million monthly visitors
                        <p>RealtySpace is the leader in online real estate and operator of the WK of real</p>
                        <p><a>Read more</a></p>
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
                    <h2 class="widget__title">Contact</h2>
                  </div>
                  <div class="widget__content">
                    <section class="address address--footer">
                      <h4 class="address__headline">Our office</h4>
                      <address class="address__main"><span>1950 New York, NY, Ave NW, California, DC 3000600, USA</span><span>08 - 17 mon-fr</span><a href="tel:+442240052225">+1 202 555 0135</a><a href="tel:+442240052225">+1 202 555 0135</a><span>Fax: +1 202 555 0135</span><a href="mailto:hello@example.com">hello@example.com</a></address>
                    </section>
                    <!-- end of block .address-->
                  </div>
                </div>
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Feedback</h2>
                  </div>
                  <div class="widget__content">
                    <!-- BEGIN SECTION FEEDBACK-->
                    <form action="#" class="form form--flex form--footer js-parsley">
                      <div class="row">
                        <div class="form-group">
                          <label for="in-email" class="sr-only control-label">E-mail</label>
                          <input id="in-email" type="email" name="email" placeholder="E-mail" required data-parsley-trigger="change" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="in-message" class="sr-only control-label">Message for Us</label>
                          <textarea id="in-message" name="message" placeholder="Message for Us" required data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-validation-threshold="10" data-parsley-minlength-message="You need to enter at least a 20 caracters long comment.." class="form-control"></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <button type="submit" class="form__submit">Send</button>
                      </div>
                    </form>
                    <!-- end of block .form__wrap-->
                    <!-- END SECTION FEEDBACK-->
                  </div>
                </div>
              </div>
              <!--end of block .footer__col-second-->
              <div class="footer__col footer__col--third">
                <div class="widget js-widget widget--footer">
                  <div class="widget__header">
                    <h2 class="widget__title">Latest Articles</h2>
                  </div>
                  <div class="widget__content">
                    <div class="listing listing--footer">
                      <div class="listing__item">
                        <!-- BEGIN SECTION ARTICLE-->
                        <div class="article article--footer">
                          <div class="article__details"><a href="blog_details.html" class="article__item-title">Sustainable architecture &amp; design.</a>
                            <time datetime="2009-08-29" class="article__time">Mon - 3 Sep - 3:17 PM</time>
                          </div>
                          <!-- end of block .article-->
                        </div>
                        <!-- END SECTION ARTICLE-->
                      </div>
                      <div class="listing__item">
                        <!-- BEGIN SECTION ARTICLE-->
                        <div class="article article--footer">
                          <div class="article__details"><a href="blog_details.html" class="article__item-title">You’ve been approved for a rental home.</a>
                            <time datetime="2009-08-29" class="article__time">Mon - 3 Sep - 3:17 PM</time>
                          </div>
                          <!-- end of block .article-->
                        </div>
                        <!-- END SECTION ARTICLE-->
                      </div>
                      <div class="listing__item">
                        <!-- BEGIN SECTION ARTICLE-->
                        <div class="article article--footer">
                          <div class="article__details"><a href="blog_details.html" class="article__item-title">The Block Glasshouse winners.</a>
                            <time datetime="2009-08-29" class="article__time">Mon - 3 Sep - 3:17 PM</time>
                          </div>
                          <!-- end of block .article-->
                        </div>
                        <!-- END SECTION ARTICLE-->
                      </div>
                    </div><a href="blog.html" class="widget__more"> More articles</a>
                  </div>
                </div>
              </div>
              <!-- end of block .footer__col-third-->
              <div class="clearfix"></div><span class="footer__copyright">&copy; 2016 RealtySpace. All rights reserved</span>
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

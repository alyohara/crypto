
      <div class="site-wrap js-site-wrap">
        <div class="widget js-widget">
          <div class="widget__content">
            <div class="banner js-banner banner--wide">
              <div class="banner__item">

                <div class="container">
                  <div class="row">

                  <div class="banner__caption">
                  
                        <img src="<?php echo base_url();?>assets/img/criptolist.png" height="100%" width="100%">
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
      </div>

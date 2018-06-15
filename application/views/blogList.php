<div class="center">
  <div class="container">
    <div class="row">
      <div class="site site--main">
        <header class="site__header">
          <h1 class="site__title">Blog</h1>
          <h2 class="site__headline">Check out our new market updates</h2>
        </header>
                        <!-- BEGIN SEARCH-->
                        <form class="form form--search form--article-listing">
                          <div class="row">
                            <div class="form-group">
                              <label class="control-label"></label>
                              <input type="text" placeholder="Search your post" class="form-control">
                              <button class="form__lens"><span class="glyphicon glyphicon-search"></span></button>
                            </div>
                          </div>
                        </form>
                        <!-- END SEARCH-->
        <button type="button" data-goto-target=".js-categories-article" class="widget__btn--goto js-goto-btn">Show categories</button>

        <!-- BEGIN ARTICLES SECTION -->
        <div class="site__main">
          <div class="widget js-widget widget--main widget--no-margin">
            <div class="widget__content">
              <div class="listing listing--list listing--article">



                <?php
                 foreach ($posts as $row) {
                     //echo $news = $row->title;?>

                     <div class="listing__item">
                       <article class="article--list">
                         <div class="article__item-header">
                           <?php $d = $row->p_date;
                                 $day =  substr($d, 8, 2);
                                 $month = substr($d, 5, 2);
                                 $year = substr($d, 0, 4);
                                 $months = array( 'undefined', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic');

                                $m = $months[(int)$month];


                                 ?>
                           <time datetime="<?= $row->p_date; ?>" class="article__time"><strong><?= $day ?></strong><?= $m ?></time>
                           <div class="article__item-info">
                             <h3 class="article__item-title"><a href="blog_details.html">You&rsquo;ve been approved for a rental home. Now what?</a></h3>
                             <div class="article__tags">Category:<a href="#">Villa for sale</a>, <a href="#">Florida</a>, <a href="#">Miami</a>
                             </div>
                           </div><a href="blog_details.html" class="article__comment"><i class="fa fa-comments"></i>2 Comments</a>
                         </div>
                         <div class="clearfix"></div><a href="blog_details.html" class="article__preview"><img src="<?php echo base_url();?>assets/media-demo/properties/1740x960/05.jpg" alt=""></a>
                         <div class="article__intro">
                           <p>Congratulations! You&rsquo;ve found the perfect rental property and your application has been approved. Now there&rsquo;s just a few things you&rsquo;ll need. We work hard to achieve quality at affordable prices for our customers through optimizing our entire value chain, by building long-term supplier relationships, investing in highly automated production and producing large volumes.</p>
                         </div><a href="blog_details.html" class="article__more">Read more</a>
                       </article>
                     </div>



                   <?php  } ?>

                <!--
                <div class="listing__item">
                  <article class="article--list">
                    <div class="article__item-header">
                      <time datetime="2009-08-29" class="article__time">SEP<strong>02</strong></time>
                      <div class="article__item-info">
                        <h3 class="article__item-title"><a href="blog_details.html">You&rsquo;ve been approved for a rental home. Now what?</a></h3>
                        <div class="article__tags">Category:<a href="#">Villa for sale</a>, <a href="#">Florida</a>, <a href="#">Miami</a>
                        </div>
                      </div><a href="blog_details.html" class="article__comment"><i class="fa fa-comments"></i>2 Comments</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="article__preview">
                      <div class="player">
                        <video poster="http://codefactory47.com/public/realtyspace/media/playercover.jpg" controls crossorigin>
                          <source src="http://codefactory47.com/public/realtyspace/media/videotour.mp4" type="video/mp4">
                          <source src="http://codefactory47.com/public/realtyspace/media/videotour.webm" type="video/webm">
                        </video>
                        <!--button.article__preview-play.js-player-play-->
                <!--      </div>
                    </div>
                    <div class="article__intro">
                      <p>Congratulations! You&rsquo;ve found the perfect rental property and your application has been approved. Now there&rsquo;s just a few things you&rsquo;ll need. We work hard to achieve quality at affordable prices for our customers through optimizing our entire value chain, by building long-term supplier relationships, investing in highly automated production and producing large volumes.</p>
                    </div><a href="#" class="article__more">Read more</a>
                  </article>
                </div>
                <div class="listing__item">
                  <article class="article--list">
                    <div class="article__item-header">
                      <time datetime="2009-08-29" class="article__time">SEP<strong>02</strong></time>
                      <div class="article__item-info">
                        <h3 class="article__item-title"><a href="blog_details.html">You&rsquo;ve been approved for a rental home. Now what?</a></h3>
                        <div class="article__tags">Category:<a href="#">Villa for sale</a>, <a href="#">Florida</a>, <a href="#">Miami</a>
                        </div>
                      </div><a href="blog_details.html" class="article__comment"><i class="fa fa-comments"></i>2 Comments</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="article__preview">
                      <div><iframe width="853" height="480" src="https://www.youtube.com/embed/A22_jyRIv24?rel=0&amp;showinfo=0" allowfullscreen></iframe></div>
                    </div>
                    <div class="article__intro">
                      <p>Congratulations! You&rsquo;ve found the perfect rental property and your application has been approved. Now there&rsquo;s just a few things you&rsquo;ll need. We work hard to achieve quality at affordable prices for our customers through optimizing our entire value chain, by building long-term supplier relationships, investing in highly automated production and producing large volumes.</p>
                    </div><a href="#" class="article__more">Read more</a>
                  </article>
                </div>
                <div class="listing__item">
                  <article class="article--list">
                    <div class="article__item-header">
                      <time datetime="2009-08-29" class="article__time">SEP<strong>02</strong></time>
                      <div class="article__item-info">
                        <h3 class="article__item-title"><a href="blog_details.html">You&rsquo;ve been approved for a rental home. Now what?</a></h3>
                        <div class="article__tags">Category:<a href="#">Villa for sale</a>, <a href="#">Florida</a>, <a href="#">Miami</a>
                        </div>
                      </div><a href="blog_details.html" class="article__comment"><i class="fa fa-comments"></i>2 Comments</a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="article__preview"><img src="assets/img/no-image--blog-870x480.jpg" alt="" class="article__preview-img"></div>
                    <div class="article__intro">
                      <p>Congratulations! You&rsquo;ve found the perfect rental property and your application has been approved. Now there&rsquo;s just a few things you&rsquo;ll need. We work hard to achieve quality at affordable prices for our customers through optimizing our entire value chain, by building long-term supplier relationships, investing in highly automated production and producing large volumes.</p>
                    </div><a href="blog_details.html" class="article__more">Read more</a>
                  </article>
                </div>

              -->
              </div>
            </div>
          </div>
          <div class="site__footer">
            <!-- BEGIN PAGINATION-->
            <nav class="listing__pagination">

                  <?php echo $this->pagination->create_links(); ?>

            </nav>
            <!-- END PAGINATION-->
          </div>
        </div>



        <!-- END ARTICLES SECTION -->

      </div>
      <!-- END Site-->
      <!-- BEGIN SIDEBAR-->
      <div class="sidebar">
        <div class="widget js-widget widget--sidebar">
          <div class="widget__header">
            <h2 class="widget__title">Categories</h2>
            <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show blog categories</a>
          </div>
          <div class="widget__content">
            <!-- BEGIN ARTICLE CATEGORIES-->
            <div class="article-categories">
              <div class="article-categories__list js-categories-article">
                <ul>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Comfort<span class="article-categories__count">(3)</span></a></li>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Luxury<span class="article-categories__count">(4)</span></a></li>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Why live in New York<span class="article-categories__count">(2)</span></a></li>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Sales<span class="article-categories__count">(34)</span></a></li>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Vilas for sale<span class="article-categories__count">(44)</span></a></li>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Sustainable growth<span class="article-categories__count">(5)</span></a></li>
                  <li class="article-categories__item"><a href="#" class="article-categories__name">Reports<span class="article-categories__count">(2)</span></a></li>
                </ul>
              </div>
              <!-- end of block .article-categories__list-->
            </div>
            <!-- END ARTICLE CATEGORIES-->
          </div>
        </div>
        <div class="widget js-widget widget--sidebar">
          <div class="widget__header">
            <h2 class="widget__title">Filter</h2>
            <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show filter</a>
          </div>
          <div class="widget__content">
            <!-- BEGIN SEARCH-->
            <form action="properties_listing_list.html" class="form form--flex form--search js-search-form form--sidebar">
              <div class="row">
                <div class="form-group">
                  <label for="in-keyword" class="control-label">Keyword</label>
                  <input type="text" id="in-keyword" placeholder="Text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="in-contract-type" class="control-label">Listing Type</label>
                  <select id="in-contract-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Sale</option>
                    <option>Rent</option>
                  </select>
                </div>
                <div class="form-group"><span class="control-label">Property type</span>
                  <div class="dropdown dropdown--select">
                    <button type="button" data-toggle="dropdown" data-placeholder="---" class="dropdown-toggle js-select-checkboxes-btn">---</button>
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
                <div class="form-group">
                  <label for="in-tenure-type" class="control-label">Tenure</label>
                  <select id="in-tenure-type" data-placeholder="Any tenure" class="form-control">
                    <option label=" "></option>
                    <option>Tenure</option>
                    <option>Tenure</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-bedrooms-type" class="control-label">Bedrooms</label>
                  <select id="in-bedrooms-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>1</option>
                    <option>2</option>
                  </select>
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
                <div class="form-group"><span class="control-label">Location level 2</span>
                  <div class="dropdown dropdown--select">
                    <button type="button" data-toggle="dropdown" data-placeholder="Location" class="dropdown-toggle js-select-checkboxes-btn">Locations</button>
                    <div class="dropdown-menu js-dropdown-menu js-select-checkboxes">
                      <div class="region-select">
                        <ul class="js-checkboxes-tree bonsai region-select__list">
                          <li>
                            <input type="checkbox" name="location[]" value="Fresno" id="region-select-location-18" class="in-checkbox">
                            <label for="region-select-location-18" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Clovis" id="region-select-location-19" class="in-checkbox">
                                <label for="region-select-location-19" data-toggle="tooltip" data-placement="top" title="Clovis" class="in-label">Clovis</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Fresno" id="region-select-location-20" class="in-checkbox">
                                <label for="region-select-location-20" data-toggle="tooltip" data-placement="top" title="Fresno" class="in-label">Fresno</label>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-location-21" class="in-checkbox">
                            <label for="region-select-location-21" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Glendale" id="region-select-location-22" class="in-checkbox">
                                <label for="region-select-location-22" data-toggle="tooltip" data-placement="top" title="Glendale" class="in-label">Glendale</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Long Beach" id="region-select-location-23" class="in-checkbox">
                                <label for="region-select-location-23" data-toggle="tooltip" data-placement="top" title="Long Beach" class="in-label">Long Beach</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Los Angeles" id="region-select-location-24" class="in-checkbox">
                                <label for="region-select-location-24" data-toggle="tooltip" data-placement="top" title="Los Angeles" class="in-label">Los Angeles</label>
                                <ul>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Bel Air" id="region-select-location-25" class="in-checkbox">
                                    <label for="region-select-location-25" data-toggle="tooltip" data-placement="top" title="Bel Air" class="in-label">Bel Air</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Brentwood" id="region-select-location-26" class="in-checkbox">
                                    <label for="region-select-location-26" data-toggle="tooltip" data-placement="top" title="Brentwood" class="in-label">Brentwood</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Holywood Hills" id="region-select-location-27" class="in-checkbox">
                                    <label for="region-select-location-27" data-toggle="tooltip" data-placement="top" title="Holywood Hills" class="in-label">Holywood Hills</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Mar Vista" id="region-select-location-28" class="in-checkbox">
                                    <label for="region-select-location-28" data-toggle="tooltip" data-placement="top" title="Mar Vista" class="in-label">Mar Vista</label>
                                  </li>
                                  <li>
                                    <input type="checkbox" name="location[]" value="Silver Lake" id="region-select-location-29" class="in-checkbox">
                                    <label for="region-select-location-29" data-toggle="tooltip" data-placement="top" title="Silver Lake" class="in-label">Silver Lake</label>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Santa Ana" id="region-select-location-30" class="in-checkbox">
                                <label for="region-select-location-30" data-toggle="tooltip" data-placement="top" title="Santa Ana" class="in-label">Santa Ana</label>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <input type="checkbox" name="location[]" value="Santa Clara" id="region-select-location-31" class="in-checkbox">
                            <label for="region-select-location-31" data-toggle="tooltip" data-placement="top" title="Santa Clara" class="in-label">Santa Clara</label>
                            <ul>
                              <li>
                                <input type="checkbox" name="location[]" value="Cupertino" id="region-select-location-32" class="in-checkbox">
                                <label for="region-select-location-32" data-toggle="tooltip" data-placement="top" title="Cupertino" class="in-label">Cupertino</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Mountain View" id="region-select-location-33" class="in-checkbox">
                                <label for="region-select-location-33" data-toggle="tooltip" data-placement="top" title="Mountain View" class="in-label">Mountain View</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="Palo Alto" id="region-select-location-34" class="in-checkbox">
                                <label for="region-select-location-34" data-toggle="tooltip" data-placement="top" title="Palo Alto" class="in-label">Palo Alto</label>
                              </li>
                              <li>
                                <input type="checkbox" name="location[]" value="San Jose" id="region-select-location-35" class="in-checkbox">
                                <label for="region-select-location-35" data-toggle="tooltip" data-placement="top" title="San Jose" class="in-label">San Jose</label>
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
                  <label for="in-favorites-search-type" class="control-label">Favorite searches</label>
                  <select id="in-favorites-search-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Kuala Lumpur - 1 flat</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-favorites-categories-type" class="control-label">Favorite categories</label>
                  <select id="in-favorites-categories-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Luxury</option>
                    <option>2</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="in-favorites-users-type" class="control-label">Favourite users</label>
                  <select id="in-favorites-users-type" data-placeholder="---" class="form-control">
                    <option label=" "></option>
                    <option>Josh Hartnett</option>
                    <option>2</option>
                  </select>
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
                <div class="form-group">
                  <div class="form__mode">
                    <button type="button" data-mode="percent" class="form__mode-btn js-input-commision">Percent</button>
                    <button type="button" data-mode="input" class="form__mode-btn js-input-mode">Input</button>
                  </div>
                  <label for="range_area" class="control-label">Commision</label>
                  <div class="form__ranges">
                    <input id="range_commision" class="js-search-range form__ranges-in">
                  </div>
                  <div class="form__inputs js-search-inputs">
                    <input type="text" id="in-commision-from" placeholder="From" data-input-type="from" class="form-control js-field-range">
                    <input type="text" id="in-commision-to" placeholder="To" data-input-type="to" class="form-control js-field-range">
                  </div>
                </div>
                <div class="form__buttons form__buttons--double">
                  <button type="button" class="form__reset js-form-reset">Reset</button>
                  <button type="submit" class="form__submit">Search</button>
                  <button type="button" class="form__favorite">Add search to favorites</button>
                </div>
              </div>
            </form>
            <!-- end of block-->
            <!-- END SEARCH-->
          </div>
        </div>
        <div class="widget js-widget widget--sidebar widget--dark">
          <div class="widget__header">
            <h2 class="widget__title">Popular estate</h2>
            <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show properties</a>
          </div>
          <div class="widget__content">
            <div class="listing listing--sidebar">
              <div class="listing__item">
                <div class="properties properties--sidebar">
                  <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/02.jpg" alt=""/>
                      <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                  </div>
                  <!-- end of block .properties__thumb-->
                  <div class="properties__details">
                    <div class="properties__info"><a href="property_details.html" class="properties__address">649 West Adams Boulevard, Los Angeles, CA 90007, USA</a>
                      <!--+price-->
                    </div>
                  </div>
                  <!-- end of block .properties__info-->
                </div>
                <!-- end of block .properties__item-->
              </div>
              <div class="listing__item">
                <div class="properties properties--sidebar">
                  <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/img/no-image--554x360.jpg" alt=""/>
                      <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                  </div>
                  <!-- end of block .properties__thumb-->
                  <div class="properties__details">
                    <div class="properties__info"><a href="property_details.html" class="properties__address">958 Dewey Avenue, Los Angeles, CA 90006, USA</a>
                      <!--+price-->
                    </div>
                  </div>
                  <!-- end of block .properties__info-->
                </div>
                <!-- end of block .properties__item-->
              </div>
              <div class="listing__item">
                <div class="properties properties--sidebar">
                  <div class="properties__thumb"><a href="property_details.html" class="item-photo item-photo--static"><img src="assets/media-demo/properties/554x360/04.jpg" alt=""/>
                      <figure class="item-photo__hover"><span class="item-photo__more">View Details</span></figure></a>
                  </div>
                  <!-- end of block .properties__thumb-->
                  <div class="properties__details">
                    <div class="properties__info"><a href="property_details.html" class="properties__address">1026 Ohio Avenue, Long Beach, CA 90804, USA</a>
                      <!--+price-->
                    </div>
                  </div>
                  <!-- end of block .properties__info-->
                </div>
                <!-- end of block .properties__item-->
              </div>
            </div>
          </div>
        </div>
        <div class="widget js-widget widget--sidebar widget--dark">
          <div class="widget__header">
            <h2 class="widget__title">Our agents</h2>
            <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show workers</a>
          </div>
          <div class="widget__content">
            <div class="listing listing--sidebar">
              <div class="listing__item">
                <div data-sr="enter bottom move 80px, scale(0), over 0s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--sidebar">
                  <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-1.jpg" alt="Christopher Pakulla" class="photo"/>
                      <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                  <h3 class="worker__name fn">Christopher Pakulla</h3>
                  <div class="worker__post">Realtor, West USA Realty</div><a href="tel:+44(0)2035102390" class="worker__tel uri">+44 (0) 20 3510 2390</a>
                </div>
                <!-- end of block .worker-->
              </div>
              <div class="listing__item">
                <div data-sr="enter bottom move 80px, scale(0), over 0.3s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--sidebar">
                  <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-2.jpg" alt="Lisa Wemert" class="photo"/>
                      <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                  <h3 class="worker__name fn">Lisa Wemert</h3>
                  <div class="worker__post">Managing Broker/Partner, e-PRO</div><a href="tel:+44(0)203510567" class="worker__tel uri">+44 (0) 20 3510 567</a>
                </div>
                <!-- end of block .worker-->
              </div>
              <div class="listing__item">
                <div data-sr="enter bottom move 80px, scale(0), over 0.6s" data-animate-end="animate-end" class="worker js-unhide-block vcard worker--sidebar">
                  <div class="worker__photo"><a href="agent_profile.html" class="item-photo item-photo--static"><img src="assets/media-demo/workers/worker-3.jpg" alt="Mariusz Ciesla" class="photo"/>
                      <figure class="item-photo__hover"><span class="item-photo__more">View</span></figure></a></div>
                  <h3 class="worker__name fn">Mariusz Ciesla</h3>
                  <div class="worker__post">Real Estate Professional</div><a href="tel:+44(0)203510334" class="worker__tel uri">+44 (0) 20 3510 334</a>
                </div>
                <!-- end of block .worker-->
              </div>
            </div>
          </div>
        </div>
        <div class="widget js-widget widget--sidebar">
          <div class="widget__header">
            <h2 class="widget__title">News & Blog</h2>
            <h5 class="widget__headline">Find your apartment or house on the exact key parameters.</h5><a class="widget__btn js-widget-btn widget__btn--toggle">Show articles</a>
          </div>
          <div class="widget__content">
            <!-- BEGIN SECTION ARTICLE-->
            <article class="article article--sidebar">
              <div class="article__details"><a href="blog_details.html" class="article__item-title">You've been approved for a rental home. Now what?</a>
                <time datetime="2009-08-29" class="article__time">Mon - 3 Sep - 3:17 PM</time>
                <div class="article__intro">
                  <p>Congratulations! You've found the perfect rental property and your application has been approved. Now there's just a few things you'll need ...</p>
                </div><a href="blog_details.html" class="article__more">Read more</a>
              </div>
              <!-- END SECTION ARTICLE-->
            </article>
          </div>
        </div>
        <!-- END SIDEBAR-->
      </div>
      <!-- END SIDEBAR-->
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<!-- Script -->
<script>
tinymce.init({
  selector: '.editor',
  height: 500,
  plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste imagetools wordcount"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
  // imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>
</div>
<div class="bannerDerecho col-md-1">

</div>
<div>
</div>

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
                    <img src="<?php echo base_url();?>assets/img/logoCoinMarketBlanco.png" width="1000" >
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
<script type="text/javascript" src="<?php echo base_url();?>assets/js/vendor.js"></script>
<!-- endbuild-->
<!--
This file is used for demonstration purposes and contains example property items, that are mostly used to
render markers on the map. You can safely delete this file, after you've adapted the demo.js code
to use your own data.
-->
<!-- build:jsdemodata-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/demodata.js"></script>
<!-- endbuild-->
<!--
The library code that Realtyspace theme relies on, in order to function properly.
Normally, you should not edit this file or add your own code there.
-->
<!-- build:jsapp-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>
<!-- endbuild-->
<!--
the main file, that you should modify. It contains lots of examples of
plugin usage, with detailed comments about specific sections of the code.
-->
<!-- build:jsdemo-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/demo.js"></script>
<!-- endbuild--><!-- inject:ga  -->
<!-- endinject -->
<!-- END SCRIPTS and INCLUDES-->
</body>
</html>

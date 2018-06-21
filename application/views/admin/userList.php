<div class="center">
  <div class="container">
    <div class="row">
      <div class="site site--main">
        <header class="site__header">
          <h1 class="site__title">Users - All Users</h1>

        </header>



        <!-- BEGIN ARTICLES SECTION -->
        <div class="site__main">
          <div class="widget js-widget widget--main widget--no-margin">
            <div class="widget__content">
              <div class="listing listing--list listing--article">
                <?php
                 foreach ($users as $row) {
?>

                     <div class="listing__item">
                       <article class="article--list">
                         <div class="article__item-header">
                           <div class="article__item-info">
                             <h3 class="article__item-title">User id: <a href=""><?= $row->id; ?></a></h3>
                             <div class="article__tags">Email:<a href="#"><?php echo $row->email ; ?></a>
                             </div>
                             <div class="article__tags">First Name:<a href="#"><?php echo $row->first_name ; ?></a>
                             </div>
                             <div class="article__tags">Last Name:<a href="#"><?php echo $row->last_name ; ?></a>
                             </div>
                           </div>
                         </div>
                       </article>
                     </div>



                   <?php  } ?>

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
        <div class="clearfix"></div>
    </div>
  </div>
</div>

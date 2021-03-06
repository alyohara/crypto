<div class="center">
  <div class="container">
    <div class="row">
      <div class="site site--main">
        <header class="site__header">
          <h1 class="site__title">Blog - All Posts</h1>

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
?>

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
                             <h3 class="article__item-title"><a href="<?= base_url(); ?>article/post/<?=  $row->id ?>"><?= $row->title; ?></a></h3>
                             <div class="article__tags">Autor:<a href="#"><?php
                             $author = $this->users->getAuthor($row->author)->row_array();

                             echo $author['username'] ;
                              ?></a>
                             <!--<div class="article__tags">Category:<a href="#">Villa for sale</a>, <a href="#">Florida</a>, <a href="#">Miami</a>-->
                             </div>
                           </div>
                           <!-- </div><a href="blog_details.html" class="article__comment"><i class="fa fa-comments"></i>2 Comments</a> -->
                         </div>

                         <div class="article__intro">
                           <p><?= $row->description; ?></p>

                           <p <?php if ($row->status == 'active'){
                             echo 'style="color: #02841c; background-color: #64fc83; text-align: center; padding:5px; margin: 5px"';
                           }else {
                             echo 'style="color: #9e0606; background-color: #f7a8a8; text-align: center; padding:5px; margin: 5px"';
                           } ?>  ><?= $row->status; ?></p>
                         </div><a href="<?= base_url(); ?>adminAccess/editPost/<?=  $row->id ?>" class="article__more">Editar</a>
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

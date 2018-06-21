<?php
/**
 *
 */
class Article extends CI_Controller
{

  public function post($id='')
  {
    $this->load->model('banner');
    $bannerUP = $this->banner->getUpBanner();
    $bannerDown = $this->banner->getDownBanner();
    $bannerLeft = $this->banner->getLeftBanner();
    $bannerRight = $this->banner->getRightBanner();
    $data2 = array('bannerUP' => $bannerUP,'bannerDown' => $bannerDown, 'bannerLeft' => $bannerLeft, 'bannerRight' => $bannerRight);

    $row = $this->posts->getPostById($id);
    $this->load->view('header2', $data2);
		$this->load->view('navbar');
    if ($row){
      $data = array('row' => $row );
      $this->load->view('article', $data);

    } else {
      $this->load->view('notArt');
    }
		  $this->load->view('footer', $data2);

  }

}

 ?>

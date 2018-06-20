<?php
/**
 *
 */
class Article extends CI_Controller
{

  public function post($id='')
  {
    $row = $this->posts->getPostById($id);
    $this->load->view('header2');
		$this->load->view('navbar');
    if ($row){
      $data = array('row' => $row );
      $this->load->view('article', $data);
      
    } else {
      $this->load->view('notArt');
    }
		  $this->load->view('footer');

  }
}

 ?>

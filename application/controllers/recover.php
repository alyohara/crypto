<?php
/**
 *
 */
class Recover extends CI_Controller
{



  public function index ()
  {
    $this->load->helper('url');

    $this->load->view('header2');
    $this->load->view('navbar');
    $this->load->view('changepass');
    $this->load->view('footer');
  }

}

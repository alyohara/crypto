<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index()
	{
  		$this->load->helper('url');

  		$this->load->view('header2');
  		$this->load->view('navbar');
  		$this->load->view('blogList');
  		$this->load->view('footer');
  	}




}

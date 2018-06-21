<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index($offset = 0)
	{

		$this->posts->pagInit();
		$data = $this->posts->allPosts($offset);
		$this->load->helper('url');
		$this->load->view('header2');
		$this->load->view('navbar');
		$this->load->view('blogList', $data);
		$this->load->view('footer');
  	}

}

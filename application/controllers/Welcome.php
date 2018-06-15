<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');
	}


}

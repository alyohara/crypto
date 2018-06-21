<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index($offset = 0)
	{
		$this->load->model('banner');
		$bannerUP = $this->banner->getUpBanner();
		$bannerDown = $this->banner->getDownBanner();
		$bannerLeft = $this->banner->getLeftBanner();
		$bannerRight = $this->banner->getRightBanner();
		$data2 = array('bannerUP' => $bannerUP,'bannerDown' => $bannerDown, 'bannerLeft' => $bannerLeft, 'bannerRight' => $bannerRight);

		$this->posts->pagInit();
		$data = $this->posts->allPosts($offset);
		$this->load->helper('url');
		$this->load->view('header2', $data2);
		$this->load->view('navbar');
		$this->load->view('blogList', $data);
		$this->load->view('footer', $data2);
  	}

}

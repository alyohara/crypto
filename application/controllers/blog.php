<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index($offset = 0)
	{

		$this->posts->pagInit();
		$this->db->order_by("id", "desc");

		$data['posts'] = $this->db->limit(3, $offset)->get('posts')->result();

		$this->load->helper('url');
		$this->load->view('header2');
		$this->load->view('navbar');
		$this->load->view('blogList', $data);
		$this->load->view('footer');
  	}

}

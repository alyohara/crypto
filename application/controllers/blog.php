<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {


	public function index($offset = 0)
	{
		$this->load->library('pagination');
		$config['base_url'] = base_url() . "blog/index";
    $config['total_rows'] = $this->db->count_all_results('posts');
    $config['per_page'] = 3;

		$config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li> ';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li> ';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li> ';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li> ';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li> ';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li> ';


    $this->pagination->initialize($config);
		$this->db->order_by("id", "desc");
    $data['posts'] = $this->db->limit(3, $offset)->get('posts')->result();
		$this->load->helper('url');

		$this->load->view('header2');
		$this->load->view('navbar');

		$this->load->view('blogList', $data);
		$this->load->view('footer');





  	}




}

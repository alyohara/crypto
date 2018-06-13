<?php
/**
 *
 */
class Login extends CI_Controller
{

  public function index ()
  {
    $this->load->helper('url');

    $this->load->view('header2');
    $this->load->view('navbar');
    $this->load->view('home');
    $this->load->view('footer');
  }

  public function process(){

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    if ($username!=''){
      $this->session->set_userdata(array('username' => $username, 'password' => $password));
      $this->load->view('header2');
      $this->load->view('navbar');
      $this->load->view('home');
      $this->load->view('footer');
    }
  }
  public function logout(){
    $this->session->sess_destroy();
    redirect("login");

  }
}


 ?>

<?php
/**
 *
 */
class AdminAccess extends CI_Controller
{



  public function index ()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/navbar');
    $this->load->view('admin/homeUp');
    $this->load->view('admin/homeDown');
    $this->load->view('admin/footer');
  }

  public function login(){

    $user_login=array('email'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))); // the username is the email, remeber that
    $data = $this->users->chkAdmin($user_login['email'], $user_login['password'], 'admin');
    if($data)  {
      $this->users->initSession($data, 'admin');
      redirect("adminAccess/");
      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect("adminAccess");
      }
  }


  public function logout(){
    $this->session->sess_destroy();
    redirect("adminAccess");
  }
  public function profile ()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/navbar');
    $this->load->view('admin/homeUp');
    //$this->load->helper('bootstrap');
    $this->load->helper('form');
    $this->load->view('admin/access');
    $this->load->view('admin/homeDown');
    $this->load->view('admin/footer');
  }

}


 ?>

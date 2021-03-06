<?php
/**
 *
 */
class Recover extends CI_Controller
{
  public function index ($iod = '')
  {
    $this->load->helper('url');
    $data = array('iod' => $iod );

    // CHECK CHANGE existense //
    $query = $this->users->checkChange($iod);
    $this->load->model('banner');
    $bannerUP = $this->banner->getUpBanner();
    $bannerDown = $this->banner->getDownBanner();
    $bannerLeft = $this->banner->getLeftBanner();
    $bannerRight = $this->banner->getRightBanner();
    $data2 = array('bannerUP' => $bannerUP,'bannerDown' => $bannerDown, 'bannerLeft' => $bannerLeft, 'bannerRight' => $bannerRight);

    if($query->num_rows()>0){
      //let change pass
        $this->load->view('header2', $data2);
        $this->load->view('navbar');
        $this->load->view('changepass', $data);
        $this->load->view('footer', $data2);
    }else{
      $this->session->set_flashdata('error_msg', '<strong>Error!</strong> A problem has been occurred while submitting your data.<br>Please try again');
      redirect('login');
    }
    ////// END CHECK ///////
  }

  public function change (){
    $check_state = $this->input->post('check_state');
    $npass = md5($this->input->post('password'));
    if ($this->users->changePassword($check_state, $npass)){
        $this->session->set_flashdata('success_msg', '<strong>Success!</strong>Password change. <br> ');
        redirect('login');
    } else {
        $this->session->set_flashdata('error_msg', '<strong>Wrong!</strong><br> ');
        redirect('login');
      }
  }
}

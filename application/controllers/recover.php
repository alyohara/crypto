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
    $this->load->database();
    $this->db->select('*');
    $this->db->from('change_pass');
    $this->db->where('check_state',$iod);
    $this->db->where('status',1);
    $query=$this->db->get();
    if($query->num_rows()>0){
      //let change pass
        $this->load->view('header2');
        $this->load->view('navbar');
        $this->load->view('changepass', $data);
        $this->load->view('footer');
    }else{
      $this->session->set_flashdata('error_msg', '<strong>Error!</strong> A problem has been occurred while submitting your data.<br>Please try again');
      redirect('login');
    }
    ////// END CHECK ///////
  }
  public function change (){

    $check_state = $this->input->post('check_state');
    $npass = md5($this->input->post('password'));
    $this->load->database();
    $this->db->select('*');
    $this->db->from('change_pass');
    $this->db->where('check_state',$check_state);
    $this->db->where('status',1);
    $query=$this->db->get();
    $data = $query->row_array();
    $uid = $data['user_id'];
    $id = $data['id'];
    $data = array( 'password' => $npass);
    $this->db->where('id', $uid);
    $this->db->update('users', $data);
    $this->session->set_flashdata('success_msg', '<strong>Success!</strong>Password change. <br> '.$url_helper);
    redirect('login');


  }




}

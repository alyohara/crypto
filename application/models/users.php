<?php

/**
 *
 */
class Users extends CI_Model
{

  public function chkUser ($email = '', $password = ''){
    $this->load->database();
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    $this->db->where('password',$password);

      if($query=$this->db->get())
      {
          $data = $query->row_array();
      }
      else{
          $data = false;
      }
      return $data;
  }

   public function initSession($data='')
  {
    $this->session->set_userdata('user_id',$data['id']);
    $this->session->set_userdata('email',$data['email']);
    $this->session->set_userdata('first_name',$data['first_name']);
    $this->session->set_userdata('last_name',$data['last_name']);
  }

  public function email_check($email){
    $this->load->database();
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    $query=$this->db->get();
    if($query->num_rows()>0){
      return true;
    }else{
      return false;
    }
  }

  public function insertUser($user='')
  {
    $this->db->insert('users', $user);
  }

  public function getUser($email='')
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    return $this->db->get();

  }
}


?>

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
  public function chkAdmin ($email = '', $password = ''){
    $this->load->database();
    $this->db->select('*');
    $this->db->from('admins');
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

   public function initSession($data='', $type='')
  {
    $this->session->set_userdata('user_id',$data['id']);
    $this->session->set_userdata('email',$data['email']);
    $this->session->set_userdata('first_name',$data['first_name']);
    $this->session->set_userdata('last_name',$data['last_name']);
    $this->session->set_userdata('type',$type);
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

  public function passwordReset ($user_id = '', $check_state = '')
  {
    $this->db->query("UPDATE change_pass SET status='0' WHERE user_id ='".$user_id."' ");
    $cpss=array(
    'user_id'=>$user_id,
    'check_state'=>$check_state
      );
    $this->db->insert('change_pass', $cpss);
  }

  public function checkChange($iod='')
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('change_pass');
    $this->db->where('check_state',$iod);
    $this->db->where('status',1);
    return $this->db->get();
  }

  public function changePassword($check_state='', $npass='')
  {
    $this->load->database();

    $this->db->select('*');
    $this->db->from('change_pass');
    $this->db->where('check_state',$check_state);
    $this->db->where('status',1);

    $query=$this->db->get();
    $data = $query->row_array();

    if ($data>0){
      $uid = $data['user_id'];
      $id = $data['id'];
      $data = array( 'password' => $npass);
      $this->db->where('id', $uid);
      $this->db->update('users', $data);
      return true;
    } else {
      return false;
    }

  }
}


?>

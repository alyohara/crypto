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
    //$this->session->sess_destroy();
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



    public function email_check_admin($email){
      $this->load->database();
      $this->db->select('*');
      $this->db->from('admins');
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

  public function insertAdmin($user='')
  {
    $this->db->insert('admins', $user);
  }

  public function updateAdmin($user='', $id='')
  {
    $this->db->where('id', $id);
    $this->db->update('admins', $user);
  }

  public function getUser($email='')
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    return $this->db->get();
  }

  public function getAdmin()
  {
    $this->load->database();
    $query = $this->db->query("SELECT * FROM admins WHERE id = '".$_SESSION['user_id']."'");
    return $query->row();


  }

  public function getAuthor($id='')
  {
    $this->load->database();
    $this->db->select('*');
    $this->db->from('admins');
    $this->db->where('id',$id);
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

  public function getAllUsers()
  {
    $this->db->order_by("id", "desc");
    $data['users'] = $this->db->get('users')->result();
    return $data;
  }

  public function pagInit()
  {
    $this->load->library('pagination');
    $config['base_url'] = base_url() . "adminAccess";
    $config['total_rows'] = $this->db->count_all_results('users');
    $config['per_page'] = 20;
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

  }
}


?>

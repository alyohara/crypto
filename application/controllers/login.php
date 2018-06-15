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

    $user_login=array('email'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))); // the username is the email, remeber that
    $this->load->database();
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$user_login['email']);
    $this->db->where('password',$user_login['password']);

      if($query=$this->db->get())
      {
          $data = $query->row_array();
      }
      else{
          $data = false;
      }


      if($data)
      {
        $this->session->set_userdata('user_id',$data['id']);
        $this->session->set_userdata('email',$data['email']);
        $this->session->set_userdata('first_name',$data['first_name']);
        $this->session->set_userdata('last_name',$data['last_name']);
        redirect("login");

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        redirect("login");

      }





  }


  public function logout(){
    $this->session->sess_destroy();
    redirect("login");

  }

  public function email_check($email){

  $this->db->select('*');
  $this->db->from('users');
  $this->db->where('email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}

  public function register_user(){

        $user=array(
        'first_name'=>$this->input->post('username'),
        'last_name'=>$this->input->post('name'),
        'password'=>md5($this->input->post('password')),
        'email'=>$this->input->post('email')
          );


//  $email_check = email_check($user['email']);
$this->load->database();
$this->db->select('*');
$this->db->from('users');
$this->db->where('email',$user['email']);
$query=$this->db->get();

if($query->num_rows()>0){
  $email_check =  false;
}else{
  $email_check = true;
}

  if($email_check){
    $this->db->insert('users', $user);
    $this->session->set_flashdata('success_msg', '<strong>Success!</strong> Now login to your account.');
    redirect('login');

  }
  else{

    $this->session->set_flashdata('error_msg', '<strong>Error!</strong> A problem has been occurred while submitting your data.');
    redirect('login');


  }

  }

  public function reset_password ()  {
    //check mail existense

    $email= $this->input->post('emailA');
    $this->load->database();
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where('email',$email);
    $query=$this->db->get();

    if($query->num_rows()>0){
      $email_check =  true;
    }else{
      $email_check = false;
    }

      if($email_check){
        //$this->db->insert('users', $user);
        //$password = md5('123456');
        $data = $query->row_array();
        $user_id = $data['id'];
        //$this->db->query("UPDATE users SET password='".$password."' WHERE id='".$id."' ");
        //  $data = array( 'password' => $password);
        //  $this->db->where('id', $id);
        //  $this->db->update('users', $data);
        $check_state = md5('12345'.$id.'54321');
        $url_helper = base_url().'recover/'.$check_state;
        /////////////////////// PASSWORD RESET SAVE  /////////////////////////////
        $cpss=array(
        'user_id'=>$user_id,
        'check_state'=>$check_state
          );
        $this->db->insert('change_pass', $cpss);



        ////////////////////// PASSWORD RESET SAVE END ///////////////////////////

        $this->load->library('email');
        $this->email->from('admin@coinmarketcap.es', 'Servicio de Recupero');
        $this->email->to($email);
        $this->email->subject('Recupero de contraseña');
        $this->email->message('Hola! Hemos recibido un cambio de contraseña, se ha dispuesto una carga provisoria, para ello haga click en'.$url_helper.' . Gracias');
        $this->email->send();

        $this->session->set_flashdata('success_msg', '<strong>Success!</strong> Email send with new password. <br> '.$url_helper);
        redirect('login');

      }
      else{

        $this->session->set_flashdata('error_msg', '<strong>Error!</strong> A problem has been occurred while submitting your data.');
        redirect('login');


      }



    // send mail with password 123456
  }


}


 ?>

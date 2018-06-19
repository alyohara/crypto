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
    $this->load->model('users');
    $data = $this->users->chkUser($user_login['email'], $user_login['password']);

    if($data)  {
      $this->users->initSession($data);
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

  public function register_user(){

        $user=array(
        'first_name'=>$this->input->post('username'),
        'last_name'=>$this->input->post('name'),
        'password'=>md5($this->input->post('password')),
        'email'=>$this->input->post('email')
          );
        $this->load->model('users');
        $email_check = $this->users->email_check($user['email']);
        if(!$email_check){
          $this->load->model('users');
          $this->users->insertUser($user);

          $this->session->set_flashdata('success_msg', '<strong>Success!</strong> Now login to your account.');
          redirect('login');
  }
  else{
    $this->session->set_flashdata('error_msg', '<strong>Error!</strong> A problem has been occurred while submitting your data.');
    redirect('login');
  }

  }

  public function reset_password ()  {
    $this->load->model('users');
    $email= $this->input->post('emailA');
    $email_check = $this->users->email_check($email);

      if($email_check){
        $data = $this->users->getUser($email)->row_array();

        $user_id = $data['id'];

        $check_state = md5('12345'.$user_id.time().'54321');
        $url_helper = base_url().'recover/index/'.$check_state;
        /////////////////////// PASSWORD RESET SAVE  /////////////////////////////
        $this->db->query("UPDATE change_pass SET status='0' WHERE user_id ='".$user_id."' ");
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

        $this->session->set_flashdata('success_msg', '<strong>Success!</strong> Email send with instructions. <br> '.$url_helper);
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

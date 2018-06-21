<?php
/**
 *
 */
class Login extends CI_Controller
{

  public function index ()
  {
    $this->load->model('banner');
    $bannerUP = $this->banner->getUpBanner();
    $bannerDown = $this->banner->getDownBanner();
    $bannerLeft = $this->banner->getLeftBanner();
    $bannerRight = $this->banner->getRightBanner();
    $data = array('bannerUP' => $bannerUP,'bannerDown' => $bannerDown, 'bannerLeft' => $bannerLeft, 'bannerRight' => $bannerRight);
    
    $this->load->view('header2', $data);
    $this->load->view('navbar');
    $this->load->view('home');
    $this->load->view('footer', $data);
  }

  public function process(){

    $user_login=array('email'=>$this->input->post('username'),'password'=>md5($this->input->post('password')), 'type' => 'user'); // the username is the email, remeber that
    $data = $this->users->chkUser($user_login['email'], $user_login['password']);
    if($data)  {
      $this->users->initSession($data, 'user');
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
        $email_check = $this->users->email_check($user['email']);
        if(!$email_check){
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
    $email= $this->input->post('emailA');
    $email_check = $this->users->email_check($email);

      if($email_check){
        $data = $this->users->getUser($email)->row_array();
        $user_id = $data['id'];

        $check_state = md5('12345'.$user_id.time().'54321');
        $url_helper = base_url().'recover/index/'.$check_state;
        /////////////////////// PASSWORD RESET SAVE  /////////////////////////////
        $this->users->passwordReset($user_id, $check_state);
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
  }
}


 ?>

<?php
/**
 *
 */
class AdminAccess extends CI_Controller
{



  public function index ($offset = 0)
  {
    $this->users->pagInit();
		$data = $this->users->getAllUsers($offset);
    $this->load->view('admin/header');
    $this->load->view('admin/navbar');
    $this->load->view('admin/homeUp');
    if ((!isset($_SESSION['user_id'])) || ($_SESSION['type'] != 'admin' )){}
      else{$this->load->view('admin/userList', $data);}

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

  public function newPost ()
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

  public function savePost()
  {
    $title = $this->input->post('title');
    $description = $this->input->post('description');
    $content = $this->input->post('content');
    $author =  $_SESSION['user_id'];
    $categories = '';
    $img = '';
    $date = Date("Y-m-d");
    $active = $_POST['publish'];

//image upload_data
    $config['upload_path']          = base_url().'public/img/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
//$config['max_size']             = 100;
//$config['max_width']            = 1024;
//$config['max_height']           = 768;

    $this->load->library('upload', $config);
    $data['file_name'] = '';
    if ( ! $this->adminAccess->savePost('imgP'))
    {
        $error = array('error' => $this->upload->display_errors());

        //      $this->load->view('upload_form', $error);
      }
      else
      {
        $data = array('upload_data' => $this->upload->data());

        //    $this->load->view('upload_success', $data);
      }

      $imgP = $data['file_name'];


      $data  = array('title' => $title, 'description' => $description, 'content' => $content, 'author' => $author, 'categories' => $categories, 'img' => $imgP, 'status' => $active, 'p_date' => $date );
      $this->posts->savePost($data);
      $this->session->set_flashdata('success_msg', 'Post Saved.');





    redirect("adminAccess");


  }

    public function posts ($offset = 0)
    {
      $this->posts->pagInitAdmin();
  		$data = $this->posts->allAdminPosts($offset);
      $this->load->view('admin/header');
      $this->load->view('admin/navbar');
      $this->load->view('admin/homeUp');
      //$this->load->helper('bootstrap');
      //$this->load->helper('form');
      $this->load->view('admin/blogList', $data);
      $this->load->view('admin/homeDown');
      $this->load->view('admin/footer');
    }

    public function editPost($id='')
    {
      $row = $this->posts->getPostById($id);
      $this->load->view('admin/header');
      $this->load->view('admin/navbar');
      $this->load->view('admin/homeUp');
      if ($row){
        $data = array('row' => $row );
        $this->load->view('admin/editPost', $data);

      } else {
        $this->load->view('admin/notArt');
      }
  		  $this->load->view('admin/footer');

    }

    public function updatePost()
    {
      $id = $this->input->post('id');
      $title = $this->input->post('title');
      $description = $this->input->post('description');
      $content = $this->input->post('content');
      $author =  $_SESSION['user_id'];
      $categories = '';
      $img = '';
      $active = $_POST['publish'];

      //if ($this->input->post['active'] == 'active'){
      //  $active = 'active';
      //} else {
      //  $active = 'inactive';
      //}
      $data  = array('title' => $title, 'description' => $description, 'content' => $content, 'author' => $author, 'categories' => $categories, 'img' => $img, 'status' => $active );
      $this->posts->updatePost($data, $id);
      $this->session->set_flashdata('success_msg', 'Post edited.');
      redirect("adminAccess/posts");
    }
    public function addAdmin()
    {

      $this->load->view('admin/header');
      $this->load->view('admin/navbar');
      $this->load->view('admin/homeUp');
      $this->load->view('admin/newAdmin');
      $this->load->view('admin/footer');

    }

    public function chgPass()
    {


      $row = $this->users->getAdmin();
      $data = array('row' => $row );

      $this->load->view('admin/header');
      $this->load->view('admin/navbar');
      $this->load->view('admin/homeUp');
      $this->load->view('admin/chgPass', $data);
      $this->load->view('admin/footer');

    }

    public function saveAdm(){

          $user=array(
          'username'=>$this->input->post('username'),
          'password'=>md5($this->input->post('password')),
          'email'=>$this->input->post('email')
            );
          $email_check = $this->users->email_check_admin($user['email']);
          if(!$email_check){
            $this->users->insertAdmin($user);

            $this->session->set_flashdata('success_msg', '<strong>Success!</strong> Nueva cuenta administrador creada.');
            redirect('adminAccess');
    }
    else{
      $this->session->set_flashdata('error_msg', '<strong>Error!</strong> Existe un usuario con ese email.');
      redirect('adminAccess/addAdmin');
    }

    }
    public function updateAdm(){

    if ($this->input->post('password')=='')
    {      $user=array(
          'username'=>$this->input->post('username')
            );
            $this->users->updateAdmin($user, $_SESSION['user_id']);
            $this->session->set_flashdata('success_msg', '<strong>Success!</strong>Datos Modificados.');
            redirect('adminAccess');
    }
    else{
      $user=array(
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password')

              );
              $this->users->updateAdmin($user, $_SESSION['user_id']);
              $this->session->set_flashdata('success_msg', '<strong>Success!</strong>Datos Modificados.');
              redirect('adminAccess');
    }

  }

  public function updateBanner()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/navbar');
    $this->load->view('admin/homeUp');
    $this->load->view('admin/updateBanner');
    $this->load->view('admin/footer');

  }

}


 ?>

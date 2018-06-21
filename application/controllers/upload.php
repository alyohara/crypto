<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
          $title = $this->input->post('title');
          $description = $this->input->post('description');
          $content = $this->input->post('content');
          $author =  $_SESSION['user_id'];
          $categories = '';
          $img = '';
          $date = Date("Y-m-d");
          $active = $_POST['publish'];





                $config['upload_path']          = './public/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                //$config['max_size']             = 100;
                //$config['max_width']            = 1024;
                //$config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('imgP'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        $img ='';
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data2 = array('upload_data' => $this->upload->data());
                        $img = $this->upload->data('file_name');
                        //$this->load->view('upload_success', $data);
                }




        $data  = array('title' => $title, 'description' => $description, 'content' => $content, 'author' => $author, 'categories' => $categories, 'img' => $img, 'status' => $active, 'p_date' => $date );
        $this->posts->savePost($data);
        $this->session->set_flashdata('success_msg', 'Post Saved.');





      redirect("adminAccess/posts");

    }

    public function do_upload2()
    {
      $id = $this->input->post('id');
      $title = $this->input->post('title');
      $description = $this->input->post('description');
      $content = $this->input->post('content');
      $author =  $_SESSION['user_id'];
      $categories = '';
      $img = '';
      $date = Date("Y-m-d");
      $active = $_POST['publish'];





            $config['upload_path']          = './public/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            //$config['max_size']             = 100;
            //$config['max_width']            = 1024;
            //$config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('imgP'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $img ='';
                    //$this->load->view('upload_form', $error);
            }
            else
            {
                    $data2 = array('upload_data' => $this->upload->data());
                    $img = $this->upload->data('file_name');
                    //$this->load->view('upload_success', $data);
            }




    $data  = array('title' => $title, 'description' => $description, 'content' => $content, 'author' => $author, 'categories' => $categories, 'img' => $img, 'status' => $active, 'p_date' => $date );
    $this->posts->updatePost($data, $id);
    $this->session->set_flashdata('success_msg', 'Post Saved.');





    redirect("adminAccess/posts");

    }


    public function do_upload_banner()
    {
      $config['upload_path']          = './public/banners/';
      $config['allowed_types']        = 'gif|jpg|png';
      $loc = $this->input->post('loc');
      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload($loc))
      {
              $error = array('error' => $this->upload->display_errors());
              $img ='';
      }
      else
      {
             $data2 = array('upload_data' => $this->upload->data());
             $img = $this->upload->data('file_name');
      }
      $data  = array('path' => $img);
      $this->db->where('name', $loc);
      $this->db->update('banners', $data);
      $this->session->set_flashdata('success_msg', 'Image Saved.');
      redirect("adminAccess/updateBanner");

}




}
?>

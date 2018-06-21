<?php
/**
 *
 */
class Posts extends CI_Model
{
  public function pagInit()
  {
    $this->load->library('pagination');
		$config['base_url'] = base_url() . "blog/index";
    $this->db->where ('status', 'active');
    $config['total_rows'] = $this->db->count_all_results('posts');
    $config['per_page'] = 3;
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


  public function pagInitAdmin()
  {
    $this->load->library('pagination');
    $config['base_url'] = base_url() . "adminAccess/posts";
    $config['total_rows'] = $this->db->count_all_results('posts');
    $config['per_page'] = 15;
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





  public function getPostById($id='')
  {
    $result = $this->db->query("SELECT * FROM posts WHERE id = '".$id."'");
    return $result->row();
  }

  public function savePost($data='')
  {
    $this->db->insert('posts', $data);
  }

  public function allPosts($offset='')
  {
    $this->db->order_by("id", "desc");
    $this->db->where ('status', 'active');
		$data['posts'] = $this->db->limit(3, $offset)->get('posts')->result();
    return $data;
  }


  public function allAdminPosts($offset='')
  {
    $this->db->order_by("id", "desc");
		$data['posts'] = $this->db->limit(10, $offset)->get('posts')->result();
    return $data;
  }

  public function updatePost($data='', $id='')
  {
    $this->db->where('id', $id);
    $this->db->update('posts', $data);
    
  }

}

?>

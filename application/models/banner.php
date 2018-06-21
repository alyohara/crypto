<?php
/**
 *
 */
class Banner extends CI_Model
{
  public function getUpBanner()
  {
    $result = $this->db->query("SELECT * FROM banners WHERE name = 'bannerUP'");
    return $result->row();
  }
  public function getDownBanner()
  {
    $result = $this->db->query("SELECT * FROM banners WHERE name = 'bannerDown'");
    return $result->row();
  }
  public function getLeftBanner()
  {
    $result = $this->db->query("SELECT * FROM banners WHERE name = 'bannerLeft'");
    return $result->row();
  }
  public function getRightBanner()
  {
    $result = $this->db->query("SELECT * FROM banners WHERE name = 'bannerRight'");
    return $result->row();
  }






}


 ?>

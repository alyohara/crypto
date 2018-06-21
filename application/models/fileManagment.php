<?php
/**
 *
 */
class FileManagment extends CI_Model
{


  public function do_upload()
          {
                  $config['upload_path']          = './public/img/';
                  $config['allowed_types']        = 'gif|jpg|png|jpeg';
                  //$config['max_size']             = 100;
                  //$config['max_width']            = 1024;
                  //$config['max_height']           = 768;

                  $this->load->library('upload', $config);
                  $data = '';
                  if ( ! $this->upload->do_upload('userfile'))
                  {
                          $error = array('error' => $this->upload->display_errors());

                    //      $this->load->view('upload_form', $error);
                  }
                  else
                  {
                          $data = array('upload_data' => $this->upload->data());

                      //    $this->load->view('upload_success', $data);
                  }
                  return $data;
          }


  public function UploadImage($path = '', $message = '')
	{

    $config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['overwrite'] = TRUE;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = $this->upload->display_errors();
			echo $this->html();
			if($message == ''){ //cierre de php ?>
				<script type="text/javascript" charset="utf-8">
					alert("Error al subir la imagen");
				</script> <?php
			}else{ 		  ?>
				<script type="text/javascript" charset="utf-8">
					alert("<?= $message ?>");
				</script> <?php
			}
			return null;
		}
		else{
			$file_data = $this->upload->data();
			return $file_data['file_name'];
		}
	}

	public function html($value='')
	{
		return "
		<html>
		<head>
			<title> Upload Error </title>
		</head>
		<body>

		</body>
		</html>";
	}



}


 ?>

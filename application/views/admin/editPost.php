<h1>Editar Post</h1>
</br>
<?php
$hidden = array('id' => $row->id);

echo form_open_multipart("upload/do_upload2", array('class' => 'form form--flex form--auth js-login-form js-parsley'), $hidden); ?>
<?php
  //$atributos = array('style' 	=> 'text-align: center; with: 100%');
	//echo form_input_text('Titulo', 'Ingresa Titulo del Nuevo Post', $atributos);
	//echo form_input_password('password','Ingresa contraseña', $atributos);
	//echo form_input_checkbox('remember','Recordar');
	//echo form_input_radio('area','Valor 1', 'valor1');
	//echo form_input_radio('area','Valor 2', 'valor2');
	//echo form_input_radio('area','Valor 3', 'valor3');
	//echo form_input_textarea('description','Ingresa una descripcion');
  //echo form_input_textarea('content','Ingresa el contenido');
	//echo form_input_select("lol");
	//$options = array('1' => 1,'2' => 2);
	//echo select_options($options);
	//echo form_submit("Enviar formulario");
	//echo form_close();
	// send file to method uploadTest of controller welcome
	//echo form_open_multipart("welcome/uploadTest");
	//echo form_input_file('Selecciona una imagen');


  $data = array(
          'name'          => 'title',
          'id'            => 'title',
          'value'         => $row->title,
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Título del Nuevo Post'
  );
  echo form_label('Titulo del Post', 'title');
  echo form_input($data);

  $data = array(
          'name'          => 'description',
          'id'            => 'description',
          'value'         => $row->description,
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Descripción del Nuevo Post',
          'cols'          => '50',
          'rows'          => '3'

  );
  echo form_label('Breve Descripción', 'description');
  echo form_textarea($data);

  $data = array(
          'name'          => 'content',
          'id'            => 'content',
          'value'         => $row->content,
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Contenido del Nuevo Post',
          'cols'          => '50',
          'rows'          => '10',
          'class'         => 'editor'

  );
echo form_label('Contenido del Post', 'content');
  echo form_textarea($data);


  ?>
</br>
<hr>
<h4>Elija una Imagen Principal (modificará la anterior)</h4>

  <?php
  $data = array(
          'name'          => 'imgP',
          'id'            => 'imgP',
          'size'          => '50',
          'style'         => 'width:50%',
          'placeholder'   => 'Imagen del Post'
  );
  echo form_upload($data);
  ?>
  <hr>

  <?php
  if ($row->status == 'active'){
    $stat = TRUE;
    $stat2 = FALSE;
  } else {
    $stat =FALSE;
    $stat2 = TRUE;
  }
  $data = array(
        'name'          => 'publish',
        'id'            => 'publish',
        'value'         => 'active',
        'checked'       => $stat,
        'style'         => 'margin:20px'
);
echo form_label('Estado de publicación del Post', 'publish');
echo '<div class row>   Publicado ';
echo form_radio($data);
$data = array(
      'name'          => 'publish',
      'id'            => 'publish',
      'value'         => 'inactive',
      'checked'       => $stat2,
      'style'         => 'margin:20px'
);
echo 'No Publicado ';
echo form_radio($data);
echo '</div>';
  ?>
  <hr>
  <div class="row">
  <button type="submit" class="btn btn-default">Guardar Cambios</button>
</div>
<?= form_close(); ?>
<div class="clearfix"></div>
<br>

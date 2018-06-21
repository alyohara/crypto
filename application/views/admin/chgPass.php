<h1>Editar Mis Datos y Contraseña</h1>
</br>
<?php

echo form_open_multipart("adminAccess/updateAdm", array('class' => 'form form--flex form--auth js-login-form js-parsley')); ?>
<?php
  $data = array(
          'name'          => 'username',
          'id'            => 'username',
          'value'         => $row->username,
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Nombre de Usuario',
          'required'      => TRUE
  );
  echo form_label('Nombre del Usuario Administrador', 'title');
  echo form_input($data);
  $data = array(
          'name'          => 'password',
          'id'            => 'password',
          'value'         => '',
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Password',
          'type'          => 'password'
  );
  echo form_label('Contraseña', 'password');
  echo form_input($data);
  $data = array(
          'name'          => 'email',
          'id'            => 'email',
          'value'         => $row->email,
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Correo electronico',
          'required'      => 'required',
          'type'          => 'email',
          'disabled'       => 'disabled'
  );
  echo form_label('Correo', 'email');
  echo form_input($data);
?>


  <hr>
  <div class="row">
  <button type="submit" class="btn btn-default">Guardar Modificaciones</button>
</div>
<br>
<?= form_close(); ?>

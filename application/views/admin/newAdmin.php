<h1>Nuevo Usuario Administrador</h1>
</br>
<?= form_open_multipart("adminAccess/saveAdm", array('class' => 'form form--flex form--auth js-login-form js-parsley')); ?>
<?php
  $data = array(
          'name'          => 'username',
          'id'            => 'username',
          'value'         => '',
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Nombre de Usuario',
          'required'      => TRUE
  );
  echo form_label('Nombre del nuevo Usuario Administrador', 'title');
  echo form_input($data);
  $data = array(
          'name'          => 'password',
          'id'            => 'password',
          'value'         => '',
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Password',
          'required'      => TRUE,
          'type'          => 'password'
  );
  echo form_label('Contraseña', 'password');
  echo form_input($data);
  $data = array(
          'name'          => 'email',
          'id'            => 'email',
          'value'         => '',
          'maxlength'     => '100',
          'size'          => '50',
          'style'         => 'width:100%',
          'placeholder'   => 'Correo electronico',
          'required'      => TRUE,
          'type'          => 'email'
  );
  echo form_label('Correo del nuevo Administrador', 'email');
  echo form_input($data);
?>


  <hr>
  <div class="row">
  <button type="submit" class="btn btn-default">Crear Nuevo Admin</button>
</div>
<br>
<?= form_close(); ?>

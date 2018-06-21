<h1>Subir Banners</h1>
</br>

<?php $hidden = array('loc' => 'bannerUP');?>
<?= form_open_multipart("upload/do_upload_banner", array('class' => 'form form--flex form--auth js-login-form js-parsley'), $hidden); ?>

<h4>Carga de Banner Superior </h4>

  <?php
  $data = array(
          'name'          => 'bannerUP',
          'id'            => 'bannerUP',
          'size'          => '50',
          'style'         => 'width:50%'
  );
  echo form_upload($data);
  ?>

  <button type="submit" class="btn btn-default">Guardar Imagen</button>
  <br>
  <hr>
<?= form_close(); ?>
  <?php $hidden = array('loc' => 'bannerDown');?>
  <?= form_open_multipart("upload/do_upload_banner", array('class' => 'form form--flex form--auth js-login-form js-parsley'), $hidden); ?>
  <h4>Carga de Banner Inferior </h4>

    <?php
    $data = array(
            'name'          => 'bannerDown',
            'id'            => 'bannerDown',
            'size'          => '50',
            'style'         => 'width:50%'
    );
    echo form_upload($data);
    ?>
    <button type="submit" class="btn btn-default">Guardar Imagen</button>
    <br>
    <hr>
<?= form_close(); ?>
    <?php $hidden = array('loc' => 'bannerLeft');?>
    <?= form_open_multipart("upload/do_upload_banner", array('class' => 'form form--flex form--auth js-login-form js-parsley'), $hidden); ?>
    <h4>Carga de Banner Izquierdo </h4>

      <?php
      $data = array(
              'name'          => 'bannerLeft',
              'id'            => 'bannerLeft',
              'size'          => '50',
              'style'         => 'width:50%'
      );
      echo form_upload($data);

      ?>
      <button type="submit" class="btn btn-default">Guardar Imagen</button>
      <br>
      <hr>
<?= form_close(); ?>
      <?php $hidden = array('loc' => 'bannerRight');?>
      <?= form_open_multipart("upload/do_upload_banner", array('class' => 'form form--flex form--auth js-login-form js-parsley'), $hidden); ?>
      <h4>Carga de Banner Derecho </h4>

        <?php
        $data = array(
                'name'          => 'bannerRight',
                'id'            => 'bannerRight',
                'size'          => '50',
                'style'         => 'width:50%'
        );
        echo form_upload($data);
        ?>
        <button type="submit" class="btn btn-default">Guardar Imagen</button>
        <br>
        <hr>
<?= form_close(); ?>


      <div class="site-wrap js-site-wrap">
        <div class="widget js-widget">
          <div class="widget__content">
            <div class="banner js-banner banner--wide">
              <div class="banner__item">
                <div class="container">
                  <div class="row">
                    <div style="position: relative; width: 300px;  left: 50%; margin-left: -150px; z-index: 999">
                      <h5 class="auth__title">Cambio de Contraseña</h5>
                      <?php echo form_open("recover/change", array('class' => 'form form--flex form--auth js-login-form js-parsley')); ?>
                      <input type="hidden" name="check_state" value="<?= $iod ?>" />
                      <label for="password" class="control-label">Ingrese una nueva contraseña.</label>
                      <input type="password" name="password" id="password" required class="form-control" />

                      <div class="row">
                        <button type="submit" class="form__submit">Cambiar</button>
                      </div>


                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

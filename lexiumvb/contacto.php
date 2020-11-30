<?php include('email_contacto.php'); ?>
<?php include('header.php');?>
<?php include('menu.php'); ?>

      <section class="text-center titulocontenido">
         <h1>Contacto</h1>
      </section>
      <section class="b2_map">
        <div class="container py-5">
          <h2>En Lexium queremos saber de ti.</h2>
          <div class="row">
            <div class="col-md-6">
              <p>Danos tus datos y nos pondremos en contacto muy pronto.</p>
              <div class="form">
                <form action="contacto.php" method="POST" role="form" autocomplete="off" id="myForm">
                <input type="hidden" value="-1" name="validacion" id="validacion">
                  <div class="form-group">
          						<input type="text" name="name" class="form-control" placeholder="Nombre" value="<?php echo (isset($_POST ['name']) ? $_POST['name'] : ''); ?>">
          						<?php if (array_key_exists('name', $has_error)): ?>
          						<span class="text-danger has-error">
          							<i><?php echo $has_error['name'] ?></i>
          						</span>
          						<?php endif; ?>
                    <!--<div class="form-group col-md-6">
                      <input type="text" name="lastname" class="form-control" placeholder="Apellidos" value="<?php echo (isset($_POST ['lastname']) ? $_POST['lastname'] : ''); ?>">
					  <?php if (array_key_exists('lastname', $has_error)): ?>
						<span class="text-danger has-error">
							<i><?php echo $has_error['lastname'] ?></i>
						</span>
					  <?php endif; ?>
                    </div>-->
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Describe lo que necesitas o estás buscando, seguro te podemos apoyar."><?php echo (isset($_POST ['message']) ? $_POST['message'] : ''); ?></textarea>
                    <?php if (array_key_exists('message', $has_error)): ?>
                      <span class="text-danger has-error">
                        <i><?php echo $has_error['message'] ?></i>
                      </span>
                    <?php endif; ?>
                  </div>
          <div class="form-group">
            <p>En dónde te encontramos</p>
          </div>
				  <div class="form-row">

  					<div class="form-group col-md-6">
  					  <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>">
            <?php if (array_key_exists('email', $has_error)): ?>
              <span class="text-danger has-error">
                <i><?php echo $has_error['email'] ?></i>
              </span>
            <?php endif; ?>
  					</div>
  					<div class="form-group col-md-6">
  					  <input type="text" name="phone" class="form-control" placeholder="(LADA) + Teléfono" value="<?php echo (isset($_POST ['phone']) ? $_POST['phone'] : ''); ?>" required="" minlength="9" onkeypress="return valida(event)">
  					  <?php if (array_key_exists('phone', $has_error)): ?>
  					  <?php endif; ?>
  					</div>
				  </div>

				  <div class="form-row">
                    <div class="form-group col-md-6">
						<div id="g-recaptcha-1"></div>
						<?php if (array_key_exists('g-recaptcha-response', $has_error)): ?>
						<span class="text-danger has-error">
						  <i><?php echo $has_error['g-recaptcha-response'] ?></i>
						</span>
						<?php endif; ?>
                    </div>
                    <div class="form-group col-md-6 text-right">
                      <input type="hidden" name="Plataforma" value="<?php echo $_SERVER['HTTP_REFERER'];?>">
                      <input type="hidden" name="completo" value="1">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <br/><br/><br/>
              <p>Aunque estamos en Monterrey, tenemos presencia en toda Latinoamérica.</p>
              <h5>Dirección</h5>
              <p>
                Calzada del Valle 400 Suite 127
                San Pedro Garza García, NL
                <br/>
                TEL   <a href="tel:8113666070">81 1366 6070</a>
              </p>
              <h5>Email</h5>
              <p>
                <a href="mailto:servicio@lexiumonline.com">servicio@lexiumonline.com</a>
              </p>
            </div>
          </div>
        </div>
      </section>

<?php $varLocation = 'https://www.lexiumonline.com/gracias.php'; ?>
<script type="text/javascript">
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>

<script type="text/javascript">
	$(document).ready(function () {
    var tksLocation = '<?php echo $varLocation; ?>';
    $("#validacion").val("<?php echo date("d");?>");
		<?php if(isset($success) and $success):?>
				//toastr["success"]("Pronto estaremos en contacto contigo!", "Hemos recibido tu mensaje");
        location.href = tksLocation;
				$("form").find('input:text,input:email, textarea').val('');
				$("form").find('input:checkbox').removeAttr('checked').removeAttr('selected');
                $('#myForm').trigger("reset");
		<?php elseif(isset($success) and !$success):?>
				toastr["error"]("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                $('#myForm').trigger("reset");
		<?php endif;?>
	});

  if($("#g-recaptcha-1").length > 0){
          var recaptcha1;
          var myCallBack = function() {

            recaptcha1 = grecaptcha.render('g-recaptcha-1', {
            'sitekey' : '6LfLfW8UAAAAAF7n_cXsJa5fTfBA1hSyKNiLbVL6',
            'theme' : 'light'
            });
          };
        }
</script>
<?php include('footer.php'); ?>
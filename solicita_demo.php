
<?php include('email_solicita_demo.php'); ?>
<?php include('header.php'); ?>
    <div class="talent_map demo">
       <section class="sub-header d-flex align-items-center justify-content-center">
        <h1>Solicita un demo</h1>
      </section>
      <section class="container py-5">

          <h4>Gracias por tu interés en las plataformas de Lexium.</h4>
          <p>Proporciona la información para que te contactemos a la brevedad.</p>
          <div class="form">
            <form action="solicita_demo.php" method="POST" role="form" autocomplete="off" id="myForm">

            <div class="form-group">
      				<input type="text" name="name" class="form-control" placeholder="Nombre *" value="<?php echo (isset($_POST ['name']) ? $_POST['name'] : ''); ?>" required="" id="nombre">

      				<span class="text-danger has-error" id="errorNombre" style="display: none;">
      					<i>El nombre es requerido.</i>
      				</span>

			     </div>

            <!--  <div class="form-row">
				<div class="form-group col-md-6">
				  <input type="text" name="company" class="form-control" placeholder="Institución *" value="<?php echo (isset($_POST ['company']) ? $_POST['company'] : ''); ?>" required="" id="institucion">

					  <span class="text-danger has-error" id="errorInstitucion" style="display: none;">
						  <i>El nombre de la institución es requerido.</i>
					  </span>

				</div>
                <div class="form-group col-md-6">
                    <select name="nivel[]" class="form-control" id="nivelEducativo" multiple="multiple">
                        <option value="Preescolar" <?php echo ((isset($_POST['nivel']) and in_array('Preescolar', $_POST['nivel'])) ? 'selected' : ''); ?>>Preescolar</option>
                        <option value="Primaria" <?php echo ((isset($_POST['nivel']) and in_array('Primaria', $_POST['nivel'])) ? 'selected' : ''); ?>>Primaria</option>
                        <option value="Secundaria" <?php echo ((isset($_POST['nivel']) and in_array('Secundaria', $_POST['nivel'])) ? 'selected' : ''); ?>>Secundaria</option>
                        <option value="Preparatoria" <?php echo ((isset($_POST['nivel']) and in_array('Preparatoria', $_POST['nivel'])) ? 'selected' : ''); ?>>Preparatoria</option>
                        <option value="Licenciatura" <?php echo ((isset($_POST['nivel']) and in_array('Licenciatura', $_POST['nivel'])) ? 'selected' : ''); ?>>Licenciatura</option>
                        <option value="Especialidad" <?php echo ((isset($_POST['nivel']) and in_array('Especialidad', $_POST['nivel'])) ? 'selected' : ''); ?>>Especialidad</option>
                        <option value="Maestría" <?php echo ((isset($_POST['nivel']) and in_array('Maestría', $_POST['nivel'])) ? 'selected' : ''); ?>>Maestría</option>
                        <option value="Doctorado" <?php echo ((isset($_POST['nivel']) and in_array('Doctorado', $_POST['nivel'])) ? 'selected' : ''); ?>>Doctorado</option>
                    </select>
                    <span class="text-danger has-error" id="errorSoluciones" style="display: none;">NO SE USA ÉSTE SPAN
                        <i><#?php echo $has_error['nivel'] ?></i>
                    </span>
                </div>

			  </div>-->
              <div class="form-row">
				<div class="form-group col-md-6">
				  <input type="email" name="email" class="form-control" placeholder="Correo *" value="<?php echo (isset($_POST ['email']) ? $_POST['email'] : ''); ?>" required="" id="email">

					<span class="text-danger has-error" id="errorEmail" style="display: none;">
						<i>El email es requerido ó está mal escrito.</i>
					</span>

				</div>
				<div class="form-group col-md-6">
                  <input type="text" name="phone" class="form-control" placeholder="(lada) + Teléfono" value="<?php echo (isset($_POST ['phone']) ? $_POST['phone'] : ''); ?>" minlength="9" onkeypress="return valida(event)" id="telefono">
                  <!--<?php if (array_key_exists('phone', $has_error)): ?>
                      <span class="text-danger has-error">
                          <i><?php echo $has_error['phone'] ?></i>
                      </span>
                  <?php endif; ?>-->
                </div>
			  </div>
        <!--<div class="form-group">
                <select name="solutions[]" class="form-control" id="example-getting-started" multiple="multiple">
				    <option value="Implementación de ambientes de aprendizaje efectivo" <?php echo ((isset($_POST['solutions']) and in_array('Implementación de ambientes de aprendizaje efectivo', $_POST['solutions'])) ? 'selected' : ''); ?>>Implementación de ambientes de aprendizaje efectivo</option>
                    <option value="Sistema de ingreso y permanencia" <?php echo ((isset($_POST['solutions']) and in_array('Sistema de ingreso y permanencia', $_POST['solutions'])) ? 'selected' : ''); ?>>Sistema de ingreso y permanencia</option>
                    <option value="Potenciación del aprendizaje" <?php echo ((isset($_POST['solutions']) and in_array('Potenciación del aprendizaje', $_POST['solutions'])) ? 'selected' : ''); ?>>Potenciación del aprendizaje</option>
                    <option value="Generación de evidencias" <?php echo ((isset($_POST['solutions']) and in_array('Generación de evidencias', $_POST['solutions'])) ? 'selected' : ''); ?>>Generación de evidencias</option>
                    <option value="Desarrollo de docentes" <?php echo ((isset($_POST['solutions']) and in_array('Desarrollo de docentes', $_POST['solutions'])) ? 'selected' : ''); ?>>Desarrollo de docentes</option>
                    <option value="Medición de impacto" <?php echo ((isset($_POST['solutions']) and in_array('Medición de impacto', $_POST['solutions'])) ? 'selected' : ''); ?>>Medición de impacto</option>
                </select>

					<span class="text-danger has-error noDisplay" id="errorSoluciones" style="display: none;">
						<i>Seleccione por lo menos una solucion.</i>
					</span>

              </div>-->
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Comentario *" required="" id="comentario"><?php echo (isset($_POST ['message']) ? $_POST['message'] : ''); ?></textarea>

					<span class="text-danger has-error" id="errorComentario" style="display: none;">
						<i>El comentario es requerido.</i>
					</span>

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
				  <button onclick="validarVacios()" type="button" class="btn btn-primary">Enviar</button>
				</div>
			  </div>
            </form>
          </div>

      </section>
    </div>
<?php include('footer.php'); ?>

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
     $(document).ready(function() {

        /*$('#example-getting-started').multiselect();


        $('#nivelEducativo').multiselect({
            nonSelectedText: 'Niveles educativos que ofrece la institución'
        });*/

        $("input").keyup(function(){
            $(this).parent().find("span").first().hide();
        });
        $("textarea").keyup(function(){
            $(this).parent().find("span").first().hide();
        });
        /*$("select").change(function(){
            $(".noDisplay").hide();
        });*/
        var tksLocation = '<?php echo $varLocation; ?>';
        <?php if(isset($success) and $success):?>
                //toastr["success"]("Pronto estaremos en contacto contigo!", "Hemos recibido tu mensaje");
                location.href = tksLocation;
                $("form").find('input:text,input:email, textarea').val('');
                $("form").find('input:checkbox').removeAttr('checked');
                $('#myForm').trigger("reset");
        <?php elseif(isset($success) and !$success):?>
                toastr["error"]("Ocurrió un error.", "Tu mensaje no pudo ser enviado");
                $('#myForm').trigger("reset");
        <?php endif;?>
    });

    function validarVacios(myForm){
        var errores=[];
        emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        nombre = document.getElementById("nombre").value;
        //institucion = document.getElementById("institucion").value;
        telefono = document.getElementById("telefono").value;
        email = document.getElementById("email").value;
        //nivel = document.getElementById("nivel").value;

        //var solu = $('#example-getting-started').val();
        //var soluciones = solu.length;

        //var nE = $('#nivelEducativo').val();
        //var nivel = nE.length;
        comentario = document.getElementById("comentario").value;
        cont = 0;
        msj = '';

        if(nombre == ""){
          errores.push("#errorNombre");
        }
        //if(institucion == ""){
          //errores.push("#errorInstitucion");
        //}
        if(email == "" || !emailRegex.test(email)){
          errores.push("#errorEmail");
        }
        if(comentario == ""){
          errores.push("#errorComentario");
        }
        //if(soluciones == 0){
          //errores.push("#errorSoluciones");
        //}

        if(errores.length){
          for(i in errores){
            $(errores[i]).show()
          }

        }else{
            if(telefono == "") {
                cont++;
                msj = 'Sería más fácil contactarte si nos das el teléfono, pero tu decides.\n\n';
            }

            //if(nivel == 0){
                //cont++;
                //msj += 'Al especificar el nivel, es mucho más sencillo enviarte un demo pertinente.\n\n';
            //}

            if(cont > 0){
                var r = confirm(msj + '¿Deseas continuar?');

                if (r == true) {
                    $('#myForm').submit();
                }
            }

            if(cont == 0){
                $('#myForm').submit();
            }
        }

    }


</script>

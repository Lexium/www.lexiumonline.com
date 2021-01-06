<?php
include('menu.php');
?>
<?php

$grados = array(
    'Preescolar',
    'Primaria 1',
    'Primaria 2',
    'Primaria 3',
    'Primaria 4',
    'Primaria 5',
    'Primaria 6',
    'Secundaria 1',
    'Secundaria 2',
    'Secundaria 3',
    'Preparatoria 1',
    'Preparatoria 2',
    'Preparatoria 3',
    'Preparatoria 4',
    );

$escuelas[1]    =   'UNIDAD EDUCATIVA LEMAS';
$escuelas[2]    =   'COLEGIO FRAY LUIS DE LEON';
//$escuelas[3]    =   'LICEO EMPERADORES AZTECA';
$escuelas[3]    =   'LICEO EMPERADORES AZTECAS';
$escuelas[4]    =   'PREPRATORIA IBERO';
$escuelas[5]    =   'COLEGIO MIRAFLORES';
$escuelas[6]    =   'COLEGIO EUGENIO DE MAZENOD';
$escuelas[7]    =   'COLEGIO MERICI';
$escuelas[8]    =   'COLEGIO MÉXICO DE TEHUACÁN';
$escuelas[9]    =   'INSTITUTO MIGUEL ÁNGEL DE OCCIDENTE';
$escuelas[10]   =   'INSTITUTO PEDAGÓGICO IBEROAMERICANO';
$escuelas[11]   =   'NEILL SCHOOL';
$escuelas[12]   =   'SECUNDARIA VILLA DE LOS NIÑOS';
$escuelas[13]   =   'COLEGIO EL CAMINO';
$escuelas[14]   =   'ESCUELA LIBRE DE NEGOCIOS';
$escuelas[15]   =   'COLEGIO TONALLÍ';
$escuelas[16]   =   'LICEO DE MONTERREY';
$escuelas[17]   =   'COLEGIO CUMBRES CHIHUAHUA';
$escuelas[18]   =   'SECUNDARIA TEC MONTERREY CAMPUS LAGUNA';
//$escuelas[19]   =   'COLEGIO LA SALLE';
$escuelas[19]   =   'COLEGIOS LA SALLE';
$escuelas[20]   =   'COLEGIO VIZCAÍNAS';
$escuelas[21]   =   'CENTRO ESCOLAR HÁBITAT';
$escuelas[22]   =   'INSTITUTO BILINGÜE INTERAMERICANO MÉXICO';
$escuelas[23]   =   'INSTITUTO BILINGÜE JEAN PIAGET';
$escuelas[24]   =   'INSTITUTO POTOSINO MARISTA';
$escuelas[25]   =   'SECUNDARIA BILINGUE CARLOS DARWIN';
$escuelas[26]   =   'SECUNDARIA TEC MONTERREY CAMPUS ZACATECAS';
$escuelas[27]   =   'COLEGIO AMERICANO DE PUEBLA';
$escuelas[28]   =   'COLEGIO CERVANTES PRIMARIA';
$escuelas[29]   =   'LA SALLE BENJAMÍN FRANKLIN';
$escuelas[30]   =   'UNIVERSIDAD CUAUHTÉMOC AGUASCALIENTES';
$escuelas[31]   =   'UNIVERSIDAD DURANGO SANTANDER';
$escuelas[32]   =   'UNIVERSIDAD LA SALLE NEZAHUALCÓYOTL';
$escuelas[33]   =   'COLEGIO LINARES';
$escuelas[34]   =   'COLEGIO MODELO';
$escuelas[35]   =   'INSTITUTO SENDA DEL RÍO';
$escuelas[36]   =   'COLEGIO MONTESSORI DE CHIHUAHUA';
$escuelas[37]   =   'PLANTEL AZTECA PUEBLA';
$escuelas[38]   =   'PLANTEL AZTECA CDMX';
$escuelas[39]   =   'PLANTEL AZTECA LEÓN';
$escuelas[40]   =   'COLEGIO AMEYALI';
$escuelas[41]   =   'SISTEMA EDUCATIVO MUÑOZ';
$escuelas[42]   =   'COLEGIO ALFONSO GARCÍA ROBLES';
$escuelas[43]   =   'COLEGIO CRISTÓBAL COLÓN DE CUERNAVACA';
$escuelas[44]   =   'INSTITUTO CUMBRES SALTILLO';
$escuelas[45]   =   'INSTITUTO DOMUS';
$escuelas[46]   =   'INSTITUTO NOVAERA';
$escuelas[47]   =   'INSTITUTO PATRIA BOSQUES';
$escuelas[48]   =   'JULIO VERNE SCHOOL';
$escuelas[49]   =   'COLEGIO LOWRY';
$escuelas[50]   =   'INSTITUTO EDUCATIVO ANGLO ESPAÑOL';
$escuelas[51]   =   'COLEGIO WEXFORD';
$escuelas[52]   =   'LICEO TULYEHUALCO';
//$escuelas[53]   =   'COLEGIO INGLÉS PLAYA DEL CARMEN';
$escuelas[53]   =   'INSTITUTO INGLÉS PLAYA DEL CARMEN';
$escuelas[54]   =   'INSTITUTO JUÁREZ LINCOLN';
$escuelas[55]   =   'COLEGIO SIMÓN BOLIVAR';
$escuelas[56]   =   'COLEGIO WOODBRIDGE';
$escuelas[57]   =   'INTER INSTITUTO EDUCATIVO';
$escuelas[58]   =   'INSTITUTO LA PAZ DE PUEBLA A.C.';
$escuelas[59]   =   'INSTITUTO MONTESSORI';
$escuelas[60]   =   'COLEGIO ZONA PLATEADA';
$escuelas[61]   =   'COLEGIO MUÑOZ';
//$escuelas[62]   =   'COLEGIO PATRIA';
$escuelas[62]   =   'SOCIEDAD CULTURAL COLEGIO PATRIA';
$escuelas[63]   =   'SECUNDARIA ENRIQUE CONRADO REBSAMEN';
$escuelas[64]   =   'INSTITUTO MARTIN LUTHER KING';
$escuelas[65]   =   'CIUDAD DE LOS NIÑOS MONTERREY';
$escuelas[66]   =   'CENTRO EDUCATIVO LUMINIS';
$escuelas[67]   =   'UNIDAD EDUCATIVA ANÁHUAC';
$escuelas[68]   =   'COLEGIO LIBERTAD';
$escuelas[69]   =   'COLEGIO VICTORIA';
$escuelas[70]   =   'ESCUELA MARÍA LUISA PACHECO';
$escuelas[71]   =   'ESCUELA YOLIZTLI';
$escuelas[72]   =   'COLEGIO JOSEPH BABINSKY';
$escuelas[73]   =   'COLEGIO NIKOLA TESLA';
$escuelas[74]   =   'COLEGIO EUROPEO ROBERT SCHUMAN';
$escuelas[75]   =   'INSTITUTO EDUCATIVO ANÁHUAC APODACA';
$escuelas[76]   =   'INSTITUTO DEL CARMEN';
$escuelas[77]   =   'COLEGIO AZUL BLUE';
$escuelas[78]   =   'INSTITUTO CUMBRES DE IRAPUATO';
$escuelas[79]   =   'INSTITUTO VASCO DE QUIROGA';
$escuelas[80]   =   'CENTRO CULTURAL ALFONSO TORO';
$escuelas[81]   =   'COLEGIO FRANCÉS DEL PEDREGAL';
$escuelas[82]   =   'COLEGIO FRANCÉS HIDALGO ';
$escuelas[83]   =   'PREPARATORIA REGIONAL DE TEJUPILCO';
$escuelas[84]   =   'THE WORKSHOP INSTITUTO DE EDUCACIÓN PROGRESIVA';
$escuelas[85]   =   'UNIVERSIDAD CRUZ ROJA MEXICANA';
$escuelas[86]   =   ' CENTRO DE ESTUDIOS DE CIENCIAS DE LA COMUNICACIÓN';
$escuelas[87]   =   'UNIDADES BÁSICAS UPAEP ATLIXCO';
$escuelas[88]   =   'UNIDADES BÁSICAS UPAEP BUGAMBILIAS';
$escuelas[89]   =   'UNIDADES BÁSICAS UPAEP HUAMANTLA';
$escuelas[90]   =   'UNIDADES BÁSICAS UPAEP SAN MARTÍN';
$escuelas[91]   =   'UNIDADES BÁSICAS UPAEP SANTA ANA';
$escuelas[92]   =   'UNIDADES BÁSICAS UPAEP SANTIAGO';
$escuelas[93]   =   'UNIDADES BÁSICAS UPAEP TEHUACÁN';
$escuelas[94]   =   'BACHILLERATO UPAEP SANTIAGO';
$escuelas[95]   =   'BACHILLERATO UPAEP ANGELÓPOLIS';
$escuelas[96]   =   'BACHILLERATO UPAEP CHOLULA';
$escuelas[97]   =   'BACHILLERATO UPAEP SUR ';
$escuelas[98]   =   'BACHILLERATO UPAEP ATLIXCO';
$escuelas[99]   =   'BACHILLERATO UPAEP HUAMANTLA';
$escuelas[100]  =   'BACHILLERATO UPAEP LOMAS';
$escuelas[101]  =   'BACHILLERATO UPAEP SAN MARTÍN';
$escuelas[102]  =   'BACHILLERATO UPAEP SANTA ANA';
$escuelas[103]  =   'BACHILLERATO UPAEP TEHUACÁN';
$escuelas[104]  =   'UNIVERSIDAD POPULAR AUTÓNOMA DEL ESTADO DE PUEBLA';
$escuelas[105]  =   'COLEGIO GUILFORD';
$escuelas[106]  =   'COLEGIO LARREA';
$escuelas[107]  =   'COLEGIO TAMAULIPAS';
$escuelas[108]  =   'COLEGIO JOSÉ VASCONCELOS';
$escuelas[109]  =   'CENTRO DE ESTUDIOS UNIVERSITARIOS HORACIO ZÚÑIGA';
$escuelas[110]  =   'ÁRBOL DEL CONOCIMIENTO';
$escuelas[111]  =   'COLEGIO GUASAVE';
//$escuelas[112]  =   'CENTRO CULTURAL CUAUHTÉMOC';
$escuelas[112]  =   'COLEGIO CULTURAL CUAUHTÉMOC';
$escuelas[113]  =   'CENTRO EDUCATIVO METEPEC';
$escuelas[114]  =   'INSTITUTO IRAPUATO';
$escuelas[115]  =   'EVERGREEN SCHOOL';

/* Agregados por Adela */
$escuelas[116]     =   'COLEGIO MÉXICO';
$escuelas[117]     =   'COLEGIO PLENUS';
$escuelas[118]     =   'COLEGIO CELTA INTERNACIONAL';

/* Agregados por Tere */
$escuelas[119]     =   'DIRECCIÓN GENERAL UNIDADES BÁSICAS UPAEP';
$escuelas[120]     =   'DIRECCIÓN GENERAL BACHILLERATOS UPAEP';

/* Agregados por Silvia */
$escuelas[121]     =   'PREPARATORIA OAK';


// Program to display complete URL     

if($_SERVER['HTTP_HOST'] == 'localhost')
{
    $link = 'http://localhost/2020/sitio_lexium/reconocimiento/reconocimiento.php';
}
else
{
    $link = 'https://www.lexiumonline.com/reconocimiento/reconocimiento.php';
}
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.js"></script>
<style type="text/css">
.centrado {
    text-align: center;
}

.option {
    display: none;
}
.optionVer {
    display: block;
    border: solid;
    border-width: 1px;
    border-color: #888;
    padding-left: 13px;
}
iframe {
    border: none;
    overflow: hidden;
    overflow-y: hidden; /* Hide vertical scrollbar */
    overflow-x: hidden; /* Hide horizontal scrollbar */
}

.negro {
    color: black;
}

.bolder
{
    font-weight: 600;
}

ul.checks li:before {
  content: '✓ ';
}

input[type="radio"] {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Chrome, Safari, Opera */
    transform: scale(1.5);
}
</style>
<script type="text/javascript">

function filtra()
{
    $("ul#colegios_list").find( "li" ).attr('class', 'option');
    texto = $('#institucion').val();
    if(texto.length > 5)
    {
        $('ul#colegios_list li:contains(' + texto.toUpperCase() + ')').attr('class', 'optionVer'   );
    }
}

function selecciona(nombre)
{
    $('#institucion').val(nombre);
    filtra();
}

function marcar(uuid)
{
    $('#ch_' + uuid).show();
    $('#btn_' + uuid).prop('class', 'btn btn-primary');
}
</script>

<section class="text-center pt-5 mt-5">
    <h1>Genera tus reconocimientos</h1>
</section>
<div class="container py-5 about_us">

    <?php if( empty($_POST['Enviar']))
    {
    ?>

    <h4 class="mb-5">
        Aquí puedes generar los reconocimientos de aquellas personas que hayan participado en nuestros programas.
    </h4>
    <h3>
        Sigue los pasos:
    </h3>
    <div class="negro">
        Existen tres tipos de reconocimientos:
        <ul>
            <li>
                <b class="bolder">Por gestión.</b><br>
                Generalmente se otorga a directores, subdirectores y coordinadores. 
            </li>
            <li>
                <b class="bolder">Por trabajo realizado.</b><br>
                Recomendable otorgarlo a titulares, docentes o cualquier persona que haya participado activamente en la implementación de evaluaciones o programas. 
            </li>
            <li>
                <b class="bolder">Por empeño y dedicación en enriquecer las propias habilidades de aprendizaje.</b><br>
                Se otorga a docentes o alumnos que hayan mostrado un visible interés y/o esfuerzo en enriquecer sus propias habilidades de aprendizaje con apoyo de su diagnóstico Lexium. 
            </li>
        </ul>

        <h3>
            Antes de generar los reconocimientos: 
        </h3>
        <ul class="checks" style="list-style: none">
            <li>Decide las personas que tendrán el mismo tipo.</li>
            <li>Ten a la mano la lista con los nombres completos por cada tipo. (Puedes copiar y pegar desde un archivo de Excel).</li>
            <li>Trabaja en un tipo de reconocimiento a la vez. </li>
        </ul>

    </div>  

    <form action="index.php" method="POST" role="form" autocomplete="off" id="myForm">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="mb-5">
                    <b>Paso 1.</b> Escribe el nombre de la institución y haz clic cuando aparezca.
                </h4>
                <div class="form-group ui-widget">
                    <input type="text" required class="form-control" id="institucion"  placeholder="Nombre de la institución educativa" onkeyup="filtra();">
                    <ul id="colegios_list">
                        <?php
                        foreach ($escuelas as $key => $escuela)
                        {
                        ?>
                        <li class="option"> <input type="radio" name="institucion" value="<?php echo $key;?>" required onclick="selecciona('<?php echo strtoupper($escuela);?>')"> <?php echo strtoupper($escuela);?> </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <br>
                </div>
            </div>
            <div class="col-sm-12">
                <h4 class="mb-5">
                    <b>Paso 2.</b> Haz clic en el tipo de reconocimiento con el que deseas trabajar.
                </h4>
            </div>
            <div class="col-sm-6 centrado">
                <iframe scrolling="no" border="0" width="512" height="380" src="reconocimiento.php?formato=formato1&institucion=&nombre[]=">
                </iframe>
                <p class="description">
                    <input type="radio" required name="formato" value="formato1" checked>&nbsp; Por gestión
                </p>
            </div>
            <div class="col-sm-6 centrado">
                <iframe scrolling="no" border="0" width="512" height="380" src="reconocimiento.php?formato=formato2&institucion=&nombre[]=">
                </iframe>
                <p class="description">
                    <input type="radio" required name="formato" value="formato2">&nbsp; Por trabajo realizado
                </p>
            </div>
            <div class="col-sm-12 centrado">
                <iframe scrolling="no" border="0" width="512" height="380" src="reconocimiento.php?formato=formato3&institucion=&nombre[]=">
                </iframe>
                <p class="description">
                    <input type="radio" required name="formato" value="formato3">&nbsp; Por empeño y dedicación
                </p>
            </div>

            <div class="col-sm-12">
                <h4 class="mb-5">
                    <b>Paso 3.</b> Escribe, copia o inserta la hoja de Excel con los nombres de cada una de las personas a las que se les otorgará el reconocimiento. (Uno por línea)
                </h4>
                <textarea class="form-control" required name="nombres" rows="10"></textarea>
            </div>
            <div class="col-sm-12">
                <h4 class="mb-5">
                    <p>
                        &nbsp;<br>&nbsp;<br>
                        <b>Paso 4:</b>  Haz clic en “GENERAR RECONOCIMIENTOS”
                    </p>
                </h4>
                <div class=" centrado">
                    <input class="btn btn-primary" type="submit" name="Enviar" value="GENERAR RECONOCIMIENTOS">
                </div>
            </div>
        </div>
    </form>

    <?php
    }?>

    <?php if( $_POST['Enviar'] == 'GENERAR RECONOCIMIENTOS')
    {
        $prefijo = $_POST['institucion'] . '-' . date('Y_m_d'). '-';
    ?>
    <h4 class="mb-5">
        <b>Paso 5:</b> Entrega tus reconocimientos:
    </h4>
        <ol style="list-style-type: lower-alpha" class="negro">
            <li>Enviando uno por uno vía correo a quien corresponda.</li>
            <li>Descargándolos a tu computadora como archivo PDF para imprimirlos y entregarlos en forma personal.</li>
        </ol>

    <form action="index.php" method="POST" role="form" autocomplete="off" id="myForm">
        <div class="form-row negro">
        <?php
            $todos ='?pdf=true&formato=' . $_POST['formato'] . '&institucion=' . $escuelas[$_POST['institucion']];

            $arr_nombres = explode(PHP_EOL, $_POST['nombres']);
            foreach ($arr_nombres as $clave => $nombre)
            {
                $nombre2 = mb_strtoupper($nombre);
                $nombre2 = preg_replace('/[ ]{2,}|[\t]/', ' ', trim($nombre2));
                $nombre2 = trim($nombre2);
                if(!empty( trim($nombre2)))
                {
                    $todos .= '&nombre[]=' . $nombre2;
                    
                    $uuid = uniqid($prefijo);

                    $myfile = fopen("datos/".$uuid . ".txt", "w") or die("No se pudo crear el archivo");
                    $txt = 'formato="' . $_POST['formato'] . '"
nombre="' . $nombre2 . '"
institucion="' . $escuelas[$_POST['institucion']] . '"';
                    fwrite($myfile, $txt);
                    fclose($myfile);

                    $mensaje = "Hola " . $nombre2 . "

Recibe por este medio un reconocimiento por tu trabajo.
Puedes verlo en línea en el siguiente link: $link?uuid=$uuid
O puedes descargarlo como PDF en este link: $link?pdf=true&uuid=$uuid
";
                    $mensaje = rawurlencode($mensaje);
                    $mensaje = str_replace('+','%20',$mensaje);
                    $mensaje = str_replace('_','%5F',$mensaje);
                    $mensaje = str_replace('.','%2E',$mensaje);
                    $mensaje = str_replace('-','%2D',$mensaje);
        ?>
            <div class="col-md-6">
                <?php echo $nombre2;?>
                <input type="hidden" value="<?php echo trim($nombre2)?>">
            </div>
            <div class="col-md-6">
                <a target="new" class="btn btn-warning" href="reconocimiento.php?uuid=<?php echo $uuid?>"> Vista Previa</a>

                <a target="new" class="btn btn-warning" href="reconocimiento.php?pdf=true&uuid=<?php echo $uuid?>"><i class="far fa-file-pdf"></i> Descargar PDF</a>

                <a target="new" class="btn btn-warning"
                id="btn_<?php echo $uuid;?>"
                onclick="marcar('<?php echo $uuid;?>')"
                href="mailto:?subject=Tu reconocimiento Lexium&body=<?php echo $mensaje;?>"><i class="far fa-envelope"></i> Enviar por email <i id="ch_<?php echo $uuid;?>" style="display:none" class="fas fa-check"></i></a>
            </div>
                    <?php 
                }
            }
        ?>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <a target="new" href="reconocimiento.php<?php echo $todos?>" class="btn btn-primary">Generar todos los diplomas <i class="far fa-file-pdf"></i><a/>
            </div>
        </div>
    </form>
    <?php
    }?>

</div>


<?php include('../footer.php'); ?>
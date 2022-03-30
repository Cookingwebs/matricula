<?php
error_reporting(0);
$msgerror = '';
$msgsuccess='';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


/* Datos personales */
$dni = $_POST['dni'];
$sexo = $_POST['sexo'];
$dateN = $_POST['dateN'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$firstname = $_POST['firstname'];
$telefono = $_POST['telefono'];
$mailfrom = $_POST['mailfrom'];
$localidad = $_POST['localidad'];
$provincia = $_POST['provincia'];
$cp = $_POST['cp'];
$domicilio = $_POST['domicilio'];

/* Modalidad */
$modalidad = $_POST['modalidad'];

/* Método de pago */
$tipoDePago = $_POST['tipoDePago'];
$dateI = $_POST['dateI'];
$cuota = $_POST['cuota'];

/* Datos de Financiación */

$inlineRadio1 = $_POST['datosFinanciacion'];
if( $inlineRadio1 == "1"){
	$dniF = $_POST['dni'];
	$sexoF = $_POST['sexo'];
	$dateNF = $_POST['dateN'];
	$apellido1F = $_POST['apellido1'];
	$apellido2F = $_POST['apellido2'];
	$firstnameF = $_POST['firstname'];
	$telefonoF = $_POST['telefono'];
	$mailfromF = $_POST['mailfrom'];
	$localidadF = $_POST['localidad'];
	$provinciaF = $_POST['provincia'];
	$cpF = $_POST['cp'];
	$domicilioF = $_POST['domicilio'];
}else{
	$dniF = $_POST['dniF'];
	$sexoF = $_POST['sexoF'];
	$dateNF = $_POST['dateNF'];
	$apellido1F = $_POST['apellido1F'];
	$apellido2F = $_POST['apellido2F'];
	$firstnameF = $_POST['nombreF'];
	$telefonoF = $_POST['telefonoF'];
	$mailfromF = $_POST['mailfromF'];
	$localidadF = $_POST['localidadF'];
	$provinciaF = $_POST['provinciaF'];
	$cpF = $_POST['cpF'];
	$domicilioF = $_POST['domicilioF'];
}

/* Datos de Facturación */
$dniFacT = $_POST['dniFacT'];
$nombreFacT = $_POST['nombreFacT'];
$numCuentaFacT = $_POST['numCuentaFacT'];

/* Firma */
$img = $_POST['img'];


$mailto = 'juanmarcos@ayudatpymes.org, matriculas@ayudatpymes.org, '.$mailfrom;
$mailsubject = "Ficha matrícula Master";

$content = '';

$content .= '
		<style>
		.contenido{
			padding-left:20px;
			max-width: 80%;
margin: 0 auto;
		}
		.contenido-firma{
			padding-left:20px;
			max-width: 80%;
margin: 0 auto;
margin-top:100px;
		}
p{
margin-right: 20px;
font-size: 15px;
color: #8d919a;
margin-bottom: 0;
}
h2{
	font-size: 23px;
	font-weight: bold;
	color: #00216a;
	margin-top: 70px;
	border-bottom: 1px solid #00216a;
	padding-bottom: 10px;
}
table{
	width: 700px;
}
		</style>

		';
/* Tu css */

// $content .= '<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm">';
$content .= '<div style="background-color: #12ccd1;padding-top: 40px;">';
$content .= '<h1 style="color:#12ccd1;text-align:right;font-weight: normal;padding-right:20px;background-color: #fff;width: 450px;margin: 0 0 0 auto;padding-top: 30px;">FICHA DE MATRICULACIÓN</h1>';
$content .= '</div>';
$content .= '<div class="contenido">';


$content .= '<h2>DATOS PERSONALES</h2>';
$content .= '<table>';
$content .= '<tr>';
$content .= '<td><p style="display:inline-block; margin-right:20px"><b>DNI o NIE:</b><br> ' . $dni . '</p></td><td><p style="display:inline-block; margin-right:20px"><b>Sexo:</b><br> ' . $sexo . '</p></td><td><p style="display:inline-block"><b>Fecha de nacimiento:</b><br> ' . $dateN . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p style="display:inline-block; margin-right:20px"><b>1er Apellido:</b><br> ' . $apellido1 . '</p></td><td><p style="display:inline-block; margin-right:20px"><b>2º Apellido:</b><br> ' . $apellido2 . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Nombre:</b><br> ' . $firstname . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Localidad:</b><br> ' . $localidad . '</p></td><td><p><b>Provincia:</b><br> ' . $provincia . '</p></td><td><p><b>Código Postal:</b><br> ' . $cp . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Domicilio:</b><br> ' . $domicilio . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Teléfono:</b><br> ' . $telefono . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Email:</b><br> ' . $mailfrom . '</p></td>';
$content .= '</tr>';
$content .= '</table>';

$content .= '<h2>MODALIDAD</h2>';
$content .= '<p><b>' . $modalidad . '</b></p>';

$content .= '<h2>MÉTODO DE PAGO</h2>';
$content .= '<p><b>Tipo de pago:</b><br> ' . $tipoDePago . '</p>';
$content .= '<p>Si se ha seleccionado "financiación":</p>';
$content .= '<p><b>Fecha de inicio de financiación:</b><br> ' . $dateI . '</p>';
$content .= '<p><b>Cuota de financiación:</b><br> ' . $cuota . '</p>';

$content .= '<h2>DATOS FINANCIACIÓN</h2>';
$content .= '<table>';
$content .= '<tr>';
$content .= '<td><p style="display:inline-block; margin-right:20px"><b>DNI o NIE:</b><br> ' . $dniF . '</p></td><td><p style="display:inline-block; margin-right:20px"><b>Sexo:</b><br> ' . $sexoF . '</p></td><td><p style="display:inline-block"><b>Fecha de nacimiento:</b><br> ' . $dateNF . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p style="display:inline-block; margin-right:20px"><b>1er Apellido:</b><br> ' . $apellido1F . '</p></td><td><p style="display:inline-block; margin-right:20px"><b>2º Apellido:</b><br> ' . $apellido2F . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Nombre:</b><br> ' . $firstnameF . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Localidad:</b><br> ' . $localidadF . '</p></td><td><p><b>Provincia:</b><br> ' . $provinciaF . '</p></td><td><p><b>Código Postal:</b><br> ' . $cpF . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Domicilio:</b><br> ' . $domicilioF . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Teléfono:</b><br> ' . $telefonoF . '</p></td>';
$content .= '</tr>';
$content .= '<tr>';
$content .= '<td><p><b>Email:</b><br> ' . $mailfromF . '</p></td>';
$content .= '</tr>';
$content .= '</table>';
// $content .= '</page>';
// $content .= '<page backtop="7mm" backbottom="7mm" backleft="10mm" backright="10mm"> ';

$content .= '<h2 style="margin-top:100px">DATOS FACTURACIÓN (en caso de cuotas mensuales)</h2>';
$content .= '<p><b>DNI:</b><br> ' . $dniFacT . '</p>';
$content .= '<p><b>Nombre Completo:</b><br> ' . $nombreFacT . '</p>';
$content .= '<p><b>Nº de cuenta:</b><br> ' . $numCuentaFacT . '</p>';
$content .= '</div>';
$content .= '<div class="contenido-firma">';
$content .= '<p><b>El solicitante acepta la política de privacidad y condiciones de ventas.</b></p>';
$content .= '<p><b>Fecha de matriculación '. date("d").' del '. date("m").' de '. date("Y").'</b></p>';
$content .= '<img style="display:inline-block;" src="'.$img.'" alt="Logo"><img style="display:inline-block;" src="firma.jpg" alt="">';
$content .= '</div>';
// $content .= '</page>';
// LLmamos a la biblioteca para la creacion del PDF
require_once('html2pdf/html2pdf.class.php');

// Declaramos el formato del documento PDF
$html2pdf = new HTML2PDF('P', 'A4', 'es', array(10, 7, 10, 7));

$html2pdf = new HTML2PDF('P', 'A4', 'es', array(10, 7, 10, 7));
$html2pdf->WriteHTML($content);

$mailto = 'matriculas@ayudatpymes.org, juanmarcos@ayudatpymes.org, '.$mailfrom;
$mailsubject = "Ficha matrícula ";

$to = $mailto;
$from = $mailfrom;
$subject = $mailsubject;

$message = "<p>Consulte el archivo adjunto.</p>";
$separator = md5(time());
$eol = PHP_EOL;
$filename = "pdf-documento.pdf";
$pdfdoc = $html2pdf->Output('', 'S');
$attachment = chunk_split(base64_encode($pdfdoc));

// echo $content;


$headers = "From: " . $from . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol . $eol;

$body = '';

$body .= "Content-Transfer-Encoding: 7bit" . $eol;
$body .= "This is a MIME encoded message." . $eol; //had one more .$eol


$body .= "--" . $separator . $eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
$body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
$body .= $message . $eol;


$body .= "--" . $separator . $eol;
$body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
$body .= "Content-Transfer-Encoding: base64" . $eol;
$body .= "Content-Disposition: attachment" . $eol . $eol;
$body .= $attachment . $eol;
$body .= "--" . $separator . "--";

if (mail($to, $subject, $body, $headers)) {

	$msgsuccess = 'Email enviado Correctamente';
} else {

	$msgerror = 'Email no ha sido enviado';
}


}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ficha Matrícula</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Eczar:400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<style media="screen">
	.form-check-input {
		margin-left: 10px;
	}
	h2{
		text-transform: uppercase;
		color: #00216a;
		border-bottom: 1px solid #00216a;
		padding-bottom: 15px;
		margin-bottom: 15px;
		    margin-top: 50px;
	}
	.hidden{
		display: none;
	}
	.row.firmas.preview {
    margin-bottom: 20px;
}
#footer{
	background-color: #00216a;
	min-height: 100px;
	margin-top: 50px;
}
.addFirma_m{
	display: none;
}
@media(max-width: 980px){
	.addFirma_m{
		display: inline-block;
		cursor: pointer;
		color: #fff !important;
		margin-bottom: 30px;
	}
	.bloque-firma{
		display: none;
		top: 0;
    position: fixed;
    height: 100vh;
    background-color: #00000052;
    right: 0;
    left: 0;
    text-align: center;
	}
	canvas#colors_sketch {
    margin-top: 40%;
    background-color: #fff;
}
.bloque-firma .secondary-nav{
	padding-left: 7%;
    padding-top: 5%;
}
}
	</style>
	<div class="wrapper" id="matricula">

		 <div class="main">
			 <div class="container-fluid">
		 		<div class="row justify-content-center p-0" style="background-color:#12ccd1">
		 			<div class="col-11 col-lg-8" style="padding-top: 40px;">
		 				<h1 class="text-center" style="background-color:#fff;color:#12ccd1;margin-bottom: 0;max-width: 450px;margin-left: auto;">FICHA DE MATRÍCULA</h1>
		 			</div>
		 		</div>
		 	<div class="row justify-content-center">
		 		<div class="col-11 col-lg-8">

<?php
if ($msgerror) {
?>
			<div class="alert alert-danger"><?php echo $msgerror; ?></div>
		<?php } else if ($msgsuccess) { ?>
			<div class="alert alert-success"><?php echo $msgsuccess; ?></div>
		<?php } ?>

		<div class="form">
<form class="form-horizontal" action="" method="post">





	<h2  style="margin-top: 50px">Datos personales</h2>

	<div class="form-group">
		<label class="control-label col-sm-2" for="dni">DNI o NIE:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="dni" placeholder="DNI o NIE" name="dni" value="<?php echo $_POST['dni']; ?>" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="sexo">Sexo:</label>
		<div class="col-sm-10">
			<select class="form-control" name="sexo" required>
				<option value="Hombre">Hombre</option>
				<option value="Mujer">Mujer</option>
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="dateN">Fecha de nacimiento:</label>
		<div class="col-sm-10">
			<input type="date" class="form-control" id="dateN" placeholder="Fecha de nacimiento" name="dateN" value="<?php echo $_POST['dateN']; ?>" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="apellido1">1º Apellido:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="apellido1" placeholder="Ingrese Apellidos" name="apellido1" value="<?php echo $_POST['apellido1']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="apellido2">2º Apellido:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="apellido2" placeholder="Ingrese Apellidos" name="apellido2" value="<?php echo $_POST['apellido2']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="firstname">Nombres:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="firstname" placeholder="Ingrese Nombres" name="firstname" value="<?php echo $_POST['firstname']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="localidad">Localidad:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="localidad" placeholder="Ingrese Localidad" name="localidad" value="<?php echo $_POST['localidad']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="provincia">Provincia:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="provincia" placeholder="Ingrese Provincia" name="provincia" value="<?php echo $_POST['provincia']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="cp">Código postal:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="cp" placeholder="Ingrese Código postal" name="cp" value="<?php echo $_POST['cp']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="domicilio">Domicilio:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="domicilio" placeholder="Ingrese Domicilio" name="domicilio" value="<?php echo $_POST['domicilio']; ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="telefono">Teléfono móvil:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="telefono" placeholder="Ingrese Nombres" name="telefono" value="<?php echo $_POST['telefono']; ?>" required>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="mailfrom">Email de contacto:</label>
		<div class="col-sm-10">
			<input type="email" class="form-control" id="mailfrom" placeholder="Ingrese Email De" name="mailfrom" value="<?php echo $_POST['mailfrom']; ?>" required>
		</div>
	</div>


	<h2 style="margin-top: 50px">Modalidad</h2>
	<div class="form-group">
	<div class="form-check">
		<label class="form-check-label" for="online">Online</label>
			<input class="form-check-input" type="radio" name="modalidad" id="online" value="Online" checked>
		</div>
		<div class="form-check">
			<label class="form-check-label" for="presencial">Presencial</label>
			<input class="form-check-input" type="radio" name="modalidad" id="presencial" value="Presencial">
		</div>
		<div class="form-check">
			<label class="form-check-label" for="streaming">Streaming</label>
			<input class="form-check-input" type="radio" name="modalidad" id="streaming" value="Streaming">
		</div>
		</div>

	<h2 style="margin-top: 50px">Método de pago</h2>
	<div class="form-group">
	<div class="form-check">
		<label class="form-check-label" for="inlineRadio1">Pago íntegro:</label>
			<input class="form-check-input" type="radio" name="tipoDePago" id="inlineRadio1" value="Íntegro" checked>
		</div>
		<div class="form-check">
			<label class="form-check-label" for="inlineRadio2">Financiación</label>
			<input class="form-check-input" type="radio" name="tipoDePago" id="inlineRadio2" value="Financiación">
		</div>
		</div>

<div class="hidden financiacion">

		<div class="form-group">
			<label class="control-label col-sm-2" for="dateI">Mes de inicio:</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="dateI" placeholder="Mes de inicio" name="dateI" value="<?php echo $_POST['dateI']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="cuota">Cuota elegida:</label>
			<div class="col-sm-10">
				<select class="form-control" name="cuota" id="cuotaTramo">
					<option value=""></option>
					<option value="665,80">3 meses</option>
					<option value="338,30">6 meses</option>
					<option value="174,55">12 meses</option>
					<option value="119,96">18 meses</option>
					<option value="92,67">24 meses</option>
				</select>
			</div>
		</div>

		<h2 style="margin-top: 50px">Datos financiación</h2>
		<div class="form-group">
		<div class="form-check">
			<label class="form-check-label" for="inlineRadio1">Utilizar mismos datos del  alumno:</label>
				<input class="form-check-input" type="radio" name="datosFinanciacion" id="inlineRadio12" value="1" checked>
			</div>
			<div class="form-check">
				<label class="form-check-label" for="inlineRadio2">Otros datos para la financiación:</label>
				<input class="form-check-input" type="radio" name="datosFinanciacion" id="inlineRadio22" value="2">
			</div>
			</div>
			<div class="hidden datos-financiacion">
		<div class="form-group">
			<label class="control-label col-sm-2" for="dniF">DNI o NIE:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="dniF" placeholder="DNI o NIE" name="dniF" value="<?php echo $_POST['dniF']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="sexoF">Sexo:</label>
			<div class="col-sm-10">
				<select class="form-control" name="sexoF">
					<option value="Hombre">Hombre</option>
					<option value="Mujer">Mujer</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="dateNF">Fecha de nacimiento:</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="dateNF" placeholder="Fecha de nacimiento" name="dateNF" value="<?php echo $_POST['dateNF']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="apellido1F">1º Apellido:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="apellido1F" placeholder="Ingrese Apellidos" name="apellido1F" value="<?php echo $_POST['apellido1F']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="apellido2F">2º Apellido:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="apellido2F" placeholder="Ingrese Apellidos" name="apellido2F" value="<?php echo $_POST['apellido2F']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombreF">Nombres:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nombreF" placeholder="Ingrese Nombres" name="nombreF" value="<?php echo $_POST['nombreF']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="localidadF">Localidad:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="localidadF" placeholder="Ingrese Localidad" name="localidadF" value="<?php echo $_POST['localidadF']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="provinciaF">Provincia:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="provinciaF" placeholder="Ingrese Provincia" name="provinciaF" value="<?php echo $_POST['provinciaF']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="cpF">Código postal:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="cpF" placeholder="Ingrese Código postal" name="cpF" value="<?php echo $_POST['cpF']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="domicilioF">Domicilio:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="domicilioF" placeholder="Ingrese Domicilio" name="domicilioF" value="<?php echo $_POST['domicilioF']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="telefonoF">Teléfono móvil:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="telefonoF" placeholder="Ingrese Nombres" name="telefonoF" value="<?php echo $_POST['telefonoF']; ?>">
			</div>
		</div>

		<div class="form-group">
			<label class="control-label col-sm-2" for="mailfromF">Email de contacto:</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="mailfromF" placeholder="Ingrese Email De" name="mailfromF" value="<?php echo $_POST['mailfromF']; ?>">
			</div>
		</div>
		</div>

		<h4 style="margin-top: 50px">DATOS FACTURACIÓN (en caso de cuotas mensuales)</h4>

		<div class="form-group">
			<label class="control-label col-sm-2" for="dniFacT">DNI:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="dniFacT" placeholder="DNI o NIE" name="dniFacT" value="<?php echo $_POST['dniFacT']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="nombreFacT">Nombre completo:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nombreFacT" placeholder="Nombre completo" name="nombreFacT" value="<?php echo $_POST['nombreFacT']; ?>">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="numCuentaFacT">Número de cuenta:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="numCuentaFacT" placeholder="Número de cuenta" name="numCuentaFacT" value="<?php echo $_POST['numCuentaFacT']; ?>">
			</div>
		</div>

	</div>
		<h2>Firma</h2>
		<div class="bloque-firma">
		<canvas id="colors_sketch" width="320" height="200" style="border: 1px solid #ccc">
		</canvas>
		<ul class="nav secondary-nav">
		<input style="margin-right:20px" type="button" class="btn btn-primary" value="Borrar"
		onclick="sketcher.clear();" />
		<input type="button" id="btnSave" class="btn btn-primary" value="Guardar Firma" />
		</ul>
	</div>
	<a class="addFirma_m btn btn-primary">Añadir Firma (obligatorio)</a>
		<div class="row firmas preview">
			<div class="col-lg-12">
					<p class="previewh4" style="display:none">Previsualización de las firmas</p>
			</div>

			<div class="col-lg-5">
				<img id = "imgCapture" alt = "" style = "display:none;border:1px solid #ccc" />
				<input type="hidden" name="img" value="" id="imagen1"/>
			</div>
		</div>
<p style="font-size:12px">Autorizo a AYUDA T LEARNING S.L. para que gestione mis datos de carácter personal en
interés de la gestión formativa y académica.</p>
		<p style="font-size:12px">El solicitante acepta la <a href="politica_privacidad.php" target="_blank">política de privacidad</a> y <a href="condiciones-venta.php" target="_blank">condiciones de ventas.</a></p>
  <p style="font-size:12px">Cedo a AYUDA T LEARNING SL la totalidad de los derechos que pudieran corresponderle sobre mi voz e imagenes, grabadas o captadas con motivo u ocasión de las webinars en directo con el resto de compañeros que se realiza semanalmente, autorizando solo la utilización de (captación, reproducción y difusión) de las mencionadas imagenes, o de parte de las mismas, dentro del campus virtual del Master Asesor Experto en gestión fiscal, laboral y contabilidad.</p>
	<div class="form-group">
		<div>
			<button type="submit" class="btn btn-success">Crear y Enviar Ficha de Matrícula</button>
			<small id="emailHelp" class="form-text text-muted">Asegurese de que los datos son correctos.</small>
		</div>
	</div>
</form>
</div>

</div>
</div>

	</div>
</div>

	</div>

	<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.rawgit.com/mobomo/sketch.js/master/lib/sketch.min.js" type="text/javascript"></script>
<script src="modernizr.custom.34982.js"></script>
	<script src="sketcher.js"></script>
	 <script src="trigonometry.js"></script>
	 <script type="text/javascript">
 	  $(document).ready(function(){

 	    $('#online').change(function() {
 	            if($(this).is(":checked")) {
 	                $('#cuotaTramo').html(`
					 <option value=""></option>
					<option value="665,80">3 meses</option>
					<option value="338,30">6 meses</option>
					<option value="174,55">12 meses</option>
					<option value="119,96">18 meses</option>
					<option value="92,67">24 meses</option>
					 `);
 	            }
 	        });
 	    $('#presencial').change(function() {
				if($(this).is(":checked")) {
 	                $('#cuotaTramo').html(`
					 <option value=""></option>
					<option value="1000,80">3 meses</option>
					<option value="508,80">6 meses</option>
					<option value="262,80">12 meses</option>
					<option value="180,80">18 meses</option>
					<option value="139,80">24 meses</option>
					 `);
 	            }
 	        });
 	    $('#streaming').change(function() {
				if($(this).is(":checked")) {
 	                $('#cuotaTramo').html(`
					 <option value=""></option>
					<option value="779,86">3 meses</option>
					<option value="396,53">6 meses</option>
					<option value="204,86">12 meses</option>
					<option value="140,97">18 meses</option>
					<option value="109,03">24 meses</option>
					 `);
 	            }
 	        });
 	    $('#inlineRadio2').change(function() {
 	            if($(this).is(":checked")) {
 	                $('.financiacion.hidden').fadeIn();
 	            }else{
 	              $('.financiacion.hidden').fadeOut();
 	            }
 	        });
 	    $('#inlineRadio1').change(function() {
 	            if($(this).is(":checked")) {
 	                $('.financiacion.hidden').fadeOut();
 	            }else{
 	              $('.financiacion.hidden').fadeIn();
 	            }
 	        });
 	    $('#inlineRadio22').change(function() {
 	            if($(this).is(":checked")) {
 	                $('.datos-financiacion.hidden').fadeIn();
 	            }else{
 	              $('.datos-financiacion.hidden').fadeOut();
 	            }
 	        });
 	    $('#inlineRadio12').change(function() {
 	            if($(this).is(":checked")) {
 	                $('.datos-financiacion.hidden').fadeOut();
 	            }else{
 	              $('.datos-financiacion.hidden').fadeIn();
 	            }
 	        });
					$('.addFirma_m').on('click', function(){
						$('.bloque-firma').fadeIn();
						$('body').css('overflow-y', 'hidden');
					});
 				});
 				</script>
	<script type="text/javascript">
	$(function () {
	sketcher = new Sketcher( "colors_sketch" );
	$("#btnSave").bind("click", function () {
			$('.previewh4').show();
			var base64 = $('#colors_sketch')[0].toDataURL();
			$("#imgCapture").attr("src", base64);
			$("#imgCapture").show();
			$('#imagen1').attr("value", base64);
				$('.bloque-firma').fadeOut();
				$('body').css('overflow-y', 'initial');

	});



	});
	</script>
	<div class="container-fluid" id="footer">
		<div class="row justify-content-center">
			<div class="col-lg-8">

			</div>
		</div>
	</div>
</body>
</html>

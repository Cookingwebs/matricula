<?php
if(isset($_POST)){
  $nombreVend = $_POST['nombreVend'];
  $nifVend = $_POST['nifVend'];
  $direccionVend = $_POST['direccionVend'];
  $representanteVend = $_POST['representanteVend'];
  $nifRepresentanteVend = $_POST['nifRepresentanteVend'];

  $nombreComp = $_POST['nombreComp'];
  $nifComp = $_POST['nifComp'];
  $direccionComp = $_POST['direccionComp'];
  $representanteComp = $_POST['representanteComp'];
  $nifRepresentanteComp = $_POST['nifRepresentanteComp'];

  $modelo = $_POST['modelo'];
  $matricula = $_POST['matricula'];
  $bastidor = $_POST['bastidor'];
  $km = $_POST['km'];
  $fecha = $_POST['fecha'];
  $precio = $_POST['precio'];

  $img = $_POST['img'];
  $img2 = $_POST['img2'];
}

?>

<style type="text/css">
<!--
table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
-->
</style>
<page backcolor="#FEFEFE"  backimgx="center" backimgy="bottom" backimgw="100%" backtop="0" backbottom="30mm" backleft="10mm" backright="10mm" backtop="10mm" footer="date;time;page" style="font-size: 10pt">
    <bookmark title="Lettre" level="0" ></bookmark>

    <h3 style="text-align:center">Contrato de compraventa de un vehículo usado</h3>
    <p>
    <b>Datos del vendedor</b>
    </p>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 80%; text-align: left">
            <col style="width: 20%; text-align: left">

        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">NOMBRE/EMPRESA</th>
                <th style="border-bottom: solid 1px #777; padding:5px 10px;">NIE/NIF/CIF</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $nombreVend ?></td>
                <td style="padding:10px;"><?php echo $nifVend ?></td>

            </tr>
        </tbody>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 100%; text-align: left">


        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">DOMICILIO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $direccionVend ?></td>


            </tr>
        </tbody>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 80%; text-align: left">
            <col style="width: 20%; text-align: left">

        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">REPRESENTANTE DE LA EMPRESA</th>
                <th style="border-bottom: solid 1px #777; padding:5px 10px;">NIE/NIF</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $representanteVend ?></td>
                <td style="padding:10px;"><?php echo $nifRepresentanteVend ?></td>

            </tr>
        </tbody>
    </table>
<br><br>
    <p>
    <b>Datos del comprador</b>

    </p>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 80%; text-align: left">
            <col style="width: 20%; text-align: left">

        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">NOMBRE/EMPRESA</th>
                <th style="border-bottom: solid 1px #777; padding:5px 10px;">NIE/NIF/CIF</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $nombreComp ?></td>
                <td style="padding:10px;"><?php echo $nifComp ?></td>

            </tr>
        </tbody>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 100%; text-align: left">


        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">DOMICILIO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $direccionComp ?></td>


            </tr>
        </tbody>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 80%; text-align: left">
            <col style="width: 20%; text-align: left">

        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">REPRESENTANTE DE LA EMPRESA</th>
                <th style="border-bottom: solid 1px #777; padding:5px 10px;">NIE/NIF</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $representanteComp ?></td>
                <td style="padding:10px;"><?php echo $nifRepresentanteComp ?></td>

            </tr>
        </tbody>
    </table>
    <br><br>
    <p>
    <b>Datos del vehículo</b>
    </p>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 100%; text-align: left">


        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">MARCA Y MODELO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $modelo ?></td>


            </tr>
        </tbody>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 20%; text-align: left">
            <col style="width: 80%; text-align: left">

        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">MATRICULA</th>
                <th style="border-bottom: solid 1px #777; padding:5px 10px;">Nº DE BASTIDOR</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $matricula ?></td>
                <td style="padding:10px;"><?php echo $bastidor ?></td>

            </tr>
        </tbody>
    </table>
    <table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt;">
        <colgroup>
            <col style="width: 20%; text-align: left">
            <col style="width: 80%; text-align: left">

        </colgroup>
        <thead>
            <tr style="background: #E7E7E7; color: #777">
                <th style="border-bottom: solid 1px #777; border-right:solid 1px white; padding:5px 10px;">KM</th>
                <th style="border-bottom: solid 1px #777; padding:5px 10px;">FECHA DE 1ª NATRICULACIÓN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding:10px;"><?php echo $km ?></td>
                <td style="padding:10px;"><?php echo $fecha ?></td>

            </tr>
        </tbody>
    </table>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>Ambas partes actúan en nombre propio, o en la representación otrogada, se reconocen mutua capacidad y, estando previamente de acuerdo, formalizan la compraventa conforme a las siguientes:</p>
    <p><b>Cláusulas</b></p>
    <ol>
<li>El vendedor declara que el mencionado vehículo es de su legítima propiedad, lo vende y entrega en este acto al comprador, recibiéndolo este último a su completa satisfacción.</li>
<li>El precio de la compraventa, teniendo en cuenta las características del vehículo. su naturaleza de bien usado, el estado que presentan sus componentes, su antigüedad y kilómetros recorridos, se pacta de común acuerdo en <?php echo $precio ?>€. </li>
<li>El vendedor manifiesta que sobre el vehículo no pesa ninguna carga, impuesto ni deuda de clase alguna pendiente de liquidación a la fecha de este contrato, obligándose a estar en entera indemnidad a favor del comprador de cualquier reclamación.</li>
<li>El vendendor facilita y firma en este acto todos los documentos necesarios para que el vehículo quede instrito a nombre del comprador en la Dirección General de Tráfico.</li>
<li>El comprador se hace cargo desde este momento, de todas las responsabilidades que se puedan contraer como consecuencia de la propiedad del vehículo descrito que acepta, para su tenencia o uso. </li>
</ol>
<br>
<br>
<br>
<table cellspacing="0" style="width: 100%; border: solid 1px white; background: #FFF; font-size: 10pt; padding: 0 20px">
    <colgroup>
        <col style="width: 50%; text-align: center">
        <col style="width: 50%; text-align: center">

    </colgroup>
    <thead>
        <tr style="background: #FFF; color: black">
            <th style=" padding:5px 10px;">Firma del vendedor</th>
            <th style=" padding:5px 10px;">Firma del vendedor</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding:10px;"><img style="width: 100%;" src="<?php echo $img ?>" alt="Logo"></td>
            <td style="padding:10px;"><img style="width: 100%;" src="<?php echo $img2 ?>" alt="Logo"></td>

        </tr>
    </tbody>
</table>

</page>

<?php
$asunto     = "Contacto desde el Sitio Web";
$nombre     = $_POST['name'];
$email      = $_POST['email'];
$celular    = $_POST['celular'];
$cedula     = $_POST['cedula'];
$direccion  = $_POST['direccion'];
$edificio   = $_POST['edificio'];
$anio       = $_POST['anio'];
$pisos      = $_POST['pisos'];
$valor_inmueble = $_POST['valor_inmueble'];
$valor_equipos  = $_POST['valor_equipos'];
$valor_enseres  = $_POST['valor_enseres'];
/**
* CORREO DESTINO
*/
$dest ="cardenoso200@gmail.com";

var_dump($_POST);exit();
if(!empty($nombre) AND !empty($mensaje) AND !empty($email)){   
  $headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
  $headers .= "From: ".$nombre." <".$email."> \r\n";            
  $mensaje="
  <table border='0' cellspacing='2' cellpadding='2'>
    <tr>
      <td width='25%'><strong>Nombre:</strong></td>
      <td width='75%'>".$nombre."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Email:</strong></td>
      <td width='75%'>".$email."</td>
    </tr> 
    <tr>
      <td width='25%'><strong>Documento de Identidad.</strong></td>
      <td width='75%'>".$cedula."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Telefono(s):</strong></td>
      <td width='75%'>".$cedular."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Direccion:</strong></td>
      <td width='75%'>".$direccion." " . $edificio."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Año de Construccion:</strong></td>
      <td width='75%'>".$anio."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Pisos:</strong></td>
      <td width='75%'>".$pisos."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Valor Inmueble:</strong></td>
      <td width='75%'>".$valor_inmueble."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Valor Equipos:</strong></td>
      <td width='75%'>".$valor_equipos."</td>
    </tr>
    <tr>
      <td width='25%'><strong>Valor Enseres:</strong></td>
      <td width='75%'>".$valor_enseres."</td>
    </tr>
  </table>
  ";
  $send = @mail($dest,$asunto,$mensaje,$headers);   
  var_dump($send);exit();
  //Send the message, check for errors
  if(!$send) {
    $arrResult = array ('response'=>'error');
  }else{
    $arrResult = array ('response'=>'success');
  }
  echo json_encode($arrResult);

}else{
  $arrResult = array ('response'=>'error');
  echo json_encode($arrResult);
}
?>
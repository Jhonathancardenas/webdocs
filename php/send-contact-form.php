<?php

$asunto     = "Contacto desde el Sitio Web";

$mensaje = "<table border='0' cellspacing='2' cellpadding='2'>";
foreach ($_POST as $key => $value)
{
  $label = str_replace("_", " ",$key);
  $label = str_replace("anio", "Años",$key);
  $mensaje .= "
    <tr>
      <td width='25%'><strong>".ucwords($label)."</strong></td>
      <td width='75%'>".$value."</td>
    </tr>";
}
$mensaje .= "</table>";

/**
* CORREO DESTINO
*/
$dest ="cardenoso200@gmail.com";

if(!empty($_POST["nombre"]) AND !empty($_POST["email"])){   
  $headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
  $headers .= "From: ".$_POST["nombre"]." <".$_POST["email"]."> \r\n";            
  //$mensaje=;
  $send = @mail($dest,$asunto,$mensaje,$headers);   
  //Send the message, check for errors
  if(!$send) {
    $arrResult = array ('response'=>'Error en servidor de correo!');
  }else{
    $arrResult = array ('response'=>'success');
  }
  echo json_encode($arrResult);

}else{
  $arrResult = array ('response'=>'Error en campos obligatorios');
  echo json_encode($arrResult);
}
?>
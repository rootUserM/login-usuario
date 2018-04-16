<?php 
	require_once("dompdf/dompdf_config.inc.php");
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db("mpc",$conexion);

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>

<body>
<div align="center">
	<img src="img/logo3.png" width="100px" height="100px">
    <table width="95%" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>id</strong></td>
        <td bgcolor="#0099FF"><strong>Nombre</strong></td>
        <td bgcolor="#0099FF"><strong>apellido paterno</strong></td>
        <td bgcolor="#0099FF"><strong>apellido materno</strong></td>
        <td bgcolor="#0099FF"><strong>email</strong></td>
        <td bgcolor="#0099FF"><strong>correo</strong></td>
      </tr>';

        $consulta=mysql_query("SELECT * FROM usuarios");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
        <td>'.$dato['id'].'</td>
        <td>'.$dato['nombre'].'</td>
        <td>'.$dato['ap_paterno'].'</td>
        <td>'.$dato['ap_materno'].'</td>
        <td>'.$dato['email'].'</td>
        <td>'.$dato['password'].'</td>
      </tr>';
      } 
$codigoHTML.='
    </table>
	<img src="img/logo3.png" width="100px" height="100px">
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ListadoEmpleado.pdf");
?>
	
</body>
</html>
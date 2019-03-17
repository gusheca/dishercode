<?php

  include("config.php");
   
  $conexion=mysqli_connect($Servidor,$Usuario,$Password) or die("Error: El servidor no puede conectar con la base de datos");
  $descriptor=mysqli_select_db($conexion,$BaseDeDatos);

  mysqli_query($conexion,"SET NAMES 'UTF8'");//shanky
  
  // Se recuperan valores de parametros
  $query_tmp="SELECT * FROM parametros WHERE indice=1";
  $rs_tmp=mysqli_fetch_array(mysqli_query($conexion,$query_tmp));
  
  // Variables para la numeracion de facturas
  $numeracionfactura=$rs_tmp['numeracionfactura'];


// Variables para impresion de Facturas y Guias de Despacho
$imagenfac=$rs_tmp['imagenfac'];
$fondofac=$rs_tmp['fondofac'];
$imagenguia=$rs_tmp['imagenguia'];
$fondoguia=$rs_tmp['fondoguia'];
$FilasDetalleFactura=$rs_tmp['filasdetallefactura'];
  
// Variables de Impuesto y Moneda
$ivaimp=$rs_tmp['ivaimp'];
$nombremoneda=$rs_tmp['nombremoneda'];
$simbolomoneda=$rs_tmp['simbolomoneda'];
$codigomonedate=$rs_tmp['codigomoneda'];

// Personalizaci�n Empresa
$nomempresa=$rs_tmp['nomempresa'];
$giro=$rs_tmp['giro'];
$giro2=$rs_tmp['giro2'];
$fonos=$rs_tmp['fonos'];
$direccion=$rs_tmp['direccion'];
$comuna=$rs_tmp['comuna'];
$CiudadActual=$rs_tmp['ciudadactual'];
$numerofiscal=$rs_tmp['numerofiscal'];
$resolucionsii=$rs_tmp['resolucionsii'];
$rutempresa=$rs_tmp['rutempresa'];
?>

<?php
require 'conexion.php';

if (isset($_REQUEST["id"])) {
	$codigo = $_REQUEST["id"];
	$nombre=$_POST['txtName'];
	$apellido=$_POST['txtApellido'];
	$direccion=$_POST['txtDireccion'];
	$correo=$_POST['txtCorreo'];
	$NumCuenta=$_POST['txtnumero'];
	$Usuario=$_POST['txtusuario'];
	$Contrasena=$_POST['txtpassword'];
	$Ciudad=$_POST['cboCiudad'];
	$Tsocio=$_POST['cboTSocio'];
	
	$sql = "Update socio set Soc_Nombre='$nombre',Soc_Apellido='$apellido',ciu_codigo='$Ciudad',TSoc_Id_TSocio='$Tsocio',
	Soc_Direccion='$direccion',Soc_Correo='$correo',Soc_NumCuenta='$NumCuenta',Soc_Usuario='$Usuario',Soc_Password ='$Contrasena'
	where soc_IdSocio=$codigo";
	$rsSocio = mysql_query($sql);

	if (isset($rsSocio)){
		echo "Registro modificado...";
		header('Location: ../index.html');
	}
	else{
		echo 'ERROR. No se pudo modificar';
	}
}
?>
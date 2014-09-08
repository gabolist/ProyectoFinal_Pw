<?php
	require 'conexion.php';
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$nombre=$_POST['txtName'];
		$apellido=$_POST['txtApellido'];
		$direccion=$_POST['txtDireccion'];
		$correo=$_POST['txtCorreo'];
		$NumCuenta=$_POST['txtnumero'];
		$Usuario=$_POST['txtusuario'];
		$Contrasena=$_POST['txtpassword'];
		$Ciudad=$_POST['cboCiudad'];
		$Tsocio=$_POST['cboTSocio'];
		$sql = "Insert into socio(Soc_Nombre,Soc_Apellido,Soc_Estado,ciu_codigo,TSoc_Id_TSocio,
		Soc_Direccion,Soc_Correo,Soc_NumCuenta,Soc_Usuario,Soc_Password)
		values('$nombre','$apellido','Activo',$Ciudad,$Tsocio,'$direccion','$correo',
		$NumCuenta,'$Usuario' , '$Contrasena')";
		$rsSocio = mysql_query($sql);
		
		if (isset($rsSocio)){
			echo "Registro ingresado correctamente...";
			header('Location: ../index.html');
		}
		else{
			echo "ERROR. Registro no ingresado";
		}
	}
?>
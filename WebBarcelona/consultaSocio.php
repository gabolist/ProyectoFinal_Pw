<?php

require 'conexion.php';

	if (isset($_REQUEST["id"])){
		$sql= "update socio set Soc_Estado='Inactivo' where Soc_IdSocio=".$_REQUEST["id"];
		$rsEliminar= mysql_query($sql);
	
	}

	$sql = "select socio.Soc_IdSocio, socio.Soc_Nombre, socio.Soc_Apellido, ciudad.ciu_nombre,
			tsocio.TSoc_Tipo, socio.Soc_Direccion, socio.Soc_Correo, socio.Soc_NumCuenta, 
			socio.Soc_Usuario, socio.Soc_Password from socio, ciudad, tsocio where socio.Soc_Estado='Activo' and 
			socio.ciu_codigo=ciudad.ciu_codigo and socio.TSoc_Id_TSocio=tsocio.TSoc_Id_TSocio";
	$rsUsuario = mysql_query($sql);
	

?>
	<head>
		<link rel="stylesheet" type="text/css" href="css/consulta.css" media="screen" />
	</head>
	<body background="black">
	<div id="consulta">
	<table border="1">
		<tr>
			<td>CODIGO</td>
			<td>NOMBRE</td>
			<td>APELLIDOS</td>
			
			<td>CIUDAD</td>
			<td>TIPO DE SOCIO</td>
			<td>DIRECCION</td>
			<td>CORREO</td>
			<td>NUMERO DE CUENTA</td>
			<td>USUARIO</td>
			<td>CONTRASENA</td>
			<td colspan="2" >OPCIONES</td>
			
		</tr>
	<?php while ($arrUsuario = mysql_fetch_array($rsUsuario)){?>
	<tr>
		<td><?php echo $arrUsuario['Soc_IdSocio']?></td>
		<td><?php echo $arrUsuario['Soc_Nombre']?></td>
		<td><?php echo $arrUsuario['Soc_Apellido']?></td>
		<td><?php echo $arrUsuario['ciu_nombre']?></td>
		<td><?php echo $arrUsuario['TSoc_Tipo']?></td>
		<td><?php echo $arrUsuario['Soc_Direccion']?></td>
		<td><?php echo $arrUsuario['Soc_Correo']?></td>
		<td><?php echo $arrUsuario['Soc_NumCuenta']?></td>
		<td><?php echo $arrUsuario['Soc_Usuario']?></td>
		<td><?php echo $arrUsuario['Soc_Password']?></td>
		
		
		<td><a href="Socio/inscribirse.php? id=<?php echo $arrUsuario['Soc_IdSocio'];?>">Modificar</a></td> 
		<td><a href="consultaSocio.php? id=<?php echo $arrUsuario['Soc_IdSocio'];?>">Eliminar</a></td>
	
	</tr>	
	</div>
	</body>
	 <?php } 
		
	 ?>
</table>
	

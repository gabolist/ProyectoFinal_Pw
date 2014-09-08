<?php

require 'conexion.php';

	if (isset($_REQUEST["id"])){
		$sql= "update usuario set usu_estado='Inactivo' where usu_codigo=".$_REQUEST["id"];
		$rsEliminar= mysql_query($sql);
	
	}

	$sql = "select usuario.usu_usuario, usuario.usu_password, tsocio.TSoc_Tipo from usuario, tsocio
			where usuario.usu_estado='Activo' and usuario.Tsoc_id_TSocio= tsocio.Tsoc_id_TSocio";
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
			<td>USUARIO</td>
			<td>CONTRASENA</td>
			<td>TIPO DE USUARIO</td>
			<td>SOCIO</td>
			
			
			
			<td colspan="2" >OPCIONES</td>
			
		</tr>
	<?php while ($arrUsuario = mysql_fetch_array($rsUsuario)){?>
	<tr>
		<td><?php echo $arrUsuario['usu_id_usuario']?></td>
		<td><?php echo $arrUsuario['usu_usuario']?></td>
		<td><?php echo $arrUsuario['usu_password']?></td>
		<td><?php echo $arrUsuario['tusu_nombre']?></td>
		<td><?php echo $arrUsuario['Soc_Nombre']?></td>
		
		
		
		<td><a href="ingresoUsuario.php? id=<?php echo $arrUsuario['usu_id_usuario'];?>">Modificar</a></td> 
		<td><a href="consultaUsuario.php? id=<?php echo $arrUsuario['usu_id_usuario'];?>">Eliminar</a></td>
	
	</tr>	
	</div>
	</body>
	 <?php } 
		
	 ?>
</table>
	

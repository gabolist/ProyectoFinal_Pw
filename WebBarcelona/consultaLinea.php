<?php

require 'conexion.php';

	if (isset($_REQUEST["id"])){
		$sql= "update linea set lin_estado='Inactivo' where lin_codigo=".$_REQUEST["id"];
		$rsEliminar= mysql_query($sql);
	
	}

	$sql = "select * from linea";
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
			<td>DESCRIPCION</td>
			<
			
			<td colspan="2" >OPCIONES</td>
			
		</tr>
	<?php while ($arrUsuario = mysql_fetch_array($rsUsuario)){?>
	<tr>
		<td><?php echo $arrUsuario['lin_codigo']?></td>
		<td><?php echo $arrUsuario['lin_descripcion']?></td>

		
		
		
		<td><a href="ingresoProducto.php? id=<?php echo $arrUsuario['lin_codigo'];?>">Modificar</a></td> 
		<td><a href="consultaLinea.php? id=<?php echo $arrUsuario['lin_codigo'];?>">Eliminar</a></td>
	
	</tr>	
	</div>
	</body>
	 <?php } 
		
	 ?>
</table>
	

<?php

require 'conexion.php';

	if (isset($_REQUEST["id"])){
		$sql= "update producto set pro_estado='Inactivo' where pro_codigo=".$_REQUEST["id"];
		$rsEliminar= mysql_query($sql);
	
	}

	$sql = "select producto.pro_codigo, producto.pro_descripcion, linea.lin_descripcion from producto, linea 
		 	 where producto.pro_estado='Activo' and producto.lin_codigo=linea.lin_codigo";
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
			<td>LINEA</td>
			
			<td colspan="2" >OPCIONES</td>
			
		</tr>
	<?php while ($arrUsuario = mysql_fetch_array($rsUsuario)){?>
	<tr>
		<td><?php echo $arrUsuario['pro_codigo']?></td>
		<td><?php echo $arrUsuario['pro_descripcion']?></td>
		<td><?php echo $arrUsuario['lin_descripcion']?></td>
		
		
		
		<td><a href="ingresoProducto.php? id=<?php echo $arrUsuario['pro_codigo'];?>">Modificar</a></td> 
		<td><a href="consultaProducto.php? id=<?php echo $arrUsuario['pro_codigo'];?>">Eliminar</a></td>
	
	</tr>	
	</div>
	</body>
	 <?php } 
		
	 ?>
</table>
	

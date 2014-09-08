<?php
	require 'conexion.php';
	if (isset($_REQUEST['id'])){
		$sql= "select * from socio where Soc_Estado = 'Activo' and Soc_IdSocio = ".$_REQUEST['id'];
		$rsSocio = mysql_query($sql);
		$arrSocio = mysql_fetch_array($rsSocio);
	
	}	
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		

		<!--<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> -->	
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>BARCELONA SPORTING CLUB - Sitio NO Oficial</title>
		<meta name="description" content="Barcelona">
		<meta name="author" content="Liston">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" type="text/css" href="../css/index.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/elclub.css" media="screen" />
		<script language="JavaScript" type="text/javascript" src="../js/menu.js"> </script>
			
	</head>


	<body>
					<form <?php if(isset($_REQUEST["id"])){?>
									action="modificarProducto.php?id=<?php echo $arrSocio['pro_codigo']?>"
								<?php }else{?>
								 	action="ingresoProducto.php"
								 <?php }?>
								  method="POST"> 
					<table width="66%" height="400">
						<tr>
							<td align="left">
								<label ><a>PRODUCTO:</a></label>
							</td>
							<td>
								<input type="text" name="txtName" value="<?php if (isset($arrSocio['pro_descripcion'])) echo $arrSocio['pro_descripcion'];?>"/>
							</td>
							
						</tr>
						
						<tr>
							<?php  $sql="select * from linea";
							   $rsSocio = mysql_query($sql);?>
							<td>
								<label><a>LINEA:</a></label>
							</td>
							<td>
								<select name="cbolinea">
								<?php while($arrSocio = mysql_fetch_array($rsSocio)){?>
									<option value="<?php echo $arrSocio['lin_codigo'];?>">
										<?php echo $arrSocio['lin_nombre'];?>
									</option>
								<?php }?>
								</select>
								
								<td>
								
						</td>	
						<tr>
							<td>
								<input type="submit" value="GUARDAR" name="btnEnviar" />
							</td>
					</tr> 
						<!--	<tr>
							<td colspan="2">
								
								
							</td>
						</tr>-->	
		
					
						
					</table>
				</form>
				
				
			</table>
			

	</body>
	<footer align="center">
				<p align="center">
				 &copy; Copyright  by LIST
				</p>
			</footer>
</html>





	

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

<body background="../imagenes/estadio.jpg">
		
			<table align="center">
				<tr>
					<td colspan="2">
						<img src="../imagenes/portada2.png" />
						
					</td>	
				</tr>
				<tr>
					<td colspan="2">
						<div id="fecha"><a>
					<script>

						var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
						var f=new Date();
						document.write(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
						</script>
						</a>
						</div>
					</td>					
				</tr>
				<tr>
					<td colspan="2">
						
				<div id="navegador">
				  	<ul>
				    <li id="seccion1" >
				      <a href="../index.html">INICIO</a>
				    </li>
				    	<li id="seccion2"  onmouseover="ver(2)" onmouseout="ocultar(2)">
					    	<a href="#">EL CLUB</a>
					      		<div id="subseccion2">
						    		 <p align="left"><a href="../ElClub/Historia.html" > Historia</a></p>
						     		<p align="left"><a href="../ElClub/Himno.html"> Himno</a></p>
						     		<p align="left"><a href="../ElClub/Plantilla/Plantilla.html"> Plantilla</a></p>
					      		</div>			
				    	</li>
				    	<li id="seccion3" onmouseover="ver(3)" onmouseout="ocultar(3)">
				    		<a href="../Noticias/noticias.html">NOTICIAS</a>
						    	<div id="subseccion3">
						      	</div>	
				    	</li>
				    	<li id="seccion4" onmouseover="ver(4)" onmouseout="ocultar(4)">
				    		<a href="#">ESTADIO</a> 
				      			<div id="subseccion4">
				        			<p><a href="../Estadio/Infraestructura.html"> Infraestructura</a></p>
				        			<p><a href="../Estadio/ComoLLegar.html"> Como llegar</a></p>
				     		    </div>
				    	</li>
				    	<li id="seccion5" onmouseover="ver(5)" onmouseout="ocultar(5)">
				    		<a href="#">SOCIO</a> 
				      			<div id="subseccion5">
				        	        <p><a href="../Socio/Beneficios.html"> PLANES</a></p>
				        			<p><a href="#"> Inscribirse</a></p>
				             	</div>
				    	</li>
				    	<li id="seccion6" >
				    		<a href="https://es-es.facebook.com/barcelonascweb"> <img src="../imagenes/fb.png" /></a>
				        	<a href="https://twitter.com/BarcelonaSCweb"> <img src="../imagenes/twitter.png" /></a>
				   		 </li>
			 	 	</ul>
					
				</div>
			</td>				
		</tr>
	
					<form <?php if(isset($_REQUEST["id"])){?>
									action="modificarSocio.php?id=<?php echo $arrSocio['Soc_IdSocio']?>"
								<?php }else{?>
								 	action="Ingreso.php"
								 <?php }?>
								  method="POST"> 
					<table width="66%" height="400">
						<tr>
							<td align="left">
								<label ><a>Nombres:</a></label>
							</td>
							<td>
								<input type="text" name="txtName" value="<?php if (isset($arrSocio['Soc_Nombre'])) echo $arrSocio['Soc_Nombre'];?>"/>
							</td>
							
						</tr>
						<tr>
							<td align="left">
								<label ><a>Apellidos:</a></label>
							</td>
							<td>
								<input type="text" name="txtApellido" value="<?php if (isset($arrSocio['Soc_Apellido'])) echo $arrSocio['Soc_Apellido'];?>"/>
							</td>
						</tr>
						<tr>	
							<td>
								<label><a>Direcci&oacute;n:</a></label>
							</td>
							<td>
								<input type="text" name="txtDireccion" value="<?php if (isset($arrSocio['Soc_Direccion'])) echo $arrSocio['Soc_Direccion'];?>"/>
							</td>
						</tr>
						<tr>
							<?php  $sql="select * from ciudad";
							   $rsSocio = mysql_query($sql);?>
							<td>
								<label><a>Ciudad:</a></label>
							</td>
							<td>
								<select name="cboCiudad">
								<?php while($arrSocio = mysql_fetch_array($rsSocio)){?>
									<option value="<?php echo $arrSocio['ciu_codigo'];?>">
										<?php echo $arrSocio['ciu_nombre'];?>
									</option>
								<?php }?>
								</select>
								
								
								
								
								
							</td>
						</tr>
						<tr>
							<td>
								<label><a>Correo:</a></label>
							</td>
							<td>
								<input type="text" name="txtCorreo" value="<?php if (isset($arrSocio['Soc_Correo'])) echo $arrSocio['Soc_Correo'];?>"/>
							</td>
						</tr>
						
						<tr>
							<td>
								<label><a>N&uacute;mero de Cuenta:</a></label>
							</td>
							<td>
								<input type="text" name="txtnumero" value="<?php if (isset($arrSocio['Soc_NumCuenta'])) echo $arrSocio['Soc_NumCuenta'];?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<label><a>Usuario:</a></label>
							</td>
							<td>
								<input type="text" name="txtusuario" value="<?php if (isset($arrSocio['Soc_Usuario'])) echo $arrSocio['Soc_Usuario'];?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<label><a>Password:</a></label>
							</td>
							<td>
								<input type="text" name="txtpassword" value="<?php if (isset($arrSocio['Soc_Password'])) echo $arrSocio['Soc_Password'];?>"/>
							</td>
						</tr>
						<tr>
							<td>
								<?php $sql="select * from tsocio";
								$rsSocio = mysql_query($sql);?>
								<label><a>Tipo de Socio:</a></label>
							</td>
							<td>
								<select name="cboTSocio">
								<?php while($arrSocio = mysql_fetch_array($rsSocio)){?>
									<option value ="<?php echo $arrSocio['TSoc_Id_TSocio'];?>">
										<?php echo $arrSocio['TSoc_Tipo'];?>
									</option>
								<?php }?>
									
								</select>
							</td>
						</tr>
						
				<tr>
							<td>
								<input type="submit" value="INSCRIBIRSE" name="btnEnviar" />
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





	

<?php
                  if(isset($_POST["publicarNacido"])){
		   				$usuario = "root";
		   				$password = "";
		   				$servidor = "localhost";
		   				$baseDatos = "obituario";
		   				$conexion = new mysqli($servidor,$usuario,$password,$baseDatos);		   
 		   				$nacido = $_POST["nombreNacido"];
		   				$fechaNacido = $_POST["fechaNacimiento"];
                   		$sql = "INSERT INTO nacidos (nombreNacido, fechaNacimiento) VALUES ('$nacido', '$fechaNacido')";                                      			      			      			                        				   
		           		$conexion->query($sql);             
		  				$conexion->close();
                  }
				  echo "<a href='javascript:history.back();'>Ir a la pagina anterior</a>";                
?>
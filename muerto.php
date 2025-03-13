<?php
                  if(isset($_POST["publicarMuerto"])){
		   				$usuario = "root";
		   				$password = "";
		   				$servidor = "localhost";
		   				$baseDatos = "obituario";
		   				$conexion = new mysqli($servidor,$usuario,$password,$baseDatos);		   
 		   				$muerto = $_POST["nombreMuerto"];
		   				$fechaMuerto = $_POST["fechaFallecimiento"];
                   		$sql = "INSERT INTO muertos (nombreMuerto, fechaFallecimiento) VALUES ('$muerto', '$fechaMuerto')";                                      			      			      			                        				   
		           		$conexion->query($sql);             
		  				$conexion->close();
                  }
				  echo "<a href='javascript:history.back();'>Ir a la pagina anterior</a>";                
?>
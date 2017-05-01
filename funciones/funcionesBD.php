<?php
	function conectar(){
		$con =new mysqli("mysql.hostinger.es","u296280052_chart","Cgg21???","u296280052_chart");
		$con->set_charset("utf8");
		if (!$con) {
			echo "No se ha podido conectar a la Base de Datos.";
			exit();
		}
		return $con;

	}
	/*En el parametro tipo consulta si es 1, será select si es 2 : insert , update,  delete.*/
	function consulta($con,$consulta){
		
			return	$con->query($consulta);
			
	

	}
	function desconexion($con){
		$con->close();
	}
?>
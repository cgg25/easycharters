<?php
	function conectar($localhost,$usuario,$contraseña,$bd){
		$con =new mysqli($localhost, $usuario, $contraseña,$bd);
		$con->set_charset("utf8");
		if (!$con) {
			echo "No se ha podido conectar a la Base de Datos.";
			exit();
		}
		return $con;

	}
	function consulta($con,...$consulta){
		$consulta="SELECT * FROM ".." "
	}
	function desconexion($con){
		$con->close();
	}
?>
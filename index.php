<?php 
		include_once("funciones/clasesObjeto.php");
	  	include_once ("funciones/funcionesBD.php");
	  	include_once("funciones/funciones.php");
	 	include_once("funciones/menu.php");
	 	

	 	session_start();

	   ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Easy Charters</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.theme.min.css">
	<script src="https://use.fontawesome.com/c707f0dfb5.js"></script>
	<style type="text/css">
		body {
			 background-image: url(portadaPrueba3.jpg);
			 background-position: center top;
			 background-repeat: no-repeat;
			 background-attachment: fixed;
			 background-size: cover;
			 background-color: #464646;
 		}
		div.posicionBuscador{
			padding-top: 15%;
			text-align: center;
		}

		span.icon-bar{
			
			background-color: white !important;
		}
		span.colorLetraLogo{
			color:white !important;
			font-size: 1.4em;
		
		}
		div#logo img{
			width: 2em !important;
			height: 2em !important;
		}
		ul li a {
			font-size: 1.1em !important;
			color:black !important;
		}
		ul li a:hover{
			background-color: transparent !important; 
		}
		ul li a:focus {
			background-color: transparent !important;
		}
		a#rueda:focus{
			background-color: transparent !important;
		}
		a#rueda:hover{
			background-color: transparent !important;
		}
		a#rueda{
			background-color: transparent !important;
		}
		input::placeholder{
			color:black !important;
		}
		div.colorModalHead{
			background-color: #0277bd;
		}
		h2.posicionTituloModal{
			text-align: center;
			padding: 20px;
			color:white;

		}
		button#btnSubmitRegistro{
			background-color:#0277bd;
			color:white;
			
		}
	</style>
		
	

</head>
<body>
	<header>
		
		<?php
			Pintar_menu();
			if (empty($_SESSION['usuario'])) {
				
				pintar_modal_login();
				pintar_modal_registro();
				
			}
				
				
			
			
		?>
	
		<div class="col-xs-10 col-xs-push-1 col-sm-12 col-sm-push-0  posicionBuscador">
			<h3 class="text-center">Encuentra tu barco ideal</h3>
 
			<form class="form-inline" action="resultados.html" method="POST" >
				<div class="form-group">
					<select class="form-control input-lg">
						<option value="">-Tipo de barco-</option>
		                <option value="motora">Motora</option>
		                <option value="velero">Velero</option>
		                <option value="llaut">LLaut</option>
					</select class="form-control">
				</div>
				<div class="form-group">
					<select class="form-control input-lg">
						<option value="">-Zona-</option>
			            	<option value="andratx">Andratx</option>
			            	<option value="calvia">Calvia</option>
			            	<option value="palma">Palma</option>
			            	<option value="soller">Soller</option>
			            	<option value="alcudia">Alcudia</option>
					</select>
				</div>
				<div class="form-group">
			      
			      <input type="text" class="form-control input-lg" id="datepicker" placeholder="Llegada">
			    </div>
			    <div class="form-group">
			     
			      <input type="text" class="form-control input-lg" id="datepicker2" placeholder="Salida">
			    </div>
			    <div class="form-group">
			    	<button type="submit" class="btn btn-block btn-lg bg-primary" >Buscar</button>
			    </div>
			</form>
		</div>

	</header>
	<main>
		
		

	</main>
	 


<script src="js/jquery3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
<script type="text/javascript" src="js/jqvalidate.js"></script>
<script>
$(function () {
    $.datepicker.setDefaults($.datepicker.regional["es"]);
    $("#datepicker, #datepicker2").datepicker({
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        dayNamesMin: ["Do","Lu","Ma","Mi","Ju","Vi","Sa",],
        duration: "slow",
        hideIfNoPrevNext: true
    });
    $("#loginMod").click(function(){
    	$("#login").modal();
    })
 	$("#singupMod").click(function(){
    	$("#singup").modal();
    }) 
    $("#archivo").on('change', function(){
    	var x=$(this).val();
 		$("#textoFile").val(x);
    })    
 	$("#eliminarFoto").click(function(){
 		$("#textoFile").val(null);
 	});

 $("#registro").submit(function(e){
 		var pass=valida_password2();
 		
 		if (pass==true) {
 			alert("estas registrado.");
 			return;
 			
 		}
 		 e.preventDefault();
 	});

});

	function valida_password2(){
	
		var passwd=$("#registroPasswd").val();
		var passwd2=$("#passwd2").val();
	
		if (passwd==passwd2) {
			return true;
		}else{
			
			$("#divpasswd2").addClass("controls has-error");
		 	setTimeout(function(){
		 		$("#divpasswd2").removeClass("has-error");
		 	},1000);
			$( "span#textpasswd2" ).text( "No coincide la contraseña." ).addClass("text-danger").show().fadeOut(2000);
			return false;
		}
	
	}
	
</script>	
</body>
</html>
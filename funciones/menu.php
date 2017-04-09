<?php
	function Pintar_menu() {
		if (empty($_SESSION['usuario'])) { ?>
			<nav class="navbar">
				<div class="container-fluid">
			    	<div class="navbar-header">
			    		<button type="button" class="navbar-toggle colorMenu" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					    </button>
				      	<a class="navbar-brand" href="#">
				      	<div id="logo">
				      		<img alt="Brand" src="logo.png">
				       	 	<span class="colorLetraLogo">EasyCharter</span>
				      	</div>
				        
				      </a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				     
				      <ul class="nav navbar-nav navbar-right">
				        <li><a data-toggle="modal" href="#" id="singupMod"><span class="glyphicon glyphicon-user"></span> Regístrate</a></li>
		    			<li><a data-toggle="modal" href="#" id="loginMod"><span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
				      </ul>
				    </div>
				</div>
			</nav>
	<?php 	}else if ($_SESSION['usuario']->getKarma()==1) { ?>
		
			<nav class="navbar ">
				<div class="container-fluid">
			    	<div class="navbar-header">
			    		<button type="button" class="navbar-toggle colorMenu" data-toggle="collapse" data-target="#myNavbar2">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					    </button>
				      	<a class="navbar-brand" href="#">
				      	<div id="logo">
				      		<img alt="Brand" src="logo.png">
				       	 	<span class="colorLetraLogo">EasyCharter</span>
				      	</div>
				        
				      </a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar2">
				     
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
					        <a id="rueda" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
					        </a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Mis reservas</a></li>
					          <li><a href="#">Guias</a></li>
					          <li><a href="#">Mi cuenta</a></li>
				           	  <li><a href="#">¿Tienes Barcos?</a></li>
				           	  <li><a href="#">Aviso Legal</a></li>
				              <li class="divider"></li>
				              <li><a href="#">Log out</a></li>
					        </ul>
					      </li>
				      </ul>
				    </div>
				</div>
			</nav>

	<?php }else if ($_SESSION['usuario']->getKarma()==2) { ?>
		
			<nav class="navbar ">
				<div class="container-fluid">
			    	<div class="navbar-header">
			    		<button type="button" class="navbar-toggle colorMenu" data-toggle="collapse" data-target="#myNavbar2">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					    </button>
				      	<a class="navbar-brand" href="#">
				      	<div id="logo">
				      		<img alt="Brand" src="logo.png">
				       	 	<span class="colorLetraLogo">EasyCharter</span>
				      	</div>
				        
				      </a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar2">
				     
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
					        <a id="rueda" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
					        </a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Mis reservas</a></li>
					          <li><a href="#">Gestionar Barco</a></li>
					          <li><a href="#">Mi cuenta</a></li>
				           	  <li><a href="#">Guias</a></li>
				           	  <li><a href="#">Aviso Legal</a></li>
				              <li class="divider"></li>
				              <li><a href="#">Log out</a></li>
					        </ul>
					      </li>
				      </ul>
				    </div>
				</div>
			</nav>




	<?php	}elseif ($_SESSION['usuario']->getKarma()==3) { ?>
			
			<nav class="navbar ">
				<div class="container-fluid">
			    	<div class="navbar-header">
			    		<button type="button" class="navbar-toggle colorMenu" data-toggle="collapse" data-target="#myNavbar2">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>                        
					    </button>
				      	<a class="navbar-brand" href="#">
				      	<div id="logo">
				      		<img alt="Brand" src="logo.png">
				       	 	<span class="colorLetraLogo">EasyCharter</span>
				      	</div>
				        
				      </a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar2">
				     
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
					        <a id="rueda" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-cog fa-2x" aria-hidden="true"></i>
					        </a>
					        <ul class="dropdown-menu">
					          <li><a href="#">Gestionar web</a></li>
					          <li><a href="#">Gestionar Barcos</a></li>
					          <li><a href="#">Gestionar Perfiles</a></li>
				           	  <li><a href="#">Historial Reservas</a></li>
				           	  <li><a href="#">Gráfica Beneficios</a></li>
				              <li class="divider"></li>
				              <li><a href="#">Log out</a></li>
					        </ul>
					      </li>
				      </ul>
				    </div>
				</div>
			</nav>
	<?php	} 
	}
 ?>
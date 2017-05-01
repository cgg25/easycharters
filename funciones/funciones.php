<?php
	
	session_start();
	
	/*Pinta el modal para login a la web*/
	function pintar_modal_login() { ?>
		<div class="modal fade" id="login" role="dialog">
	    	<div class="modal-dialog">
	          <div class="modal-content">
		        <div class="modal-header colorModalHead">
		          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
		          <h2 class="modal-title posicionTituloModal"><span class="glyphicon glyphicon-lock"></span> Iniciar Sesión</h2>
		        </div>
		        <div class="modal-body">
		         <form role="form" action="" method="post">
		            <div class="form-group">
		              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email:</label>
		              <input type="email" class="form-control" name="fEmail" id="email" placeholder="Enter email">
		            </div>
		            <div class="form-group">
		              <label for="passwd"><span class="glyphicon glyphicon-lock"></span> Password:</label>
		              <input type="password" class="form-control" id="passwd" placeholder="Enter password" name="fPasswd" required>
		            </div>
		            
		              <button type="submit" class="btn btn-block" id="btnSubmit" name="btnLogin"><span class="glyphicon glyphicon-off"></span> Iniciar sesión</button>
		          </form>
		        </div>
		        <div class="modal-footer">
		          
		          <p>¿No eres miembro? <a href="#">Regístrate</a></p>
		          <p>¿No recuerdas la <a href="#">Contraseña?</a></p>
		        </div>
		      </div>
		    </div>
		</div>
<?php	}
	/*Pinta el modal para registrarse a la web*/
	
	function pintar_modal_registro() { ?>
		<!-- CONTENIDO DEL MODAL SIGN UP -->
		<div class="modal fade" id="singup" role="dialog">
	    	<div class="modal-dialog">
	          <div class="modal-content">
		        <div class="modal-header colorModalHead">
		          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
		          <h2 class="modal-title posicionTituloModal"><span class="glyphicon glyphicon-user"></span> Regístrate</h2>
		        </div>
		        <div class="modal-body">
		         <form role="form" action="../index.php" method="post" id="registro">
		            <div class="form-group col-xs-5 col-xs-push-1">
		              	<label><span class="glyphicon glyphicon-user"></span> Nombre:</label>
		            	<input type="text" class="form-control" placeholder="Nombre" name="fNombre"  pattern="^[a-zÁÉÍÓÚa-zñáéíóú\d_]{4,15}$" required>
		            </div>
		            <div class="form-group col-xs-5 col-xs-push-1">
		              	<label><span class="glyphicon glyphicon-user"></span> Apellidos:</label>
		              	<input type="apellidos" class="form-control" placeholder="Apellidos" name="fApellidos" pattern="^[a-z]\s*[a-z]*" required>
		            </div>
		            <div class="form-group col-xs-10 col-xs-push-1">
		              <label for="passwd"><span class="glyphicon glyphicon-lock"></span> Password:</label>
		              <div class="controls">
		              	<input type="password" class="form-control" id="registroPasswd" placeholder="Password" name="fPasswd" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
		              	<span>(Debe contener 1 Mayúscula,1 Minúscula, 1 número y un mínimo de 8 caracteres.)</span>
		              </div>
		            </div>
		            <div class="form-group col-xs-10 col-xs-push-1">
		              <label for="passwd2"><span class="glyphicon glyphicon-lock"></span> Repite Password:</label>
		              <div class="controls" id="divpasswd">
		              	<input type="password" class="form-control" id="passwd2" placeholder="Repite Password" name="fPasswd2" required onblur="valida_password2();">
		              	<span id="textpasswd2"></span>
		              </div>
		            </div>
		            <div class="form-group col-xs-10 col-xs-push-1">
		              <label><span class="glyphicon glyphicon-envelope"></span> Email:</label>

		              <input type="text"  name="email" class="form-control"  placeholder="Email" required pattern="^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$">
		            </div>
		            <div class="form-group col-xs-5 col-xs-push-1">
		              <label for="dni"><i class="fa fa-id-card" aria-hidden="true"></i> NIF/NIE/Pass:</label>
		              <input type="text" class="form-control" id="dni" placeholder="NIF/NIE" name="fDni" required >
		            </div>
		            <div class="form-group col-xs-5 col-xs-push-1">
		              <label for="fecha"><span class="glyphicon glyphicon-user"></span> Fecha de nacimiento:</label>
		              <input type="fecha" class="form-control" id="fecha" placeholder="20/06/1990" name="fFecha" required pattern="^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})$">
		            </div>
		             <div class="form-group col-xs-5 col-xs-push-1">
		              <label for="movil"><span class="glyphicon glyphicon-phone"></span> Móvil:</label>
		              <input type="text" class="form-control" id="movil" placeholder="Móvil" name="fMovil" required pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$">
		            </div>
		             <div class="form-group col-xs-5 col-xs-push-1">
		              <label for="telefono"><span class="glyphicon glyphicon-phone-alt"></span> Télefono:</label>
		              <input type="text" class="form-control" id="telefono" placeholder="Teléfono" name="fTel" required pattern="^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$">
		            </div>
		           
		            <div class="checkbox col-xs-10 col-xs-push-1" >
		              <label><input type="checkbox" value="" required>Usted está aceptando nuestros <a href="#"> terminos y condiciones </a></label>
		            </div>
		            <div class="col-xs-10 col-xs-push-1">
		            	<button type="submit" class="btn btn-lg btn-block" id="btnSubmitRegistro" name="fRegistro"><i class="fa fa-sign-in" aria-hidden="true" ></i></span> Registrarse</button>
		            </div>
		          </form>
		        </div>

		        <div class="clearfix"></div>
		        <br><br>
		      </div>
		    </div>
		</div>
		
<?php
	
	}

	if (isset($_POST['fRegistro'])) {
		/*Nos conectamos a la base de datos.*/
		$conexion=conectar();

		$consulta=consulta($conexion,"SELECT * FROM usuarios WHERE dni='".$_POST['fDni']."'");

		$fila = $consulta-> num_rows;
		if ($fila>0) {
			echo "<script>alert('Usuario existente');</script>";
		}else {
			echo "<script>alert('Usuario Creado correctamente...');</script>";
			$creacionUser=consulta($conexion,'INSERT INTO usuarios(nombre, dni, apellidos, fecha, email, movil, telefono, karma, password) VALUES ("'.$_POST['fNombre'].'","'.$_POST['fDni'].'","'.$_POST['fApellidos'].'","'.$_POST['fFecha'].'","'.$_POST['email'].'",'.$_POST['fMovil'].',"'.$_POST['fTel'].'","1","'.md5($_POST['fPasswd']).'")');
		}
		/*Para desconectar de la base de datos.*/
		desconexion($conexion);

	}
	if (isset($_POST['btnLogin'])) {
		/*Nos conectamos a la base de datos.*/
		
		$conexion=conectar();

		if ($consulta=consulta($conexion,'SELECT * FROM usuarios WHERE email like "%'.$_POST['fEmail'].'%" and password like"%'.md5($_POST['fPasswd']).'%" ')) {
			
			$_SESSION['usuario']=new Usuario;
			while ($filas=$consulta->fetch_array()) {
				$_SESSION['usuario']->setDni($filas['dni']);
				$_SESSION['usuario']->setNombre($filas['nombre']);
				$_SESSION['usuario']->setApellidos($filas['apellidos']);
				$_SESSION['usuario']->setPass($filas['password']);
				$_SESSION['usuario']->setEmail($filas['email']);
				$_SESSION['usuario']->setFecha($filas['fecha']);
				$_SESSION['usuario']->setTel($filas['telefono']);
				$_SESSION['usuario']->setMovil($filas['movil']);
				$_SESSION['usuario']->setTipo($filas['karma']);
			}
			
		}
	
		/*Para desconectar de la base de datos.*/
		desconexion($conexion);
	}





	
?>
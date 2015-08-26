
<!-- MUNÚ DE NAVEGACIÓN -->
<header id="main-header">

	<div class="container">

		<!-- CÓDIGO VENTANA MODAL -->
		<div class="container">
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
			    	<div class="modal-content">
			    <!-- Este es el encabezado de la ventana modal -->
				      	<div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        	<h4 class="modal-title" id="myModalLabel">Iniciar Sesión</h4>
				      	</div>
				      	<!-- este es ek cuerpo de la ventana modal -->
				      	<div class="modal-body">
				       		<form action="#" method="POST">
								<div class="form-group">
									<label for="ingresarNombre">Nombre de usuario</label>
				    				<input type="name" class="form-control" name="nombreU" placeholder="Escriba su nombre de usuario">
								</div>
								<div class="form-group">
									<label for="ingresarCorreo">Contraseña</label>
				    				<input type="password" class="form-control" name="correoE" placeholder="Escriba su contraseña">
								</div>
							</form>
				      	</div>
					      <!-- Este es el encabezado de la ventana modal -->
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					        <button type="button" class="btn btn-primary">Acceder</button>
					      </div>
			    	</div>
			  	</div>
			</div>
		</div>
		
		<!-- BARRA DE NAVEGACION -->
		<div class="row">
			<!-- columnas para agregar el logotipo -->
			<div class="col-xs-3">
				<div id="main-logo">
					<a href="?navegacion=home"><img src="img/main_logo.png" alt=""></a>	
				</div>
			</div>
			<!-- contenido de la barra de navegación -->
			<div class="col-xs-9">
				<!-- INICIO DE SESIÓN -->
				<a id="sesi" href="#" data-toggle="modal" data-target="#myModal"><h5>Iniciar Sesión</h5></a>

				<ul id="main-menu" class="nav nav-pills">
					<li class="active"><a href="?navegacion=home"><strong>INICIO</strong></a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><strong>MENU</strong> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="?navegacion=menu_alimentos"><strong>Alimentos</strong></a></li>
							<li><a href="?navegacion=menu_bebidas"><strong>Bebidas</strong></a></li>
						</ul>
					</li>
					<li><a href="?navegacion=galeria"><strong>GALERÍA</strong></a></li>
					<li><a href="?navegacion=quienes_somos"><strong>¿QUIÉNES SOMOS?</strong></a></li>
	  				<li><a href="?navegacion=contacto"><strong>CONTACTO</strong></a></li>
				</ul>
			</div>	
		</div>
	</div>
</header>
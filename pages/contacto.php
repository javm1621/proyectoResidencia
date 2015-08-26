<div id="cont" class="container">
	<div class="row">
		<div class="col-xs-12">
			<ol class="breadcrumb">
				<li><a href="?navegacion=home">Inicio</a></li>
				<li class="active">Contacto</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<h2 class="contac"><strong>CONTÁCTENOS!</strong></h2>
		<h3 class="contac">¿Tienes algún comentario?, no dudes en enviarlo. Estamos para servirle</h3>
		<div class="col-xs-8">
			<h4>¿Como puede llegar?</h4>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.4560434423893!2d-86.74819999999998!3d21.134242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c28a275faa24f%3A0x63088cee8212291d!2sRestaurante+Mextreme!5e0!3m2!1ses!2smx!4v1432047307178" width="600" height="350" frameborder="0" style="border:0"></iframe>
		</div>

		<div class="col-xs-4">
			<h4>Ingrese sus datos</h4>
			<form action="actions/cod_contacto.php" method="POST">
				<div class="form-group">
					<label for="ingresarNombre">Nombre</label>
    				<input type="name" class="form-control" name="nombreU" placeholder="Escriba su nombre">
				</div>
				<div class="form-group">
					<label for="ingresarCorreo">Correo electrónico</label>
    				<input type="email" class="form-control" name="correoE" placeholder="Escriba su correo">
				</div>
				<div class="form-group">
					<label for="ingresarComentario">Escriba un mensaje</label>
    				<textarea name="comentario" cols="48" rows="4"></textarea>
				</div>
				<input  class="btn btn-danger" type="submit" value="Enviar">
			</form>
		</div>
				
	</div>
</div>
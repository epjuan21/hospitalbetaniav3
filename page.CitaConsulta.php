<?php
require_once('lib/recaptchalib.php');
?>
<section class="section-title">
	<div class="container">
			<h3>Solicitud Cita Médica</h3>
	</div>
</section>


<div class="container">


	<div class="row">

		<div class="col-lg-12">

 		<?php
			if (isset($_GET["Estado"])==1)
			{
		?>

			<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Gracias</strong> Su Solicitud de Cita Médica Fue Enviada con Éxito.</strong>
				Pronto nos estaremos comunicando con usted.
			</div>
 		<?php
			}
		?>
		
		</div>

	</div>

	<div class="row">

		<div class="col-lg-6 col-md-6">

			<div class="page-header">
					<h3>Cita Médica. <small>Formulario de Solicitud de Cita Médica</small></h3>
			</div>


			<p>Por medio del siguiente formulario usted podra soliciar una Cita Médica
				para la fecha que lo requiera. Posteriormente nos estaremos comunicando con usted
				para confirmar su cita.
			</p>

			<hr>

			<p class="lead">Tambien puede soliciar su Cita Médica al teléfono 843 50 50 ext 0</p>

			<p>Horario de Atención. A partir de las 8:00 am</p>
			<p>Asignación de Citas de Lunes, Martes, Jueves y Viernes a partir de las 8:00 am a 12:00 pm y 1:00 pm a 5 pm</p>
			<p>Miércoles y Sábado de 8:00 am a 2:00 pm</p>
			
		</div>

		<div class="col-lg-6 col-md-6">

			<form role="form" name="formCitaOdontologica" id="formCitaOdontologica" method="post" action="module.CitaMedica.php">

				<div class="row">

					<div class="col-lg-12 col-md-12">
						<h5>Nombres y Apellidos</h5>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
							<input title="Nombre Requerido"type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre" required autofocus>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-3 col-md-4 col-sm-3">
						<h5>Tipo Documento</h5>
						<div class="form-group">
							<select name="select-tipo-id" id="select-tipo-id" class="form-control">
								<option>RC</option>
								<option>TI</option>
								<option>CC</option>
							</select>
						</div>
					</div>

					<div class="col-lg-9 col-md-8 col-sm-9">
						<h5>Número de Documento</h5>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-list-alt fa-fw"></i></span>
							<input title="Documento Requerido"type="text" class="form-control" id="txtDocumento" name="txtDocumento" placeholder="Número Documento" required autofocus>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-8 col-md-8 col-sm-7">
						<h5>Correo</h5>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope-o  fa-fw"></i></span>
							<input type="email" class="form-control" id="txtMail" name="txtMail" placeholder="Correo Electrónico" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-5">
						<h5>Teléfono</h5>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-phone  fa-fw"></i></span>
							<input type="tel" class="form-control" id="txtTel" name="txtTel" placeholder="Fijo o Celular" required>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="col-lg-12 col-md-12">
						<h5>Seleccione la Fecha y la Hora en la que desesea su cita</h5>
		                <div class="input-group">
		                	<span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
		                    <input class="form-control form-Fecha-Hora-Cita-Odont" id="txtFechaHora" name="txtFechaHora" size="16" type="text" value="">
		                </div>
					</div>

				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h5>Comentarios</h5>
						<div class="form-group">
							<textarea class="form-control" rows="10" name="txtComentario"></textarea>
						</div>
					</div>
				</div>

				<div class="row">

					<div class="col-lg-7">
						<h5>Ingrese el texto de la imagen</h5>
					<?php

						$publickey = "6LewvPgSAAAAAPc1msYy-4v9AGox0r_YezY8-RmV"; // you got this from the signup page

  						echo recaptcha_get_html($publickey);	

					?>

					</div>

					<div class="col-lg-5">

				 		<?php
							if (isset($_GET["ErrorCaptcha"])==1)
							{
						?>

						<div class="alert alert-danger alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<strong>Error</strong>
							<br>
							El Texto de la Imagen fue digitado incorrectamente. Intentelo de nuevo.
						</div>

						<?php
							}
						?>

					</div>

				</div>
				<br>
				<button type="submit" class="btn btn-primary">Enviar</button>

				<hr>

			</form>

		</div>		
e
		<hr>

	</div>

</div>
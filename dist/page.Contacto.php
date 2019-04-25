<section class="section-title">
	<div class="container">
			<h3><strong>Formulario de Contacto</strong></h3>
	</div>
</section>


<div class="container">
	
	<div class="row">

		<div class="col-lg-7">

			<?php
			if (isset($_GET["Estado"])==1)
			{
			?>

				<div class="alert alert-success alert-dismissable">
				  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  <strong><?php echo $_GET["nom"]?></strong> Gracias por contactarse con el <strong>Hospial San Antonio de Betania</strong><br>
				  Su mensaje fue recibido con éxito. En caso de ser necesario nos comunicaremos con usted al correo electrónico <br>
				  <strong><?php echo $_GET["mail"]?></strong>
				</div>
			<?php
			}
			?>

			<div class="page-header">
					<h3>Escríbanos. <small>Preguntas, Quejas, Reclamos y Sugerencias</small></h3>
			</div>
			
			<p>Con este formulario usted puede comunicarse con nosotros y comentarnos su experiencia en el <strong>Hospital San Antonio</strong>. Lo invitamos a expresarnos sus inquietudes acerca del servicio que prestamos. Muchas Gracias...</p>
			
			<br>
			<br>
			
			
			<form role="form" name="formEnviarComentario" id="formEnviarComentario" method="post" action="module.EnviarComentario.php">

				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
					<input title="Nombre Requerido"type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Escriba su Nombre" required autofocus>
				</div>

				<br>

				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-envelope-o  fa-fw"></i></span>
					<input type="email" class="form-control" id="txtMail" name="txtMail" placeholder="Escriba su E-Mail" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required>
				</div>

				<br>

				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-phone  fa-fw"></i></span>
					<input type="tel" class="form-control" id="txtTel" name="txtTel" placeholder="Fijo o Celular" required>
				</div>

				<br>
				
				<div class="form-group">
					<textarea class="form-control" rows="10" name="txtMensaje"></textarea>
				</div>

				<button type="submit" class="btn btn-primary">Enviar</button>

			</form>

		</div>

		<div class="col-lg-1">

		</div>

		<div class="col-lg-4 icons-contact">
			
			<div class="page-header">
				<h4>Contacto</h4>
			</div>
	            <address>
	                <i class="fa fa-home"></i>&nbsp;&nbsp;Calle 20 # 26 - 173 Betania - Antioquia<br>
	                <i class="fa fa-phone"></i>&nbsp;&nbsp;<strong>Teléfonos:</strong>&nbsp;&nbsp;843 50 50 - 843 50 44 - 843 54 35   <br>
	                <i class="fa fa-print"></i>&nbsp;&nbsp;<strong>Fax:</strong>&nbsp;&nbsp;843 50 50 Ext 104 <br>
	                <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>E-Mail:</strong>&nbsp;&nbsp;betahs01@gmail.com <br>
	                <i class="fa fa-envelope"></i>&nbsp;&nbsp;<strong>E-Mail:</strong>&nbsp;&nbsp;siauhospitalbetania@gmail.com
	            </address>

			<div class="page-header">
				<h4>Extensiones</h4>
			</div>
			<ul class="fa-ul">
				<li><i class="fa-li fa fa-female"></i>0 - Admisiones</li>
				<li><i class="fa-li fa fa-male"></i>102 - Archivo</li>
				<li><i class="fa-li fa fa-female"></i>103 - Consultorio Enfermería</li>
				<li><i class="fa-li fa fa-users"></i>105 - Hospitalización</li>
				<li><i class="fa-li fa fa-female"></i>106 - Laboratorio</li>
				<li><i class="fa-li fa fa-female"></i>107 - Odontología</li>
				<li><i class="fa-li fa fa-male"></i>108 - Rayos X</li>
				<li><i class="fa-li fa fa-male"></i>111 - Gerencia</li>
				<li><i class="fa-li fa fa-male"></i>113 - Vacunación</li>
				<li><i class="fa-li fa fa-female"></i>114 - Farmacia</li>
				<li><i class="fa-li fa fa-female"></i>117 - Administracíón</li>
				<li><i class="fa-li fa fa-female"></i>118 - Facturación</li>
				<li><i class="fa-li fa fa-female"></i>120 - Enfermera Jefe</li>
				<li><i class="fa-li fa fa-female"></i>120 - Secretaria</li>
				<li><i class="fa-li fa fa-female"></i>123 - Higiene Oral</li>
				<li><i class="fa-li fa fa-users"></i>124 - Crecimiento y Desarrollo</li>
			</ul>

		</div>
		
		
	</div>

</div>

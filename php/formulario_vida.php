<div class="clear"></div>
<form id="contact-form" action="" method="POST">
	<div class="page-section gray-bg">
		<div class="container mt-40">
			<div class="col-md-12">
				<div class="mb-40">
					<h2 class="section-title">COTIZA <span class="bold">AQUÍ</span></h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Escribe tu Nombre y tu Apellido" maxlength="100" class="controled" name="name" id="name" placeholder="Nombre y Apellido" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Es importante que coloques tu documento real, con este verificamos en las aseguradoras tus descuentos por no reclamaciones y buena experiencia" maxlength="100" class="controled" name="cedula" id="cedula" placeholder="Cédula / Nit" required>
				</div>
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Tu edad es tenida en cuenta para las tarifas de la aseguradora" maxlength="100" class="controled" name="anio" id="anio" placeholder="Fecha de Nacimiento (DD/MM/AA)" required>
				</div>
				<div class="form-group mb-30">
					<!-- <label>Your email address *</label> -->
					<input type="number" value="" data-msg-required="Escribe tu numero de celular" data-msg-email="Escribe tu numero de celular" maxlength="100" class="controled" name="celular" id="celular" placeholder="Celular" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your email address *</label> -->
					<input type="email" value="" data-msg-required="Escribe tu correo" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="Email" required>
				</div>
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="¿Cuál es tu actividad?" maxlength="100" class="controled" name="actividad" id="actividad" placeholder="¿Cuál es tu actividad?" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Responde Si ó No " maxlength="100" class="controled" name="proteger_deuda" id="proteger_deuda" placeholder="¿Es para proteger tu deuda con algún banco? Si/No" required>
        		</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="¿Si, que Banco?" maxlength="100" class="controled" name="banco" id="banco" placeholder="¿Si, que Banco?" required>
				</div>
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Valor desde $20'000.000" maxlength="100" class="controled" name="valor_asegurado" id="valor_asegurado" placeholder="Valor Asegurado" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Responde Si ó No" maxlength="100" class="controled" name="fumador" id="fumador" placeholder="¿Eres fumador Si / No?" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Escríbenos si tienes una Preescripción médica " maxlength="100" class="controled" name="prescripcion_medica" id="prescripcion_medica" placeholder="¿Tienes Alguna Preescripción médica?" required>
				</div>
				<div class="form-group mb-20">
					<!-- <label>Your name *</label> -->
					<textarea maxlength="5000" data-msg-required="Escribenos tu mensaje" rows="3" class="controled" name="message" id="message" placeholder="Comentario" required></textarea>
				</div>
			</div>
			<div class="col-md-12 text-center mb-30">
				<input type="submit" value="COTIZAR!" class="button medium black" data-loading-text="Cargando...">
			</div>
		</div>
	</div>

	<div class="alert alert-success hidden animated fadeIn" id="contactSuccess" >
		<strong>Exitoso!</strong> Pronto nos comunicaremos contigo!.
	</div>

	<div class="alert alert-danger hidden animated shake" id="contactError">
		<strong>Error!</strong> Existe un error en tu mensaje.
	</div>

</form>

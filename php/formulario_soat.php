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
					<input type="text" value="" data-msg-required="Escribe tu Nombre y tu Apellido" maxlength="100" class="controled" name="nombre" id="nombre" placeholder="Nombre y Apellido" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Tu edad es tenida en cuenta para las tarifas de la aseguradora" maxlength="100" class="controled" name="anio" id="anio" placeholder="Fecha de Nacimiento (DD/MM/AA)" required>
				</div>
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Es importante que coloques tu documento real, con este verificamos en las aseguradoras tus descuentos por no reclamaciones y buena experiencia" maxlength="100" class="controled" name="cedula" id="cedula" placeholder="Cédula / Nit" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your email address *</label> -->
					<input type="number" value="" data-msg-required="Escribe tu número de celular" data-msg-email="Escribe tu numero de celular" maxlength="100" class="controled" name="celular" id="celular" placeholder="Celular" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your email address *</label> -->
					<input type="email" value="" data-msg-required="Escribe tu correo" data-msg-email="Please enter a valid email address" maxlength="100" class="controled" name="email" id="email" placeholder="Email" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Vehículo particular ó privado" maxlength="100" class="controled" name="vehiculo_particular" id="vehiculo_particular" placeholder="Vehículo Particular ó Privado" required>

				</div>
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Placa del Vehículo" maxlength="100" class="controled" name="placa_vehiculo" id="placa_vehiculo" placeholder="Placa (AAA999)" required>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Marca de tu vehículo" maxlength="100" class="controled" name="marca_vehiculo" id="marca_vehiculo" placeholder="Marca  (BMW)" required>

				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Línea del Vehículo" maxlength="100" class="controled" name="linea_vehiculo" id="linea_vehiculo" placeholder="Línea  (320i)" required>
				</div>
				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Modelo del Vehículo" maxlength="100" class="controled" name="modelo_vehiculo" id="modelo_vehiculo" placeholder="Modelo  (2014)" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<input type="text" value="" data-msg-required="Este es tenido en cuenta para la tarifación de tu seguro" maxlength="100" class="controled" name="tarifa_seguro" id="tarifa_seguro" placeholder="Tarifación de tu seguro" required>
				</div>

				<div class="form-group mb-30">
					<!-- <label>Your name *</label> -->
					<textarea maxlength="5000" data-msg-required="Escribenos tu mensaje" rows="3" class="controled" name="mensaje" id="mensaje" placeholder="Comentario" required></textarea>
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

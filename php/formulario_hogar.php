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
                <input type="text" value="" data-msg-required="Es importante que coloques tu documento real, con este verificamos en las aseguradoras tus descuentos por no reclamaciones y buena experiencia" maxlength="100" class="controled" name="cedula" id="cedula" placeholder="Cédula / Nit" required>
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
                <input type="text" value="" data-msg-required="Dirección" maxlength="100" class="controled" name="direccion" id="direccion" placeholder="Dirección" required>
            </div>
            <div class="form-group mb-30">
                <!-- <label>Your name *</label> -->
                <input type="text" value="" data-msg-required="Edificio, Casa, Finca" maxlength="100" class="controled" name="edificio" id="edificio" placeholder="Edificio, Casa, Finca" required>
            </div>   
            <div class="form-group mb-30">
                <!-- <label>Your name *</label> -->
                <input type="text" value="" data-msg-required="El año aproximado de construcción de tu inmueble es tenido en cuenta por la aseguradora para la tarifación del seguro" maxlength="100" class="controled" name="anio" id="anio" placeholder="Año de construcción " required>
            </div>
         
        </div>
        <div class="col-md-6">
           
            <div class="form-group mb-30">
                <input type="text" value="" data-msg-required="Número de pisos del edificio" maxlength="100" class="controled" name="pisos" id="pisos" placeholder="Número de pisos del edificio" required>
               
            </div>
            <div class="form-group mb-30">
                <!-- <label>Your name *</label> -->
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" lang="en" value=""  data-msg-required="¿Cúanto vale tu apartamento?" maxlength="100" class="controled number_format" name="valor_inmueble" id="valor_inmueble" placeholder="Valor del inmueble" required>
                </div> 
            </div>

            <div class="form-group mb-30">
                <!-- <label>Your name *</label> -->
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input type="text" value="" data-msg-required="¿Cúanto valen tus equipos eléctricos y electrónicos?" maxlength="100" class="controled number_format" name="valor_equipos" id="valor_equipos" placeholder="Valor de tus equipos eléctricos y electrónicos" required>
                </div> 
            </div>

            <div class="form-group mb-30">
                <!-- <label>Your name *</label> -->
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                <input type="text" value="" data-msg-required="¿Cúanto valen tus muebles y enseres?" maxlength="100" class="controled number_format" name="valor_enseres" id="valor_enseres" placeholder="Valor de tus muebles y enseres" required>
                </div> 
            </div>
            <div class="form-group mb-10">
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


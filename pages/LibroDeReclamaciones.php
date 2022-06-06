<?php include("../template/Header.php") ?>
	
	<main>
		<div class="banner">
			<div class="banner-container max-width">
				<h1 class="banner-title">Libro de reclamaciones</h1>
			</div>
		</div>
		<div class="max-width">
			<div class="reclamo-container">
				<section class="section">
					<article>
						<h1>Reclamaciones DON LUCHO</h1>
						<p class="section-text text-normal">En cumplimiento de lo dispuesto por la Ley N° 29733, Ley de Protección
																								de
																								Datos Personales y su reglamento aprobado por Decreto Supremo N°
																								003-2013-JUS</p>
					</article>
					
					<h2 class="section-title">Ingrese datos del reclamo</h2>
					<form class="reclamo-formulario">
						<div class="reclamo-controlador" id="">
							<label>Ingrese fecha del suceso</label>
							<input class="form-input" type="date" name="dia" id="dia" placeholder="[Ingrese dia]" width="100"
										 required/>
						</div>
						<br/>
						<h3>1.- Identificación del consumir reclamante</h3>
						<br/>
						
						<div class="reclamo-row">
							<div class="reclamo-controlador">
								<label>Nombres</label>
								<input class="form-input" type="text" name="nombre" id="nombre" placeholder="Ingrese nombres" required
											 width="100"/><br/>
							</div>
							<div class="reclamo-controlador">
								<label>Apellidos</label>
								<input class="form-input" type="text" name="Apellidos" id="Apellidos" placeholder="Ingrese apellidos"
											 width="100" required/><br/>
							</div>
						</div>
						
						<div class="reclamo-row">
							<div class="reclamo-controlador">
								<label>Email</label>
								<input class="form-input" type="email" name="email" id="email" placeholder="Ingrese email" required
											 width="100"/><br/>
							</div>
							<div class="reclamo-controlador">
								<label>Teléfono</label>
								<input class="form-input" type="tel" name="telefono" id="telefono" placeholder="Ingrese telefono"
											 required
											 width="100"/><br/>
							</div>
						</div>
						
						<div class="reclamo-controlador">
							<label>DNI</label>
							<input class="form-input" type="text" name="dni" id="dni" placeholder="Ingrese dni" width="100"
										 required/><br/>
						</div>
						
						<h3>2.- Identificación del bien contratado</h3>
						<br/>
						<div class="reclamo-row">
							<div class="reclamo-controlador">
								<label>Producto</label>
								<input class="form-input" type="text" name="Producto" id="Producto" placeholder="Ingrese Producto"
											 width="100" required/><br/>
							</div>
							<div class="reclamo-controlador">
								<label>Servicio</label>
								<input class="form-input" type="text" name="servicio" id="servicio" placeholder="Ingrese servicio"
											 width="100" required/> <br/>
							</div>
						</div>
						
						<div class="reclamo-controlador">
							<label>Descripción</label>
							<div><textarea required class="reclamo-textarea" name="message" rows="10"> </textarea> <br/></div>
						</div>
						
						<button class="button button-primary" type="submit">Enviar</button>
					</form>
				</section>
			</div>
		</div>
	</main>

<?php include("../template/Footer.php") ?>
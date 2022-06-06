<?php include("../template/Header.php") ?>
	
	<main>
		<div class="banner">
			<div class="banner-container max-width">
				<h1 class="banner-title">Entregable 3</h1>
			</div>
		</div>
		
		<div class="max-width">
			<section class="section">
				<h2 class="section-title">Base del sistema numérico</h2>
				<div class="entregable-contenedor">
					<div class="entregable-form">
						<label>Base del sistema númerico:</label>
						<select class="form-input width-100" id="base" onchange="getBase()">
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</div>
					<div class="entregable-form">
						<label id="etiquetaB">Ingrese número en base [2]:</label>
						<input class="form-input" oncopy="return false" onpaste="return false"
									 onkeypress="return validarIngreso(event)" type="text" id="valor"/>
					</div>
					
					<div class="entregable-form">
						<label>Equivalencia en base [10]:</label>
						<input class="form-input" onpaste="return false" onkeypress="return false" type="text" id="equivalencia"/>
					</div>
					
					<input class="button button-primary width-100" onclick="calcularEquivalencia()" type="button"
								 value="Calcular"/>
				</div>
			</section>
			
			<section class="section">
				<h2 class="section-title">Triángulo</h2>
				<div class="entregable-contenedor">
					<input class="button button-primary width-100" type="button" onclick="triangulo()" value="Generar triángulo"/>
					<div id="contenedorTriangulo"></div>
				</div>
			</section>
			
			<section class="section">
				<h2 class="section-title">Horóscopo</h2>
				<div class="entregable-contenedor">
					<div class="signo-form">
						<label>Indique fecha de nacimiento:</label>
						<input class="form-input" form-input"" type="date" id="fecha" />
					</div>
					<input class="button button-primary width-100" onclick="getSignos()" type="button" name=""
								 value="Generar signo"/>
				</div>
				<div id="contenedorSigno">
					<figure id="imagen"></figure>
					<div id="nombreSigno"></div>
					<div id="periodo"></div>
					<div id="descripcion"></div>
				</div>
			</section>
		</div>
	</main>

<?php include("../template/Footer.php") ?>
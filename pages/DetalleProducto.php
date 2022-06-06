<?php include("../template/Header.php") ?>
	
	<main>
		<div class="banner">
			<div class="banner-container max-width">
				<h1 class="banner-title">Detalle de productos</h1>
			</div>
		</div>
		<div class="max-width">
			<section class="section">
				<div class="detalle">
					<div class="detalle-imagen-contenedor">
						<div class="detalle-columna">
							<figure class="detalle-imagen1">
								<img src="../assets/imagenes/Productos/producto1.jpg" alt="producto"/>
							</figure>
							<figure class="detalle-imagen1">
								<img src="../assets/imagenes/Productos/producto1.jpg" alt="producto"/>
							</figure>
							<figure class="detalle-imagen1">
								<img src="../assets/imagenes/Productos/producto1.jpg" alt="producto"/>
							</figure>
						</div>
						<figure class="detalle-imagen">
							<img src="../assets/imagenes/Productos/producto1.jpg" alt="producto"/>
						</figure>
					</div>
					<div class="detalle-descripcion">
						<h2>Whisky Green Label Johnnie Walker</h2>
						<p class="texto-normal-2">S/214.90</p>
						
						<p class="texto-normal-grey">
							Johnnie Walker es una marca de whisky escocés ahora propiedad de Diageo que se originó en la ciudad
							escocesa
							de Kilmarnock, East Ayrshire. La marca fue establecida por primera vez por el tendero John Walker. Es la
							marca de whisky
							escocés mezclado más ampliamente distribuida en el mundo, vendida en casi todos los países, con ventas
							anuales equivalentes a más de 223.7 millones de botellas de 700 ml en 2016 (156.6 millones de litros).
						</p>
						<p class="texto-normal-2">Categoria:</p>
						<div class="compartir">
							<p class="texto-normal-2">Compartir</p>
							<div class="compartir-lista">
								<a href="#"><img src="../assets/iconos/facebook-compartir.svg" alt="facebook"/></a>
								<a href="#"><img src="../assets/iconos/instagram-compartir.svg" alt="instagram"/></a>
								<a href="#"><img src="../assets/iconos/twitter.svg" alt="twitter"/></a>
							</div>
						</div>
						<a href="#" class="button button-primary">Añadir</a>
					</div>
				</div>
			</section>
			<section class="section">
				<h2 class="section-title">Productos relacionados</h2>
				<ul class="product-list">
					<li>
						<a href="DetalleProducto.php">
							<div class="card">
								<figure class="card-container-image">
									<img src="../assets/imagenes/Productos/producto1.jpg" alt="producto"/>
								</figure>
								<div class="card-content">
									<p class="texto-pequeño">Cerveza</p>
									<h3 class="card-title">Whisky Green Label Johnnie Walker Botella</h3>
									<p class="texto-normal">s/214.90</p>
								</div>
							</div>
						</a>
					</li>
					
					<li>
						<a href="DetalleProducto.php">
							<div class="card">
								<figure class="card-container-image">
									<img src="../assets/imagenes/Productos/producto2.jpg" alt="producto"/>
								</figure>
								<div class="card-content">
									<p class="texto-pequeño">Cerveza</p>
									<h3 class="card-title">Ron Plantation X0 20 Anniversary 750ml</h3>
									<p class="texto-normal">s/199.90</p>
								</div>
							</div>
						</a>
					</li>
					
					<li>
						<a href="DetalleProducto.php">
							<div class="card">
								<figure class="card-container-image">
									<img src="../assets/imagenes/Productos/producto3.jpg" alt="producto"/>
								</figure>
								<div class="card-content">
									<p class="texto-pequeño">Cerveza</p>
									<h3 class="card-title">Sazerac Straight Rye Whiskey 750 Ml. + Peychaud’s Bitter 5 oz</h3>
									<p class="texto-normal">s/159.90</p>
								</div>
							</div>
						</a>
					</li>
					
					<li>
						<a href="DetalleProducto.php">
							<div class="card">
								<figure class="card-container-image">
									<img src="../assets/imagenes/Productos/producto4.jpg" alt="producto"/>
								</figure>
								<div class="card-content">
									<p class="texto-pequeño">Cerveza</p>
									<h3 class="card-title">Vinas de oro peru</h3>
									<p class="texto-normal">s/43.90</p>
								</div>
							</div>
						</a>
					</li>
				</ul>
			</section>
		</div>
	</main>

<?php include("../template/Footer.php") ?>
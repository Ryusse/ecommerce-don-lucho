<?php include("../template/Header.php") ?>

<main>
	<div class="banner">
		<div class="banner-container max-width">
			<h1 class="banner-title">Carrito de compras</h1>
		</div>
	</div>
	<div class="max-width">
		<section class="section">
			<div class="cart-container">
				<div class="cart-details">
					<div class="cart-details-header">
						<h3>Producto</h3>
						<h3>Precio</h3>
						<h3>Cantidad</h3>
						<h3>Total</h3>
					</div>
					<div class="cart-content">
						<ul class="cart-list">
							<li class="cart-item">
								<div class="cart-product">
									<figure class="cart-product-image">
										<svg class="delete" width="12" height="12" viewBox="0 0 12 12" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12Z"
												fill="black"/>
											<path d="M7.8002 4.20001L4.2002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
											<path d="M4.2002 4.20001L7.8002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
										</svg>
										
										<img src="../assets/imagenes/Productos/producto1.jpg" alt="item"/>
									</figure>
									<div>
										<p class="texto-de-avisos">Whisky Green Label Johnnie Walker Botella</p>
										<p class="texto-de-avisos-grey">Cerveza</p>
									</div>
								</div>
								<p class="texto-de-avisos">s/214.90</p>
								<p class="texto-de-avisos">3</p>
								<p class="texto-de-avisos">s/675</p>
							</li>
							
							<li class="cart-item">
								<div class="cart-product">
									<figure class="cart-product-image">
										<svg class="delete" width="12" height="12" viewBox="0 0 12 12" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12Z"
												fill="black"/>
											<path d="M7.8002 4.20001L4.2002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
											<path d="M4.2002 4.20001L7.8002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
										</svg>
										<img src="../assets/imagenes/Productos/producto2.jpg" alt="item"/>
									</figure>
									<div>
										<p class="texto-de-avisos">Ron Plantation X0 20 Anniversary 750ml</p>
										<p class="texto-de-avisos-grey">Cerveza</p>
									</div>
								</div>
								<p class="texto-de-avisos">s/199.90</p>
								<p class="texto-de-avisos">1</p>
								<p class="texto-de-avisos">s/199.90</p>
							</li>
							
							<li class="cart-item">
								<div class="cart-product">
									<figure class="cart-product-image">
										<svg class="delete" width="12" height="12" viewBox="0 0 12 12" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12Z"
												fill="black"/>
											<path d="M7.8002 4.20001L4.2002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
											<path d="M4.2002 4.20001L7.8002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
										</svg>
										<img src="../assets/imagenes/Productos/producto3.jpg" alt="item"/>
									</figure>
									<div>
										<p class="texto-de-avisos">Sazerac Straight Rye Whiskey 750 Ml. + Peychaud’s Bitter 5 oz</p>
										<p class="texto-de-avisos-grey">Coctel</p>
									</div>
								</div>
								<p class="texto-de-avisos">s/159.90</p>
								<p class="texto-de-avisos">1</p>
								<p class="texto-de-avisos">s/159.90</p>
							</li>
							
							<li class="cart-item">
								<div class="cart-product">
									<figure class="cart-product-image">
										<svg class="delete" width="12" height="12" viewBox="0 0 12 12" fill="none"
												 xmlns="http://www.w3.org/2000/svg">
											<path
												d="M6 12C9.31371 12 12 9.31371 12 6C12 2.68629 9.31371 0 6 0C2.68629 0 0 2.68629 0 6C0 9.31371 2.68629 12 6 12Z"
												fill="black"/>
											<path d="M7.8002 4.20001L4.2002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
											<path d="M4.2002 4.20001L7.8002 7.80001" stroke="white" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round"/>
										</svg>
										<img src="../assets/imagenes/Productos/producto4.jpg" alt="item"/>
									</figure>
									<div>
										<p class="texto-de-avisos">Vinas de oro peru</p>
										<p class="texto-de-avisos-grey">Vino</p>
									</div>
								</div>
								<p class="texto-de-avisos">s/43.90</p>
								<p class="texto-de-avisos">2</p>
								<p class="texto-de-avisos">s/86.90</p>
							</li>
						</ul>
					</div>
					<button class="button button-danger">Limpiar lista</button>
				</div>
				
				<div class="cart-total-container">
					<h3>Total carrito</h3>
					<div class="cart-total">
						<div class="cart-subtotal">
							<p class="texto-normal-2">Subtotal</p>
							<p class="texto-normal-2-dark-blue">$219</p>
						</div>
						<div class="cart-subtotal">
							<p class="texto-normal-2">Total</p>
							<p class="texto-normal-2-dark-blue">$325</p>
						</div>
						<a href="#" class="button button-succes">Proceder al pago</a>
					</div>
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

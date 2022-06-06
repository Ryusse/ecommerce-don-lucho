<?php include("../template/Header.php") ?>

<main>
  <div class="banner">
    <div class="banner-container max-width">
      <h1 class="banner-title">Sobre nosotros</h1>
    </div>
  </div>
  <div class="max-width">
    <section class="home-section section">
      <article class="section-column">
        <h1>Bebidas: los reyes de la mesa</h1>
        <p class="section-text text-normal">
          Popularmente conocidas como “aguardiente”, son bebidas que se obtienen a través de la destilación. El proceso
          se basa en hervir jugos previamente fermentados para separar el alcohol del agua y conseguir una mejor
          graduación alcohólica
          (de 16° a 45°). Las bebidas destiladas más conocidas son: whisky, vodka, tequila, ron, La ginebra, pisco, el
          Brand y el coñac.
        </p>
        <a class="button button-primary" href="ListaDeProductos.php">Mira nuestros producto</a>
      </article>
      <figure class="section-image-container">
        <img src="../assets/imagenes/nosotros-section.jpg" alt="imagen de seccion 1" />
      </figure>
    </section>

    <section clas="section">
      <h2 class="section-title">Nuestras caracteristicas</h2>
      <ul class="feature-list">
        <li>
          <div class="feature-card">
            <figure class="feature-image">
              <img src="../assets/imagenes/caracteristica1.png" alt="imagen caracteristica" />
            </figure>
            <div class="feature-content">
              <p class="texto-normal-2-dark-blue feature-title">Delivery gratis</p>
              <p class="texto-de-avisos-grey">Entregamos el producto a sus respectivos hogares y el delivery es
                totalmente gratis para que nuestros clientes estén totalmente satisfechos
                con nuestro servicio.</p>
            </div>
          </div>
        </li>

        <li>
          <div class="feature-card">
            <figure class="feature-image">
              <img src="../assets/imagenes/caracteristica2.png" alt="imagen caracteristica" />
            </figure>
            <div class="feature-content">
              <p class="texto-normal-2-dark-blue feature-title">100% de devolucion</p>
              <p class="texto-de-avisos-grey">Si en caso demoramos en la entrega del producto o no es lo que solicito el
                cliente nosotros devolvemos el dinero de nuestros clientes.</p>
            </div>
          </div>
        </li>

        <li>
          <div class="feature-card">
            <figure class="feature-image">
              <img src="../assets/imagenes/caracteristica3.png" alt="imagen caracteristica" />
            </figure>
            <div class="feature-content">
              <p class="texto-normal-2-dark-blue feature-title">Calidad del producto</p>
              <p class="texto-de-avisos-grey">Cada producto que nuestros clientes nos piden sea de alta calidad, tenga
                una gran variedad.</p>
            </div>
          </div>
        </li>

        <li>
          <div class="feature-card">
            <figure class="feature-image">
              <img src="../assets/imagenes/caracteristica4.png" alt="imagen caracteristica" />
            </figure>
            <div class="feature-content">
              <p class="texto-normal-2-dark-blue feature-title">Atención 24/7</p>
              <p class="texto-de-avisos-grey">¡Para que tus juergas no paren! Atendemos todos los fines de Semana a
                cualquier hora y estamos a tu disposición y atenderte siempre con un
                excelente servicio.</p>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="section">
      <h2 class="section-title">Lo que dicen nuestro clientes</h2>

      <div class="slider">
        <div class="slider-item slider-item-visible">
          <div class="review-card">
            <figure class="review-image">
              <img src="../assets/imagenes/cliente1.jpg" alt="cliente imagen" />
            </figure>
            <div class="review-content">
              <h3>Jessica Martinez</h3>
              <p class="texto-de-avisos-grey">
                En otros lados me cobraban el delivery, pero en esta empresa eso era gratis solo tenía que pagar por el
                producto solicitado nada más y estaba en una reunión familiar todos estaban conforme con eso.
              </p>
            </div>
          </div>
        </div>

        <div class="slider-item">
          <div class="review-card">
            <figure class="review-image">
              <img src="../assets/imagenes/cliente3.jpg" alt="cliente imagen" />
            </figure>
            <div class="review-content">
              <h3>Carlos Pérez</h3>
              <p class="texto-de-avisos-grey">Me hicieron un descuento en el producto que pedí con el 50 por ciento por
                haber demorado en la entrega de delivery.</p>
            </div>
          </div>
        </div>

        <div class="slider-item">
          <div class="review-card">
            <figure class="review-image">
              <img src="../assets/imagenes/cliente2.jpg" alt="cliente imagen" />
            </figure>
            <div class="review-content">
              <h3>Julia Sosa</h3>
              <p class="texto-de-avisos-grey">Estaba en el cumpleaños de una amiga y pedimos una bebida bueno llego en
                el momento justo a nuestra fiesta todos estábamos contentas.</p>
            </div>
          </div>
        </div>

        <div class="slider-control prev"><img src="../assets/iconos/prev.png" alt="comentario anterior" /></div>
        <div class="slider-control next"><img src="../assets/iconos/next.png" alt="comentario siguiente" /></div>
      </div>
    </section>

    <section class="section">
      <div class="reclamaciones-link">
        <a class="button button-danger" href="LibroDeReclamaciones.php">Libro de reclamaciones</a>
      </div>
    </section>
  </div>
</main>

<script src="../js/slider.js"></script>

<?php include("../template/Footer.php") ?>
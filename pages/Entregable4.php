<?php include("../template/Header.php") ?>

<main>
  <div id="loader"></div>
  <div class="banner">
    <div class="banner-container max-width">
      <h1 class="banner-title">Entregable 4</h1>
    </div>
  </div>
  <div class="max-width">

    <section class="section">
      <h2 class="section-title">Ejercicio 2</h2>
      <form action="" method="POST" class="form entregable-contenedor" id="form">

        <div class="form-control" id="cantidad-control">
          <div class="form-control-input">
            <input class="form-input" id="cantidad" name="cantidad" type="text"
              placeholder="Ingrese el lado del triángulo" />
            <img class="form-error" src="../assets/iconos/error.svg" />
            <img class="form-check" src="../assets/iconos/check.svg" />
          </div>
          <small class="form-input-error">Ingrese un numero</small>
        </div>

        <input type="submit" name="register" value="Generar">
        <b class="d-flex justify-content-center">Numeros aletarios entre 300 y 2000</b>
      </form>

      <?php include("../php/ejercicio2.php") ?>
    </section>



    <section class="section">
      <h2 class="section-title">Ejercicio 4</h2>

      <form action="" method="POST" class="form entregable-contenedor" id="form">
        <div class="form-control" id="side1-control">
          <div class="form-control-input">
            <input class="form-input" id="side1" name="side1" type="text" placeholder="Ingrese el lado del triángulo" />
            <img class="form-error" src="../assets/iconos/error.svg" />
            <img class="form-check" src="../assets/iconos/check.svg" />
          </div>
          <small class="form-input-error">Ingrese un numero</small>
        </div>

        <div class="form-control" id="side2-control">
          <div class="form-control-input">
            <input class="form-input" id="side2" name="side2" type="text" placeholder="Ingrese el lado del triángulo" />
            <img class="form-error" src="../assets/iconos/error.svg" />
            <img class="form-check" src="../assets/iconos/check.svg" />
          </div>
          <small class="form-input-error">Ingrese un numero</small>
        </div>

        <div class="form-control" id="side3-control">
          <div class="form-control-input">
            <input class="form-input" id="side3" name="side3" type="text" placeholder="Ingrese el lado del triángulo" />
            <img class="form-error" src="../assets/iconos/error.svg" />
            <img class="form-check" src="../assets/iconos/check.svg" />
          </div>
          <small class="form-input-error">Ingrese un numero</small>
        </div>

        <input class="button button-primary width-100" type="submit" name="triangulo" value="Registrar">
      </form>

      <?php include("../php/ejercicio4.php") ?>

    </section>

  </div>
</main>

<script src="../js/form.js" type="module"></script>

<?php include("../template/Footer.php") ?>
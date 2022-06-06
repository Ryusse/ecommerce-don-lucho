<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../css/style.css" />
  <title>Ingresar</title>
</head>

<body>
  <div id="loader"></div>
  <main class="login-container">
    <div class="login-column">
      <div class="login-content">
        <h2 class="login-title-form">Iniciar sesión</h2>
        <form class="form" action="" id="form">
          <div class="form-control" id="email-control">
            <div class="form-control-input">
              <input class="form-input" id="email" name="email" type="email" placeholder="Ingrese su email" />
              <img class="form-error" src="../assets/iconos/error.svg" />
              <img class="form-check" src="../assets/iconos/check.svg" />
            </div>
            <small class="form-input-error">Formato incorrecto</small>
          </div>

          <div class="form-control" id="password-control">
            <div class="form-control-input">
              <input class="form-input" id="password" name="password" type="password"
                placeholder="Ingrese su contraseña" />
              <img class="form-error" src="../assets/iconos/error.svg" />
              <img class="form-check" src="../assets/iconos/check.svg" />
            </div>
            <small class="form-input-error">Debe contener mayúsculas y almenos un número</small>
          </div>

          <div class="form-button-container">
            <button class="button button-primary width-100" type="submit">Ingresar</button>
            <small class="form-submit-message">Rellene los campos</small>
            <a class="texto-pequeño" href="Registro.php">Aun no tienes cuenta? , registrate</a>

            <a class="texto-pequeño" href="Administration.php">Ingreso como administrador</a>
          </div>
        </form>
      </div>
    </div>
    <div class="login-image">
      <h1 class="login-title">Ingresa a la mejor plataforma.</h1>
      <nav class="login-navbar">
        <ul class="login-list">
          <li><a class="login-link" href="index.php">Inicio</a></li>
          <li><a class="login-link" href="ListaDeProductos.php">Productos</a></li>
          <li><a class="login-link" href="SobreNosotros.html">Sobre nosotros</a></li>
        </ul>
      </nav>
    </div>
  </main>

  <script src="../js/form.js" type="module"></script>
</body>

</html>
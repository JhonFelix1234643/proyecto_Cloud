<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Integracion de bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- tipo de letra -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400..700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sofia+Sans+Semi+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap');
  </style>

  <!-- enlace de estilos -->
  <link href="estilos.css" rel="stylesheet">

  <!-- icono -->
  <link rel="icon" type="image/png" href="images/ico.png">
  <title>Comulcar</title>
</head>

<body>

<?php include 'nav.php' ?>

  <!-- carrusel de imagenes -->

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banco1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/banco2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/banco3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>


  <!-- tipos de credito -->
  <div class="container mt-4 text-center">
    <h3>¡Conoce nuestras lineas de credito!</h3>
  </div>

  <div class="container mt-4">
    <div class="row">
      <!-- Tarjeta 1 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title ">Credito Compra o Mejora de vivienda</h5>
            <p class="card-text">Ten la oportunidad de adquirir vivienda propia o realizar mejoras de tu hogar.</p>
          </div>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crédito de Libre Inversión</h5>
            <p class="card-text">Solicita fondos para cubrir tus necesidades sin tener que justificar su destino.</p>
          </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crédito para Educación</h5>
            <p class="card-text">Adelanta tus estudios superiores aportando a tu desarrollo personal y laboral.</p>
          </div>
        </div>
      </div>

      <!-- Tarjeta 4 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crédito Vehículo</h5>
            <p class="card-text">Adquiere el vehículo que siempre has deseado.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2">
      <button class="btn  btn-success" type="button">Ver mas servicios de credito</button>
    </div>
  </div>

  <!-- tipos de ahorro -->
  <div class="container mt-4 text-center">
    <h3>¡Conoce nuestras lineas de ahorro!</h3>
  </div>

  <div class="container mt-4">
    <div class="row">
      <!-- Tarjeta 1 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ahorro Vivienda</h5>
            <p class="card-text">Ahorra para la compra de tu vivienda o para realizar mejoras en tu hogar.</p>
          </div>
        </div>
      </div>

      <!-- Tarjeta 2 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ahorro Navideño</h5>
            <p class="card-text">Asegura tu tranquilidad y disfruta de unas fiestas navideñas.</p>
          </div>
        </div>
      </div>

      <!-- Tarjeta 3 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ahorro Vacacional</h5>
            <p class="card-text">Disfruta de tus momentos de descanso sin estrés, planifica con anticipación y haz realidad tus sueños de viaje.</p>
          </div>
        </div>
      </div>

      <!-- Tarjeta 4 -->
      <div class="col-md-3">
        <div class="card mb-3">
          <img src="images/banco1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ahorro Extraordinario</h5>
            <p class="card-text">Asegura tu tranquilidad y protección financiera con un fondo de emergencia confiable.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="d-grid gap-2 mb-4">
      <button class="btn btn-success" type="button">Ver mas servicios de ahorro</button>
    </div>
  </div>

<?php include 'footer.php'  ?>

</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Integracion de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

    <!-- informacion de la cooperativa -->
    <div class="container mt-4 text-center">
        <h3>¡Conoce nuestra Cooperativa!</h3>
    </div>
    <div class="card-group d-flex justify-content-center flex-wrap gap-3 m-3">
        <div class="card">
            <img src="images/banco1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mision</h5>
                <p class="card-text">Mejorar la calidad de vida de los asociados de COOMULCAR y sus familias a través de servicios de solidaridad, educación y crédito. Lo hacemos con un equipo de trabajo comprometido y competente.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/vision.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vision</h5>
                <p class="card-text">COOMULCAR en el año 2030, será modelo en el compromiso de mejorar la calidad del servicio a nuestros asociados, aportando al desarrollo del Tolima para la construcción de una sociedad justa y equitativa.</p>
            </div>
        </div>
        <div class="card">
            <img src="images/historia.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Historia</h5>
                <p class="card-text">Fundada en 2000, nuestra cooperativa ha crecido para servir a miles de clientes con servicios financieros confiables.</p>
            </div>
        </div>
    </div>

<?php  include 'footer.php' ?>
</body>
</html>
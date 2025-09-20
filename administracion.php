<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@400..700&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sofia+Sans+Semi+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap');
    </style>

    <!-- Estilos personalizados -->
    <link href="estilos.css" rel="stylesheet">

    <!-- Icono -->
    <link rel="icon" type="image/png" href="images/ico.png">
    <title>Comulcar</title>
</head>

<body>

    <?php
    session_start();

    // Si vienes del login exitoso, muestra la alerta
    if (isset($_SESSION['success'])) {
        echo '<div class="alert alert-success text-center" role="alert">
               Ingreso satisfactorio
            </div>';
        unset($_SESSION['success']); // Para que no se muestre siempre
    }
    ?>

    <h1>Estas en la pagina de administradores</h1>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="images/ico.png" alt="Logo" width="40" height="40">
            </a>

            <!-- Botón menú -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="convenios.php">Convenios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="credito.php">Solicita tu credito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>
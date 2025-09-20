<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@400;600&display=swap');

        body {
            font-family: 'Prompt', sans-serif;
            padding-top: 80px;
        }

        .navbar-custom {
            background: linear-gradient(90deg, #003366, #005580);
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: white !important;
        }

        .navbar-custom .nav-link:hover {
            color: #ffd700 !important;
        }

        .navbar-brand span {
            font-weight: bold;
            font-size: 20px;
            margin-left: 8px;
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/ico.png">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom shadow-sm fixed-top">
        <div class="container-fluid">
            <!-- Logo y nombre -->
            <a class="navbar-brand d-flex align-items-center" href="index.php">
                <img src="images/ico.png" alt="Logo" width="40" height="40" class="d-inline-block">
                <span>COMULCAR</span>
            </a>

            <!-- Botón menú responsive -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="bi bi-house-door"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php"><i class="bi bi-people"></i> Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="convenios.php"><i class="bi bi-briefcase"></i> Convenios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="credito.php"><i class="bi bi-cash-coin"></i> Solicita tu crédito</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>

<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    echo "Acceso no autorizado.";
    exit();
}

$sql = "SELECT * FROM usuarios";
$result = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Icono -->
    <link rel="icon" type="image/png" href="images/ico.png">

    <!-- Fuente personalizada -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@300;500;700&display=swap');
        body {
            font-family: 'Prompt', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
        }

        .table th {
            background-color: #0d6efd;
            color: white;
            text-align: center;
        }

        .table td {
            color: #555;
            text-align: center;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f9f4;
        }

        .btn-custom {
            background-color: #0d6efd;
            color: white;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            color: white;
        }

        .btn-danger-custom {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger-custom:hover {
            background-color: #c82333;
        }

        .navbar-nav .nav-item .nav-link {
            color: #fff !important;
        }

        .navbar {
            margin-bottom: 40px;
        }

        .table-responsive {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h2 {
            font-weight: 700;
            color: #0d6efd;
        }

        .btn-sm {
            padding: 0.3rem 0.6rem;
        }
    </style>
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d6efd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Panel Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contenido Principal -->
<div class="container">
    <h2 class="text-center mb-4">Usuarios Registrados</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Cédula</th>
                    <th>Nombre completo</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>
                    <th>Departamento</th>
                    <th>Ciudad</th>
                    <th>Trabajo</th>
                    <th>Cargo</th>
                    <th>Salario Neto</th>
                    <th>Pasivos Mensuales</th>
                    <th>Activos Mensuales</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['numero_documento']) ?></td>
                        <td><?= htmlspecialchars($row['primer_nombre'] . ' ' . $row['segundo_nombre'] . ' ' . $row['primer_apellido'] . ' ' . $row['segundo_apellido']) ?></td>
                        <td><?= htmlspecialchars($row['correo_electronico']) ?></td>
                        <td><?= htmlspecialchars($row['telefono']) ?></td>
                        <td><?= htmlspecialchars($row['departamento']) ?></td>
                        <td><?= htmlspecialchars($row['ciudad']) ?></td>
                        <td><?= htmlspecialchars($row['lugar_trabajo']) ?></td>
                        <td><?= htmlspecialchars($row['cargo_realizar']) ?></td>
                        <td><?= htmlspecialchars($row['salario_neto']) ?></td>
                        <td><?= htmlspecialchars($row['pasivos_mensuales']) ?></td>
                        <td><?= htmlspecialchars($row['activos_mensuales']) ?></td>
                        <td>
                            <a href="editar_usuario.php?cedula=<?= urlencode($row['numero_documento']) ?>" class="btn btn-sm btn-warning">Editar</a>
                            <br><br>
                            <a href="eliminar_usuario.php?cedula=<?= urlencode($row['numero_documento']) ?>" class="btn btn-sm btn-danger-custom" onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario y sus archivos?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

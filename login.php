<?php
session_start();
include("conexion.php");

$error = false;
$usuarioRecordado = isset($_COOKIE['usuario_recordado']) ? $_COOKIE['usuario_recordado'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contraseña']);
    $recordar = isset($_POST['recordar']);

    if ($recordar) {
        setcookie('usuario_recordado', $usuario, time() + (86400 * 30), "/");
    } else {
        setcookie('usuario_recordado', '', time() - 3600, "/");
    }

    // Verificar si es admin
    $stmt_admin = $conexion->prepare("SELECT * FROM admin WHERE usuario = ? AND contraseña = ?");
    $stmt_admin->bind_param("ss", $usuario, $contraseña);
    $stmt_admin->execute();
    $result_admin = $stmt_admin->get_result();

    if ($result_admin->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['rol'] = 'admin'; 
        header("Location: perfil_admin.php");
        exit();
    }

    // Verificar si es usuario normal
    $stmt_user = $conexion->prepare("SELECT * FROM usuarios WHERE numero_documento = ?");
    $stmt_user->bind_param("s", $usuario);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();

    if ($result_user->num_rows > 0) {
        $row = $result_user->fetch_assoc();
        if ($contraseña === $row['contraseña']) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['rol'] = 'usuario';
            $_SESSION['datos_usuario'] = $row;
            header("Location: perfil_usuario.php");
            exit();
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ingreso - Comulcar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #0d6efd, #dbeafe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-signin {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 15px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 4px 20px rgba(0,0,0,0.1);
        }

        .form-signin img {
            display: block;
            margin: 0 auto 1rem;
        }

        .input-group-text i {
            font-size: 1.3rem;
        }

        .text-danger {
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<main class="form-signin">
    <?php if ($error): ?>
        <div class="alert alert-danger">Usuario o contraseña incorrectos.</div>
    <?php endif; ?>

    <form method="POST" action="" id="loginForm" novalidate>
        <img src="images/ico.png" alt="Logo" width="150">
        <h2 class="text-center mb-4">Ingreso a Comulcar</h2>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario o cédula" value="<?= htmlspecialchars($usuarioRecordado) ?>" required>
            <label for="usuario">Usuario o cédula</label>
            <div id="usuarioError" class="text-danger d-none">Este campo es obligatorio.</div>
        </div>

        <div class="form-floating mb-3 position-relative">
            <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña" required>
            <label for="contraseña">Contraseña</label>
            <button type="button" class="btn position-absolute top-50 end-0 translate-middle-y me-2" onclick="togglePassword()" style="border: none; background: none;">
                <i class="fas fa-eye" id="eyeIcon"></i>
            </button>
            <div id="contraseñaError" class="text-danger d-none">Este campo es obligatorio.</div>
        </div>

        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="recordar" id="recordar" <?= $usuarioRecordado ? 'checked' : '' ?>>
            <label class="form-check-label" for="recordar">
                Recordar usuario
            </label>
        </div>

        <button class="btn btn-primary w-100" type="submit">Ingresar</button>
        <p class="mt-4 mb-0 text-center text-muted">&copy; 2025 Comulcar</p>
    </form>
</main>

<script>
function togglePassword() {
    const input = document.getElementById("contraseña");
    const icon = document.getElementById("eyeIcon");
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

// Validación en tiempo real
document.getElementById('usuario').addEventListener('input', () => {
    const input = document.getElementById('usuario');
    const error = document.getElementById('usuarioError');
    if (input.value.trim() === '') {
        error.classList.remove('d-none');
    } else {
        error.classList.add('d-none');
    }
});

document.getElementById('contraseña').addEventListener('input', () => {
    const input = document.getElementById('contraseña');
    const error = document.getElementById('contraseñaError');
    if (input.value.trim() === '') {
        error.classList.remove('d-none');
    } else {
        error.classList.add('d-none');
    }
});
</script>

</body>
</html>

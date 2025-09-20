<?php
include 'conexion.php';

if (!isset($_GET['cedula'])) {
    echo "Cédula no proporcionada.";
    exit();
}

$cedula = $_GET['cedula'];

$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE numero_documento = ?");
$stmt->bind_param("s", $cedula);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Usuario no encontrado.";
    exit();
}

$usuario = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $primer_nombre = $_POST['primer_nombre'];
    $segundo_nombre = $_POST['segundo_nombre'];
    $primer_apellido = $_POST['primer_apellido'];
    $segundo_apellido = $_POST['segundo_apellido'];
    $correo_electronico = $_POST['correo_electronico'];
    $telefono = $_POST['telefono'];
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $lugar_trabajo = $_POST['lugar_trabajo'];
    $cargo_realizar = $_POST['cargo_realizar'];
    $salario_neto = str_replace('.', '', $_POST['salario_neto']);
    $activos_mensuales = str_replace('.', '', $_POST['activos_mensuales']);
    $pasivos_mensuales = str_replace('.', '', $_POST['pasivos_mensuales']);

    $update = $conexion->prepare("UPDATE usuarios SET 
        primer_nombre = ?, 
        segundo_nombre = ?, 
        primer_apellido = ?, 
        segundo_apellido = ?, 
        correo_electronico = ?, 
        telefono = ?, 
        departamento = ?, 
        ciudad = ?, 
        lugar_trabajo = ?, 
        cargo_realizar = ?, 
        salario_neto = ?, 
        activos_mensuales = ?, 
        pasivos_mensuales = ?
        WHERE numero_documento = ?");
    $update->bind_param("ssssssssssssss", 
        $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido,
        $correo_electronico, $telefono, $departamento, $ciudad,
        $lugar_trabajo, $cargo_realizar, $salario_neto, $activos_mensuales, $pasivos_mensuales, $cedula);
    $update->execute();

    header("Location: perfil_admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
    function aplicarFormatoMiles(input) {
        let valor = input.value.replace(/\./g, '');
        if (!isNaN(valor) && valor !== "") {
            input.value = parseInt(valor).toLocaleString('es-CO');
        }
    }
    </script>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Editar Usuario</h2>
    <form method="POST">
        <div class="row mb-3">
            <div class="col">
                <label>Cédula</label>
                <input type="text" class="form-control" value="<?= htmlspecialchars($usuario['numero_documento']) ?>" disabled>
            </div>
            <div class="col">
                <label>Fecha de Registro</label>
                <input type="text" class="form-control" value="<?= htmlspecialchars($usuario['fecha_registro']) ?>" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col"><label>Primer Nombre</label><input type="text" name="primer_nombre" class="form-control" value="<?= htmlspecialchars($usuario['primer_nombre']) ?>"></div>
            <div class="col"><label>Segundo Nombre</label><input type="text" name="segundo_nombre" class="form-control" value="<?= htmlspecialchars($usuario['segundo_nombre']) ?>"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label>Primer Apellido</label><input type="text" name="primer_apellido" class="form-control" value="<?= htmlspecialchars($usuario['primer_apellido']) ?>"></div>
            <div class="col"><label>Segundo Apellido</label><input type="text" name="segundo_apellido" class="form-control" value="<?= htmlspecialchars($usuario['segundo_apellido']) ?>"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label>Correo Electrónico</label><input type="email" name="correo_electronico" class="form-control" value="<?= htmlspecialchars($usuario['correo_electronico']) ?>"></div>
            <div class="col"><label>Teléfono</label><input type="text" name="telefono" class="form-control" value="<?= htmlspecialchars($usuario['telefono']) ?>"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label>Departamento</label><input type="text" name="departamento" class="form-control" value="<?= htmlspecialchars($usuario['departamento']) ?>"></div>
            <div class="col"><label>Ciudad</label><input type="text" name="ciudad" class="form-control" value="<?= htmlspecialchars($usuario['ciudad']) ?>"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label>Lugar de Trabajo</label><input type="text" name="lugar_trabajo" class="form-control" value="<?= htmlspecialchars($usuario['lugar_trabajo']) ?>"></div>
            <div class="col"><label>Cargo a Realizar</label><input type="text" name="cargo_realizar" class="form-control" value="<?= htmlspecialchars($usuario['cargo_realizar']) ?>"></div>
        </div>
        <div class="row mb-3">
            <div class="col"><label>Salario Neto</label><input type="text" name="salario_neto" class="form-control" value="<?= number_format((float)$usuario['salario_neto'], 0, '', '.') ?>" oninput="aplicarFormatoMiles(this)"></div>
            <div class="col"><label>Activos Mensuales</label><input type="text" name="activos_mensuales" class="form-control" value="<?= number_format((float)$usuario['activos_mensuales'], 0, '', '.') ?>" oninput="aplicarFormatoMiles(this)"></div>
            <div class="col"><label>Pasivos Mensuales</label><input type="text" name="pasivos_mensuales" class="form-control" value="<?= number_format((float)$usuario['pasivos_mensuales'], 0, '', '.') ?>" oninput="aplicarFormatoMiles(this)"></div>
        </div>
        <div class="mb-3">
            <label>Foto Documento</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($usuario['foto_frente']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label>Foto Selfie</label>
            <input type="text" class="form-control" value="<?= htmlspecialchars($usuario['foto_reverso']) ?>" disabled>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="perfil_admin.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>

<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    echo "Acceso no autorizado.";
    exit();
}

if (isset($_GET['cedula'])) {
    $cedula = $_GET['cedula'];

    // Obtener nombres de archivos para eliminarlos
    $stmt_select = $conexion->prepare("SELECT foto_frente, foto_reverso FROM usuarios WHERE numero_documento = ?");
    $stmt_select->bind_param("s", $cedula);
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    if ($result->num_rows > 0) {
        $usuario = $result->fetch_assoc();
        $foto_frente = $usuario['foto_frente'];
        $foto_reverso = $usuario['foto_reverso'];

        // Eliminar fotos del servidor
        if ($foto_frente && file_exists("uploads/$foto_frente")) {
            unlink("uploads/$foto_frente");
        }

        if ($foto_reverso && file_exists("uploads/$foto_reverso")) {
            unlink("uploads/$foto_reverso");
        }

        // Eliminar usuario de la base de datos
        $stmt_delete = $conexion->prepare("DELETE FROM usuarios WHERE numero_documento = ?");
        $stmt_delete->bind_param("s", $cedula);
        $stmt_delete->execute();
    }
}

header("Location: perfil_admin.php");
exit();

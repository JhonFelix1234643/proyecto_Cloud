<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <div class="container mt-5">
        <form class="row g-3 needs-validation" action="enviar.php" method="POST" enctype="multipart/form-data" novalidate>
            <div class="col-md-6">
                <label for="primerNombre" class="form-label">Primer Nombre</label>
                <input type="text" class="form-control" id="primerNombre" name="primerNombre" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="segundoNombre" class="form-label">Segundo Nombre</label>
                <input type="text" class="form-control" id="segundoNombre" name="segundoNombre">
            </div>
            <div class="col-md-6">
                <label for="primerApellido" class="form-label">Primer Apellido</label>
                <input type="text" class="form-control" id="primerApellido" name="primerApellido" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                <input type="text" class="form-control" id="segundoApellido" name="segundoApellido">
            </div>
            <div class="col-md-6">
                <label for="numeroDocumento" class="form-label">Número de Documento</label>
                <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" required>
                <div class="invalid-feedback">Ingrese un correo válido.</div>
            </div>
            <div class="col-md-6">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="telefonoEmergencia" class="form-label">Teléfono de Emergencia</label>
                <input type="tel" class="form-control" id="telefonoEmergencia" name="telefonoEmergencia" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="departamento" class="form-label">Departamento</label>
                <input type="text" class="form-control" id="departamento" name="departamento" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudad" name="ciudad" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-4">
                <label for="salarioNeto" class="form-label">Salario Neto</label>
                <input type="text" class="form-control" id="salarioNeto" name="salarioNeto" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-4">
                <label for="activosMensuales" class="form-label">Activos Mensuales</label>
                <input type="text" class="form-control" id="activosMensuales" name="activosMensuales" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-4">
                <label for="pasivosMensuales" class="form-label">Pasivos Mensuales</label>
                <input type="text" class="form-control" id="pasivosMensuales" name="pasivosMensuales" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="lugarTrabajo" class="form-label">Lugar de Trabajo</label>
                <input type="text" class="form-control" id="lugarTrabajo" name="lugarTrabajo" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="cargoRealizar" class="form-label">Cargo a Realizar</label>
                <input type="text" class="form-control" id="cargoRealizar" name="cargoRealizar" required>
                <div class="invalid-feedback">Este campo es obligatorio.</div>
            </div>
            <div class="col-md-6">
                <label for="fotoDocumentoFrente" class="form-label">Foto del Documento - Frente</label>
                <input type="file" class="form-control" id="fotoDocumentoFrente" name="fotoDocumentoFrente" required>
                <div class="invalid-feedback">Debe subir una imagen del frente del documento.</div>
            </div>
            <div class="col-md-6">
                <label for="fotoDocumentoReverso" class="form-label">Foto del Documento - Reverso</label>
                <input type="file" class="form-control" id="fotoDocumentoReverso" name="fotoDocumentoReverso" required>
                <div class="invalid-feedback">Debe subir una imagen del reverso del documento.</div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </div>

    </main>

    <?php include 'footer.php' ?>

</body>

</html>
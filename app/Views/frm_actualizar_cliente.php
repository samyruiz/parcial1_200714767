<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Actualizar cliente</title>
</head>

<body>
    <div class="container">
        <h1>Modificar datos de clientes</h1>
        <form action="<?= base_url('modificar_cliente') ?>" method="post">
            <div class="mb-3">
                <label for="txt_codigo" class="form-label">Código:</label>
                <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="Id Cliente" value="<?=$datosCliente['cliente_id']?>">
            </div>

            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre" value="<?=$datosCliente['nombre']?>">
            </div>

            <div class="mb-3">
                <label for="txt_apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellido" value="<?=$datosCliente['apellido']?>">
            </div>

            <div class="mb-3">
                <label for="txt_fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="txt_fecha_nacimiento" name="txt_fecha_nacimiento" placeholder="Fecha de nacimiento" value="<?=$datosCliente['fecha_nacimiento']?>">
            </div>

            <div class="mb-3">
                <label for="txt_fecha_suscripcion" class="form-label">Fecha de suscripción:</label>
                <input type="date" class="form-control" id="txt_fecha_suscripcion" name="txt_fecha_suscripcion" placeholder="Fecha de suscripción" value="<?=$datosCliente['fecha_suscripcion']?>">
            </div>

            <div class="mb-3">
                <label for="txt_correo" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" id="txt_correo" name="txt_correo" placeholder="Correo electrónico" value="<?=$datosCliente['correo_electronico']?>">
            </div>

            <div class="mb-3">
                <label for="txt_tel" class="form-label">Teléfono móvil:</label>
                <input type="tel" class="form-control" id="txt_tel" name="txt_tel" placeholder="Teléfono móvil" value="<?=$datosCliente['telefono_movil']?>">
            </div>

            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar cambios">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
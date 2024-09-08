<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/48842a539e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">  
    <title>Clientes</title>
</head>

<body>
    <div class="container">
        <h1 class="pb-3">Clientes</h1>

        <!-- Button modal para agregar registros -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#clienteModal">
        <i class="fa-solid fa-file"></i>Nuevo cliente
        </button>
        <!-- Modal -->
        <div class="modal fade" id="clienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo cliente</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--Formulario agregar clientes-->
                        <form action="<?= base_url('guardar_cliente') ?>" method="post">
                            <div class="mb-3">
                                <label for="txt_codigo" class="form-label">Código:</label>
                                <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="Id Cliente">
                            </div>

                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre:</label>
                                <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
                            </div>

                            <div class="mb-3">
                                <label for="txt_apellido" class="form-label">Apellido:</label>
                                <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellido">
                            </div>

                            <div class="mb-3">
                                <label for="txt_fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                                <input type="date" class="form-control" id="txt_fecha_nacimiento" name="txt_fecha_nacimiento" placeholder="Fecha de nacimiento">
                            </div>

                            <div class="mb-3">
                                <label for="txt_fecha_suscripcion" class="form-label">Fecha de suscripción:</label>
                                <input type="date" class="form-control" id="txt_fecha_suscripcion" name="txt_fecha_suscripcion" placeholder="Fecha de suscripción">
                            </div>

                            <div class="mb-3">
                                <label for="txt_correo" class="form-label">Correo electrónico:</label>
                                <input type="email" class="form-control" id="txt_correo" name="txt_correo" placeholder="Correo electrónico">
                            </div>

                            <div class="mb-3">
                                <label for="txt_tel" class="form-label">Teléfono móvil:</label>
                                <input type="tel" class="form-control" id="txt_tel" name="txt_tel" placeholder="Teléfono móvil">
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        
        <table class="table table-striped table-hover" id="dataTable">
            <thead class="table-dark">
                <tr>
                    <th>Cliente ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha de nacimiento</th>
                    <th>Fecha de suscripción</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono móvil</th>
                    <th>Procesos</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                foreach ($resultado as $fila) {
                ?>
                    <tr>
                        <td><?php echo $fila['cliente_id'] ?></td>
                        <td><?php echo $fila['nombre'] ?></td>
                        <td><?php echo $fila['apellido'] ?></td>
                        <td><?php echo $fila['fecha_nacimiento'] ?></td>
                        <td><?php echo $fila['fecha_suscripcion'] ?></td>
                        <td><?php echo $fila['correo_electronico'] ?></td>
                        <td><?php echo $fila['telefono_movil'] ?></td>
                        <td><a href="<?=base_url("localizar_modificar_cliente/".$fila['cliente_id'])?>" class="btn btn-success">Actualizar<i class="fa-solid fa-pen-to-square"></i></a>
                            |
                            <a href="<?=base_url("eliminar_cliente/".$fila['cliente_id'])?>" class="btn btn-danger">Eliminar<i class="fa-solid fa-trash"></i></a>
                            </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>
</body>

</html>
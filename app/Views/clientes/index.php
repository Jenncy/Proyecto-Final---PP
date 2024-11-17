<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Clientes</h2>
        <a href="<?= base_url('clientes/crear')?>" class="btn btn-success mb-3">Agregar Clientes</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>ID_Rol</th>
                    <th>ID_Departamento</th>
                    <th>ID_Municipio</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $clientes['id'] ?></td>
                        <td><?= $clientes['nombre'] ?></td>
                        <td><?= $clientes['email'] ?></td>
                        <td><?= $clientes['telefono'] ?></td>
                        <td><?= $clientes['id_rol'] ?></td>
                        <td><?= $clientes['id_departamento'] ?></td>
                        <td><?= $clientes['id_municipio'] ?></td>
                        <td>
                            <a href="<?= base_url('clientes/editar/').$clientes['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('clientes/eliminar/').$clientes['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <a href="<?= base_url('')?>" class="btn btn-secondary mb-3">Volver al Inicio</a>
                <p></p>           
            </tbody>
        </table>
    </div>
</body>
</html>

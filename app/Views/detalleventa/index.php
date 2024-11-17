<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalleventa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Detalleventa</h2>
        <a href="<?= base_url('detalleventa/crear')?>" class="btn btn-success mb-3">Agregar Detalleventa</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID_venta</th>
                    <th>ID_producto</th>
                    <th>Cantidad</th>
                    <th>Precio_unitario</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalleventa as $detalleventa): ?>
                    <tr>
                        <td><?= $detalleventa['id'] ?></td>
                        <td><?= $detalleventa['id_venta'] ?></td>
                        <td><?= $detalleventa['id_producto'] ?></td>
                        <td><?= $detalleventa['cantidad'] ?></td>
                        <td><?= $detalleventa['precio_unitario'] ?></td>
                        <td>
                            <a href="<?= base_url('detalleventa/editar/').$detalleventa['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('detalleventa/eliminar/').$detalleventa['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
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
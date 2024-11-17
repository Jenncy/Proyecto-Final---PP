<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>venta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>venta</h2>
        <a href="<?= base_url('ventas/crear')?>" class="btn btn-success mb-3">Agregar venta</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID_cliente</th>
                    <th>Fecha</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $ventas): ?>
                    <tr>
                        <td><?= $ventas['id'] ?></td>
                        <td><?= $ventas['id_cliente'] ?></td>
                        <td><?= $ventas['fecha'] ?></td>
                        <td><?= $ventas['total'] ?></td>
                        <td>
                            <a href="<?= base_url('ventas/editar/').$ventas['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('ventas/eliminar/').$ventas['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
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
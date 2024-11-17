<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Productos</h2>
        <a href="<?= base_url('productos/crear')?>" class="btn btn-success mb-3">Agregar Producto</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Proveedor</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= $producto['id'] ?></td>
                        <td><?= $producto['nombre'] ?></td>
                        <td><?= $producto['descripcion'] ?></td>
                        <td><?= $producto['precio'] ?></td>
                        <td><?= $producto['stock'] ?></td>
                        <td><?= $producto['id_categoria'] ?></td>
                        <td><?= $producto['id_proveedor'] ?></td>
                        <td><?= $producto['id_estado'] ?></td>
                        <td>
                            <a href="<?= base_url('productos/editar/').$producto['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('productos/eliminar/').$producto['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <a href="<?= base_url('index.php/admin')?>" class="btn btn-secondary mb-3">Volver al Inicio</a>
                <p>Prueba</p>           
            </tbody>
        </table>
    </div>
</body>
</html>

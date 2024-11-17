<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>DEstado Producto</h2>
        <a href="<?= base_url('estadoproducto/crear')?>" class="btn btn-success mb-3">Departamentos</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estado</th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estadoproducto as $estadoproducto): ?>
                    <tr>
                        <td><?= $estadoproducto['id'] ?></td>
                        <td><?= $estadoproducto['Estado'] ?></td>
                        <td>
                            <a href="<?= base_url('estadoproducto/editar/').$estadoproducto['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('estadoproducto/eliminar/').$estadoproducto['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
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

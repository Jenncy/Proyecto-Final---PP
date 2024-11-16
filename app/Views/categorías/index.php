<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Categoria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Categorías</h2>
        <a href="<?= base_url('categorías/crear')?>" class="btn btn-success mb-3">categorías</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categorías as $categorías): ?>
                    <tr>
                        <td><?= $categorías['id'] ?></td>
                        <td><?= $categorías['nombre'] ?></td>
                        <td><?= $categorías['descripcion'] ?></td>
                        <td>
                            <a href="<?= base_url('categorías/editar/').$categorías['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('categorías/eliminar/').$categorías['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
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

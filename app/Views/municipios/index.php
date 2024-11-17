<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Municipios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Municipios</h2>
        <a href="<?= base_url('municipios/crear')?>" class="btn btn-success mb-3">Municipios</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>ID_Departamento</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($municipios as $municipios): ?>
                    <tr>
                        <td><?= $municipios['id'] ?></td>
                        <td><?= $municipios['nombre'] ?></td>
                        <td><?= $municipios['id_departamento'] ?></td>
                        <td>
                            <a href="<?= base_url('municipios/editar/').$municipios['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="<?= base_url('municipios/eliminar/').$municipios['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
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

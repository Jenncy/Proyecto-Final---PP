<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Departamentos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Departamentos</h2>
        <form action="<?= base_url('departamentos/actualizar/').$categorías['id'] ?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?= $categorías['id'] ?>" required>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="number" name="nombre" class="form-control" value="<?= $categorías['nombre'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('departamentos')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Roles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Roles</h2>
        <form action="<?= base_url('roles/actualizar/').$roles['id'] ?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?= $roles['id'] ?>" required>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?= $roles['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label>descripcion</label>
                <input type="text" name="descripcion" class="form-control" value="<?= $roles['descripcion'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('roles')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
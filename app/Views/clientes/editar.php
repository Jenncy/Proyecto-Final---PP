<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Cliente</h2>
        <form action="<?= base_url('clientes/actualizar/').$clientes['id'] ?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?= $clientes['id'] ?>" required>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <textarea name="nombre" class="form-control" required><?= $clientes['nombre'] ?></textarea>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="number" name="email" class="form-control" value="<?= $clientes['email'] ?>" required>
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="number" name="telefono" class="form-control" value="<?= $clientes['telefono'] ?>" required>
            </div>
            <div class="form-group">
                <label>Id_Rol</label>
                <input type="number" name="id_rol" class="form-control" value="<?= $clientes['id_rol'] ?>" required>
            </div>
            <div class="form-group">
                <label>ID_Departamento</label>
                <input type="number" name="id_departamento" class="form-control" value="<?= $clientes['id_departamento'] ?>" required>
            </div>
            <div class="form-group">
                <label>ID_Municipio</label>
                <input type="number" name="id_municipio" class="form-control" value="<?= $clientes['id_municipio'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('clientes')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

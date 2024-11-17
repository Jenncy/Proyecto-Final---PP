<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Estado Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Estado Producto</h2>
        <form action="<?= base_url('estadoproducto/actualizar/').$estadoproducto['id'] ?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?= $estadoproducto['id'] ?>" required>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="number" name="Estado" class="form-control" value="<?= $estadoproducto['Estado'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('estadoproducto')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
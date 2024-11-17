<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proveedor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Nuevo Proveedor</h2>
        <form action="<?= base_url('proveedores/guardar')?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <textarea name="nombre" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>telefono</label>
                <input type="number" name="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Direccion</label>
                <input type="text" name="direccion" class="form-control" required>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= base_url('proveedores')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
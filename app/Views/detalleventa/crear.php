<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Detalleventa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Nuevo </h2>
        <form action="<?= base_url('detalleventa/guardar')?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID_venta</label>
                <textarea name="id_venta" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>ID_producto</label>
                <input type="number" name="id_producto" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Cantidad</label>
                <input type="number" name="cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Precio_unitario</label>
                <input type="number" name="precio_unitario" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= base_url('detalleventa')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
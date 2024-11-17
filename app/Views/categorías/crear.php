<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Nuevo Categoria</h2>
        <form action="<?= base_url('productos/guardar')?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID_Venta</label>
                <textarea name="id_venta" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>ID_Producto</label>
                <input type="number" name="id_producto" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Cantidad</label>
                <input type="number" name="cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Precio_Unitario</label>
                <input type="number" name="precio_unitario" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= base_url('productos')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

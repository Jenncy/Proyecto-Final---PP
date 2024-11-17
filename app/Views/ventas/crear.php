<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear venta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Nueva Venta</h2>
        <form action="<?= base_url('ventas/guardar')?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID_cliente</label>
                <textarea name="id_cliente" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Fecha</label>
                <input type="number" name="fecha" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Total</label>
                <input type="number" name="total" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= base_url('ventas')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
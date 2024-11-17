<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar venta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar venta</h2>
        <form action="<?= base_url('ventas/actualizar/').$venta['id'] ?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" value="<?= $venta['id'] ?>" required>
            </div>
            <div class="form-group">
                <label>ID_venta</label>
                <textarea name="id_venta" class="form-control" required><?= $venta['id_venta'] ?></textarea>
            </div>
            <div class="form-group">
                <label>ID_producto</label>
                <input type="number" name="id_producto" class="form-control" value="<?= $venta['id_producto'] ?>" required>
            </div>
            <div class="form-group">
                <label>Total</label>
                <input type="number" name="total" class="form-control" value="<?= $venta['total'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('ventas')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Nuevo Producto</h2>
        <form action="<?= base_url('productos/guardar')?>" method="post">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precio" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Categoría</label>
                <input type="number" name="id_categoria" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Proveedor</label>
                <input type="number" name="id_proveedor" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="number" name="id_estado" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= base_url('productos')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

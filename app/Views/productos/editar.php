<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Producto</h2>
        <form action="<?= base_url('productos/actualizar/').$producto['id'] ?>" method="post">
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" class="form-control" value="<?= $producto['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <textarea name="descripcion" class="form-control" required><?= $producto['descripcion'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precio" class="form-control" value="<?= $producto['precio'] ?>" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="stock" class="form-control" value="<?= $producto['stock'] ?>" required>
            </div>
            <div class="form-group">
                <label>Categoría</label>
                <input type="number" name="id_categoria" class="form-control" value="<?= $producto['id_categoria'] ?>" required>
            </div>
            <div class="form-group">
                <label>Proveedor</label>
                <input type="number" name="id_proveedor" class="form-control" value="<?= $producto['id_proveedor'] ?>" required>
            </div>
            <div class="form-group">
                <label>Estado</label>
                <input type="number" name="id_estado" class="form-control" value="<?= $producto['id_estado'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="<?= base_url('productos')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>

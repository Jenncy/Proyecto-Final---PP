<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Agregar Nuevo Cliente</h2>
        <form action="<?= base_url('clientes/guardar')?>" method="post">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <textarea name="number" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="number" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>telefono</label>
                <input type="number" name="telefono" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID_Rol</label>
                <input type="number" name="id_rol" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID_Departamento</label>
                <input type="number" name="id_departamento" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ID_Municipio</label>
                <input type="number" name="id_municipio" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="<?= base_url('clientes')?>" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
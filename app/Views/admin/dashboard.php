<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Tienda en Línea</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido a la Tienda en Línea</h1>
        <p class="text-center">Seleccione una sección para gestionar los datos.</p>
        <div class="row justify-content-center">
            <a href="<?= base_url('productos')?>" class="btn btn-primary m-2">Productos</a>
            <a href="<?= base_url('clientes')?>" class="btn btn-primary m-2">Clientes</a>
            <a href="<?= base_url('categorias')?>" class="btn btn-primary m-2">Categorías</a>
            <a href="<?= base_url('proveedores')?>" class="btn btn-primary m-2">Proveedores</a>
            <a href="<?= base_url('ventas')?>" class="btn btn-primary m-2">Ventas</a>
            <form action="<?= base_url('login/logout') ?>" method="post">
                <button type="submit" class="btn btn-danger m-2">Cerrar sesión</button>
            </form>
        </div>
    </div>
</body>

</html>
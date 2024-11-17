<!doctype html>
<html lang="ES">

<head>
    <meta charset="utf-8">
    <title>Compu Tech | Store</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


<div class="container-fluid top">
        <!-- 
            ========================================== 
            BOTONES DE INICIO DE SESIÓN Y CREAR CUENTA
            ==========================================
            -->
        <div class="col-3-auto align-self-center">
            <ul class="nav">
                <!--<li class="nav-item"><a class="nav-link color_icon" href="#">Iniciar Sesión</a></li>-->
                <li class="nav-item" data-toggle="modal" data-target="#exampleModal"><a class="nav-link color_icon"
                        href="#exampleModal" data-bs-toggle="modal">Iniciar Sesión</a></li>
                <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Iniciar Sesión</button>-->
                <li class=" barra text-white">|</li>
                <li class="nav-item" data-toggle="modal" data-target="#clienteModal"><a class="nav-link color_icon"
                        href="#clienteModal" data-bs-toggle="modal">Crear cuenta</a></li>
                <li class=" barra text-white">|</li>
                <!--<li class="nav-item"><a class="nav-link color_icon bg-carrito" href="#"><i class="fas fa-shopping-cart carrito"></i></a></li>-->
                <li class="nav-item"><a class="nav-link color_icon" href="#">Ver productos</a></li>
            </ul>
        </div>
    </div>
    </div>
    </div>

    <!-- 
    ========================================== 
    MODAL DE INICIO DE SESIÓN 
    ==========================================
    -->

    <!-- Modal de Inicio de sesión-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inicio de Sesión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 ">
                                <!-- 
                    ========================================== 
                    FORMULARIO DE INICIO DE SESIÓN
                    ==========================================
                    -->

                                <?php if (session()->getFlashdata('error')): ?>
                                <div class="alert alert-danger">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                                <?php endif; ?>

                                <form class="text-center border border-black p-5"
                                    action="<?= base_url('login/autenticar')?>" method="post">

                                    <!-- Email -->
                                    <input type="email" name="email" id="email" class="form-control mb-4"
                                        placeholder="Correo electrónico" required>
                                    <!-- Password -->
                                    <input type="password" name="password" id="password" class="form-control mb-4"
                                        placeholder="Contraseña" required>

                                    <!-- Default form login -->

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--Registrar-->

    <!-- Modal -->
    <div class="modal fade" id="clienteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!--Formulario agregar clientes-->
                    <form action="<?= base_url('clientes/guardarinicio') ?>" method="post">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico:</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="example@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono móvil:</label>
                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="12345678">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required>
                        </div>

                        <div class="mb-3">
                            <label for="departamento" class="form-label">Departamento:</label>
                            <select name="departamento" id="departamento" class="form-control" required>
                                <option value="" class="form-control">Seleccionar Departamento</option>

                                <?php foreach ($departamentos as $departamento): ?>
                                <option value="<?= $departamento['id'] ?>"><?= $departamento['nombre'] ?></option>
                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="mb-3">
                            <input type="submit" class="form-control btn btn-primary" id="btn_guardar"
                                name="btn_guardar" value="Guardar">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Separador -->
    <div class="container-fluid py-3"></div>

    <div class="container p-0 contenedor-logo">
        <div class="row justify-content-between">

            <!-- SEARCH -->
            <div class="col p-0">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="<?= base_url('/') ?>"><img class="logo" src="<?= base_url('img/logo.png') ?>" alt=""></a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>



    <hr class="linea">

    <!---------------------------------------------------------------- Categorías ------------------------------------------------------------------------------------------>
    <?php foreach ($categorias as $categoria): ?>

    <div class="accordion accordion-flush" id="accordionFlushExample<?php echo $categoria['id']; ?>">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse<?php echo $categoria['id']; ?>" aria-expanded="false"
                    aria-controls="flush-collapse<?php echo $categoria['id']; ?>">
                    <?= $categoria['nombre'] ?>
                </button>
            </h2>
            <div id="flush-collapse<?php echo $categoria['id']; ?>" class="accordion-collapse collapse"
                data-bs-parent="#accordionFlushExample<?php echo $categoria['id']; ?>">
                <div class="accordion-body">
                    <?= $categoria['descripcion'] ?>
                    <hr class="linea">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($productos as $producto):
                            if ($producto['id_categoria'] == $categoria['id']){ ?>
                            <tr>
                                <td><?= $producto['nombre'] ?></td>
                                <td><?= $producto['descripcion'] ?></td>
                                <td><?= "Q".$producto['precio'] ?></td>
                            </tr>
                            <?php }
                            endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        <?php endforeach; ?>











        <div class="container-fluid py-3"></div>

        <!-- FOOTER -->
        <footer class="page-footer font-small bg-footer lighten-5">

            <div style="background-color: #E5233A;">
                <div class="container">
                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">
                        <!-- Grid column -->
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0 text-white">¡Conéctate con nosotros en las redes sociales!</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Links -->
            <div class="container text-center text-md-left mt-5">

                <!-- Grid row -->
                <div class="row mt-3 dark-grey-text">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold text-white">cOMPU TECH STORE</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p class="text-white">El objetivo principal de Compu TEch Store es proveer de productos
                            tecnológicos
                            de la más alta calidad y de las mejores marcas, siempre enfocándose y
                            cuidando la economía de sus clientes.</p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold text-white">Computadoras</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; color: #E5233A;">
                        <p><a class="text-white" href="#">Dell</a></p>
                        <p><a class="text-white" href="#">HP</a></p>
                        <p><a class="text-white" href="#">Lenovo</a></p>
                        <p><a class="text-white" href="#">Toshiba</a></p>

                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-4 mx-auto mb-md-0 mb-4">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold text-white">INTEGRANTES DEL GRUPO</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p class="text-white"><i class="fas fa-envelope mr-3 text-white"></i> Samy Josue Ruiz Monzón -
                            200714767</p>
                        <p class="text-white"><i class="fas fa-phone mr-3"></i> Jenccy Giovanni Santos Morales -
                            202206632
                        </p>
                        <p class="text-white"><i class="fas fa-print mr-3"></i> José Carlos Gálvez Manzo - 202211540</p>
                        <p class="text-white"><i class="fas fa-print mr-3"></i> Axel Esaú Colindres Crispín - 202202887
                        </p>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center text-white-50 py-3">© 2024 Copyright
                <p>Proyectos de programación - EFPEM 2024</p>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <!-- SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
</body>

</html>
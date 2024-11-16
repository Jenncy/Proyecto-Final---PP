<!doctype html>
<html lang="ES">

<head>
    <meta charset="utf-8">
    <title>Compu Tech | Store</title>
    <link rel="stylesheet" href="css/styles.css">
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
                                <form class="text-center border border-black p-5" action="#!">

                                    <!-- Email -->
                                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4"
                                        placeholder="Correo electrónico">
                                    <!-- Password -->
                                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4"
                                        placeholder="Contraseña">
                                </form>
                                <!-- Default form login -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Iniciar Sesión</button>
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
                            <form action="<?= base_url('guardar_cliente') ?>" method="post">
                                <div class="mb-3">
                                    <label for="txt_codigo" class="form-label">Código:</label>
                                    <input type="text" class="form-control" id="txt_codigo" name="txt_codigo" placeholder="Id Cliente">
                                </div>
    
                                <div class="mb-3">
                                    <label for="txt_nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
                                </div>
    
                                <div class="mb-3">
                                    <label for="txt_apellido" class="form-label">Apellido:</label>
                                    <input type="text" class="form-control" id="txt_apellido" name="txt_apellido" placeholder="Apellido">
                                </div>
    
                                <div class="mb-3">
                                    <label for="txt_fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                                    <input type="date" class="form-control" id="txt_fecha_nacimiento" name="txt_fecha_nacimiento" placeholder="Fecha de nacimiento">
                                </div>
    
                                <div class="mb-3">
                                    <label for="txt_fecha_suscripcion" class="form-label">Fecha de suscripción:</label>
                                    <input type="date" class="form-control" id="txt_fecha_suscripcion" name="txt_fecha_suscripcion" placeholder="Fecha de suscripción">
                                </div>
    
                                <div class="mb-3">
                                    <label for="txt_correo" class="form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="txt_correo" name="txt_correo" placeholder="Correo electrónico">
                                </div>
    
                                <div class="mb-3">
                                    <label for="txt_tel" class="form-label">Teléfono móvil:</label>
                                    <input type="tel" class="form-control" id="txt_tel" name="txt_tel" placeholder="Teléfono móvil">
                                </div>
    
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn btn-primary" id="btn_guardar" name="btn_guardar" value="Guardar">
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
                  <a class="navbar-brand"><img class="logo" src="img/logo.png" alt=""></a>
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

    <!-- SLIDER -->
    <div class="container">
        <div class="row">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

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
                    <p class="text-white">El objetivo principal de Compu TEch Store es proveer de productos tecnológicos de la más alta calidad y de las mejores marcas, siempre enfocándose y
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
                    <p class="text-white"><i class="fas fa-envelope mr-3 text-white"></i> Samy Josue Ruiz Monzón - 200714767</p>
                    <p class="text-white"><i class="fas fa-phone mr-3"></i> Jenccy Giovanni Santos Morales - 202206632</p>
                    <p class="text-white"><i class="fas fa-print mr-3"></i> José Carlos Gálvez Manzo - 202211540</p>
                    <p class="text-white"><i class="fas fa-print mr-3"></i> Axel Esaú Colindres Crispín - 202202887</p>

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
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
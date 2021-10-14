<?php
ob_start();
if(isset($_POST['registrar'])){
    require  'metodos.php';
    $registrar = new Usuarios();
    $registrar->registrarUsuario();
}

if(isset($_POST['ingreso'])){
    require  'metodos.php';
    $ingresar = new Usuarios();
    $ingresar->ingresarUsuario();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar-top">
            <ul class="navbar-top-ul">
                <li class="navbar-top-item">
                    <a href="login.php" class="navbar-top-links">Registro</a>
                </li>
                <li class="navbar-top-item">
                    <a href="login.php" class="navbar-top-links">Iniciar sesión</a>
                </li>
                <li class="navbar-top-item">
                    <a href="#" class="navbar-top-links">
                        <i class="zmdi zmdi-shopping-cart"></i> Carrito
                        <!-- <i class="zmdi zmdi-chevron-down"></i> -->
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="navbar">
            <header class="nabvar-mobile is-size-5-mobile">
                <a class="navbar-mobile-link has-text-white" href="#" id="btn-mobile"><i class="zmdi zmdi-menu"></i></a>
                <a class="navbar-mobile-link has-text-white" href="#">Avenue Fashion</a>
                <a class="navbar-mobile-link has-text-white" href="index.html"><i class="zmdi zmdi-shopping-cart"></i> Vacio</a>
            </header>
            <nav class="nav-menu --nav-dark-light" id="mySidenav">
                <form class="form-group " action="#">
                    <div class="form-group-container">
                        <span class="form-group-icon"><i class="zmdi zmdi-search"></i></span>
                        <input type="text" class="form-group-input" placeholder="Buscar...">
                    </div>
                </form>

                <a class="is-hidden-mobile brand is-uppercase has-text-weight-bold has-text-dark" href="index.html">Avenue
                    Fashion</a>
                <ul class="nav-menu-ul">
                    <li class="nav-menu-item" id="men">
                        <a class="nav-menu-link link-submenu" href="#">Hombre <i
                                class="zmdi zmdi-chevron-down"></i></a>
                        <div class="container-sub-menu">
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item" id="women">
                        <a href="#" class="nav-menu-link link-submenu">Mujer <i class="zmdi zmdi-chevron-down"></i> </a>
                        <div class="container-sub-menu">

                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item ">
                                    <a class="nav-menu-link" href="#">
                                        <strong>Casual</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisas Polo</a>
                                        </li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="sub-menu-ul">
                                <li class="nav-menu-item"><a class="nav-menu-link" href="#">
                                        <strong>Formal</strong>
                                        <i class="zmdi zmdi-chevron-down "></i>
                                    </a>
                                    <ul class="sub-menu-ul">
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Chaquetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Camisetas</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Trajes</a></li>
                                        <li class="nav-menu-item"><a class="nav-menu-link" href="#">Pantalones</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="ads is-hidden-touch">
                                <h1 class="ads-h1">Ofertas de Verano</h1>
                                <h2 class="ads-h2">Desde el 50% de descuento</h2>
                            </div>
                        </div>
                    </li>
                    <li class="nav-menu-item"><a href="brand.html" class="nav-menu-link">La Marca</a></li>
                    <li class="nav-menu-item"><a href="lookbook.html" class="nav-menu-link">Look Book</a></li>
                    <li class="nav-menu-item"><a href="login.php" class="nav-menu-link active">Registro</a></li>
                    <li class="nav-menu-item"><a href="login.php" class="nav-menu-link">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </nav>
    </header>
    <!-- Banner -->
    <div class="banner banner-second">
        <div class="banner-container ">
            <h1>La marca</h1>
            <h2>Slogan de la compañia</h2>
        </div>
    </div>

    <div class="container">
        <div class="columns">
            <div class="column">
                <h2 class="is-size-4">Iniciar sesión</h2>
                <form action="" method = "POST" class="form-control">

                    <input type="email" placeholder="Correo" name="correo" class="form-control-field error">

                    <input type="password" placeholder="Contraseña" name="contrasena" class="form-control-field">

                    <button type="submit" name="ingreso" class="btn btn-default btn-primary">Iniciar sesión</button>
                </form>
            </div>
            <div class="column">
                <h2 class="is-size-4">Registro</h2>
                <form action="" method="POST" class="form-control">

                    <input type="text" placeholder="Nombre" name="nombre" class="form-control-field" required
                        pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{4,30}" title="Ingrese entre 4 y 30 caracteres"> <!--Nombre independiente de la nacionalidad-->

                    <input type="text" placeholder="Apellido" name="apellido" class="form-control-field" required
                        pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{4,30}" title="Ingrese entre 4 y 30 caracteres"> <!--Apellido independiente de la nacionalidad-->

                    <input type="text" placeholder="Cédula" name="cedula" class="form-control-field" required
                        pattern="^[0-9]{6,10}" title="Ingrese entre 6 y 10 dígitos"> <!--Cédula colombiana-->

                    <input type="email" placeholder="Correo" name="correo" class="form-control-field" required
                        pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$" title="Ingrese un correo válido"> <!--Una implementación del Estandard Official: RFC 5322:
                            ( valida en el 99.99% de los emails existentes )-->

                    <input type="tel" placeholder="Teléfono" name="telefono" class="form-control-field" required
                        pattern="^[0-9]{10}" title="Ingrese 10 dígitos"> <!--Considerando el nuevo estandar de marcación nacional-->

                    <input type="text" placeholder="Dirección de domicilio" name="direccion" class="form-control-field"
                        pattern="[A-Za-z0-9'\.\-\s\,]" title="Ingrese una dirección de domicilio válida">

                    <input type="password" placeholder="Contraseña" name="contrasena" class="form-control-field" required
                        pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="ingresar por lo menos una letra mayúscula, una minúscula, un número y con una longitud mayor o igual a 8 dígitos.">

                    <button type="submit" name="registrar" class="btn btn-default btn-primary">Crear cuenta</button>
                </form>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="columns is-multiline">
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Información</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">La marca</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Local stores</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Servicios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Mapa del sitio</a></li>
                    </ul>
                </div>

                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Porqué comprar</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios y retornos</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Envios seguros</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Testimonios </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Award waining</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Etival trading</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Tu cuenta</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Iniciar sesión</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Registro</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver carrito </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver catálogo</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Track an order</a></li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Catalogo</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para hombres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column">

                    <ul class="footer-ul">
                        <li class="footer-item">
                            <h3 class="has-text-weight-bold">Datos de contacto</h3>
                        </li>
                        <li class="footer-item"><a class="footer-link" href="#">Head</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catálogo para mujeres</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Ver tu Catalogo </a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Privacidad y cookies</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Borrar tu catalogo</a></li>
                    </ul>
                </div>
                <div class="column is-full">
                    <div class="footer-socials">
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-instagram"></i></a>
                        <a class="footer-solcials-link" href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bar-top">
            <div class="container">
                <a class="footer-bar-top-links" href="#">2019 Avenue Fashion</a>
            </div>
        </div>
    </footer>
    <script src="js/main.js"></script>


</body>

</html>

<?php
ob_end_flush();
?>
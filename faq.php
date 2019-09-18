<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Font Awsone-->

    <script src="https://kit.fontawesome.com/66735e3f01.js"></script>


    <!-- Estilos Propios -->

    <link rel="stylesheet" href="css/faq.css">

    <title>FAQs</title>
</head>

<body>

    <div class="container_fluid">

        <div class="container_fluid">
            <header id="cabecera">

                <!--Cabecera Arriba-->

                <div class="cabecera_arriba color-oscuro">
                    <div class="container">
                        <div class="row">


                            <div class="col-xs-12 col-sm-12">
                                <ul class="cabecera-arriba-dere text-right">
                                    <li class="cuenta text-center">
                                        <a href="#" class="text-center">Home</a>
                                    </li>
                                    <li class="cuenta text-center">
                                        <a href="#" class="text-center">Contacto</a>
                                    </li>
                                    <li class="cuenta">
                                        <a href="#" class="text-center">Mi Cuenta</a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!--Cabecera Abajo-->

                <div class="cabecera_abajo color-fondo">
                    <div class="container">
                        <!--Row Header Abajo -->
                        <div class="row">




                            <!--Logo-->
                            <div class="logo col-12 col-sm-8 d-sm-flex justify-content-end">
                                <a href="Index.html" class="logo-link">
                                    <img src="img/Logo Tienda2.png" alt="">
                                </a>
                            </div>
                            <!--Carrito Compras-->
                            <div class="col-12 col-sm-4 carrito">
                                <div id="div-carro" class="btn-group btn-block mtb_40 text-center">

                                    <button type="button" class="btn" data-target="#dropdown-carrito"
                                        data-toggle="collapse" aria-expanded="true"><span id="carrito-compra">Carrito de
                                            Compra</span><span id="carrito-total">items (3)</span> </button>
                                </div>
                                <div id="dropdown-carrito" class="cart-menu collapse">
                                    <ul>
                                        <li>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center"><a href="#"><img
                                                                    src="img/Producto 1.png" alt="iPod Classic"
                                                                    title="iPod Classic"></a></td>
                                                        <td class="text-left nombre-producto"><a href="#">MacBook
                                                                Pro</a>
                                                            <span class="text-left precio">$20.00</span>
                                                            <input class="cant-carro" name="product_quantity" min="1"
                                                                value="1" type="number">
                                                        </td>
                                                        <td class="text-center"><a class="close-cart"><i
                                                                    class="fa fa-times-circle"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center"><a href="#"><img src="img/producto2.jpg"
                                                                    alt="iPod Classic" title="iPod Classic"></a></td>
                                                        <td class="text-left nombre-producto"><a href="#">MacBook
                                                                Pro</a>
                                                            <span class="text-left precio">$20.00</span>
                                                            <input class="cant-carro" name="product_quantity" min="1"
                                                                value="1" type="number">
                                                        </td>
                                                        <td class="text-center"><a class="close-cart"><i
                                                                    class="fa fa-times-circle"></i></a></td>
                                                    </tr>


                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                                        <td class="text-right">$2,100.00</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="text-right"><strong>IVA (21%)</strong></td>
                                                        <td class="text-right">$20.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                        <td class="text-right">$2,122.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <form action="#">
                                                <input class="btn float-left mt_10" value="View cart" type="submit">
                                            </form>
                                            <form action="#">
                                                <input class="btn float-right mt_10" value="Checkout" type="submit">
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!--Termina Row Header Abajo-->

                <!--Empieza El NavBar-->

                <nav class="navbar navbar-expand-lg navbar-light nav1">
                    <p class="menu">MENU</p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse div-nav" id="navbarNavDropdown">

                        <!-- Links -->

                        <ul class="navbar-nav opciones mt-3 mt-lg-0">

                            <li class="nav-item activo">
                                <a class="nav-link" href="#">FAQs<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mi cuenta
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Usuario y clave</a>
                                    <a class="dropdown-item" href="#">Perfil</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Formas de pago
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mercado Pago</a>
                                    <a class="dropdown-item" href="#">Pago con tarjeta</a>
                                    <a class="dropdown-item" href="#">Transferencia</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Entregas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">En domicilio</a>
                                    <a class="dropdown-item" href="#">En puntos de retiro</a>
                                    <a class="dropdown-item" href="#">En local</a>
                                </div>
                            </li>

                        </ul>

                        <form class="form-inline d-lg-flex ml-auto mr-lg-5 mr-xl-6 my-4 my-lg-0 barra_busqueda">
                            <input class="busqueda form-control form-control-underlined pl-3" type="search"
                                placeholder="Search" aria-label="Search">
                            <span><button class="btn_bus btn-underlined py-0" type="submit" style="outline: none;">
                                <i id="buscar" class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>
                </nav>
            </header>
                      </div>

                  </div>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
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

    <link rel="stylesheet" href="css/master.css">

    <title>E-Comerce</title>
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
                                        <a href="#" class="text-center">Contacto</a>
                                    </li>
                                    <li class="cuenta text-center">
                                        <a href="#" class="text-center">FAQ</a>
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
                    <p class="menu">Menu</p>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse div-nav" id="navbarNavDropdown">

                        <!-- Links -->

                        <ul class="navbar-nav opciones mt-3 mt-lg-0">

                            <li class="nav-item activo">
                                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Tegnologia</a>
                                    <a class="dropdown-item" href="#">Ropa</a>
                                    <a class="dropdown-item" href="#">ETC</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ofertas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Vender</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Ayuda</a>
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



            <div class="container_fluid">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href=""> <img src="img/main_banner1.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href=""> <img src="img/main_banner1.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                        <div class="carousel-item">
                            <a href=""> <img src="img/main_banner1.jpg" class="d-block w-100" alt="..."></a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


            <div class="container container_productos_menu">
                <div class="row justify-content-between align-items-center mb-4">
                    <div class="col-12 col-sm">
                      <ul class="list-inline text-center text-sm-left mb-3 mb-sm-0">
                        <li class="list-inline-item"><a href="#" class="text-dark">Todo los Productos </a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo1</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo2</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo3</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-hover-dark">Tipo4</a></li>
                      </ul>
                    </div>
                    <div class="col-12 col-sm-auto text-center"><a href="#" class="btn btn-link px-0">Todo los Productos</a></div>
                  </div>

                  <div class="row">

                    <!-- Productos -->

                    <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                        <div class="producto">
                          <div class="product-image mb-md-3">
                            <div class="product-badge badge badge-secondary">Nuevo</div><a href="detail-1.html">
                              <div class="product-swap-image"><img src="https://d19m59y37dris4.cloudfront.net/varkala/1-0/img/product/0987188250_1_1_1.43f81a4a.jpg" alt="product" class="img-fluid product-swap-image-front"><img src="https://d19m59y37dris4.cloudfront.net/varkala/1-0/img/product/0987188250_2_1_1.7bbd2efc.jpg" alt="product" class="img-fluid"></div></a>
                            </div>
                          </div>
                          <div class="position-relative">
                            <h3 class="text-base mb-1"><a href="detail-1.html" class="text-dark">White Tee</a></h3><span class="text-gray-500 text-sm">$40.00</span>

                          </div>
                        </div> <!-- Productos -->



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
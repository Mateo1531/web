
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="" type="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <title>Document</title>
</head>
<style>

</style>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="position: fixed;  width: 100%;z-index:999999">
    <div class="container-fluid">
        <div style="min-width: 90px;max-width: 280px;width: 200px;">
            <a class="nav-link" role="button"  aria-current="page" type="button" href="{{route ('home')}}" ><img style="width: 155px;" src="{{asset('/img/LOGO W-02.png')}}"></a>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <div style="min-width: 90px;max-width: 150px;width: 140px; height: 58px;">
                        <a class="nav-link active labelNav" href="#" data-bs-toggle="dropdown">  Categorias  </a>
                </div>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route ('cursos')}}">Desarrollo web</a></li>
                    <li><a class="dropdown-item" href="#">Informatica y software</a></li>
                    <li><a class="dropdown-item" href="#">Diseño</a></li>
                    <li><a class="dropdown-item" href="#">Desarrollo de videojuegos</a></li>
                    <li><a class="dropdown-item" href="#">Diseño y desarrollo de bases de datos</a></li>
                    <li><a class="dropdown-item" href="#">Ciencias de la información</a></li>
                </ul>
            </li>
            <li class="nav-item ">
                <nav class="navbar navbar-light" style="width: 800px;">
                    <form class="barraDeBusqueda" style="background-color: #2e1af9;">
                    <div class="input-group ">
                        <span class="input-group-text iconNav" id="basic-addon1">
                            <a href="" ><img style="width: 30px;" src="{{asset('/img/iconLupa.jpg')}}" alt=""></a>
                        </span>
                        <input type="text" class="form-control " placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    </form>
                </nav>
            </li>
            <div style="min-width: 0px;max-width: 90px;width: 140px; height: 58px;">

            </div>
            <li class="nav-item dropdown">
                <div style=" height: 58px;">
                    <a class="nav-link active labelNav" href="#" data-bs-toggle="dropdown">Unete a nuestro equipo</a>
                </div>
            
                <ul class="dropdown-menu">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-text">Convierte lo que sabes en una oportunidad y llega a millones de personas de todo el mundo.</p>
                            <button type="button" class="btn btn-outline-primary">Mas informacion</button>
                        </div>
                    </div>
                </ul>
            </li>
            <li  class="nav-item">
                <a type="button" ><img  class="iconLogin" src="{{asset('img/icoSale.png')}}" alt="">  </a>
            </li>
            @if (Session()->all())
                <li class="nav-item">            
                    <a class="nav-link active labelNav" style="width: 168px;max-width: 165px; min-width: 20px;" href="{{route ('login')}}"> Iniciar Sesion </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active labelNav" href="{{route ('register')}}"> Registrarse </a>
                </li>
            @endif
                <li  class="nav-item">
                    <div style="min-width: 90px;max-width: 150px;width: 140px; height: 58px;">
                        <button id="menu12" ><img  class="iconLogin" src="{{asset('img/INICIO SESION-03.png')}}" alt=""></button>
                    </div>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route ('indexCourse')}}">Crear curso</a></li>
                    <li><a class="dropdown-item" href="#">Informatica y software</a></li>
                    <li><a class="dropdown-item" href="#">Diseño</a></li>
                    <li><a class="dropdown-item" href="#">Desarrollo de videojuegos</a></li>
                    <li><a class="dropdown-item" href="#">Diseño y desarrollo de bases de datos</a></li>
                    <li><a class="dropdown-item" href="#">Ciencias de la información</a></li>
                </ul>
                </li>
            
            
        </ul>
    </div> <!-- navbar-collapse.// -->
    </div> <!-- container-fluid.// -->
    </nav>

    <div id="menulateral" class="container-fluid" style="margin-left: 84%;">
            <div class="row align-items-end flex-nowrap ">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a  class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a  type="button" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">loser</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        </div>
        @yield('content')
        
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-facebook-f"></i
                ></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-linkedin-in"></i
                ></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="fab fa-github"></i
                ></a>
                </section>
                <!-- Section: Social media -->

                <!-- Section: Form -->
                <section class="">
                    <form action="">
                        <!--Grid row-->
                        <div class="row d-flex justify-content-center">
                        <!--Grid column-->
                        <div class="col-auto">
                            <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                            </p>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5 col-12">
                            <!-- Email input -->
                            <div class="form-outline form-white mb-4">
                            <input type="email" id="form5Example21" class="form-control" />
                            <label class="form-label" for="form5Example21">Email address</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-auto">
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-outline-light mb-4">
                            Subscribe
                            </button>
                        </div>
                        <!--Grid column-->
                        </div>
                        <!--Grid row-->
                </form>
                </section>
                <!-- Section: Form -->

                <!-- Section: Text -->
                <section class="mb-4">
                    <p> Las principales empresas eligen a MAFGAT Business para desarrollar sus habilidades profesionales más demandadas.</p>
                </section>
                <!-- Section: Text -->

                <!-- Section: Links -->
                <section class="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                        <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                        <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </section>
            </div>




            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            </footer>

        <script  src="{{asset('js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
        }
    }); 
</script>  

<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

</body>
</html>


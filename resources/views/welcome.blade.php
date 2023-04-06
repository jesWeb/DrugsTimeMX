<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drugtime.MX</title>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/3aafa2d207.js" crossorigin="anonymous"></script>


</head>

<header>
    {{-- menu --}}
    <div class="container-fluid bg-dark fixed-top  ">
        {{-- navb --}}
        <nav class="navbar navbar-expand-lg shadow-md navbar-dark  justify-content-around">
            {{-- content - nav --}}
            {{-- img --}}
            <a class="navbar-brand" href="#">Drugtime</a>
            <!-- collapse btn -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- navbar collapse --}}
            <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
                {{-- links --}}
                <ul class="navbar-nav m-2">
                    {{-- home --}}
                    <li class="nav-item border-bottom">
                        <a class="nav-link active" aria-current="page" href="#">inicio</a>
                    </li>
                    {{-- slide --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#maquina">DrugSlide</a>
                    </li>
                    {{-- contact --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    {{-- session --}}
                    <li class="nav-item">
                        <a class="nav-link " href="{{route('loginAuth')}}" tabindex="-1" aria-disabled="true">
                            iniciar sesion / Registrate</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
{{-- body --}}
<body class="mt-3">
    <div class="container">
        <!--PROMO-slider-->
        <div id="carouselExampleSlidesOnly" class="carousel slide   text-center m-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- slider-content -->
                <div class="carousel-item active">
                    <!-- img-slider -->
                    <img src="{{asset('img/visuales/slider2.jpg')}}" class="d-block " style="height: 70vh; Width:100%;"
                        alt="introduccion">
                    <!-- descripcion-slider -->
                    <div class="carousel-caption d-none d-md-block text-start text- h3">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <!-- slider-content -->
                <div class="carousel-item">
                    <!-- img-slider -->
                    <img src="{{asset('img/visuales/slider3.jpg')}}" class="d-block  " style="height: 70vh; Width:100%;"
                        alt="...">
                    <!-- descripcion-slider -->
                    <div class="carousel-caption d-none d-md-block text-start h3">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <!-- slider-content -->
                <div class="carousel-item">
                    <!-- img-slider -->
                    <img src="{{asset('img/visuales/slider5.jpg')}}" class="d-block  " style="height: 70vh; Width:100%;"
                        alt="...">
                    <!-- descripcion-slider -->
                    <div class="carousel-caption d-none d-md-block text-start h3">
                        <h5>DrugTime</h5>
                        <p>Nuestra empresa esta comprometida con el medio ambiente.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--about us--->
        <section class="mb-4 mt-2 ">
            <div class="row justify-content-center">
                <!--PROMO--->
                <div class="col-4">
                    <!-- cards -->
                    <div class="card text-center boxInfo ">
                        <!-- imagenes -->
                        <img src="{{asset('img/icons/atencion-medica.png')}}" style="height: 150px; Width:150px;"
                            alt="atencion medica">
                        <!-- descripciom -->
                        <h4>Asistencia</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, autem?</p>
                    </div>
                </div>
                <!--PROMO--->
                <div class="col-4">
                    <!-- cards -->
                    <div class="card text-center boxInfo ">
                        <!-- imagenes -->
                        <img src="{{asset('img/icons/equipo-medico.png')}}" style="height: 150px; Width:150px;"
                            alt="medicos y cuidadores">
                        <!-- descripciom -->
                        <div class="mt-2">
                            <h4>Cuidado </h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, autem?</p>
                        </div>
                    </div>
                </div>
                <!--PROMO--->
                <div class="col-4">
                    <!-- cards -->
                    <div class="card text-center boxInfo ">
                        <!-- imagenes -->
                        <img src="{{asset('img/icons/registros-medicos.png')}}" style="height: 150px; Width:150px;"
                            alt="lista de medicamentos">
                        <!-- descripciom -->
                        <div class="mt-3">
                            <h4>Seguimiento</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus, autem?</p>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--drugslide-->
        <section class="mt-4" id="maquina">
            <div class="row align-items-center justify-content-center bg-light" style=" Width:80v-max;">
                <!--PROMO--->
                <div class="col-6">
                    <div class="d-flex justify-content-center ">
                        <div class="promo-img">
                            <img src="{{asset('img/visuales/relog.jpg')}}" class="img-fluid rounded-start"
                                style="height: 50v-max; Width:30vw;" alt="relog">
                        </div>
                    </div>
                </div>
                <!--PROMO--->
                <div class="col-6 ">
                    <div class=" text-center  ">
                        <h4>Adquiere tu Drugslide </h4>
                        <p>Tomar ahora tus medicamentos sera muy futurista </p>
                        <a href="" class="btn btn-primary">Comprar ahora </a>
                    </div>
                </div>
            </div>

        </section>
    </div>
</body>
{{-- footer --}}
<footer class="bg-dark container-fluid mt-5 vh-75">
    <div class="row justify-content-center">
        {{-- img --}}
        <div class="col-auto align-self-center mr-4 m-5">
            <div class="row">

                 <!-- description -->
        <div class="col-auto mr-2">
            <div class="row">
                <!-- content -->
                <div class="mt-5 mb-2 text-center  text-light col-12">
                    <p>Derechos reservados © 2023 | DrugTime.MX</p>
                </div>
            </div>
        </div>
            </div>

        </div>
    </div>
</footer>


</html>

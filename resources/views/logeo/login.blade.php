<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Iniciar sesion</title>
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
<body>
    <div class="container">

        <div class="d-flex mt-5 justify-content-center align-items-center">
            <!-- form  -->
            <div class="row mt-5 justify-content-center ">
                {{-- title --}}
                <h1 class="text-center h3 m-3">Iniciar sesión o crear una cuenta</h1>
                {{-- contenedor --}}
                <div class="col-6 card m-3 shadow-lg  bg-body rounded" style="width: 30rem" ;>
                    <div class="m-3">
                        <h3>Clientes Registrados</h3>
                        <hr>
                        <p>Si tienes una cuenta, inicia sesión con tu correo electrónico.</p>
                    </div>
                    <form name="login" action="" method="GET">
                        {{csrf_field()}}
                        <!-- mail -->
                        <div class="foarm-floating p-2">
                            <label for="floatingInput">Email</label>
                            <input type="text" class="form-control" placeholder="Tu@gmail.com" id="email" name="email"
                                value="">

                        </div>
                        <!-- password -->
                        <div class="foarm-floating mt-3 p-2">
                            <label for="floatingInput">Contraseña</label>
                            <input type="text" class="form-control" id="pass" name="pass" placeholder="password"
                                value="">

                        </div>

                        <div class="m-5 text-center d-grid gap-2">
                            <label for="exampleFormcontrolInput1" class="form-label"></label>
                            <input type="submit" value="ingresar" class="btn btn-primary btn-md ">
                        </div>
                    </form>
                </div>
                <!-- text -->
                <div class="col-6 card m-3 shadow-lg  bg-body rounded" style="width: 35rem" ;>
                    <div class=" m-2">
                        <h3 class="p-2">¡Únete a nosotros hoy!</h3>
                        <p class="p-2">Al registrarte obtendrás servicios adicionales, como:</p>
                    </div>
                    <ul class="">
                        <li>Checkout exprés </li>
                        <li>Lista de Deseos </li>
                        <li>Aviso anticipado de promociones </li>
                        <li>Estatus de Pedidos </li>
                        <li>Lista de Direcciones</li>
                    </ul>
                    <!-- btn registro -->
                    <div class="d-grid gap-2 col-6 mx-auto mt-3">
                        <a class="btn btn-outline-primary" href="{{route('registerAuth')}}" type="button">Registrate</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>

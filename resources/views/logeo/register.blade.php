<!DOCTYPE html>
<html lang="es-Mx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Registro</title>
</head>
<header>
    {{-- menu --}}
    <div class="container-fluid bg-dark fixed-top  ">
        {{-- navb --}}
        <nav class="navbar navbar-expand-lg shadow-md navbar-dark  justify-content-around">
            {{-- content - nav --}}
            {{-- img --}}
            <a class="navbar-brand" href="">Drugtime</a>
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
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="#">inicio</a>
                    </li>
                    {{-- slide --}}
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#maquina">DrugSlide</a>
                    </li>
                    {{-- contact --}}
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Contacto</a>
                    </li>
                    {{-- session --}}
                    <li class="nav-item">
                        <a class="nav-link active border-bottom " href="{{route('loginAuth')}}" tabindex="-1" aria-disabled="true">
                            iniciar sesion / Registrate</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<body>
    <section class="container mt-5">
        <div class="mt-5  ">
            {{-- titulo --}}
            <div class="d-sm-flex align-items-center justify-content-between   mb-4">
                <h1 class="h3 mt-5 register text-gray-800">Crear Una cuenta</h1>
            </div>
            {{-- conteido --}}
            <div class="d-flex justify-content-between align-items-center">
                {{-- contenido form --}}
                <div class="shadow registro card-body ">
                    <div class="row align-items-center">
                       <div class="col-12   ">
                        <form action="{{route('registerCreate')}}" ectype="multipart/form-data" method="POST" class="">
                            {{csrf_field()}}
                            <!-- email -->
                            <div class="mb-4 ">
                                <label for="email" class="form-label">Correo electronico</label>
                                <input type="email" class="form-control border-top-0" name="email" require placeholder="@gmail" id="">
                            </div>

                            <!-- password -->
                            <div class="mb-4 ">
                                <label for="password" class="form-label">contraseña</label>
                                <input type="password" class="form-control border-top-0" name="password" require id="" placeholder="***">
                            </div>

                            <!-- btn registro -->
                            <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                <button class="btn btn-primary m-3" type="submit" value="save">Registrar</button>
                            </div>


                        </form>
                       </div>
                    </div>
                </div>
                 {{--imagen  --}}
                 <div class="box-img">
                    <img src="{{asset('img/register/familia.jpg')}}" class="img-registro card-img-top img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
</body>

</html>

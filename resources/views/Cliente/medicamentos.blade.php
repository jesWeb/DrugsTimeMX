<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="jesus-gtz">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Drugtime.MX</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/3aafa2d207.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<header>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-tablets"></i>
                </div>
                <div class="sidebar-brand-text mx-3">DrugTime.MX<sup>®</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/cliente">
                    <i class="fa-solid fa-house"></i>
                    <span>Home</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active3">
                <a class="nav-link" href="/cuidador">
                    <i class="fa-solid fa-user-doctor"></i>
                    <span>Cuidadores</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active1">
                <a class="nav-link" href="/tratamiento">
                    <i class="fa-solid fa-clock"></i>
                    <span>Tratamientos</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active1">
                <a class="nav-link" href="/medicamento">
                    <i class="fa-solid fa-toolbox"></i>
                    <span>Medicamentos</span></a>
            </li>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active2">
                <a class="nav-link" href="/maquinas">
                    <i class="fa-solid fa-dog"></i>
                    <span>Drugslide</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                                if(isset($_SESSION['nombre'])){echo $_SESSION['nombre'];}else{ echo 'user';}
                            ?>

                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tu perfil
                                </a>

                                <a class="dropdown-item" href="{{route('reportesC')}}"><i
                                        class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Reportes </a>
                                <a class="dropdown-item" href="{{route('graficasC')}}"><i
                                        class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Estadisticas </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
</header>

<body>
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            {{-- titulo de tabla --}}
            <div class="card-header py-3">
                <h3 class="m-1 font-weight-bold text-primary">Tus Medicamentos</h3>
                {{-- btn link --}}
                <div class="d-flex justify-content-end">
                    <a class="btn btn-primary " href="{{route('medicamento.create')}}">Agregar Medicamento<i
                            class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                </div>
            </div>
            {{-- tabala de contenido --}}
            <div class="card-body">
                <div class="table-responsive">
                    {{-- tabla --}}
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Administracion</th>
                                <th>Descripcion</th>
                                <th>Tratamiento</th>
                                <!-- <th>Operaciones</th> -->
                            </tr>
                        <tbody>
                            {{-- consulta eloquente en vista  --}}
                            {{-- @foreach($medicamentos as $medicamento)
                            <tr>
                                <td>{{$medicamento->id}}</td>
                            <td>{{$medicamento->nombre}}</td>
                            <td>{{$medicamento->tipo}}</td>
                            <td>{{$medicamento->descripcion}}</td>
                            <td>
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <form action="medicamento/{{$medicamento->id}}" method="post">
                                            {!! csrf_field() !!}
                                            @method("delete")
                                            <button class="btn btn-danger " type="submit"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            </tr>
                            @endforeach --}}
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Drugtime 2023</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Listo para cerrar tu sesion?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión
                actual.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{route('loginAuth')}}">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>
<!-- Page level plugins -->
<script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
<!-- Page level custom scripts -->
<script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>





</html>

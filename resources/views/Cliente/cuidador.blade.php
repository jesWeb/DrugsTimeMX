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

<body>

    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-3">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    {{-- titulo --}}
                    <h3 class="m-1 font-weight-bold text-primary">Tus Cuidadores</h3>
                    {{-- btn-cuidador --}}
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-primary " href="{{route('cuidador.create')}}">Agregar Cuidador<i
                                class=" m-2 fa-solid fa-plus" style="color: #fcfcfc;"></i></a>
                    </div>
                </div>
                {{-- tabla de contenido --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Nombre</th>
                                    <th>Parentesco</th>
                                    <th>Lugar de trabajo</th>
                                    <th>Telefono</th>
                                    <th>correo electronico</th>
                                    <th>Eliminar</th>
                                    <!-- <th>Operaciones</th> -->
                                </tr>
                            <tbody>
                                {{-- consulta eloquente en vista  --}}
                                {{-- @foreach($cuidadores as $cuidado)
                                <tr>
                                    <td>{{$cuidado->id}}</td>
                                <td>{{$cuidado->nombre}}</td>
                                <td>{{$cuidado->parentesco}}</td>
                                <td>{{$cuidado->lugarTrabajo}}</td>
                                <td>{{$cuidado->Telefono}}</td>
                                <td>{{$cuidado->email}}</td>
                                <td>
                                    <div class="row justify-content-center">
                                        <div class="col-auto">
                                            <form action="cuidador/{{$cuidado->id}}" method="post">
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

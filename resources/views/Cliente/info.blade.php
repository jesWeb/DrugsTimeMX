<!DOCTYPE html>
<html lang="es-Mx">
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

</body>
{{--  --}}
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
<a class="scroll-to-<div class="container">

    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center;">Configuracion Personal</h1>
            @error('success')
            <script>
                Swal.fire(
                    'Success',
                    '{{ $message}}',
                    'success'
                )

            </script>

            @enderror
            <form class="row g-3" style="
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;
                                    text-align: center;
                                " enctype="multipart/form-data" id="formulario-settings" method="post"
                action="{{ route('saveSettingsC') }}">
                @csrf


                <div class="col-md-6">
                    <label for="text" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="text" value="" name="nombre">
                    @error('nombre')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="col-md-3">
                    <label for="date" class="form-label">fecha de Nacimiento</label>
                    <input type="date" name="fechaN" class="form-control" require id="">
                    @error('fechaN')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="sexo">Sexo</label>
                    <div class="form-group">
                        <select class="form-control" name="sexo" require id="">
                            <option value=""></option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    @error('sexo')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">peso</label>
                    <input type="number" class="form-control" id="inputCity" value="" name="peso">
                    @error('peso')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="alergias">Alergias</label>
                    <div class="form-group">
                        <select class="form-control" name="alergias" require id="">
                            <option value=""></option>
                            <option value="si">si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    @error('peso')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="tel" class="form-label">Telefono</label>
                    <input type="tel" name="Telefono" class="form-control" placeholder="+52" id="">
                    @error('Telefono')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                {{-- enfermedades --}}

                <div class="col-md-8 mt-4">
                    <label for="">¿Enfermedades?</label>
                    <input type="text" class="form-control" name="enfermedades" id="descripcion">
                    @error('enfermedades')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- estados --}}
                <div class="col-md-6 mt-4">
                    <label for="text">Estado</label>
                    <input type="text" class="form-control" name="estados" id="descripcion">
                    @error('estados')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- munipcipios --}}
                <div class="col-md-6 mt-4">
                    <label for="">Municipio</label>
                    <input type="text" class="form-control" name="municipio" id="descripcion">
                    @error('municipio')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="col-md-8 mt-5">
                    <input type="file" name="imagenU" class="form-control" id="exampleInputPassword1">
                    {{-- @error('imagenU')
                        <div id="validationServer03Feedback" class="" style="color: red">
                            {{ $message }}
                </div> --}}
                {{-- @enderror --}}
        </div>

        <!-- btn registro -->
        <div class="d-grid gap-2 col-6 mx-auto mt-3">
            <input type="submit" value="Guardar" class="btn btn-outline-primary">
        </div>
    </div>
    </form>
</div>top rounded" href="#page-top">
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

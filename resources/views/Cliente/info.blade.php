@extends('layouts.Cliente')
@section('title', 'Informacion')
@section('content')

    <div class="container">
        {{-- titulo --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Agrega un cuidador</h1>
        </div>
        <div class="shadow card-body mt-4"">
            {{-- content form --}}
            <div class="">
                <div class="mt-2">

                    @error('success')
                        <script>
                            Swal.fire(
                                'Success',
                                '{{ $message }}',
                                'success'
                            )
                        </script>
                    @enderror
                    {{-- alertas --}}
                    <script language="javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                    <script language="javascript">
                        var URL = '{{ route('getMunicipio') }}';
                        $(document).ready(function() {
                            $("#estado").change(function() {
                                // $("#ruta").find()
                                $("#estado option:selected").each(function() {
                                    idEstado = $(this).val();
                                    // token = @csrf;
                                    $.get(URL, {
                                        idEstado: idEstado
                                        // token: token
                                    }, function(data) {
                                        $("#municipios").html(data);
                                    });
                                    // console.log(token);
                                });
                            })
                        });
                    </script>
                    <div class=" p-3">
                        <form class="row" enctype="multipart/form-data" id="formulario-settings"
                            method="post"action="{{ route('saveSettingsC') }}">
                            @csrf
                            {{-- nombre completo --}}
                            <div class="col-md-4">
                                <label for="text" class="form-label">Nombre completo</label>
                                <input type="text" class="form-control" placeholder="Ejemplo:Dasia Lia Sanchez"
                                    id="text" value="" name="nombre">
                                @error('nombre')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- fecha  --}}
                            <div class="col-md-4">
                                <label for="date" class="form-label">fecha de Nacimiento</label>
                                <input type="date" name="fechaN" class="form-control" require id="">
                                @error('fechaN')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- sexo --}}
                            <div class="col-md-4">
                                <label class="form-label" for="sexo">Sexo</label>
                                <div class="form-group">
                                    <select class="form-control" name="sexo" require id="">
                                        <option value="">---</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Indefinido">Indefinido</option>
                                    </select>
                                </div>
                                @error('sexo')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- peso --}}
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label">Ingresa tu peso</label>
                                <input type="number" class="form-control" id="inputCity" value="" name="peso">
                                @error('peso')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- Alergias --}}
                            <div class="col-md-4">
                                <label class="form-label" for="alergias">Alergias</label>
                                <div class="form-group">
                                    <select class="form-control" name="alergias" require id="">
                                        <option value="">---</option>
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
                            {{-- Toluca --}}
                            <div class="col-md-4">
                                <label for="tel" class="form-label">Telefono</label>
                                <input type="tel" name="Telefono" class="form-control" placeholder="+52" id="">
                                @error('Telefono')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- enfermedades --}}
                            <div class="col-md-4">
                                <label for="">Enfermedades</label>
                                <input type="text" class="form-control" placeholder="Describe tus enfermedades aqui"
                                    name="enfermedades" id="descripcion">
                                @error('enfermedades')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            {{-- estados --}}
                            <div class="col-md-4">
                                <label for="">Selecciona tu Estado</label>

                                <div class="form-group">
                                    <select class="form-control" name="estado" require id="estado">
                                        <option value="0" selected>selecciona tu Estado</option>
                                        @foreach ($estados as $estado)
                                            <option value="{{ $estado->idEstados }}">{{ $estado->nombre }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('estados')
                                    <div id="validationServer03Feedback" class="" style="color: red">
                                        {{ $message }}
                                    </div>
                                @enderror


                            </div>
                            {{-- munipcipios --}}
                            <div class="col-md-4">
                                <label for="exampleInputPassword1" class="form-label">Selecciona tu Municipio </label>
                                <select name="municipio" id="municipios" class="form-control"
                                    aria-label="Default select example">

                                </select>
                            </div>
                            {{-- img --}}
                            {{-- <div class="">
                    <input type="file" name="imagenU" class="form-control" id="exampleInputPassword1">
                    @error('imagenU')
                    <div id="validationServer03Feedback" class="" style="color: red">
                        {{ $message }}

                    @enderror
                </div> --}}
                            <!-- btn registro -->
                            <div class="text-center d-grid  col-6 mx-auto mt-4">
                                <input type="submit" value="Registrar mi informacion" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

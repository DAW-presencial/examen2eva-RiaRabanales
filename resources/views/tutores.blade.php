@extends('principal')

@section('contenido')
<div class="row d-flex justify-content-center">
    <h2 class="text-center mt-20">{{__('formTutores_titulo')}}</h2>
    <div class="col-10 col-md-8">
        <!-- Aquí mi array de errores -->
        <p class="text-warning">
            @if ($errors->any())     
                <ul class="list-group list-unstyled text-warning">Debe corregir los siguientes problemas:
                    @foreach ($errors->all() as $error)
                        <li class="border-none px-3">&#8594; <span class="text-muted">{{$error}}</span></li>
                    @endforeach
                </ul>
                <hr/>
            @endif
        </p>

        <!-- Aquí el formulario -->
        <form>
            @csrf
            <div class="form-group">
                <label for="empresa">Nombre de la <strong>empresa</strong></label>
                <input type="text" class="form-control" id="empresa" name="empresa" value="{{old('empresa')}}" required />
                <p class="text-warning small">{{$errors->first('empresa')}}</p>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="nombre">Nombre del <strong>tutor</strong></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" />
                    <p class="text-warning small">{{$errors->first('nombre')}}</p>
                </div>
                <div class="col-4 form-group">
                    <label for="apellido1">Primer apellido</label>
                    <input type="text" class="form-control" id="apellido1" name="apellido1" value="{{old('apellido1')}}" />
                    <p class="text-warning small">{{$errors->first('apellido1')}}
                </div>
                <div class="col-4 form-group">
                    <label for="apellido2">Segundo apellido</label>
                    <input type="text" class="form-control" id="apellido2" name="apellido2" value="{{old('apellido2')}}" />
                    <p class="text-warning small">{{$errors->first('apellido2')}}
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="tipoDocumento">Tipo de documento</label>
                    <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento" value="{{old('tipoDocumento')}}" required />
                </div>
                <div class="col-8 form-group">
                    <label for="numDocumento">Documento de indentidad</label>
                    <input type="text" class="form-control" id="numDocumento" name="numDocumento" value="{{old('numDocumento')}}" required />
                </div>    
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="municipio">Municipio</strong></label>
                    <input type="text" class="form-control" id="municipio" name="municipio" value="{{old('municipio')}}" />
                    <p class="text-warning small">{{$errors->first('nombre')}}</p>
                </div>
                <div class="col-4 form-group">
                    <label for="provincia">Provincia</label>
                    <input type="text" class="form-control" id="provincia" name="provincia" value="{{old('provincia')}}" />
                    <p class="text-warning small">{{$errors->first('provincia')}}
                </div>
                <div class="col-4 form-group">
                    <label for="pais">País</label>
                    <input type="text" class="form-control" id="pais" name="pais" value="{{old('pais')}}" />
                    <p class="text-warning small">{{$errors->first('pais')}}
                </div>
            </div>
            <div class="row">
                <div class="col-6 form-group">
                    <label for="telefono">Teléfono</strong></label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" />
                    <p class="text-warning small">{{$errors->first('telefono')}}</p>
                </div>
                <div class="col-6 form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}" />
                    <p class="text-warning small">{{$errors->first('email')}}
                </div>
            </div>
            <div class="mb-3 col-2">
                <label for="estado" class="form-label">Estado del tutor</label>
                <select class="form-control" name='estado' id="estado">
                    <option value="activo" @if (old('estado') === 'activo') selected @endif>Activo</option>
                    <option value="noActivo" @if (old('estado') === 'noActivo') selected @endif>No activo</option>
                </select>
            </div>
            <div class="d-flex justify-content-between p-3">
                <button type="reset" class="btn btn-dark">Borrar</button>
                <button type="submit" class="btn btn-dark">Enviar</button>    
            </div>
        </form>
    </div>
</div>
@endsection
@extends('plantilla')

@section('contenido')

@if (session()->has('enviado'))

    {{!! "<script> Swal.fire(
    'Correcto!',
    'El usuario es correcto',
    'success'
    ) </script>"!!}}

    @endif


<div class="container mt-3">
    @if ($errors->any())
                @foreach ($errors->all() as $error)

                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>    

                @endforeach

            @endif
    <form class="m-4" method="post" action="Guardarusuario">
        @csrf

        <div class="mb-3">
            <label class="form-label">Usuario</label>
            <input class="form-control" name="txtusuario" value="{{old('txtusuario')}}">
            <p class="text-primary fst-itlalic"> {{ $errors->first('txtusuario')}} </p>
        </div>
        <br>
        <div class="mb-3">
            <label  class="form-label">Contraseña</label>
            <input  class="form-control" name="txtcontraseña" value="{{old('txtcontraseña')}}">
            <p class="text-primary fst-itlalic"> {{ $errors->first('txtcontraseña')}} </p>
        </div>
        <button type="submit" class="btn btn-primary" class="btn btn-success ">enviar</button>
    </form>
</div>
    </div>
    </div>
@stop

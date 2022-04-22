@extends('layouts.layout')
@section('content')
<div class="row">
    <h2>EDITANDO DEPARTAMENTO</h2>

    <div class="divider"></div>
    <div class="row">
        <form action="{{ route('municipios.update', $municipios->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" id="nombre" required name="nombre" value="{{$municipios->nombre}}"required>
                    <label for="nombre">NOMBRE</label>
                </div>
                <div class="input-field col s12">
                    <input type="text" id="nombre" required name="codigo" value="{{$municipios->codigo}}" required>
                    <label for="nombre">CODIGO</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="borrado" id="borrado" value="{{$municipios->borrado}}" required>
                            <option value="" disabled selected>SELECCIONE EL ESTADO</option>
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>  
                    </div>
                </div>
                <div class="row">
                    <input type="submit" class="btn indigo darken-4" value="Guardar">
                    <a href="{{route('municipios.index')}}" class="btn indigo darken-4">CANCELAR</a>
                </div>
            </div>

        </form>
    </div>
</div>
@endsection
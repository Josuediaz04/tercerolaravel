@extends('layouts.layout')
@section('content')
<div class="divider"></div>
    <div class="row">
        <h2>REGISTRAR MUNICIPIOS</h2>
        <form action="{{ route('municipios.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="nombre" required>
                    <label for="nombre">NOMBRE MUNICIPIO</label>
                </div>
                <div class="input-field col s6">
                    <input type="text"name="codigo" required>
                    <label for="codigo">CODIGO DEL MUNICIPIO</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="borrado" required>
                    <label for="borrado">BORRAR</label>
                </div>
            </div>
            <div class="row">
                <input type="submit" class="btn indigo darken-4" value="GUARDAR">
                <input type="reset" class="btn  yellow darken-4" value="LIMPIAR">
            </div>
        </form>
    </div>

@endsection
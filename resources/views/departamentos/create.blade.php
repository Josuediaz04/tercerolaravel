@extends('layouts.layout')
@section('content')
    <div class="row">
        <h2>Hola desde el create</h2>

        <div class="divider"></div>
        <div class="row">
            <form action="{{ route('departamentos.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="nombre" required name="nombre">
                        <label for="nombre">NOMBRE</label>
                    </div>
                    <div class="input-field col s12">
                        <input type="text" id="nombre" required name="codigo">
                        <label for="nombre">CODIGO</label>
                    </div>
                    <div class="row">
                        <input type="submit" class="btn indigo darken-4" value="Guardar">
                        <input type="reset" class="btn yellow darken-4" value="Limpiar">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
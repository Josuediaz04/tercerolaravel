@extends('layouts.layout')
@section('content')
    <div class="row">
        <h2>Registrar Municipios</h2>
        <div class="divider"></div>
    </div>
    <div class="row">
        <form action="{{route('municipios.store')}}" method="post">
            @csrf
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="nombre" required>
                    <label for="nombre">NOMBRE DEL MUNICPIO</label>
                </div>
                <div class="input-field col s6">
                    <input type="text" name="codigo" required>
                    <label for="codigo">CODIGO</label>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="borrado" id="borrado">
                            <option value="" disabled selected>ESCOGE TU OPTION</option>
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                        <div class="input-field col s6">
                            <select name="id_departamento" id="id_departamento">
                                <option value="" disabled selected>Escoja su opciocion</option>
                                @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento['id']}}">{{$departamento['nombre']}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>

            </div>
            <div class="row">
                <input type="submit" class="btn red darken-4" value="Guardar">
                <input type="reset" class="btn green darken-2" value="Limpiar">
            </div>
        
        </form>
    </div>

@endsection
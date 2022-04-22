

@extends('layouts.layout')
@section('content')
    <div class="row">
        <h1>REGISTRAR MUNICIPIOS</h1>
        <div class="divider"></div>
        <table class="table stripped">

            <thead>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CODIGO</th>
                <th>BORRADO</th>
                <th>ID DEPARTAMENTO</th>
                <th>ACCIONES</th>
            </thead>
            <tbody>
                @foreach ($municipio as  $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->codigo}}</td>
                    <td><?php if ($item->borrado == 0){
                        echo " estado inactivo";}
                        if ($item->borrado == 1){
                            echo "estado activo";}?></td>
                    <td>
                        {{$item->id_departamento}}</td>
                    <td> 
                        <form action="{{route('municipios.destroy',$item->id)}}" method="post">
                            <a href="{{route('municipios.edit', $item->id)}}" class="btn green darken-4">EDITAR</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn red darken-4" type="submit">ELIMINAR</button>  
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
@endsection

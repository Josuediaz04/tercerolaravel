

@extends('layouts.layout')
@section('content')
    <div class="row">
        <h1>REGISTRAR MUNICIPIOS</h1>
        <div class="divider"></div>
        <table class="table stripped">
            <thead>
                <th>NOMBRE</th>
                <th>CODIGO</th>
                <th>BORRADO</th>
                <th>ID_DEPARTAMENTO</th>
                <th>ACCIONES</th>
            </thead>
            <tbody>
                @foreach ($municipio as  $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->id_departamento}}</td>
                    <td>{{$item->codigo}}</td>
                    <td>{{$item->borrado}}</td>
                    <td>
                        <a href="{{route('municipios.edit', $item->id)}}" class="btn green darken-4"></a></a>
                        <form action="{{route('municipios.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button class="btn red darken-4" type="submit">ELIMINAR</button>  
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
@endsection

@extends('layouts.layout')
@section('content')
    <div class="row">
        <h1>LISTADO DE DEPARTAMENTOS</h1>
        <div class="divider"></div>
        <table class="table stripped">
            <thead>
                <th>ID</th>
                <th>DEPARTAMENTO</th>
                <th>CODIGO</th>
                <th>ACCIONES</th>
            </thead>
            <tbody>
                @foreach ($departamentos as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->codigo}}</td>
                        <td>
                            
                            <form action="{{route('departamentos.destroy',$item->id)}}" method="post">
                                <a href="{{ route('departamentos.edit',$item->id)}}" class="btn green darken-4">EDITAR</a>
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

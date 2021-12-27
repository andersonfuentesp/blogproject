@extends('adminlte::page')

@section('title', 'Blog project')

@section('content_header')

    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.roles.create')}}">Nuevo rol</a>

    <h1>Lista de roles</h1>
@stop

@section('content')

    @if (session('info'))
            
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>

    @endif

    <div class="card">
        <div class="card-body">
            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <td>{{$rol->id}}</td>
                            <td>{{$rol->name}}</td>
                            <td width="10px">
                                
                                <a class="btn btn-primary btn-sm" href="{{route('admin.roles.edit', $rol)}}">Editar</a>

                            </td>
                            <td width="10px">

                                <form action="{{route('admin.roles.destroy', $rol)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>

                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop

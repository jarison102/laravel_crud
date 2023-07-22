@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('empleado/create')}}" class="btn btn-success">Registrar Nuevo Empleado</a>

<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">ApellidoPaterno</th>
                <th scope="col">ApellidoMaterno</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $empleado)
            <tr class="">
                <td scope="row">{{$empleado->id}}</td>

                <td scope="row">
                    <img class ="img-thumbnail img-fluid" src="{{asset('storage').'/'.$empleado->Foto}}" alt=""  width="100">
                </td>

                <td scope="row">{{$empleado->Nombre}}</td>
                <td scope="row">{{$empleado->ApellidoPaterno}}</td>
                <td scope="row">{{$empleado->ApellidoMaterno}}</td>
                <td scope="row">{{$empleado->Correo}}</td>
                <td scope="row">
                    
                <a href="{{url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">

                Editar 
                </a>
                


                <form action="{{url('/empleado/'.$empleado->id)}}"  class="d-inline" method="post" >
                    @csrf
                    {{method_field('DELETE')}}
                <input type="submit" onclick="return confirm('Quieres borrar encerio?')"value="Borrar" class="btn btn-danger">
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection


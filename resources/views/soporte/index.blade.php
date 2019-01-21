@extends('soporte.layout2')

@section('content')

@if(Session::has('message'))
<div class="alert alert-info">{{Session::get('message')}}</div>
@endif
<div class="container">
    <a class="btn btn-info mb-3" href="{{ route('soporte.create') }}">+ Agregar Ticket</a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre_Usuario</th>
                <th scope="col">Anexo</th>
                <th scope="col">Motivo_Soporte</th>
                <th scope="col">Fecha_Solicitud</th>
                <th scope="col">Usuario_soporte</th>
                <th class="col">Estado</th>
                <th class="col">Informacion_Adicional</th>
            </tr>
        </thead>
        <tbody>
            @foreach($soport as $soport)
            <tr>
                <th scope="row">{{ $soport->id }}</th>
                <td>{{ $soport->Nombre_Usuario }}</td>
                <td>{{ $soport->Anexo }}</td>
                <td>{{ $soport->Motivo_Soporte }}</td>
                <td>{{ $soport->Fecha_Solicitud }}</td>
                <td>{{ $soport->Usuario_soporte }}</td>
                <td>{{ $soport->Estado }}</td>
                <td>{{ $soport->Informacion_Adicional }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
</div>
@endsection
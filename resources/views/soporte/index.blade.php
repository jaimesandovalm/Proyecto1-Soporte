@extends('soporte.layout2')

@section('content')

@if(Session::has('message'))
<div class="alert alert-info">{{Session::get('message')}}</div>
@endif

<div id="page-wraper">
    <div class="row">
        <div class="col-lg-12">
            <h1>Tickets</h1>
        </div>

        <div class="panel-body">
            <a class="btn btn-info mb-3" href="{{ route('soporte.create') }}">+ Agregar Ticket</a>
            
            <table id="dataTables-example" width="100%" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre_Usuario</th>
                        <th>Anexo</th>
                        <th>Motivo_Soporte</th>
                        <th>Fecha_Solicitud</th>
                        <th>Usuario_soporte</th>
                        <th>Estado</th>
                        <th>Informacion_Adicional</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($soport as $soport)
                    <tr class="odd gradeX">
                        <td>{{ $soport->id }}</td>
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
    </div>
</div>

@endsection
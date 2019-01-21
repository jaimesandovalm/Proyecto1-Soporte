@extends('soporte.layout2')

@section('content')

<h1 class="text-center">Crear Ticket</h1>
<br>
@if(Session::has('message'))
<div class="alert alert-info">{{Session::get('message')}}</div>
@endif

<div class="container">
    <form action="{{ route('soporte.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Nombre Usuario:</strong>
                    <input type="text" name="Nombre_Usuario" class="form-control" placeholder="Ingresa tu Nombre">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Anexo:</strong>
                    <input type="text" name="Anexo" class="form-control" placeholder="Numero de anexo">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Motivo Soporte:</strong>
                    <input type="text" name="Motivo_Soporte" class="form-control" placeholder="Tipo de Soporte">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Fecha Solicitud:</strong>
                    <input type="date" name="Fecha_Solicitud" class="form-control" placeholder="Fecha de Solicitud">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <strong>Usuario Soporte:</strong>
                    <input type="text" name="Usuario_soporte" class="form-control" placeholder="Usuario que Toma Soporte">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <strong>Estado:</strong>
                    <input type="text" name="Estado" class="form-control" placeholder="Estado de soporte">
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <strong>Informacion Adicional:</strong>
                    <textarea class="form-control" name="Informacion_Adicional" placeholder="Escriba aqui su informacion..."></textarea>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>

    </form>
</div>
@endsection
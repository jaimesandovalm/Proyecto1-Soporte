@extends('soporte.layout2')

@section('content')
    <div class="container">
      <button class="btn btn-info" ><a href="{{ route('soporte.create') }}">+ Agregar Ticket</a></button><br>    
    </div>
    <div class="container">
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
  @foreach($soport as $soportes)
    <tr>
      <th scope="row">{{ $soportes->id }}</th>
      <td>{{ $soportes->Nombre_Usuario }}</td>
      <td>{{ $soportes->Anexo }}</td>
      <td>{{ $soportes->Motivo_Soporte }}</td>
      <td>{{ $soportes->Fecha_Solicitud }}</td>
      <td>{{ $soportes->Usuario_soporte }}</td>
      <td>{{ $soportes->Estado }}</td>
      <td>{{ $soportes->Informacion_Adicional }}</td>  
    </tr>
  @endforeach  
  </tbody>
</table>
 </div>
@endsection
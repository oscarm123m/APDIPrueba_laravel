<?php

?>
@extends('menu')

@section('contenido')
<div class="container">
<h1>profesores</h1>
<br>
<a href="{{route('crearprofesores')}}">
    <button type="button" class="btn btn-success">Nuevo</button>
</a>
<br>
@if (Session::has('mensaje'))
  <div class="alert alert-success">{{Session::get('mensaje')}}</div>  
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Clave</th>
      <th scope="col">NombreCompleto</th>
      <th scope="col">documento</th>
      <th scope="col">telefono</th>
      <th scope="col">direccion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consulta as $c)
    <tr>
      <td><img src="{{asset('archivos/'.$c->img)}}" height=50 width=50></td>
      <th scope="row">{{$c->ide}}</th>
      <td>{{$c->nombrecompleto}}</td>
      <td>{{$c->documento}}</td>
      <td>{{$c->celular}}</td>
      <td>{{$c->direccion}}</td>
      <td>
      <a href="{{route('actualizarprofesor',['ide'=>$c->ide])}}">
        <button type="button" class="btn btn-info">Modificar</button>
      </a>

      @if ($c->deleted_at)
      <a href="{{route('activarprofesor',['ide'=>$c->ide])}}">
        <button type="button" class="btn btn-warning">Activar</button>
      </a>
      <a href="{{route('borrarprofesor',['ide'=>$c->ide])}}">
        <button type="button" class="btn btn-secondary">Borrar</button>
      </a>
      @else
      <a href="{{route('desactivarprofesor',['ide'=>$c->ide])}}">
        <button type="button" class="btn btn-danger">Desactivar</button>
      </a>
      @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@stop
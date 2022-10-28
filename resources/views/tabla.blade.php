@extends('plantilla')

@section('contenido')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">usuario</th>
      <th scope="col">Contraseña</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Miguel</td>
      <td>Miguel173</td>
      <td>1234</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jonathan</td>
      <td>Gomez142</td>
      <td>0987</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Juan</td>
      <td>theslash</td>
      <td>8302</td>
    </tr>
  </tbody>
</table>
@stop
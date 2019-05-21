@extends('layouts.admin')
@section('main')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Destination</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>
      <th scope="col">Voir</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($travels as $travel)
    <tr>
      <th scope="row">{{ $travel->titre}}</th>
      <td>{{ $travel->destination }}</td>
      <td>{{ $travel->description }}</td>
      <td>{{ $travel->prix }}</td>
      <td><a href="{{ route('getOneTravelAdmin', ['id' => $travel->id])}}">Voir les détails</a></td>
      <td></td>
      <td><a href="">Supprimer</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
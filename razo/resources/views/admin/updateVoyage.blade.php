@extends('layouts.admin')
@section('main')
<form class="perso-form" method="post" action="{{ route('updateTravelAction', ['id' => $travel->id]) }}">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" name="titre" value="{{ $travel->titre }}" id="titre" placeholder="Titre">
  </div>
  <div class="form-group">
    <label for="destination">Destination</label>
    <input type="text" class="form-control" name="destination" value="{{ $travel->destination }}" id="destination" placeholder="Paris">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" class="form-control" name="description" value="{{ $travel->description }}" id="description">
  </div>
  <div class="form-group">
    <label for="prix">Prix</label>
    <input type="float" class="form-control" name="prix" value="{{ $travel->prix }}" id="prix">
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="text" class="form-control" name="image" value="{{  $travel->image }}" id="image" placeholder="url">
  </div>
  <input type="submit">
</form>
<div class="all-destinations-from-details">
      <a  class="all-destinations-from-details-text" href="{{ route('showTable') }}"> Voir toute les destinations</a>
</div>
@stop
@extends('template')
@section('content')
    <h1>Insertion de nouveaux employés<h1>

<form class="form-container" action="/employes/new" method="POST">
  @csrf
  <label for="name" id="name">Prénom :</label>
  <input type="text" name="name">

  <label for="surname" id="surname">Nom :</label>
  <input type="text" name="surname">

  <label for="excerpt" id="excerpt">Description :</label>
  <input type="text" name="excerpt">

  <input type="submit" value="Inserer un nouvel employé">
</form>

@endsection
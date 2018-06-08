@extends('template')
@section('content')
    <h1>Mise à jour de l'employé<h1>
        <form class="form-container" action="/employes/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $user->id }}">
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="surname" value="{{ $user->surname }}">
        <input type="text" name="excerpt" value="{{ $user->excerpt }}">
        <input type="submit" name="" value="Mettre à jour l'employé">
        </form>
@endsection
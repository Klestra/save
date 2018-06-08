@extends('template')
@section('content')
    <h1>Listes des employés<h1>
    <table cellspacing="0" class="base-table">
        <tr>
            <td>Prenom</td>
            <td>Nom</td>
            <td>Description</td>
            <td>Suppréssion</td>
            <td>Mise à jour</td>
        </tr>
        @foreach ($users as $users)
            <tr class="second-tr">
                <td>{{ $users->name }}</td>
                <td>{{ $users->surname }}</td>
                <td>{{ $users->excerpt }}</td>
                <td>
                <form class="" action="/employes/delete" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $users['id'] }}">
                    <input type="submit" name="" value="supprimer">
                </form> 
                </td>
                <td>
                <form class="" action="/employes/update" method="get">
                    @csrf
                    <input type="hidden" name="id" value="{{ $users['id']}}">
                    <input type="submit" name="" value="Mise à jour">
                </form>
            </td>
            </tr>
        @endforeach
    </table>
@endsection
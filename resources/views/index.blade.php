<!-- resources/views/admin/utilisateurs/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <h1>Liste des Utilisateurs</h1>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Rôle</th>
            </tr>
        </thead>
        <tbody>
            @foreach($utilisateurs as $utilisateur)
                <tr>
                    <td>{{ $utilisateur->nom }}</td>
                    <td>{{ $utilisateur->email }}</td>
                    <td>{{ $utilisateur->role }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

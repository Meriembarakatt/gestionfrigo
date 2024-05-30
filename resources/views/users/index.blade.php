@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

                <div class="card">
                    <h1><div class="card-header">Liste des utilisateurs</div></h1>

                    <div class="card-body">
                        <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i> Ajouter un utilisateur</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce vendeur?')"><i class="fas fa-trash-alt"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

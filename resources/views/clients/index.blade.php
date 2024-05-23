@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __('Liste des Clients') }}</h1>
                </div>
                
                <div class="card-body">
                    <!-- Message de succès ou d'erreur -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <a href="{{ route('clients.create') }}" class="btn btn-success mb-3">Ajouter un Client</a>
                
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->nom }}</td>
                                    <td>{{ $client->prenom }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>
                                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-info btn-sm">Voir</a>
                                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary btn-sm">Éditer</a>
                                        <a href="{{ route('clients.reglements', $client->id) }}" class="btn btn-secondary btn-sm">Règlements</a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client?')">Supprimer</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Pagination -->
                    {{-- <div class="d-flex justify-content-center">
                        {{ $clients->links() }}
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

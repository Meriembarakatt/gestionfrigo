@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

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

                    <a href="{{ route('clients.create') }}" class="btn btn-sm btn-primary"><i class="bi bi-plus"></i> Ajouter un Client</a>
                
                    <table class="table table-striped" style="width: 100%; height: 100%;">
                        <thead>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <tr>
                                    {{-- <td>{{ $client->id }}</td> --}}
                                    <td>{{ $client->nom }}</td>
                                    <td>{{ $client->prenom }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>
                                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                        <a href="{{ route('clients.reglements', $client->id) }}" class="btn btn-secondary btn-sm"><i class="bi bi-cash"></i> Règ</a>
                                        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce client?')"><i class="bi bi-trash"></i></button>
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

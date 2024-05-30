@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

                <div class="card">
                    <div class="card-header">
                        Liste des Bons de Livraison
                        <a href="{{ route('bonlivrasons.create') }}" class="btn btn-primary float-right"><i class="bi bi-plus"></i> Ajouter un Bon de Livraison</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Observation</th>
                                    <th>Vendeur</th>
                                    <th>Client</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bons as $bonLivrason)
                                    <tr>
                                        <td>{{ $bonLivrason->id }}</td>
                                        <td>{{ $bonLivrason->date }}</td>
                                        <td>{{ $bonLivrason->observation }}</td>
                                        <td>{{ $bonLivrason->vendeur->nom }} {{ $bonLivrason->vendeur->prenom }}</td>
                                        <td>{{ $bonLivrason->client->nom }} {{ $bonLivrason->client->prenom }}</td>
                                        <td>
                                            <a href="{{ route('bonlivrasons.show', $bonLivrason->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> </a>
                                            <a href="{{ route('bonlivrasons.edit', $bonLivrason->id) }}"class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route('bonlivrasons.destroy', $bonLivrason->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce bon de livraison ?')"><i class="bi bi-trash"></i></button>
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

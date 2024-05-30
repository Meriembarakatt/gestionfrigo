@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1>Liste des Vendeurs</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('vendeurs.create') }}" class="btn btn-primary float-right"><i class="bi bi-plus"></i> Ajouter un vendeur</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Adresse</th>
                                    <th>Ville</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vendeurs as $vendeur)
                                    <tr>
                                        <td>{{ $vendeur->nom }}</td>
                                        <td>{{ $vendeur->prenom }}</td>
                                        <td>{{ $vendeur->adresse }}</td>
                                        <td>{{ $vendeur->ville }}</td>
                                        <td>{{ $vendeur->tell }}</td>
                                        <td>{{ $vendeur->email }}</td>
                                        <td>
                                            <a href="{{ route('vendeurs.show', $vendeur->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> </a>
                                            <a href="{{ route('vendeurs.edit', $vendeur->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> </a>
                                            <a href="{{ route('vendeurs.reglements', $vendeur->id) }}"class="btn btn-sm btn-primary"><i class="bi bi-cash"></i> Règ</a>
                                            
                                            <form action="{{ route('vendeurs.destroy', $vendeur->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce vendeur?')"><i class="bi bi-trash"></i> </button>
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

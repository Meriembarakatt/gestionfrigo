@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

                <div class="card">
                    <div class="card-header">
                        <h1>Règlements pour {{ $vendeur->nom }} {{ $vendeur->prenom }}</h1>
                        @if(session('success'))
                        <div class="alert alert-success mt-3">
                            {{ session('success') }}
                        </div>
                    @endif
                    </div>
                    <div class="card-body">
                        <a href="{{ route('vendeurs.index') }}" class="btn btn-secondary float-right"><i class="bi bi-arrow-left"></i> Retour</a>
                        <a href="{{ route('vendeurs.reglements.create', $vendeur->id) }}" class="btn btn-success"><i class="bi bi-plus"></i> Ajouter Règlement</a>
                                       
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Montant</th>
                                    <th>Observation</th>
                                    <th>Mode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reglements as $reglement)
                                    <tr>
                                        <td>{{ $reglement->date }}</td>
                                        <td>{{ $reglement->montant }}</td>
                                        <td>{{ $reglement->observation }}</td>
                                        <td>{{ $reglement->mode->mode }}</td>
                                        <td>
                                            <a href="{{ route('reglements.edit', $reglement->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> </a>
                                            <a href="{{ route('reglements.show', $reglement->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> </a>
                                            <form action="{{ route('reglements.destroy', $reglement->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce règlement?')"><i class="bi bi-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-3">
                            <h4>Total des Règlements : {{ $totalMontant }} DH</h4> <!-- Afficher le total des montants -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

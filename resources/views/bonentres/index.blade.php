@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Liste des Bons d'Entrée
                    </div>
                    <div class="card-body">
                        <a href="{{ route('bonentres.create') }}" class="btn btn-primary mb-3"><i class="bi bi-plus"></i> Ajouter un Bon d'Entrée</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Date d'Entrée</th>
                                    <th>Date de Sortie</th>
                                    <th>Observation</th>
                                    <th>Vendeur</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bonentres as $bonEntre)
                                    <tr>
                                        <td>{{ $bonEntre->date }}</td>
                                        <td>{{ $bonEntre->date_entre }}</td>
                                        <td>{{ $bonEntre->date_sort }}</td>
                                        <td>{{ $bonEntre->observation }}</td>
                                        <td>{{ $bonEntre->vendeur->nom }} {{ $bonEntre->vendeur->prenom }}</td>
                                        <td>
                                            <a href="{{ route('bonentres.edit', $bonEntre->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i> </a>
                                            <form action="{{ route('bonentres.destroy', $bonEntre->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
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

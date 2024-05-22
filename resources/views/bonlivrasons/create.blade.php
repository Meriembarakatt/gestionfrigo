@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Ajouter un Bon de Livraison
                    </div>
                    <div class="card-body">
                        <form action="{{ route('bonlivrasons.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" name="date" id="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="observation">Observation</label>
                                <textarea name="observation" id="observation" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vendeur_id">Vendeur</label>
                                <select name="vendeur_id" id="vendeur_id" class="form-control" required>
                                    @foreach($vendeurs as $vendeur)
                                        <option value="{{ $vendeur->id }}">{{ $vendeur->nom }} {{ $vendeur->prenom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="client_id">Client</label>
                                <select name="client_id" id="client_id" class="form-control" required>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->nom }} {{ $client->prenom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

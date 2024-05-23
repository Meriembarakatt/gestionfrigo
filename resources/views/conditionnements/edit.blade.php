@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier le Conditionnement</div>

                    <div class="card-body">
                        <form action="{{ route('conditionnements.update', $conditionnement->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="conditionnement">Conditionnement</label>
                                <input type="text" class="form-control" id="conditionnement" name="conditionnement" value="{{ $conditionnement->conditionnement }}" placeholder="Nom du conditionnement">
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

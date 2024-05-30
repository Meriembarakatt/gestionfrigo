<!-- resources/views/familles/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Modifier Famille</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('familles.update', $famille->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="famille">Nom de la famille</label>
                                <input type="text" name="famille" id="famille" class="form-control" value="{{ $famille->famille }}" required>
                                @error('famille')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

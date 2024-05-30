@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

           
                <div class="card">
                    <div class="card-header">Liste des Conditionnements</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <a href="{{ route('conditionnements.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Ajouter un Conditionnement</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Conditionnement</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($conditionnements as $conditionnement)
                                    <tr>
                                        <td>{{ $conditionnement->id }}</td>
                                        <td>{{ $conditionnement->conditionnement }}</td>
                                        <td>
                                            <a href="{{ route('conditionnements.show', $conditionnement->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('conditionnements.edit', $conditionnement->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <form action="{{ route('conditionnements.destroy', $conditionnement->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce conditionnement?')"><i class="fas fa-trash"></i></button>
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

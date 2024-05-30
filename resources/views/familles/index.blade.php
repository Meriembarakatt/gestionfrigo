@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

           
                <div class="card">
                    <div class="card-header">
                        <h1>Liste des Familles</h1>
                        {{-- <button>
                            <a href="{{ route('familles.create') }}" class="btn btn-primary btn-sm float-right">Ajouter Famille</a>
                        </button> --}}
                    </div>
                       
                    <div class="card-body">
                        {{-- @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Famille</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($familles as $famille)
                                    <tr>
                                        <td>{{ $famille->id }}</td>
                                        <td>{{ $famille->famille }}</td>
                                        <td>
                                            <a href="{{ route('familles.edit', $famille->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                                            <a href="{{ route('familles.show', $famille->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                           
                                            <form action="{{ route('familles.destroy', $famille->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette famille ?')"><i class="bi bi-trash"></i> </button>
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

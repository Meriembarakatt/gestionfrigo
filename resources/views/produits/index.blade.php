@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

            <div class="card">
                <div class="card-header">
                    <h1>Liste des Produits</h1>
                </div> 
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Désignation</th>
                                <th>IMAGE DE produit</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produits as $produit)
                                <tr>
                                    <td>{{ $produit->id }}</td>
                                    <td>{{ $produit->designation }}</td>
                                    <td>
                                        @if ($produit->image)
                                            <img src="{{ asset('storage/' . $produit->image) }}" alt="Image de produit" style="max-width: 100px;">
                                        @else
                                            Aucune image disponible
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil"></i></a>
                                        <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-eye"></i> </a>
                                       
                                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')"><i class="bi bi-trash"></i></button>
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

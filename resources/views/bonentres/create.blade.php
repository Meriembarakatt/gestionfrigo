<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Créer un bon d'entrée</div>

                    <div class="card-body">
                        <!-- Form for creating a BonEntre -->
                        <form method="POST" action="{{ route('bonentres.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                                <div class="col-md-6">
                                    <input id="date" type="date" class="form-control" name="date" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_entre" class="col-md-4 col-form-label text-md-right">Date d'entrée</label>

                                <div class="col-md-6">
                                    <input id="date_entre" type="date" class="form-control" name="date_entre" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date_sort" class="col-md-4 col-form-label text-md-right">Date de sortie</label>

                                <div class="col-md-6">
                                    <input id="date_sort" type="date" class="form-control" name="date_sort">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="observation" class="col-md-4 col-form-label text-md-right">Observation</label>

                                <div class="col-md-6">
                                    <textarea id="observation" class="form-control" name="observation" rows="3"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="vendeur_id" class="col-md-4 col-form-label text-md-right">ID Vendeur</label>

                                <div class="col-md-6">
                                    <input id="vendeur_id" type="text" class="form-control" name="vendeur_id" required>
                                </div>
                            </div>

                            <!-- Add fields for other attributes of BonEntre as needed -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Créer Bon d'entrée
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Ajouter un détail de bon d'entrée</div>

                    <div class="card-body">
                        <!-- Form for creating a DetailBonEntre -->
                        <form method="POST" action="{{ route('detail_bon_entre.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="bon_entre_id" class="col-md-4 col-form-label text-md-right">Bon d'entrée ID</label>

                                <div class="col-md-6">
                                    <input id="bon_entre_id" type="text" class="form-control" name="bon_entre_id" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="conditionnement_id" class="col-md-4 col-form-label text-md-right">Conditionnement ID</label>

                                <div class="col-md-6">
                                    <input id="conditionnement_id" type="text" class="form-control" name="conditionnement_id" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="produit_id" class="col-md-4 col-form-label text-md-right">Produit ID</label>

                                <div class="col-md-6">
                                    <input id="produit_id" type="text" class="form-control" name="produit_id" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="qte" class="col-md-4 col-form-label text-md-right">Quantité</label>

                                <div class="col-md-6">
                                    <input id="qte" type="number" class="form-control" name="qte" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="prix" class="col-md-4 col-form-label text-md-right">Prix</label>

                                <div class="col-md-6">
                                    <input id="prix" type="text" class="form-control" name="prix" required>
                                </div>
                            </div>

                            <!-- Add fields for other attributes of DetailBonEntre as needed -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ajouter Détail Bon d'entrée
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

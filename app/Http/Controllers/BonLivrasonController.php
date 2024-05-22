<?php

namespace App\Http\Controllers;

use App\Models\BonLivrason;
use Illuminate\Http\Request;
use App\Models\Vendeur;
use App\Models\Client;

class BonLivrasonController extends Controller
{
    public function index()
    {
        $bons = BonLivrason::all();
        return view('bonlivrasons.index', compact('bons'));
    }

    public function create()
    {
        $vendeurs = Vendeur::all();
        $clients = Client::all();
        return view('bonlivrasons.create', compact('vendeurs', 'clients'));
    }

    public function store(Request $request)
    {
        BonLivrason::create($request->all());
        return redirect()->route('bonlivrasons.index')->with('success', 'Bon de livraison ajouté avec succès.');
    }

    public function edit(BonLivrason $bon)
    {
        $vendeurs = Vendeur::all();
        $clients = Client::all();
        return view('bonlivrasons.edit', compact('bon', 'vendeurs', 'clients'));
    }

    public function update(Request $request, BonLivrason $bon)
    {
        $bon->update($request->all());
        return redirect()->route('bonlivrasons.index')->with('success', 'Bon de livraison mis à jour avec succès.');
    }

    public function show(BonLivrason $bon)
    {
        return view('bonlivrasons.show', compact('bon'));
    }

    public function destroy(BonLivrason $bon)
    {
        $bon->delete();
        return redirect()->route('bonlivrasons.index')->with('success', 'Bon de livraison supprimé avec succès.');
    }
}

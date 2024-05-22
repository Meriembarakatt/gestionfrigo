<?php
namespace App\Http\Controllers;

use App\Models\BonSort;
use App\Models\Vendeur;
use Illuminate\Http\Request;

class BonSortController extends Controller
{
    public function index()
    {
        $bonSorts = BonSort::all();
        return view('bonsorts.index', compact('bonSorts'));
    }

    public function create()
    {
        $vendeurs = Vendeur::all();
        return view('bonsorts.create', compact('vendeurs'));
    }

    public function store(Request $request)
    {
        BonSort::create($request->all());
        return redirect()->route('bonsorts.index')->with('success', 'Bon de sortie ajouté avec succès.');
    }

    public function show(BonSort $bonSort)
    {
        return view('bonsorts.show', compact('bonSort'));
    }

    public function edit(BonSort $bonSort)
    {
        $vendeurs = Vendeur::all();
        return view('bonsorts.edit', compact('bonSort', 'vendeurs'));
    }

    public function update(Request $request, BonSort $bonSort)
    {
        $bonSort->update($request->all());
        return redirect()->route('bonsorts.index')->with('success', 'Bon de sortie mis à jour avec succès.');
    }

    public function destroy(BonSort $bonSort)
    {
        $bonSort->delete();
        return redirect()->route('bonsorts.index')->with('success', 'Bon de sortie supprimé avec succès.');
    }
}

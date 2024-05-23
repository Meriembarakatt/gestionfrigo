<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use App\Models\BonSort;
use App\Models\DetailBonSort;
use App\Models\Vendeur;
use App\Models\Conditionnement;
use App\Models\Produit;
=======
namespace App\Http\Controllers;

use App\Models\BonSort;
use App\Models\Vendeur;
>>>>>>> 17ebe221ad51071fe032247a04e3faccf8d88900
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
<<<<<<< HEAD
        $produits = Produit::all();
        $conditionnements = Conditionnement::all();
        return view('bonsorts.create', compact('vendeurs', 'conditionnements', 'produits'));
=======
        return view('bonsorts.create', compact('vendeurs'));
>>>>>>> 17ebe221ad51071fe032247a04e3faccf8d88900
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        $bonSort = BonSort::create($request->only(['date', 'observation', 'vendeur_id']));

        foreach ($request->input('details') as $detail) {
            DetailBonSort::create([
                'bon_sort_id' => $bonSort->id,
                'conditionnement_id' => $detail['conditionnement_id'],
                'produit_id' => $detail['produit_id'],
                'qte' => $detail['qte'],
            ]);
        }

=======
        BonSort::create($request->all());
>>>>>>> 17ebe221ad51071fe032247a04e3faccf8d88900
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
<<<<<<< HEAD
        $bonSort->update($request->only(['date', 'observation', 'vendeur_id']));

        DetailBonSort::where('bon_sort_id', $bonSort->id)->delete();

        foreach ($request->input('details') as $detail) {
            DetailBonSort::create([
                'bon_sort_id' => $bonSort->id,
                'conditionnement_id' => $detail['conditionnement_id'],
                'produit_id' => $detail['produit_id'],
                'qte' => $detail['qte'],
            ]);
        }

=======
        $bonSort->update($request->all());
>>>>>>> 17ebe221ad51071fe032247a04e3faccf8d88900
        return redirect()->route('bonsorts.index')->with('success', 'Bon de sortie mis à jour avec succès.');
    }

    public function destroy(BonSort $bonSort)
    {
        $bonSort->delete();
        return redirect()->route('bonsorts.index')->with('success', 'Bon de sortie supprimé avec succès.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use App\Http\Controllers\InventaireController;

class AjoutController extends Controller
{
    public function show()
    {
        return view('Ajout');
    }

    public function add(Request $req)
    {

        $fields = $req->validate([
            'nom' => 'required|string',
            'quantite' => 'required|integer',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'fournisseur' => 'required|string'
        ]);


        $nouveauProduit = new Produit();

        $nouveauProduit->nom = $fields['nom'];
        $nouveauProduit->quantite = $fields['quantite'];
        $nouveauProduit->description = $fields['description'];
        $nouveauProduit->prix = $fields['prix'];
        $nouveauProduit->fournisseur = $fields['fournisseur'];
        $nouveauProduit->save();
        return redirect()->action(InventaireController::class);
    }
}

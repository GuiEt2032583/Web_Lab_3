<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ModificationController extends Controller
{
    public function show($id)
    {
        return view('Modification', ["produit"=>Produit::where('id', $id)->firstOrFail()]);
    }

    public function modify($id, Request $req)
    {
        $produit = Produit::find($id);

        $fields = $req->validate([
            'nom' => 'required|string',
            'quantite' => 'required|integer',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'fournisseur' => 'required|string'
        ]);

        $produit->nom = $fields['nom'];
        $produit->quantite = $fields['quantite'];
        $produit->description = $fields['description'];
        $produit->prix = $fields['prix'];
        $produit->fournisseur = $fields['fournisseur'];
        $produit->save();

        echo $produit;
        return redirect()->action(InventaireController::class);
    }
}

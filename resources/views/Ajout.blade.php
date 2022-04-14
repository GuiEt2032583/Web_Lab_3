<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Gestion d'inventaire PHP</title>
    </head>
   <body>
        <form>
            <div class="ajout-produit">
                <h1 class="titre">Ajout de produit</h1>
                <div>
                    <h2>
                        <input type="text" palceholder="Nom du produit" >
                    </h2>
                    <h3>
                        $<input type="text" pladceholder="Prix">
                    </h3>
                </div>
                <div>
                    <h4>Fournisseur</h4>
                    <input type="text" placeholder="Fournisseur">
                    <div class="product-qty">
                        <h4>Quantité</h4>
                        <div class="quantity">
                            <input type="number" placeholder="Quantité">
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="mb-1">Description</h4>
                    <textarea rows="4" cols="50" placeholder="Courte description"></textarea>
                </div>
                <a  class="btn btn-primary btn-block btn-lg">Sauvegarder</a>
            </div>
        </form>
   </body>
</html>

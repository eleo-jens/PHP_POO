<form action="./index.php?p=rechercheTraitementEtendu" method="POST" id="formHTML">
    <div class="mb-3">
        <label for="titre" class="form-label">Recherche par titre: </label> <input type="text" name="titre" id="titre" maxlength="100" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Chercher un film</button>
</form>
<div id="resultat"></div>
<script src="./script/recherche.js" type="text/javascript"></script>
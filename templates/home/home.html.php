<p>Coucou je suis le home</p>

<div class="container">
 <!-- action du form via app et instancie la dans ce cas dans home-->
<form action="index.php?controller=home&task=index" method="POST">
<div class="form-group">
    <textarea name="messageChangeable" cols="30" rows="1" placeholder="votre message"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn-primary">changer</button>
</div>

</form>

<p><strong>message à changer:</strong> <?php echo $messageChangeable ?></p>
</div>
<p>D'abord gérer la base de données et notamment la connexion. Core - database fait la connexion.
    mettre le nom de la db, le nom et le mdp de l'utilisateur (dans l'objet pdo).
</p>
<p>
dans le dossier Core il y a aussi App.php,avec la methode process qui est utilisé dans l'index. Pour changer la page par default il faut changer le controllerName.
</p>
<p> je peux afficher ici tous les resultats d'une table (ex:foreach pizzas as pizza).
    on créé d'abord le model Pizza qui hérite du model Model.
    si je veux afficher toutes les pizzas je crée ma fonction findAll. Pour faire le lien entre model et la page d'affichage je créé le controller Pizza.</p>
<p>Je peux appeler mon foreach pour afficher toute mes pizzas</p>
<p>
je met les formulaires si besoin de publier ou d'editer sije veux sur la page home si je veux afficher sur une autre page je crée donc un template pour cette page. Ex je veux cliquer et voir une pizza je peux créer un template pizza.
</p>

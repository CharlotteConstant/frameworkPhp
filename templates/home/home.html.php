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

<p> je peux afficher ici tous les resultats d'une table (ex:foreach pizzas as pizza)
je met les formulaires si besoin de publier ou d'editer sije veux sur la page home si je veux afficher sur une autre page je crée donc un template pour cette page. Ex je veux cliquer et voir une pizza je peux créer un template pizza.</p>
<p> il faut un model et un controller pizza pour faire mon foreach</p>
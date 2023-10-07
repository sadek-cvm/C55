<?php
    require_once("action/IndexAction.php");

    $action = new IndexAction();
    $data = $action->execute();

	require_once("partial/header.php");
?>

<h1>Faites-le sortir de cette pièce!</h1>
<p>En utilisant <strong>AJAX</strong>, vous devez faire qu'en cliquant sur une flèche, une variable de session nommée "direction" est créée avec la direction (0, 1, 2 ou 3) que le personnage doit prendre.</p>
<p>Pour ouvrir la page avec le personnage, cliquez <a href="room.php" target="room">ici</a>. Note : vous n'avez pas à modifier la page du personnage, tout a été déjà implémenté, y compris AJAX.</p>
<p>Vous devriez vous faire les fichiers "javascript.js" et ajax-index.php (+ son contrôleur).</p>

<div class="controls">
	<!-- Direction 0 -->
	<div class="arrow-up"></div>

	<!-- Direction 2 -->
	<div class="arrow-down"></div>

	<!-- Direction 1 -->
	<div class="arrow-left"></div>

	<!-- Direction 3 -->
	<div class="arrow-right"></div>
</div>


<?php
	require_once("partial/footer.php");

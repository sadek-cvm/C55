<?php
	require_once("action/indexAction.php");

	$data = execute();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Morse</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/global.css">
		<script src="https://notes-de-cours.com/dev/toggle-lab-info.js"></script>
	</head>
	<body>
		<div id="background"></div>
		<div style="margin-left:300px;width:500px;position:relative;">
			<h1 style="margin-top:50px;">
				Outil de conversion Morse-ASCII

				<?php
					if(empty($data["chaineConvertie"])) {
					?>
						<form action="">
							<div class="container">
								<label for="toMorse">Convertir en morse</label>
								<textarea name="toMorse" id="toMorse" cols="30" rows="10"></textarea>
								<label for="toString">Convertir en string</label>
								<textarea name="toString" id="toString" cols="30" rows="10"></textarea>
								<button>Convertir</button>
							</div>
						</form>
					<?php
					}
					else{
					?>
						<div class="container">
							<div>Resultat:</div>
        					<span id="resultat"><?= $data["chaineConvertie"] ?></span>
    					</div>
					<?php
					}
				?>
				
			</h1>

		</div>
		<footer>
			<div>
				<h3>Outils de conversion pour le Morse</h3>

				<div>
					Le laboratoire consiste à faire un formulaire permettant de convertir une chaîne de caractères ASCII en morse, ou vice-versa. Étapes :
				</div>
				<ul>
					<li>Faire un formulaire avec deux textareas (<a href="images/avant.png">avant</a>).</li>
					<li>Lorsque le formulaire est envoyé au serveur, PHP converti la chaîne de caractères via une fonction <code>execute</code> dans le fichier <code>indexAction.php</code>. Utilisez les fonctions <code>encodeMorse</code> et <code>decodeMorse</code> disponibles dans le fichier <code>morse-utils.php</code>.</li>
					<li>La chaîne convertie est affichée (<a href="images/apres.png">après</a>).</li>
				</ul>
			</div>
		</footer>

	</body>
</html>
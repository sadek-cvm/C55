<?php
	function hasher($mot = "asd") {
		//$mot = sha1($mot);
		$mot = password_hash($mot, PASSWORD_DEFAULT);
		return $mot;
		
	}
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Les fonctions</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Création d'un hash</h1>
		<div>
			<?= hasher("test") ?>
		</div>
	</body>
</html>








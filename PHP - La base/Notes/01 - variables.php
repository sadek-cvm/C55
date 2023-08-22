<?php	// phpt

	$username = "Ahmed";

	if($username == "Sadek"){
		echo "salut! " . $username;
	}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Variables</title>
		<meta charset="utf-8" />
	</head>
	<body>
		Nom : <?php echo $username; ?><br>
		Nom : <?= $username; ?><br> <!-- shortcut for php echo -->
		<?= $username; ?> <!-- phpe -->
		
	</body>
</html>
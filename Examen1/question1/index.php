<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Spy Lookup Service</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<div>
			<div class="search-line">
				<form action="">
					<div class="form-left">
						<input type="text" name="searchBox" value="" />
					</div>
					<div class="form-right">
						<input type="image" src="images/search-btn.png" />
					</div>
					<div class="clear"></div>
				</form>

				<!-- Mettre résultat ici -->
				<div>
					<?php
						foreach($data["searchResult"] as $result){
							?>
								<ul><?= $result ?></ul>
							<?php
						}
					?>
				</div>
			</div>
		</div>
		<footer>
			Nombre de visites : <?= $_SESSION["nbVisites"] ?>
		</footer>
	</body>
</html>
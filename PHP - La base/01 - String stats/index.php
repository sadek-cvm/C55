<?php
	$showLongueur = false ;
	$text = null;
	if(!empty($_GET["searchBox"])){
		$showLongueur = true;
		$text = $_GET["searchBox"];
	}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>String stats</title>
        <meta charset="utf-8" />
		<link href="css/global.css" rel="stylesheet" />
	</head>
	<body>
		<form  action="" method="get">
			<div id="analyze-icon">
			</div>
			<?php
				if(!$showLongueur){
				?>
				<div id="analyze-result">
					Entrez une chaîne de caractères et appuyez sur analyser
				</div>
				<div id="search-line">
				<div>
					<input type="text" name="searchBox" placeholder="Texte à analyser" />
				</div>
				<div class="btn">
					<button>Analyser</button>
				</div>
				</div>
				<?php
				}
				else{
				?>
					<div style="text-align: center"><?= strlen($text) ?></div>
				<?php
				}
			?>
			
		</form>
	</body>
</html>
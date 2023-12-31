<?php 
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();	
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion à un API</title>
        <link href="css/global.css" rel="stylesheet" />
        <script src="js/jquery.min.js"></script>
        <meta charset="utf-8"/>
    </head>
    <body>
		<div class="main-section">
			<h1>
				API de Game of Thrones !?
			</h1>
			<div>
				<form action="index.php" method="get">
					<input type="text" name="num" placeholder="# du personnage (ex: 583)" />
					<button type="submit">
						Tester
					</button>
				</form>
			</div>
			<div>
				<?php
					if (!empty($data["result"])) {
						?>
						<h2>
							<?= $data["result"]->name ?>
							<!-- object and not php equivalent of hashmap -->
						</h2>
						<div class="result">
							<pre><?= str_replace(",", ",<br>", $data["json"]) ?></pre>
						</div>
						<?php
					}
				?>
			</div>
		</div>
    </body>
	<script>
		console.log(JSON.stringify(<?= $data["json"] ?>))
	</script>


<!--  	
	$map = array();
	$map["key1"] = "value1";
	$map["key2"] = "value2";

	echo $map["key1"]; // Outputs "value1"
	
	foreach($map as $key => $value){
		echo $key . ' : ' . $value . PHP_EOL;
	}
-->
</html>
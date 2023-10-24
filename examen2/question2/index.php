<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Centre d'appels</title>
        <meta charset="utf-8">
        <link href="css/global.css" rel="stylesheet" />
		<script src="js/javascript.js"></script>
    </head>
    <body>
		<div class="stats shaded">
			<h1>Centre d'appels CVM</h1>
			<div>
				<span id=nbrAppels><?=$data["nbrAppels"]?></span> appels depuis sa création!
			</div>
		</div>
        <div class="control-panel">
			<div class="shaded">
			<?php
				if (!$data["isConnected"]) {
					?>
						<form action="" method="post">
							<input type="text" name="connect" id="connect" value="connect" style="display:none;">
							<button type="submit" id="connectBtn">Se connecter</button>
						</form>
						
					<?php
				}
				else {
					?>
						<button id="completeCallBtn" onclick="completeCall()">Appel complété</button>
						<form action="" method="post">
							<input type="text" name="deconnect" id="deconnect" value="deconnect" style="display:none;">
							<button id="deconnectBtn">Se déconnecter</button>
						</form>
					<?php
				}
			?>
			</div>
		</div>
    </body>
</html>
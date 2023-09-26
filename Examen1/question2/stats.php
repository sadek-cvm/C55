<?php
	require_once("action/StatsAction.php");

	$action = new StatsAction();
	$data = $action->execute();

	$pageTitle = "Statistiques";
	require_once("partial/header.php");
?>
<div id="page-stats">
	<ul>
		<li>
			Nombre de visites : <?= $data["nbVisites"] ?>
		</li>
		<li>
			Dernière visite : <?= $data["derniereDate"] ?>
		</li>
		<li>
			Page la plus populaire :  <?= $data["pagePlusPopulaire"] ?>
		</li>
	</ul>
	<?php
		if ($data["isConnected"]) {
			?>
				<a href="?clear=true">Clear</a>
			<?php
			
		}
	?>
</div>
<?php
	require_once("partial/footer.php");
<?php
    
    require_once("action/LogoutAction.php");

	$action = new LogoutAction();
	$data = $action->execute();

    require_once("partial/header.php");
    ?>
    Vous êtes déconnecté.
    <?php
    require_once("partial/footer.php");
<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
    $resourcesCss = ["css/login/style.css"];
    $resourcesJs = [];
    $resourcesJs[] = "js/login/javascript.js";
    $resourcesJs[] = "js/login/sprite/Bird.js";

	require_once("partial/header.php");
?>
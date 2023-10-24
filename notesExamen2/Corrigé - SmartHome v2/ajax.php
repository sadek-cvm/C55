<?php
    require_once("action/AjaxAction.php");

    $action = new AjaxAction();
    $data = $action->execute();

    // var_dump($data["lights"]); exit;
    echo json_encode($data["lights"]);
<?php
    require_once("action/AjaxRoomAction.php");

    $action = new AjaxRoomAction();
    $data = $action->execute();

	echo json_encode($data["result"]);
?>

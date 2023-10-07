<?php
	require_once("action/CommonAction.php");

	class AjaxRoomAction extends CommonAction {

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
			$result = "";

			if (isset($_SESSION["direction"])) {
				$result = $_SESSION["direction"];
				unset($_SESSION["direction"]);
			}
			
			return compact("result");
		}
	}

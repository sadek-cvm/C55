<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/UserDAO.php");

	class LogoutAction extends CommonAction {
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {
            session_destroy();
            session_start();

            if (empty($_SESSION["visibility"])) {
                $_SESSION["visibility"] = CommonAction::$VISIBILITY_PUBLIC; // Un guest (usager non connecté)
            }

            return [];
		}
	}

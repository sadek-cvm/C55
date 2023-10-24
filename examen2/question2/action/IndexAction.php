<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/AppelsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if(isset($_POST["connect"])){
                $_SESSION["visibility"] = CommonAction::$VISIBILITY_MEMBER;
            }

            if(isset($_POST["deconnect"])){
                session_unset();
				session_destroy();
                header("location:index.php");
            }

            $nbrAppels = AppelsDAO::getNbrAppels();

			return compact("nbrAppels");
        }
    }
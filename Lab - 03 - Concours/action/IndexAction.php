<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $hasConnectionError = false;

            if (isset($_POST["name"]) && isset($_POST["type"])) {

                if(empty(($_SESSION["isInscripted"])) || $_SESSION["isInscripted"] != true){
                    StatsDAO::save($_POST["name"], $_POST["type"]);  
                    $_SESSION["isInscripted"] = true;
                }
                else
                    $hasConnectionError = true;
            }
            return compact("hasConnectionError");
        }
    }
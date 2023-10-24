<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/AppelsDAO.php");

    class AjaxAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $result = "";

            AppelsDAO::ajouterAppel();
            $result = AppelsDAO::getNbrAppels();

            return compact("result");
        }
    }
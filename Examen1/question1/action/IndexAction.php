<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/SpyDAO.php");

    class IndexAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if (empty($_SESSION["nbVisites"])) {
                $_SESSION["nbVisites"] = 1;
            }
            else{
                $_SESSION["nbVisites"]++;
            }

            // -------

            if (isset($_GET["searchBox"])) {
                $searchResult = SpyDAO::searchSpyList($_GET["searchBox"]);
            }


            return compact("searchResult");
        }
    }
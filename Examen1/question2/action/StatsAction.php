<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/TrafficDAO.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            if (!empty($_GET["clear"])) {
                TrafficDAO::viderStats();
			}

            $nbVisites = TrafficDAO::getNbVisites();
            $derniereDate = TrafficDAO::getDerniereDate();
            $pagePlusPopulaire = TrafficDAO::getPagePLusPopulaire();
            return compact("nbVisites", "derniereDate", "pagePlusPopulaire");
        }
    }
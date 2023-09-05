<?php
    require_once("action/CommonAction.php");
    require_once("action/DAO/StatsDAO.php");

    class StatsAction extends CommonAction {

        public function __construct() {
            parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
        }

        protected function executeAction() {

            $nbParticipant = StatsDAO::count();
            $countPerRoomType = StatsDAO::countPerRoomType();

            return compact("nbParticipant", "countPerRoomType");
        }
    }
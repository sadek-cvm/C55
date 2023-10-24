<?php
	require_once("action/CommonAction.php");
	require_once("action/DAO/AnswerDAO.php");

	class IndexAction extends CommonAction {
		
		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			if(!empty($_GET["answer"]) && !empty($_GET["author"])){
				AnswerDAO::addAnswer($_GET["author"], $_GET["answer"]);
				header("location:index.php");
			}

			$answers = AnswerDAO::getAnswers();
			return compact("answers");
		}
	}	

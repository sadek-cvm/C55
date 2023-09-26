<?php

	class SpyDAO {
		public static function searchSpyList($search) {

			$spyList = array();
			$searchResult = array();

			$spyList[] = "Ethan Hawk";
			$spyList[] = "James Bond";
			$spyList[] = "Kevin Sarah";
			$spyList[] = "Inspecteur Gadget";
			$spyList[] = "Chuck CarMichael";

			foreach($spyList as $nom){
				if(strpos($nom, $search) !== false)
					$searchResult[] = $nom;
			}

			return $searchResult;
		}
	}
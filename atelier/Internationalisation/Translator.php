<?php
	class Translator {
		private $langData;
		
		public function __construct($lang) {
			$sanitizedLang = "fr";
			
			if ($lang == "en") {
				$sanitizedLang = $lang;
			}
			require_once("lang/" . $sanitizedLang . ".php");
			
			$this->langData = $langData;
		}	
		
		// exemple $this->read("index", "title") : retourne le titre localis� fr ou en
		public function read($page, $node) {
			$value = "TEXT_NOT_FOUND";
			
			if (!empty($this->langData[$page][$node])) {
				$value = $this->langData[$page][$node];
			}
			
			return $value;
		}
	}
?>
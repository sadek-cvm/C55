<?php
    
	require_once("utils/morse-utils.php");

    function execute() {

        $chaineOriginale = "";
        $chaineConvertie = "";

		if(!empty($_GET["toMorse"])){
			$chaineOriginale = $_GET["toMorse"];
            $chaineConvertie = encodeMorse($chaineOriginale);
		}else if(!empty($_GET["toString"])){
			$chaineOriginale = $_GET["toString"];
            $chaineConvertie = decodeMorse($chaineOriginale);
        }

        return compact("chaineConvertie");
    }
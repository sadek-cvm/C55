<?php
    class TrafficDAO {

        public static function viderStats() {
            file_put_contents("data/traffic.txt", "");
        }


        public static function getStats() {
            return file_get_contents("data/traffic.txt");
        }

        public static function addStat($nomPage) {

            $date = date("Y-m-d h:i:s");
            file_put_contents("data/traffic.txt", $nomPage . ";" . $date .  "\n", FILE_APPEND);
        }

        public static function getNbVisites() {
            $data = TrafficDAO::getStats();
            $visites = explode("\n", $data);
            $nbVisites = 0;

            foreach ($visites as $visite) {
                if (!empty($visite)) {
                    $nbVisites++;
                }
            }

            return $nbVisites;
        }

        public static function getDerniereDate() {
            $data = TrafficDAO::getStats();
            $visites = explode("\n", $data);
            $nbVisites = TrafficDAO::getNbVisites();
            $dernierDate = date("Y-m-d h:i:s");
            if($nbVisites > 0){
                $dernierVisite = $visites[$nbVisites - 1];
                $cols = explode(";", $dernierVisite);
                $dernierDate = $cols[1];
            }

            return $dernierDate;
        }

        public static function tableContains($table, $ComparingElement){

            $contains = false;

            foreach($table as $element){
                if ($element == $ComparingElement){
                    $contains = true;
                }
            }

            return $contains;
        }

        public static function getPages() {
            $data = TrafficDAO::getStats();
            $visites = explode("\n", $data);
            $pages = [];
            foreach($visites as $visite){
                $cols = explode(";", $visite);
                $page = $cols[0];
                if(!empty($page) && !TrafficDAO::tableContains($pages, $page)){
                    $pages[] = $page;
                }
            }

            return $pages;
        }

        public static function getPagePLusPopulaire() {
            $data = TrafficDAO::getStats();
            $visites = explode("\n", $data);
            $pages = TrafficDAO::getPages();
            $conteurPages = [];
            $pagePlusPopulaire = "";

            foreach($pages as $page){
                $conteurPages[] = 0;
            }

            foreach($visites as $visite){
                $cols = explode(";", $visite);
                $page = $cols[0];
                for ($i=0; $i < sizeof($pages); $i++) { 
                    if($pages[$i] == $page){
                        $conteurPages[$i]++;
                    }
                }
            }

            // highest number
            $highestNumber = 0;
            for ($i=0; $i < sizeof($conteurPages); $i++) { 
                if($conteurPages[$i] > $highestNumber){
                    $highestNumber = $conteurPages[$i];
                }
            }

            for($i=0; $i < sizeof($conteurPages); $i++) { 
                if($conteurPages[$i] == $highestNumber){
                    $pagePlusPopulaire = $pages[$i];
                }
            }
            return $pagePlusPopulaire;
        }
    }
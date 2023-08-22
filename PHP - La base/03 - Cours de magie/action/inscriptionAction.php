<?php
    
    function execute(){
       
        $compteur = file_get_contents("compteur.txt");
       
        return compact("compteur");
    }
<?php
    
    function execute(){
        $compteur = file_get_contents("compteur.txt");
        $compteur++;
        file_put_contents("compteur.txt", $compteur);
       
        return compact("compteur");
    }
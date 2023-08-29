<?php
    
    session_start();
    session_destroy();
    session_start();

    function execute(){

        if(empty($_SESSION["post-it"]))
            $_SESSION["post-it"] = [];

        if(!empty($_GET["text"]) && !empty($_GET["x"]) && !empty($_GET["y"])){

            $post_it_nouveau = ["text" => $_GET["text"], 
            "x" => $_GET["x"], 
            "y" => $_GET["y"]];
            
            $_SESSION["post-it"][] = $post_it_nouveau;
          
        }

        $post_its = $_SESSION["post-it"];
        return compact("post_its");
        
    }

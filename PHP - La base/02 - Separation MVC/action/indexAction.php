<?php
    
    function execute(){
       
        $username = "";
        $hasError = false;

        if(!empty($_POST["champCourriel"])){
            if($_POST["champCourriel"] == "test@test.com" && $_POST["champMotDePasse"] == "test"){
                header("location: prive.php");
                exit;
            }else{
                $hasError = true;
            }
        }
        // compact prend nos variables et en fait un dictionnair
        return compact("hasError", "username");
    }

<?php
    require_once("action/DAO/Connection.php");
    
    class AppelsDAO {


        public static function getNbrAppels() {
            $connection = Connection::getConnection();
            $statement = $connection->prepare("SELECT COUNT(*) as num FROM phone_calls");
            $statement->setFetchMode(PDO::FETCH_ASSOC);
            $statement->execute();
            $nbrAppels = null;

            if ($row = $statement->fetch()) {
                $nbrAppels = $row["num"];
            }

            return $nbrAppels;
        }

        

        public static function ajouterAppel() {

            $minutes = rand(1,10);
            $connection = Connection::getConnection();
            $statement = $connection->prepare("INSERT INTO phone_calls (minutes) VALUES (?)");
            $statement->bindParam(1, $minutes);
            $statement->execute();
        }
    }
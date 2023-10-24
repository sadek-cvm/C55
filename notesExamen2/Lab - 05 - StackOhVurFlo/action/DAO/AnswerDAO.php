<?php
    require_once("action/DAO/Connection.php");
    
    class AnswerDAO {

        public static function getAnswers() {
            $connection = Connection::getConnection(); // main connection

            $statement = $connection->prepare("SELECT * FROM stack_answers");
            $statement->setFetchMode(PDO::FETCH_ASSOC); // Juste pour les select, permet de retourner un dictionnaire ex : $row["username"] (sinon $row[0])
            $statement->execute();

            $answers = $statement->fetchAll(); // un tableau de toutes les lignes
            return $answers;

            // $answers = [
            // {"author" => "ahmed", "answer" => "this is a message"},
            // {"author" => "sadek", "answer" => "this is a message"},
            // {"author" => "ali", "answer" => "this is a message"},
            // ]
        }

        public static function addAnswer($author, $answer) {
            $connection = Connection::getConnection(); // main connection

            $statement = $connection->prepare("INSERT INTO stack_answers(author, answer) VALUES (?, ?);");
            $statement->bindParam(1, $author);
            $statement->bindParam(2, $answer);
            $statement->execute();
        }
    }
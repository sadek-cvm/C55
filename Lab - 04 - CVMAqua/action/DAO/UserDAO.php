<?php
    
    class UserDAO {

        public static function authenticate($username, $password) {
            $user = null;

            if ($username == "ahmed" && $password == "test") {
                $user = [
                    "username" => $username,
                    "visibility" => 1,
                ];
            }

            return $user;
        }
    }
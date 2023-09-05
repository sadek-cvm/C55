<?php
    
class StatsDAO {

    public static function save($name, $roomType){
        $fichierStats = fopen("stats.txt", "a");
        fwrite($fichierStats, $name . ";" . $roomType . "\n");
        fclose($fichierStats);
    }

    public static function count(){
        $lines = count(file("stats.txt"));
        // fclose($fichierStats);

        return $lines;
    }

    public static function countPerRoomType(){
        $tab = [];

        $content = file_get_contents("stats.txt");
        $tab[] = substr_count($content,"Simple");
        $tab[] = substr_count($content,"Double");
        $tab[] = substr_count($content,"Suite");
        return $tab;
    }

}
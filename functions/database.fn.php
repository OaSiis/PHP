<?php

function dbConnect() {
    try {
        $db = new PDO('mysql:host=db;dbname=pokemon;charset=utf8', 'root', 'root');

        return $db;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}


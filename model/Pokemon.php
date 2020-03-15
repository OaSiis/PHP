<?php

const TYPE_FIRE     = 1;
const TYPE_WATER    = 2;
const TYPE_PLANT    = 3;


/**
 * @return mixed
 */
function getPokemons() {

    $db = dbConnect();

    $pokemons = $db->query('SELECT * FROM pokemons');

    return $pokemons;
}

/**
 * @param $id
 * @return mixed
 */
function getPokemon($id) {

    $db = require('functions/database.fn.php');

    $req = $db->dbConnect('SELECT * FROM pokemons WHERE id = ?');

    $req->execute(array($id));

    $pokemon = $req->fetch();

    return $pokemon;
}

function getTypeLabel($type) {

    switch ($type) {

        case TYPE_FIRE:
            $type = 'Feu';
            break;
        case TYPE_WATER:
            $type = 'Eau';
            break;
        case TYPE_PLANT:
            $type = 'Plante';
            break;
    }

    return $type;
}
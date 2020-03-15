<?php

require '_header.php';

// TODO: Utiliser une condition pour bloquer cette page en utilisant la variable $_SESSION

require 'model/Pokemon.php';

$pokemons = getPokemons();

require('views/pokemonView.php');
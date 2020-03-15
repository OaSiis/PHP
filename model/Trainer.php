<?php

/** Get ALL Trainers */
function getTrainers() {

    $db = dbConnect();

    $trainers = $db->query('SELECT * FROM trainers');

    return $trainers;
}

/**
 * Get One Trainer by ID
 *
 * @param $id
 * @return mixed
 */
function getTrainer($id) {

    $db = dbConnect();

    $trainer = $db->prepare('SELECT * FROM trainers WHERE id = :id');

    $trainer->execute([
        'id' => $id,
    ]);

    return $trainer->fetch();
}

/**
 * @param $username
 * @param $password
 * @param $email
 * @return mixed
 */
function addTrainer($username, $password, $email) {

    $db = dbConnect();

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $trainer = $db->prepare('INSERT INTO trainers(username, password, email, created_at) VALUES(:username, :password, :email, :created_at)');

    // TODO: Mettre la valeur d'aujourd'hui pour created_at
    $trainer->execute([
        'username' => $username,
        'password' => $passwordHash,
        'email' => $email,
        'created_at' => '2010-04-02 16:32:22',
    ]) or die(print_r($trainer->errorInfo()));

    return $trainer;
}

function checkTrainer($username, $password) {

    $db = dbConnect();

    // TODO: Récupération de l'utilisateur via le username

    // TODO: Condition si l'utilisateur n'existe pas

    // TODO: Comparaison
    $isPasswordCorrect = password_verify('pass1', 'pass2');

    if ($isPasswordCorrect) {
        $_SESSION['id'] = 'id';
        $_SESSION['pseudo'] = 'username';
        $_SESSION['connected'] = true;

        // TODO: Retour vers l'index
    } else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
<?php

require '_header.php';

require 'model/Trainer.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $user = addTrainer($_POST['username'], $_POST['password'], $_POST['email']);

    if($user) {
        header('Location: index.php');
    }
}

require 'views/registrationView.php';

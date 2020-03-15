<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php while($pokemon = $pokemons->fetch()) { ?>
    <p> <?php echo $pokemon['name']; ?></p>
    <p> <?php echo getTypeLabel($pokemon['type']); ?></p>
<?php } ?>


<a href="logout.php"> Logout </a>

</body>
</html>
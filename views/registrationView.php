<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>

    <?php include('components/navbar.php') ?>

    <form action="registration.php" method="post">

        <div class="form-group">
            <label for="username"> Username </label>
            <input class="form-control" type="text" name="username" id="username" required="required"/>
        </div>

        <div class="form-group">
            <label for="password"> Mot de passe </label>
            <input class="form-control" type="password" name="password" id="password" required="required"/>
        </div>


        <div class="form-group">

            <label for="email"> Email </label>
            <input class="form-control" type="email" name="email" id="email" required="required"/>
        </div>

        <input type="Submit" class="btn btn-primary"/>
    </form>

    </body>
</html>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Miłosz Polis" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>E-games</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="icon/icon.ico" />
</head>

<body>
    <?php
        $web=$_SERVER['SCRIPT_NAME'];
        $languages[]="polish";
        $languages[]="english";
        $languages[]="spanish";
        $languages[]="deutsch";
        if(!in_array($_GET['lang'], $languages)){
            header("Location: $web?lang=polish");
        }
        $id = $_GET["lang"];
        if(file_exists("languages/".$id.".php")){
            include("languages/".$id.".php");
        }
    ?>
    <div id="particles-js"></div>
    <div class="container">
        <div class="col text-right">
            <?php echo $languageSection ?>
            <a href="signIn.php?lang=polish"><img src="img/flags/pl.png" class="flags" alt="no pl"></a>
            <a href="signIn.php?lang=english"><img src="img/flags/gb.png" class="flags" alt="no gb"></a>
            <a href="signIn.php?lang=spanish"><img src="img/flags/es.png" class="flags" alt="no es"></a>
            <a href="signIn.php?lang=deutsch"><img src="img/flags/de.png" class="flags" alt="no de"></a>
        </div>
        <div id="main">
            <div class="jumbotron">
                <h1><a href="index.php">E-games</a></h1>
                <nav class="nav-color navbar navbar-expand-lg navbar-light bg-default">
                    <a class="navbar-brand" href="aboutTheSite.php">
                        <?php echo $menu[0] ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <a class="navbar-brand" href="technologies.php">
                                <?php echo $menu[1] ?></a>
                            <a class="navbar-brand" href="signIn.php">
                                <?php echo $menu[2] ?></a>
                            <a class="navbar-brand" href="signUp.php">
                                <?php echo $menu[3] ?></a>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="<?php echo $search[0] ?>" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
                                <?php echo $search[1] ?></button>
                        </form>
                    </div>
                </nav>
                <div class="row">
                    <div class="col text-center">
                        <form>
                            <div class="form-group">
                                <label for="login"><?php echo $loginSystem[0] ?></label>
                                <input type="text" class="form-control" id="login" placeholder="<?php echo $loginSystem[0] ?>">
                            </div>
                            <div class="form-group">
                                <label for="password"><?php echo $loginSystem[1] ?> </label>
                                <input type="password" class="form-control" id="password" placeholder="<?php echo $loginSystem[1] ?>">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-dark"><?php echo $loginSystem[5] ?></button>
                        </form>

                    </div>
                </div>
            </div>
            <footer>
                <p>
                    <?php echo $footer ?>
                </p>
            </footer>
        </div>
        <!-- Bootstrap scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="js/particles.js"></script>
</body>

</html>

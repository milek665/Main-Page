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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            require_once("languages/".$id.".php");
        }
    ?>
    <div id="particles-js"></div>
    <div class="container">
        <div class="col text-right">
            <div class="top">
                <span id="time"></span>
                <?php echo $languageSection ?>
                <a href="technologies.php?lang=polish"><img src="img/flags/pl.png" class="flags" alt="no pl"></a>
                <a href="technologies.php?lang=english"><img src="img/flags/gb.png" class="flags" alt="no gb"></a>
                <a href="technologies.php?lang=spanish"><img src="img/flags/es.png" class="flags" alt="no es"></a>
                <a href="technologies.php?lang=deutsch"><img src="img/flags/de.png" class="flags" alt="no de"></a>
            </div>
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
                            <div class="col-6">
                                <div data-aos="fade-right">
                                    <img src="svg/logo_html.svg" alt="no logo of html" class="logoSVG">
                                </div>
                            </div>  
                        
                            <div class="col-6">
                                <div data-aos="fade-left">
                                    <img src="svg/logo_bootstrap.svg" alt="no logo of bootstrap" class="logoSVG">   
                                </div>    
                            </div>
                        
                            <div class="col-6">
                                <div data-aos="fade-right">
                                    <img src="svg/logo_css.svg" alt="no logo of css" class="logoSVG">
                                </div>
                            </div>
                        
                            <div class="col-6">
                                <div data-aos="fade-left">
                                    <img src="svg/logo_sass.svg" alt="no logo of sass" class="logoSVG">    
                                </div>   
                            </div>
                        
                            <div class="col-6">
                                <div data-aos="fade-right">
                                    <img src="svg/logo_js.svg" alt="no logo of js" class="logoSVG">  
                                </div> 
                            </div>  
                        
                            <div class="col-6">
                                <div data-aos="fade-left">
                                    <img src="svg/logo_jquery.svg" alt="no logo of jquery" class="logoSVG">   
                                </div>    
                            </div>
                        
                            <div class="col-6">
                                <div data-aos="fade-right">
                                    <img src="svg/logo_php.svg" alt="no logo of php" class="logoSVG">   
                                </div>    
                            </div>
                        
                            <div class="col-6">
                                <div data-aos="fade-left">
                                    <img src="svg/logo_git.svg" alt="no logo of git" class="logoSVG">    
                                </div>   
                            </div>
                    </div>
            </div>
        </div>
        <footer>
            <p>
                <?php echo $footer ?>
                <br>
                <i class="fab-trans fab fa-facebook-square"></i>
                <i class="fab-trans fab fa-facebook-messenger"></i>
                <i class="fab-trans fab fa-youtube"></i>
                <i class="fab-trans fab fa-snapchat-ghost"></i>
                <i class="fab-trans fab fa-github"></i>
            </p>
        </footer>
    </div>
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/animations.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/particles.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

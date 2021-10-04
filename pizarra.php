<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG</title>
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" />
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/style_todos.css">
    <link rel="stylesheet" href="styles/style_compo.css">
    <link rel="stylesheet" href="styles/pixelweave_login.css">
    <link rel="stylesheet" href="styles/buttons++.css">


    <link rel="stylesheet" href="styles/buttons.css">


    <!-- Esta linea es necesaria para los iconos de donde bajamos los iconos de redes sociales  -->
    <!-- <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet"> -->
    <!--load all styles -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>


<body class="hidden">
    <header>
        <img class="logo" src="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" alt="logo">

        <nav class="oculto">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a class="actual" href="pizarra.php">BLOG</a></li>
                <li><a href="contacto.php">ABOUT US</a></li>
                <?php if(!isset($_SESSION["username"])):?>
                    <li><a href="login.php"><span>LOGIN</span></a></li>
                <?php else:?>
                    <li><a href="config/logout.php"><span>LOGOUT</span></a></li>
                <?php endif?>
            </ul>
        </nav>

        <div>
            <?php if(isset($_SESSION["username"])):?>
                <span id="username"><?php echo $_SESSION['username']?></span>
            <?php endif?>
        </div>
    </header>


    <main>
        <!-- <div id="portada">
            <h1>COMPONENTES</h1>
            <h2>UNICOS DE PIXELWEAVE</h2>
        </div> -->

        <i id="btn-subirAlCielo" class="fas fa-arrow-up sombra-resaltable"></i>

        <!-- <div class="toggleButton">
            <div class="button icon-sun"> <span> <br>modo nocturno</span> </div>
        </div> -->

        <br>
        <br>


        <section class="seccion">
            <div class="introduccion">
                <h1 id="introduccion">BLOG</h1> <br>
                <p>In this place you could find discussions about the topics...</p> <br>

            </div>
            <div class="diseño">

                <h3 id="contenedores">PUBLICATIONS</h3>

                <div class="contenedor-3">
                    <a href="Post.php">
                        <div class="tarjeta1">
                            <div class="arriba">
                                <h3>author</h3>
                                <img src="img/1.jpg" alt="">
                            </div>
                            <div class="abajo">
                                <h4>About the sun <h5>Date of upgrade</h5>
                                </h4>
                                <br>
                                <p> I think that the sun is amazing! Last day, I discovered a lot of things about the Solar Orbiter </p>
                            </div>
                        </div>
                    </a>

                    <div class="tarjeta1">
                        <div class="arriba">
                            <h3>author</h3>
                            <img src="img/2.jpg" alt="">
                        </div>
                        <div class="abajo">
                            <h4>The solar radiation<h5>Date of upgrade </h5>
                            </h4>
                            <br>
                            <p>The solar radiation is one of the most common causes of cancer, we could prever it, find more info here </p>
                        </div>
                    </div>
                    <div class="tarjeta1">
                        <div class="arriba">
                            <h3>author</h3>
                            <img src="img/3.jpg" alt="">
                        </div>
                        <div class="abajo">
                            <h4>I wanna be astronaut...<h5> Date of upgrade</h5>
                            </h4>
                            <br>
                            <p>I want to be engineer to study the astrophysics and maybe one day I could go to the space</p>
                        </div>
                    </div>
                </div> <br> <br>
                <br>

        </section>
        </div>

        </div>
        </section>
    </main>

    <footer id="contacto">
    <div class="footer contenedor">
            <div class="marca-logo">
                <img src="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" alt="">
                <img src="img/sac.png" alt="">
            </div>
            <div class="iconos">
                <i class="fab fa-youtube"></i>
                <i class="fab fa-facebook-square"></i>
                <i class="fab fa-github"></i>
                <i class="fab fa-twitter-square"></i>

            </div>
            <p>La creatividad es la inteligencia divirtiéndose. Albert Einstein </p>
        </div>

    </footer>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
    <script src="js/aside.js"></script>
    <script src="js/pixelweave.js"></script>
</body>

</html>
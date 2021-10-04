<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ABOUT US</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" />
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/style_todos.css">
    <link rel="stylesheet" href="styles/style-contac.css">
    <link rel="stylesheet" href="styles/pixelweave.css">

    <!-- Esta linea es necesaria para los iconos de donde bajamos los iconos de redes sociales  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>


<body class="hidden">
    <header>
        <img class="logo" src="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" alt="logo">

        <nav class="oculto">
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="pizarra.php">BLOG</a></li>
                <li><a class="actual" href="contacto.php">ABOUT US</a></li>
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
        <div id="portada">
            <h1>Our Mission</h1>
            <h2>We are a work team whose mission is to spread knowledge about the sun and
It’s impact on human activities. Furthermore, we strive to raise awareness on
The importance of the several space exploration missions,<br> allowing said studies
In a inclusive way.</h2>
        </div>
    
        <i id="btn-subirAlCielo" class="fas fa-arrow-up sombra-resaltable"></i>
        <br>

        <section class="team">
        <h1>Our project</h1>
        <div class="container">
        <iframe width="700" height="400" src="https://www.youtube.com/embed/xo686l6ik_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        </section>
        <section  class="team contenedor" id="dibujo">
            <h3 style="color: white;">We are Ada Team</h3>
            <img src="img/adateam.png" alt="">
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
    <script src="js/pixelweave.js"></script>
</body>

</html>
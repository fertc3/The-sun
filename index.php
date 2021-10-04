<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" />
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/style_todos.css">
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
                <li><a class="actual" href="index.php">HOME</a></li>
                <li><a href="pizarra.php">BLOG</a></li>
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
        <div id="portada">
            <h1>The sun, the earth and the time</h1>

            <h2>The sun of a new generation <br> 
               
            </h2>
        <br>

        </div>
        <br><br>
        <i id="btn-subirAlCielo" class="fas fa-arrow-up sombra-resaltable"></i>


        <section class="team contenedor">
            <h1 style="font-size: 50px; color: white;">The big star called sun...</h1>
            <iframe width="1000" height="800" src="planetas.html" scrolling="no" frameborder="no" ></iframe>
          
        </section>
        <section class="team contenedor" id="equipo">
            <h3 style="color: white;">What we know about the Solar Orbiter</h3>
            <div class="card">
                <div class="content-card resaltable">
                    <div class="people">
                        <img src="img/SO.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4 style="color: white;">Solar Orbiter</h4>
                        <br>
                        <p style="color: white;">Hello, there! let's talk about the Solar Orbiter!
                             It is a space mission to study the Sun, its outer atmosphere and what drives
                              the constant flow of solar wind that affects the Earth. <br>Let's build the spacecraft!</p>
                              <br>
                              <!---Boton en el css-todos-->
                              <button class ="btn-solar" onclick="location.href='so1.html'">Let's go!</button>
                    </div>
                </div>
                
                <div class="content-card resaltable">
                    <div class="people">
                        <img src="img/psp.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4 style="color: white;">Parker Solar Probe</h4>
                        <br>
                        <p style="color: white;">Hello, there! Let's talk about the Parker Solar Probe! It will rush to within 4 million
                             miles of the Sun's surface, facing heat and radiation like no spacecraft before. <br>Let's build the spacecraft!</p>
                             <br><br><br>
                             <button class ="btn-solar" onclick="location.href='psp.html'">Let's go!</button>
                    </div>
                </div>
                <div class="content-card resaltable">
                    <div class="people">
                        <img src="img/game1.jpeg" alt="">
                    </div>
                    <div class="texto-team">
                        <h4 style="color: white;">The secrets of the sun</h4>
                        <p style="color: white;">We will learn about the way the Sun affects the Earth, which is why Solar missions are so important! We'll also build our own spaceship thinking about possible future projects.<br>Let's build the spacecraft!</p>
                             <br>
                             <button class ="btn-solar" onclick="location.href='sots.html'">Let's go!</button>
                    </div>
                </div>
            </div>
        </section>
        <section  class="team contenedor">
            <h3 style="color: white;">¿How does the sun affects on life earth?</h3>
            <div style="width: 100%;"><div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genial.ly/6158f750b0b6d50d6926e808" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div> </div> </div> </div>

            </section>
        <section  class="team contenedor" id="dibujo">
            <h3 style="color: white;">Sun inspired creations</h3>
            <img src="img/dibujo.jpeg" alt="">
            <br>
            <h4>Made by Monserrat, 8 years old</h4>
        </section>
       
    </main>

    <footer id="contacto">
    <div class="footer contenedor">
            <div class="marca-logo">
                <img src="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" alt="">
                <img src="img/sac.png" alt="">
            </div>
           <br>
            <div class="iconos">
                <i href="https://www.youtube.com/" class="fab fa-youtube"></i>
                <i href="https://www.facebook.com/" class="fab fa-facebook-square"></i>
                <i href="https://github.com/" class="fab fa-github"></i>
                <i href="https://twitter.com/explore" class="fab fa-twitter-square"></i>

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
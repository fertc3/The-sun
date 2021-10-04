<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.nasa.gov/sites/all/themes/custom/nasatwo/images/nasa-logo.svg" />
    <link rel="stylesheet" href="styles/estilos.css">
    <link rel="stylesheet" href="styles/style_todos.css">
    <link rel="stylesheet" href="styles/style_compo.css">
    <link rel="stylesheet" href="styles/pixelweave_login.css">
    <link rel="stylesheet" href="styles/buttons++.css">


    <!-- <link rel="stylesheet" href="styles/buttons.css"> -->


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
                <li><a href="pizarra.php">BLOG</a></li>
                <li><a href="contacto.php">ABOUT US</a></li>
                <?php if(!isset($_SESSION["username"])):?>
                    <li><a class="actual" href="login.php"><span>LOGIN</span></a></li>
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


        <section class="seccion">

            <div class="centro" id="center">

                <div class="formularios">
                    <h1 id="formularios">login and discover about the sun</h1><br>
                    <img class="text-imagen" src="img/nasa.jpeg" alt="Imagen ">

                    <form id="formulario" action="config/login.php" method="post">

                        <label for="input-nombre">Username:<span>*</span></label> <br>
                        <input type="text" id="input-nombre" name="username" placeholder="Enter username" required> <br>

                        <label for="input-apellido">Password:<span>*</span></label> <br>
                        <input type="password" id="input-apellido" name="password" placeholder="Enter password" required> <br>

                        <br>
                        <!-- <label for="input-edad">Edad: <span>*</span></label> <br>
                        <input type="number" id="input-edad" placeholder="EDAD"> <br>

                        <label for="Sexo">Sexo:<span>*</span></label> <br>
                        <select> <br>
                            <option> Mujer </option>
                            <option> Hombre </option>
                        </select><br> -->

                        <!-- <label for="asunto">Asunto:<span>*</span></label><br>
                        <textarea id="asunto"></textarea><br> -->

                        <?php if(isset($_COOKIE["msg"])):?>
                            <span><?php echo $_COOKIE["msg"]?></span>
                        <?php endif?>

                        <input type="submit" id="btnEnviar" value="Send"><br><br>
                        <br>
                        <a href="register.php">

                            <h5 class="enlace">Create a new account <span>Sign Up</span></h5>
                        </a>

                    </form> <br>

                    <!-- 
                    <button estilo="azul">Editar</button>
                    <button estilo="azul">Eliminar</button>
                    <button id="btn-modal2" estilo="azul">Comentar</button> -->


                </div> <br>
            </div>



            <!-- <button estilo="amarillo">Amarillo</button> -->

            <br><br>
            <!-- 
            <button id="btn-modal1" estilo="verde">¡Alert!</button>

            <button id="btn-modal3" estilo="rosa">¡Alert!</button> -->

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
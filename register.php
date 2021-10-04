<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
      
        <section class="seccion">

            <div class="centro">
            
                        <div class="formularios">
                            <h1 id="formularios">Sign Up</h1><br>
                            <img class="text-imagen" src="img/nasa.jpeg" alt="Imagen ">

                            <form id="formulario" action="config/register.php" method="post" enctype="multipart/form-data">

                                <?php if(isset($_COOKIE["msg"])):?>
                                    <span><?php echo $_COOKIE["msg"]?></span><br>
                                <?php endif?>
                                
                                <label for="input-nombre">Name:<span>*</span></label> <br>
                                <input name="nombre" type="text" id="input-nombre" placeholder="Enter name" require> <br>
                                
                                <label for="input-apellidos">Lastname:<span>*</span></label> <br>
                                <input name="apellidos" type="text" id="input-apellidos" placeholder="Enter lastname" require> <br>
                                <br>
                                
                                <label for="input-usuario">Username:<span>*</span></label> <br>
                                <input name="username" type="text" id="input-usuario" placeholder="Enter username" require> <br>
            
                                <label for="input-password">Password:<span>*</span></label> <br>
                                <input name="password" type="password" id="input-password" placeholder="Enter password" require> <br>
            
                                <label for="input-password2">Confirm password:<span>*</span></label> <br>
                                <input name="password2" type="password" id="input-password2" placeholder="Enter password" require> <br>
                                <br>

                                <label for="input-profImg">Profile picture</label> <br>
                                <input type="file" name="profImg" id="input-profImg"> <br>
                                <br>
                                <br>


                                <input type="submit" value="Create account" id="btnEnviar"> 
                                <br><br>
                     
                                <a href="login.php">

                                    <h5 class="enlace">Already have an account? <span>Sign In</span></h5>
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
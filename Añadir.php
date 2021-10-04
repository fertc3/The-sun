<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PIXELWEAVE</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/PIXELWEAVE.png" />
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
        <img class="logo" src="img/PIXEL_TRANS.png" alt="logo">

        <nav class="oculto">
            <ul>
                <li><a href="index.php">INICIO</a></li>
                <li><a class="actual" href="pizarra.php">PIZARRA</a></li>
                <li><a href="contacto.php">CONTACTO</a></li>
                <?php if(!isset($_SESSION["username"])):?>
                    <li><a href="login.php"><span>ENTRAR</span></a></li>
                <?php else:?>
                    <li><a href="config/logout.php"><span>SALIR</span></a></li>
                <?php endif?>
                <!-- <li><a href="pizarra.php">PUBLICACIONES</a></li> -->
            </ul>
        </nav>

        <div>
            <?php if(isset($_SESSION["username"])):?>
                <span id="username"><?php echo $_SESSION['username']?></span>
            <?php endif?>
            <button class="switch" id="btn-darkmode">
                <span><i class="fas fa-sun"></i></span>
                <span><i class="fas fa-moon"></i></span>
            </button>
            <span id="btn-menu">☰</span>
        </div>
    </header>

    <aside id="sidebar">

        <!-- ESTO ES PARA EL SIDE BAR  -->
        <i class="fas fa-chevron-right" id="aside-open"></i>
        <i class="fas fa-chevron-left" id="aside-close"></i>

        <!-- <div id="toggle-btn">
            <span><img src="./img/PIX_TRANS.png" width="35" height="40" align="center"></span>
        </div> -->
        <img class="uno" src="./img/PIXEL_TRANS.png" alt="Logo Fazt" class="logo">
        <ul>
            <li id="lista"><a id="left" href="Admin_Panel.php"> Administrar cuentas</a></li>
            <li id="lista"><a id="centrar" href="Añadir.php"> Nueva publicacion</a> </li>
            <li id="lista"><a id="centrar" href="pizarra.php"> Publicaciones</a> </li>
                        <li id="lista"><a id="left" href="login.php"> Iniciar Sesion</a></li>

            <!-- <li id="lista"><a id="centrar" href="#contenido"> Contenido</a></li> -->
            <!-- <li id="lista"><a id="left" href="#imagenes"> Imágenes</a></li>
            <li id="lista"><a id="left" href="#titulos"> Títulos</a></li>
            <li id="lista"><a id="left" href="#enlaces"> Enlaces</a></li>
            <li id="lista"><a id="left" href="#listas"> Listas</a></li>
            <li id="lista"><a id="left" href="#parrafos"> Párrafos</a></li>
            <li id="lista"> <a id="centrar" href="#componentes"> Componentes</a></li>
            <li id="lista"> <a id="left" href="#botones"> Botones</a></li>
            <li id="lista"><a id="left" href="#alertas"> Alertas</a></li>
            <li id="lista"><a id="centrar" href="#formularios"> Formularios</a></li>
            <li id="lista"><a id="left" href="#check"> CheckBox</a></li>
            <li id="lista"><a id="left" href="#carrusel"> Carrusel</a></li> -->

        </ul>
    </aside>

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



            <h2>Nueva Publicacion</h2>
            
            <!-- <img class="centro" src="img/marketing1.jpeg" alt="IMAGENs "><br> -->
            <div class="bloque">
                <form id="formulario">
            
                    <label for="input-nombre">Introduccion (menor de 20 caracteres):<span>*</span></label> <br>
                    <input type="textarea" id="input-nombre" placeholder="Introduccion"> <br>

                    <label for="input-nombre">Contenido:<span>*</span></label> <br>
                    <textarea name="textarea" rows="10" cols="50" placeholder="Escriba algo aqui"></textarea> <br>


                    <br>
                  
                    <label for="input-nombre">Añadir imagen (opcional)</label>
                    <button id="btn-modal1" estilo="verde">Subir</button>


                    <br><br>
                    <label for="input-nombre">Enviar Publicación</label><br>

                    <input type="submit" id="btnEnviar"></input><br><br>
         
                  

                </form> <br>
              
                    <br>
<!-- 
                    <div id="modal2" class="modal-fuera oculto">
                        <div class="bloque" color="azul">
                            <h2>¡Alert Itsum!</h2>
                        </div>
                    </div>
        
                    <button estilo="azul">Editar</button>
                    <button estilo="azul">Eliminar</button>
                    <button id="btn-modal2" estilo="azul">Comentar</button> -->


            </div> <br>

            <!-- <button estilo="amarillo">Amarillo</button> -->

            <br><br>

<!-- 
            <button id="btn-modal3" estilo="rosa">¡Alert!</button> -->

        </section>


    </main>

    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/PIXEL_TRANS.png" alt="">
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
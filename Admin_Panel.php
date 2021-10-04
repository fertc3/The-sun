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


    <link rel="stylesheet" href="styles/buttons.css">


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
            <li id="lista"><a id="centrar" href="pizarra.php"> Publicaciones</a> </li>
            <li id="lista"><a id="centrar" href="Añadir.php"> Nueva publicacion</a> </li>
            <li id="lista"><a id="left" href="login.php"> Iniciar Sesion</a></li>
            <!-- <li id="lista"><a id="left" href="#tarjetas"> Tarjetas</a></li>
            <li id="lista"><a id="centrar" href="#contenido"> Contenido</a></li>
            <li id="lista"><a id="left" href="#imagenes"> Imágenes</a></li>
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

        <br>
        <br>


        <section class="seccion">
            <div class="introduccion">
                <h1 id="introduccion">Administracion de Usuarios</h1> <br>
                <p>en este apartado podras crear , eliminar , asignar o revocar permisos a los usuarios que esten
                    utilizando socially</p> <br>

            </div>

            <html lang="en">

            <head>
                <meta charset="utf-8" />
                <title>Table Style</title>
                <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
            </head>

            <div class="table-title">
                <h3>Data Table</h3>
            </div>
            <table class="table-fill">
                <thead>
                    <tr>
                        <th class="text-left">Nombre</th>
                        <th class="text-left">Contraseña</th>
                        <th class="text-left">Rol</th>
                        <th class="text-left">Editar</th>
                        <th class="text-left">Eliminar</th>


                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">January</td>
                        <td class="text-left">$ 50,000.00</td>
                        <td class="text-left">Administrador</td>
                        <td class="text-left"><i style="align-items:center; color:rgb(182, 221, 39)"
                                class="fas fa-user-edit"></i></td>
                        <td class="text-left"><i style="align-items:center; color:rgba(242, 41, 115, 1);"
                                class="fas fa-trash-alt"></i></td>


                    </tr>
                    <tr>
                        <td class="text-left">February</td>
                        <td class="text-left">$ 10,000.00</td>
                        <td class="text-left">Editor de contenido</td>
                        <td class="text-left"><i style="align-items:center; color:rgb(182, 221, 39)"
                                class="fas fa-user-edit"></i></td>
                        <td class="text-left"><i style="align-items:center; color:rgba(242, 41, 115, 1);"
                                class="fas fa-trash-alt"></i></td>

                    </tr>
                    <tr>
                        <td class="text-left">March</td>
                        <td class="text-left">$ 85,000.00</td>
                        <td class="text-left">Editor de contenido</td>
                        <td class="text-left"><i style="align-items:center; color:rgb(182, 221, 39)"
                                class="fas fa-user-edit"></i></td>
                        <td class="text-left"><i style="align-items:center; color:rgba(242, 41, 115, 1);"
                                class="fas fa-trash-alt"></i></td>

                    </tr>
                    <tr>
                        <td class="text-left">April</td>
                        <td class="text-left">$ 56,000.00</td>
                        <td class="text-left">Editor de contenido</td>
                        <td class="text-left"><i style="align-items:center; color:rgb(182, 221, 39)"
                                class="fas fa-user-edit"></i></td>
                        <td class="text-left"><i style="align-items:center; color:rgba(242, 41, 115, 1);"
                                class="fas fa-trash-alt"></i></td>


                    </tr>
                    <tr>
                        <td class="text-left">May</td>
                        <td class="text-left">$ 98,000.00</td>
                        <td class="text-left">Editor de contenido</td>
                        <td class="text-left"><i style="align-items:center; color:rgb(182, 221, 39)"
                                class="fas fa-user-edit"></i></td>
                        <td class="text-left"><i style="align-items:center; color:rgba(242, 41, 115, 1);"
                                class="fas fa-trash-alt"></i></td>

                    </tr>
                </tbody>
            </table>

            <div class="centro">

                <div class="formularios">
                    <h1 id="formularios">Añadir usuarios con privilegios</h1><br>
                    <img class="text-imagen" src="img/undraw_authentication_fsn5.png" alt="Imagen ">

                    <form id="formulario">

                        <label for="input-nombre">Nombre Usuario:<span>*</span></label> <br>
                        <input type="text" id="input-nombre" placeholder="NOMBRE"> <br>

                        <label for="input-apellido">Contraseña:<span>*</span></label> <br>
                        <input type="password" id="input-apellido" placeholder="CONTRASEÑA"> <br>

                        <label for="input-correo">Confirma su contraseña:<span>*</span></label> <br>
                        <input type="password" id="correo" placeholder="CONTRASEÑA"> <br>

                        <label for="input-correo">Elija el rol del usuario<span>*</span></label> <br>

                                            
                        <label style="position: absolute;"for="input-correo">
                            <input style="position: absolute;" type="radio"  name="gender" value="male">Admin
                        </label><br>
                        
                        <label style="position: absolute;"for="input-correo">
                            <input style="position: absolute;" type="radio" id="correo" name="gender" value="female">Editor
                        </label><br>

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

                        <input type="submit" id="btnEnviar"></input><br><br>


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
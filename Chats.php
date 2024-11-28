<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="Global.css">
    <link rel="stylesheet" href="Nav_foot.css">
    <link rel="stylesheet" href="Chats.css">

    <title>Chats || SkillHive</title>
</head>
<body>
    <!-- NAVBAR -->
    <header class="header">
        <div class="menu container">
            <div class="imagen-logo">
                <img src="imagenes/Logo2.png" alt="Logo" class="logo"> 
            </div>
            <a href="#" class="logo">SkillHive</a>
            
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <i class='bx bx-menu'></i>
            </label>
            
            <nav class="navbar">
                <ul>
                    <?php include_once 'menu.php' ?>
                </ul>
            </nav>
            
            <div>
                <ul>
                    <li class="submenu">
                        <a href="Pago.html">
                            <i class='bx bxs-cart' id="img-carrito"></i>
                        </a>
                        <div id="carrito">
                            <table id="lista-carrito">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="#" id="vaciar-carrito" class="btn-2">Vaciar Carrito</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>




    <div class="container">
        <div class="row">
            <div class="col-3 chats-container border">

                <h5 class="font-weight-bold mb-3 text-center">Chats</h5>

                <!--LISTA DE CHATS-->
                <ul class="list-unstyled ">

                    <li class="border-top">
                        <a href="#!" class="d-flex justify-content-between p-2 a-chat">
                            <div class="d-flex flex-row">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp" alt="avatar"
                                  class="rounded-circle mx-2 d-flex align-self-center " width="60">
                                <div class="pt-1">
                                    <p class="fw-bold mb-0">John Doe</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                </div>
                            </div>
                            <div class="pt-1">
                                <p class="small text-muted mb-1">13/09/2024</p>
                            </div>
                        </a>
                    </li>

                    <li class="border-top">
                        <a href="#!" class="d-flex justify-content-between p-2 a-chat">
                            <div class="d-flex flex-row">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava4-bg.webp" alt="avatar"
                                  class="rounded-circle mx-2 d-flex align-self-center " width="60">
                                <div class="pt-1">
                                    <p class="fw-bold mb-0">John Doe</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                </div>
                            </div>
                            <div class="pt-1">
                                <p class="small text-muted mb-1">13/09/2024</p>
                            </div>
                        </a>
                    </li>

                    <li class="border-top">
                        <a href="#!" class="d-flex justify-content-between p-2 a-chat">
                            <div class="d-flex flex-row">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3-bg.webp" alt="avatar"
                                  class="rounded-circle mx-2 d-flex align-self-center " width="60">
                                <div class="pt-1">
                                    <p class="fw-bold mb-0">John Doe</p>
                                    <p class="small text-muted">Hello, Are you there?</p>
                                </div>
                            </div>
                            <div class="pt-1">
                                <p class="small text-muted mb-1">13/09/2024</p>
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
            <div class="col-9 inbox-container">

                <div class=" d-flex flex-row my-auto p-2">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                      alt="avatar 1" style="width: 45px; height: 100%;">
                    <h3 class="subtitle my-auto ml-2">Manuel Herrera</h3>
                </div>   

                <!--CAJA DE MENSAJES-->
                <div class="messages-container">

                    <div class=" d-flex flex-row justify-content-start ">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                          alt="avatar 1" style="width: 45px; height: 100%;">
                        <div class="mensaje-remitente">
                            <p>Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.</p>
                            <div class="text-right"><span class="small">12:00 PM | 13/09/2024</span></div>
                        </div>
                    </div>

                    <div class=" d-flex flex-row justify-content-end">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                             alt="avatar 1" style="width: 45px; height: 100%;">
                        <div class="mensaje-emisor">
                            <p >Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.</p>
                            <div class="text-right"><span class="small">12:00 PM | 13/09/2024</span></div>
                        </div>
                    </div>

                    <div class=" d-flex flex-row justify-content-start ">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                          alt="avatar 1" style="width: 45px; height: 100%;">
                        <div class="mensaje-remitente">
                            <p >Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            <div class="text-right"><span class="small">12:00 PM | 13/09/2024</span></div>
                        </div>
                    </div>

                    <div class=" d-flex flex-row justify-content-end">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                             alt="avatar 1" style="width: 45px; height: 100%;">
                        <div class="mensaje-emisor">
                            <p >Lorem ipsum dolor
                            sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua.</p>
                            <div class="text-right"><span class="small">12:00 PM | 13/09/2024</span></div>
                        </div>
                    </div>
                    

                </div>

                <!--ENVIAR NUEVO MENSAJE-->
                <div class="text-muted d-flex justify-content-start align-items-center p-3 mt-2">
                    <img class="mr-2" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                        alt="avatar 3" style="width: 40px; height: 100%;">
                    <input type="text" class="input-message" id="" placeholder="Mensaje...">
                    <a class="ico-send ml-2" href="#!"><i class='bx bxs-send'></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer-container">
        <div class="link">
           <h3>Categorías</h3>
            <ul>
                <li><a href="#">Arte 2D</a></li>
                <li><a href="#">Comunicación</a></li>
                <li><a href="#">Programación</a></li>
                <li><a href="#">Cocina</a></li>
                <li><a href="#">Costura</a></li>


            </ul>
        </div>

        <div class="link">
             <ul>
                 <li><a href="#">Cine</a></li>
                 <li><a href="#">Escritura</a></li>
                 <li><a href="#">Nutrición</a></li>
                 <li><a href="#">Mascotas</a></li>
                 <li><a href="#">Música</a></li>
    
             </ul>
         </div>

         <div class="link">
            <h3>Sobre nosotros</h3>
            <p>
                Somos una empresa en crecimiento con el objetivo de
                ofrecer cursos innovadores y de alta calidad. 
                Únete a nuestra comunidad y descubre cómo podemos 
                ayudarte a explorar nuevas habilidades y alcanzar
                tu máximo potencial.
            </p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
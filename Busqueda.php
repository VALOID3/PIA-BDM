<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Cursos || SkillHive</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Nav_foot.css">
    <link rel="stylesheet" href="Busqueda.css">
</head>
<body>

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
                    <li><a href="Principal.html">Home</a></li>
                    <li><a href="Perfil.php">Mi Perfil</a></li>  <!-- Este cambiará dependiendo el tipo de usuario (checar cómo hacerlo)-->
                    <li><a href="Cursos.html">Cursos</a></li>
                    <li><a href="login.php">Cerrar Sesión</a></li>
                    <li><a href="Busqueda.html">Buscar</a></li>
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


    <div class="search-container">
        <form id="search-form" action="buscar_cursos.php" method="POST">
            <input type="text" name="titulo" placeholder="Buscar por título" class="search-input">
            <input type="text" name="usuario" placeholder="Buscar por usuario" class="search-input">
            <select name="categoria" class="search-input">
                <option value="">Seleccionar categoría</option>
                <option value="dibujo">Dibujo Digital</option>
                <option value="desarrollo">Desarrollo Web</option>
                <option value="fotografia">Fotografía Digital</option>
            </select>
            <input type="date" name="fecha_inicio" class="search-input">
            <input type="date" name="fecha_fin" class="search-input">
            <button type="submit" class="search-button">Buscar</button>
        </form>
    </div>

    <!-- Cursos-->
    <div class="cursos-container">
        <h2 class="subtitle">Cursos Encontrados</h2>
        <div class="Cursos_s" id="cursos-list">
            <!-- Los cursos filtrados se mostrarán aquí -->
        </div>
    </div>

    <footer class="footer-container">
  
        <div class="link">
            <h3>Categorías</h3>
             <ul>
                 <li><a href="CursoCategoría.html">Arte 2D</a></li>
                 <li><a href="CursoCategoría.html">Comunicación</a></li>
                 <li><a href="CursoCategoría.html">Programación</a></li>
                 <li><a href="CursoCategoría.html">Cocina</a></li>
                 <li><a href="CursoCategoría.html">Costura</a></li>
 
 
             </ul>
         </div>
 
         <div class="link">
              <ul>
                  <li><a href="CursoCategoría.html">Cine</a></li>
                  <li><a href="CursoCategoría.html">Escritura</a></li>
                  <li><a href="CursoCategoría.html">Nutrición</a></li>
                  <li><a href="CursoCategoría.html">Mascotas</a></li>
                  <li><a href="CursoCategoría.html">Música</a></li>
  
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

    <script src="Busqueda.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
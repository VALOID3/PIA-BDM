<?php 
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a SkillHive</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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
                    <?php include_once 'menu.php' ?>
                    
                </ul>
            </nav>
            
        </div>
    </header>

    <hr>

    <section class="cursos-container" id="lista-1">
        
        <h2>---Te puede interesar---</h2>
            
            <div class="Cursos_s">

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso2.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.php" class="link-curso">Decoración de galletas para Halloween : Técnicas avanzadas de fondant</a></h3>
                            <p>Aprende técnicas de decoración con fondant para personalizar tus galletas de mantequilla en estas fiestas macabras</p>
                            <p class="precio">$400</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1085</h4>
                                <i class='bx bx-heart'></i>
                                <h4>99%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="1">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

            </div>
        
        

    </section>

    <hr>

    <section class="cursos-container" id="lista-1">
        
        <h2>---Cursos populares---</h2>
        
        <div class="Cursos_sugeridos">
            
            <div class="Cursos_s">
            
                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso8.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Mindfulness y Meditación: Estrategias para una Vida Plena</a></h3>
                            <p>Este curso te guiará a través de prácticas para reducir el estrés, mejorar la concentración y fomentar el bienestar general</p>
                            <p class="precio">$310</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1400</h4>
                                <i class='bx bx-heart'></i>
                                <h4>93%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="7">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso9.jpeg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Gestión de Proyectos Ágiles: Metodologías para el Éxito</a></h3>
                            <p>Aprende sobre Scrum, Kanban y otras técnicas ágiles que te ayudarán a gestionar proyectos de manera eficiente y adaptativa</p>
                            <p class="precio">$495</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>950</h4>
                                <i class='bx bx-heart'></i>
                                <h4>90%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="8">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso10.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Programación Web para Principiantes: Crea tu Primer Sitio Web</a></h3>
                            <p>Aprende HTML, CSS y JavaScript para construir y personalizar tu propio sitio web desde cero</p>
                            <p class="precio">$480</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>2900</h4>
                                <i class='bx bx-heart'></i>
                                <h4>99%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="9">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso11.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Cinematografía y Producción de Video: De la Idea a la Pantalla</a></h3>
                            <p>Explora técnicas de cámara, iluminación, y edición con software profesional para crear videos de alta calidad</p>
                            <p class="precio">$370</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1760</h4>
                                <i class='bx bx-heart'></i>
                                <h4>92%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="10">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso12.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Nutrición y Bienestar: Diseña tu Plan de Alimentación Saludable</a></h3>
                            <p>Aprende sobre los fundamentos de una alimentación equilibrada, cómo diseñar planes de comidas personalizados</p>
                            <p class="precio">$375</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1250</h4>
                                <i class='bx bx-heart'></i>
                                <h4>91%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="11">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso13.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Realidad Aumentada y Virtual: Crea Experiencias Inmersivas</a></h3>
                            <p>Aprende a utilizar herramientas y plataformas para crear contenido en AR y VR</p>
                            <p class="precio">$600</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>980</h4>
                                <i class='bx bx-heart'></i>
                                <h4>97%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="12">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

            </div>
        
        </div>

    </section>

    <hr>

    <section class="cursos-container" id="lista-1">
        
        <h2>---Cursos Nuevos---</h2>
        
        <div class="Cursos_sugeridos">
            
            <div class="Cursos_s">
            
                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso14.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Cuidado y Bienestar de Mascotas Exóticas: Guía Completa para Dueños</a></h3>
                            <p> Aprende sobre nutrición, salud, comportamiento y el entorno adecuado para animales como reptiles, aves y pequeños mamíferos</p>
                            <p class="precio">$600</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>110</h4>
                                <i class='bx bx-heart'></i>
                                <h4>97%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="13">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso15.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Diseño y Desarrollo de Juegos con Unreal Engine 5</a></h3>
                            <p>Aprende a utilizar Unreal Engine 5 para diseñar y desarrollar juegos de alto nivel</p>
                            <p class="precio">$550</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>101</h4>
                                <i class='bx bx-heart'></i>
                                <h4>99%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="14">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso16.jpeg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Producción de Podcasts: De la Idea al Lanzamiento</a></h3>
                            <p>Aprende sobre técnicas de audio, promoción y monetización de tu podcast</p>
                            <p class="precio">$400</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>98</h4>
                                <i class='bx bx-heart'></i>
                                <h4>91%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="15">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso17.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Ciencia del Sueño: Mejora tu Calidad de Sueño y Bienestar</a></h3>
                            <p>Aprende sobre la higiene del sueño, el impacto de los trastornos del sueño en la salud, y técnicas para establecer una rutina de sueño</p>
                            <p class="precio">$300</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>75</h4>
                                <i class='bx bx-heart'></i>
                                <h4>89%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="16">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso18.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Cocina Vegana Creativa: Recetas Innovadoras</a></h3>
                            <p>Aprende a preparar platos veganos desde aperitivos y platos principales hasta postres utilizando ingredientes plant-based</p>
                            <p class="precio">$590</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>99</h4>
                                <i class='bx bx-heart'></i>
                                <h4>98%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="17">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso19.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Técnicas de Escritura de No Ficción: Desde Artículos hasta Ensayos</a></h3>
                            <p>Domina las técnicas de escritura de no ficción con un enfoque en la creación de artículos, ensayos y reportajes</p>
                            <p class="precio">$410</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>270</h4>
                                <i class='bx bx-heart'></i>
                                <h4>86%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="18">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        
        </div>

    </section>

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

</body>
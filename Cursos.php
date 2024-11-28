<?php 
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Cursos || SkillHive</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="Cursos.css">
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


    <section class="cursos-container" id="lista-1">
        
        <h2>---Todos nuestros Cursos---</h2>
            
            <div class="Cursos_s">

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso22.1.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Maestro del Dibujo Digital: De Principiante a Profesional</a></h3>
                            <p>Aprende a dominar el arte del dibujo digital con técnicas avanzadas y herramientas de última generación</p>
                            <p class="precio">$450</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>2100</h4>
                                <i class='bx bx-heart'></i>
                                <h4>95%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="19">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso23.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Escribe para Impactar: Taller de Creación Literaria</a></h3>
                            <p>Desarrolla tus habilidades de escritura creativa con técnicas para mejorar la narración, la estructura y la voz en tus textos</p>
                            <p class="precio">$350</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>180</h4>
                                <i class='bx bx-heart'></i>
                                <h4>88%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="20">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            
                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso2.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Decoración de galletas para Halloween : Técnicas avanzadas de fondant</a></h3>
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
                        <img src="imagenes/Curso24.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Cuidados Expertos para Mascotas: Desde Cachorros hasta Adultos</a></h3>
                            <p>Conoce los mejores cuidados y entrenamientos para tus mascotas</p>
                            <p class="precio">$275</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>310</h4>
                                <i class='bx bx-heart'></i>
                                <h4>85%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="21">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso25.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Crea tu Canción: Producción Musical para Principiantes</a></h3>
                            <p>Aprende los fundamentos de la producción musical, desde la composición hasta la grabación y mezcla de tus propias canciones</p>
                            <p class="precio">$600</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>590</h4>
                                <i class='bx bx-heart'></i>
                                <h4>90%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="22">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso3.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Innovación en Marketing Digital: Estrategias para el Éxito en la Era Digital</a></h3>
                            <p>Aprende sobre SEO avanzado, marketing en redes sociales, análisis de datos y la creación de contenido que convierta</p>
                            <p class="precio">$380</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1500</h4>
                                <i class='bx bx-heart'></i>
                                <h4>91%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="2">Agregar al carrito</a>
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
                        <img src="imagenes/Curso26.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Código al Rescate: Introducción a Python para Todos</a></h3>
                            <p>Curso accesible para quienes desean mejorar sus habilidades tecnológicas con un lenguaje versátil y en demanda</p>
                            <p class="precio">$400</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>489</h4>
                                <i class='bx bx-heart'></i>
                                <h4>96%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="23">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso27.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Costura Infantil: Diseña y Confecciona Ropa para Niños</a></h3>
                            <p> Aprende a diseñar y confeccionar ropa infantil, adaptada a las necesidades y gustos de los más pequeños</p>
                            <p class="precio">$360</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>180</h4>
                                <i class='bx bx-heart'></i>
                                <h4>87%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="24">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso4.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">El Arte de la Comunicación Eficaz: Estrategias para Impactar y Persuadir</a></h3>
                            <p>Aprende sobre lenguaje corporal, técnicas de persuasión, y cómo adaptar tu mensaje a diferentes audiencias</p>
                            <p class="precio">$350</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1200</h4>
                                <i class='bx bx-heart'></i>
                                <h4>94%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="3">Agregar al carrito</a>
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
                        <img src="imagenes/Curso28.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Planificación de Menús Saludables para Familias</a></h3>
                            <p> Aprende a diseñar menús nutritivos y equilibrados para toda la familia, con recetas adaptadas a diferentes necesidades dietéticas y estilos de vida</p>
                            <p class="precio">$310</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>640</h4>
                                <i class='bx bx-heart'></i>
                                <h4>90%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="25">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso29.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Maestro del Piano: De Principiante a Virtuoso</a></h3>
                            <p>Curso integral para aprender a tocar el piano desde lo básico hasta niveles avanzados, con técnicas de interpretación y teoría musical</p>
                            <p class="precio">$650</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1200</h4>
                                <i class='bx bx-heart'></i>
                                <h4>97%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="26">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso5.png">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Maestría en Fotografía Nocturna: Captura la Magia de la Noche</a></h3>
                            <p>Aprende sobre exposiciones prolongadas, uso de filtros, y la postproducción para transformar tus fotos nocturnas en obras maestras</p>
                            <p class="precio">$400</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1589</h4>
                                <i class='bx bx-heart'></i>
                                <h4>97%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="4">Agregar al carrito</a>
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
                        <img src="imagenes/Curso30.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Voz y Técnica Vocal: Mejora tu Cantante Interior</a></h3>
                            <p>Curso para mejorar tus habilidades vocales, abarcando técnicas de respiración, proyección y control del tono para cantantes de todos los niveles</p>
                            <p class="precio">$500</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>1450</h4>
                                <i class='bx bx-heart'></i>
                                <h4>92%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="27">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso31.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Presentaciones Impactantes: Crea y Entrega Mensajes que Capturan Audiencia</a></h3>
                            <p>Curso sobre cómo diseñar y entregar presentaciones efectivas que mantengan a tu audiencia involucrada y motivada</p>
                            <p class="precio">$380</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>760</h4>
                                <i class='bx bx-heart'></i>
                                <h4>88%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="28">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso6.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Arquitectura Sostenible: Diseña Edificios Ecológicos y Eficientes</a></h3>
                            <p>Aprende a crear edificios que no solo sean estéticamente agradables, sino también respetuosos con el planeta</p>
                            <p class="precio">$550</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>700</h4>
                                <i class='bx bx-heart'></i>
                                <h4>89%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="5">Agregar al carrito</a>
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
                        <img src="imagenes/Curso32.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Actuación para Cine: Técnicas y Estrategias para la Pantalla</a></h3>
                            <p>Desarrolla habilidades de actuación específicas para el cine, con enfoques en técnicas de interpretación, expresión y adaptación a diferentes estilos de dirección</p>
                            <p class="precio">$525</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>260</h4>
                                <i class='bx bx-heart'></i>
                                <h4>85%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="29">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso7.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Diseño de Modas: De la Inspiración a la Pasarela</a></h3>
                            <p>a investigar tendencias, desarrollar bocetos, elegir telas, y técnicas para presentar tus diseños de manera profesional</p>
                            <p class="precio">$515</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>800</h4>
                                <i class='bx bx-heart'></i>
                                <h4>92%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="6">Agregar al carrito</a>
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

                <div class="CursoS_1">
                    <div class="curso">
                        <img src="imagenes/Curso33.jpg">
                        <div class="curso-txt">
                            <h3><a href="DetallesCurso.html" class="link-curso">Concept Art para Videojuegos: Diseño de Mundos y Personajes</a></h3>
                            <p>Curso sobre la creación de concept art para videojuegos, incluyendo técnicas para diseñar mundos, personajes y elementos visuales que apoyen la narrativa del juego</p>
                            <p class="precio">$615</p>
                            
                            <div class="valoraciones">
                                <i class='bx bx-user'></i>
                                <h4>690</h4>
                                <i class='bx bx-heart'></i>
                                <h4>92%</h4>
                            </div>

                            <a href="#" class="agregar-carrito btn-3" data-id="30">Agregar al carrito</a>
                        </div>
                    </div>
                </div>

            </div>

            <a href="#" class="btn-cargar" id="button-cargar">Cargar más</a>

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
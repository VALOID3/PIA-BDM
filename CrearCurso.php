<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Curso || SkillHive</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CrearCurso.css">
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
                    <li><a href="PerfilI.html">Mi Perfil</a></li>  
                    <li><a href="Cursos.html">Cursos</a></li>
                    <li><a href="login.php">Cerrar Sesión</a></li>
                    <li><a href="Busqueda.html">Buscar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="Formulario-Curso">
        <h2>---¡Crear nuevo curso!---</h2>
        <h4>Por favor, llena el siguiente formulario con los datos correctos para poder registrar exitosamente el curso</h4>
        <form id="add-course-form">
            <label for="nivel-curso">Nivel del curso:</label>
            <select id="nivel-curso" required>
                <option value="">Seleccione un nivel</option>
                <option value="Principiante">Principiante</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Avanzado">Avanzado</option>
            </select>
    
            <label for="nombre">Nombre del curso:</label>
            <input type="text" id="nombre" required>
    
            <label for="descripcion">Descripción del curso:</label>
            <textarea id="descripcion" required></textarea>
    
            <label for="detalles">Más detalles sobre el curso:</label>
            <textarea id="descripcion-detalles" required></textarea>
    
            <label for="curso-categoria">Categoría a la que pertenece:</label>
            <select id="curso-categoria">
                <option value="1">Arte2D</option>
                <option value="2">Comunicación</option>
                <option value="3">Programación</option>
                <option value="4">Cocina</option>
                <option value="5">Costura</option>
                <option value="6">Cine</option>
                <option value="7">Escritura</option>
                <option value="8">Nutrición</option>
                <option value="9">Mascotas</option>
                <option value="10">Música</option>
            </select>
    
            <label for="costo-curso">Costo del curso:</label>
            <input type="number" id="costo-curso" step="0.01" required>
    
            <label for="imagen-portada">Imagen de portada:</label>
            <input type="file" id="imagen-portada" accept="image/*" required>
    
            <button type="submit" style="display: block; margin: 20px auto;">Agregar Curso</button>
        </form>
    </section>

    <script>
        document.getElementById('add-course-form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el envío del formulario por defecto

            const nivelCurso = document.getElementById('nivel-curso').value;
            const nombreCurso = document.getElementById('nombre').value;
            const descripcionCurso = document.getElementById('descripcion').value;
            const detallesCurso = document.getElementById('descripcion-detalles').value;
            const categoriaCurso = document.getElementById('curso-categoria').value;
            const costoCurso = document.getElementById('costo-curso').value;

            // Crear un objeto con los datos del curso
            const cursoData = {
                nivel: nivelCurso,
                nombre: nombreCurso,
                descripcion: descripcionCurso,
                detalles: detallesCurso,
                categoria: categoriaCurso,
                costo: costoCurso
            };

            // Realiza la llamada AJAX para agregar el curso
            fetch('crear_curso.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(cursoData) // Enviar los datos del curso
            })
            .then(response => response.json())
            .then(data => {
                console.log(data)
                if (data.success) {
                    alert('Curso creado exitosamente!');
                    // Aquí puedes redirigir a otra página o limpiar el formulario
                    document.getElementById('add-course-form').reset(); // Limpiar el formulario
                } else {
                    alert('Error al crear el curso. Inténtalo de nuevo.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error al crear el curso. Inténtalo de nuevo.');
            });
        });
    </script>

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
</html>
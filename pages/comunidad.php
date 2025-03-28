<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" href="../media/img/icon-la-guerra-de-las-galaxias.png">
    <title>Star Wars | Comunidad</title>
</head>

<body class="body-planetas">
    <div class="barra-navegacion">
        <header>
            <h1>Star Wars - Una Galaxia Muy Lejana</h1>
        </header>
        <nav>
        <ul>
                <li><a href="historia.php?pagina=home">Inicio</a></li>
                <li><a href="historia.php?pagina=historia">Historia</a></li>
                <li><a href="historia.php?pagina=personajes">Personajes</a></li>
                <li><a href="historia.php?pagina=naves">Naves Espaciales</a></li>
                <li><a href="historia.php?pagina=planetas">Planetas y lugares</a></li>
                <li><a href="historia.php?pagina=comunidad">Comunidad</a></li>
            </ul>
        </nav>
    </div>
<main>
    <section class="titulo-naves">
        <h2>Únete a la Comunidad</h2><br>
        <p>Completa el siguiente formulario para formar parte de la comunidad de fans de Star Wars. ¡Que la Fuerza te acompañe!</p>
    </section>
</main>
<section class="comunidad">
    <div>
    <?php 
        $redireccion ="";
        if(isset($_GET['mensaje'])=='ok'){
            echo "<p style='color: green; font-weight: bold;'>El formulario se envió correctamente! Ya formas parte de nuestra comunidad!</p>";            
            $redireccion ="ok";
        }
        ?>
        <form action="../pages/enviar_consulta.php" class="formulario-comunidad" method="post">        
            <div class="campo">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="campo">
                <label for="fecha-nacimiento">Fecha de Nacimiento:</label>
                <input type="date" id="fecha-nacimiento" name="fecha-nacimiento" required>
            </div>
            <div class="campo">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="campo">
                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="campo">
                <label for="favorito">Película/Personaje Favorito:</label>
                <input type="text" id="favorito" name="favorito" required>
            </div>
            <div class="campo">
                <label for="ubicacion">Ubicación (Ciudad/País):</label>
                <input type="text" id="ubicacion" name="ubicacion">
            </div>
            <div class="campo">
                <label for="comentario">¿Qué significa Star Wars para ti?</label>
                <textarea id="comentario" name="comentario" rows="4" placeholder="Escribe tu respuesta..."></textarea>
            </div>
            <input type="submit" value="Enviar" class="btn-send">
        </form> 
    </div>
</section>
<?php
if($redireccion == 'ok'){
    include("../pages/footer.php");
}
?>
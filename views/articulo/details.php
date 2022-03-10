<head>

    <link rel="stylesheet" href="../styles/css/details.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <h1>Artículo | Detalles</h1>

    <?php foreach($articulos as $articulo) : ?>

    <h2>ID:</h2>
    <p><?=$articulo->id_articulo?></p>

    <h2>Nombre:</h2>
    <p><?=$articulo->nombre_articulo?></p>
    
    <h2>Correo Electrónico:</h2>
    <p><?=$articulo->texto_articulo?></p>

    <h2>Contraseña:</h2>
    <p><?=$articulo->estado?></p>

    <h2>Título:</h2>
    <p>

        <?php
        
            foreach($titulos as $titulo){

                if($titulo->id_titulo == $articulo->id_titulo){

                    echo $titulo->nombre_titulo;

                }

            }
        
        ?>

    </p>

    <h2>Libro:</h2>
    <p>

        <?php
        
            foreach($libros as $libro){

                if($libro->id_libro == $articulo->id_libro){

                    echo $libro->nombre_libro;

                }

            }
        
        ?>

    </p>

    <?php endforeach; ?>

    <a href="articuloController.php">Volver</a>

</main>
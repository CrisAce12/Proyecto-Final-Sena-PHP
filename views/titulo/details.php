<head>

    <link rel="stylesheet" href="../styles/css/details.css">

</head>

<main>

    <h1>Título | Detalles Título</h1>

    <?php foreach($titulos as $titulo) : ?>

    <h2>ID:</h2>
    <p><?=$titulo->id_titulo?></p>

    <h2>Nombre:</h2>
    <p><?=$titulo->nombre_titulo?></p>

    <h2>Requisitos:</h2>
    <p>

        <?php
        
            foreach($libros as $libro){

                if($libro->id_libro == $titulo->id_libro){

                    echo $libro->nombre_libro;

                }

            }
        
        ?>

    </p>

    <?php endforeach; ?>

    <a href="tituloController.php">Volver</a>

</main>
<head>

    <link rel="stylesheet" href="../styles/css/indexUsuario.css">
    <link rel="stylesheet" href="../styles/css/usuario/titulo.css">

    <title>Código De Policía Ya! | Título</title>

</head>

<main>

    <section class="section1">

        <h1><?php foreach($libros as $libro){if($libro->id_libro==$_GET['libroGet']){ echo $libro->nombre_libro;}}?> | Títulos</h1>

        <?php foreach($libros as $libro):            

            if($libro->id_libro==$_GET['libroGet']){

                foreach($titulos as $titulo):

                    $idTitulo = $titulo->id_titulo;

                    if ($titulo->id_libro==$libro->id_libro):

                        ?> 
                    
                            <div>   

                                <p><?=$titulo->nombre_titulo?></p>

                                <a href="articuloVista.php?libroGet=<?php echo $titulo->id_libro?>&tituloGet=<?php echo $idTitulo?>">Ir Ahora</a>

                            </div>
                    
                        <?php

                    endif;

                endforeach;

            }

        endforeach;?>

    </section>

    <section class="section2">

        <button><a href="libroVista.php">Volver</a></button>

    </section>

</main>
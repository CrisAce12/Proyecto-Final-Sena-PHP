<head>

    <link rel="stylesheet" href="../styles/css/lectura/articulo.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <section class="section1">

        <h1><?php foreach($libros as $libro){if($libro->id_libro==$_GET['libroGet']){ echo $libro->nombre_libro;}}?> | <?php foreach($titulos as $titulo){if($titulo->id_titulo==$_GET['tituloGet']){ echo $titulo->nombre_titulo;}}?></h1>

        <button><a href="tituloVista.php?libroGet=<?=$_GET['libroGet']?>">Volver a Titulos</a></button>

        <hr>

        <?php

            $idLibro = $_GET['libroGet'];
            $idTitulo = $_GET['tituloGet'];

            foreach ($articulos as $articulo):

                if ($articulo->id_titulo==$idTitulo&&$articulo->id_libro==$idLibro):

                    ?> 
                
                        <div>

                        <h1><?=$articulo->nombre_articulo?></h1>

                        <p><?=$articulo->texto_articulo?></p>

                        </div>
                
                    <?php

                endif;

            endforeach;
            
            
        ?>

    </section>

    

</main>
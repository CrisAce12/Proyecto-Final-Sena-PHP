<head>

    <link rel="stylesheet" href="../styles/css/details.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <h1>Noticia | Detalles</h1>

    <?php foreach($noticias as $noticia) : ?>

    <h2>ID:</h2>
    <p><?=$noticia->id_noticia?></p>

    <h2>Nombre:</h2>
    <p><?=$noticia->nombre_notica?></p>
    
    <h2>Correo Electrónico:</h2>
    <p><?=$noticia->texto_noticia?></p>

    <h2>Contraseña:</h2>
    <p><?=$noticia->fecha?></p>

    <h2>Estado:</h2>
    <p><?=$noticia->estado?></p>

    <h2>Artículo:</h2>
    <p>

        <?php
        
            foreach($articulos as $articulo){

                if($articulo->id_articulo == $noticia->id_articulo){

                    echo $articulo->nombre_articulo;

                }

            }
        
        ?>

    </p>

    <h2>Trámite:</h2>
    <p>

        <?php
        
            foreach($tramites as $tramite){

                if($tramite->id_tramite == $noticia->id_tramite){

                    echo $tramite->nombre_tramite;

                }

            }
        
        ?>

    </p>

    <?php endforeach; ?>

    <a href="noticiaController.php">Volver</a>

</main>
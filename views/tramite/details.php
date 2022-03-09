<head>

    <link rel="stylesheet" href="../styles/css/details.css">

</head>

<main>

    <h1>Trámite | Detalles Trámite</h1>

    <?php foreach($tramites as $tramite) : ?>

    <h2>ID:</h2>
    <p><?=$tramite->id_tramite?></p>

    <h2>Nombre:</h2>
    <p><?=$tramite->nombre_tramite?></p>
    
    <h2>Texto Trámite:</h2>
    <p><?=$tramite->texto_tramite?></p>

    <h2>Requisitos:</h2>
    <p>

        <?php
        
            foreach($requisitos as $requisito){

                if($requisito->id_requisito == $tramite->id_requisito){

                    echo $requisito->nombre_requisito;

                }

            }
        
        ?>

    </p>

    <h2>Artículos:</h2>
    <p>

        <?php
        
            foreach($articulos as $articulo){

                if($articulo->id_articulo == $tramite->id_articulo){

                    echo $articulo->nombre_articulo;

                }

            }
        
        ?>

    </p>

    <?php endforeach; ?>

    <a href="tramiteController.php">Volver</a>

</main>
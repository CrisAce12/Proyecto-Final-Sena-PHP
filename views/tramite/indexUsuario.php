<head>

    <link rel="stylesheet" href="../styles/css/lectura/articulo.css">
    <title>Código De Policía Ya! | Trámite</title>

</head>

<main>

    <section class="section1">

        <h1>Trámites</h1>

        <hr>

        <?php foreach($tramites as $tramite):?>

            <div>

                <div class="divFavorito">

                    <h1><?=$tramite->nombre_tramite?></h1>

                    <?php if(isset($_SESSION["usuario"])):?>

                        <button type="submit"><a href="usuarioVista.php?accion=insertarFavorito&idTramite=<?=$tramite->id_tramite?>">&#9829; Añadir A Favoritos</a></button>                    

                    <?php endif;?>

                </div>

                <p><?=$tramite->texto_tramite?></p>

            </div>

        <?php endforeach;?>

    </section>

</main>
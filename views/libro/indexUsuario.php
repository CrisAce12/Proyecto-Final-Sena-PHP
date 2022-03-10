<head>

    <link rel="stylesheet" href="../styles/css/indexUsuario.css">
    <link rel="stylesheet" href="../styles/css/usuario/libro.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <section class="section1">

        <?php $i=1;foreach($libros as $libro):?>

            <div>

                <h1>Libro <?=$i?></h1>

                <p><?=$libro->nombre_libro?></p>

                <button><a href="tituloVista.php?libroGet=<?=$libro->id_libro?>">Ir Ahora</a></button>

            </div>

        <?php $i++; endforeach;?>

    </section>       

    <section class="section2">

        <button><a href="landingController.php">Volver</a></button>

    </section>

</main>
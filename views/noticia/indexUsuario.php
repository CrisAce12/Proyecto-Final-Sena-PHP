<head>

    <link rel="stylesheet" href="../styles/css/lectura/articulo.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <section class="section1">

        <h1>Noticias</h1>

        <hr>

        <?php foreach($noticias as $noticia):?>

        <div>

            <h1><?=$noticia->nombre_notica?></h1>

            <p class="noticia">Publicada el <?= $noticia->fecha?></p>

            <p><?=$noticia->texto_noticia?></p>

        </div>

        <?php endforeach; ?>

    </section>

</main>
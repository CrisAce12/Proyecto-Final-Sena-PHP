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

            <h1><?=$tramite->nombre_tramite?></h1>

            <p><?=$tramite->texto_tramite?></p>

            </div>

        <?php endforeach;?>

    </section>

</main>
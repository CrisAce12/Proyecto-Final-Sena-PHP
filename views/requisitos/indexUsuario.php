<head>

    <link rel="stylesheet" href="../styles/css/lectura/articulo.css">

    <title>Código De Policía Ya! | Requisitos</title>

</head>

<main>

    <section class="section1">

        <h1>Requisitos</h1>

        <hr>

        <?php foreach($requisitos as $requisito):?>

            <div>

                <h1><?=$requisito->nombre_requisito?></h1>

                <p><?=$requisito->descripcion_requisito?></p>

            </div>

        <?php endforeach; ?>

    </section>

    

</main>
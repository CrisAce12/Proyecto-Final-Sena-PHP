<head>

    <link rel="stylesheet" href="../styles/css/details.css">

    <title>Código De Policía Ya! | Requisitos</title>

</head>

<main>

    <h1>Requisitos | Detalles Requisitos</h1>

    <?php foreach($requisitos as $requisito) : ?>

    <h2>ID:</h2>
    <p><?=$requisito->id_requisito?></p>

    <h2>Nombre:</h2>
    <p><?=$requisito->nombre_requisito?></p>

    <h2>Descripción:</h2>
    <p><?=$requisito->descripcion_requisito?></p>

    <?php endforeach; ?>

    <a href="requisitosController.php">Volver</a>

</main>
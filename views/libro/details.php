<head>

    <link rel="stylesheet" href="../styles/css/details.css">

</head>

<main>

    <h1>Libro | Detalles</h1>

    <?php foreach($libros as $libro) : ?>

    <h2>ID:</h2>
    <p><?=$libro->id_libro?></p>

    <h2>Nombre:</h2>
    <p><?=$libro->nombre_libro?></p>

    <?php endforeach; ?>

    <a href="libroController.php">Volver</a>

</main>
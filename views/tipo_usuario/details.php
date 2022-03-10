<head>

    <link rel="stylesheet" href="../styles/css/details.css">

    <title>Código De Policía Ya! | Tipo de Usuario</title>

</head>

<main>

    <h1>Tipo Usuario | Detalles</h1>

    <?php foreach($tipos as $tipo) : ?>

    <h2>ID:</h2>
    <p><?=$tipo->id_tusuario?></p>

    <h2>Nombre:</h2>
    <p><?=$tipo->nombre_tusuario?></p>

    <?php endforeach; ?>

    <a href="tipoUsuarioController.php">Volver</a>

</main>
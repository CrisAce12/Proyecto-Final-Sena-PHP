<head>

    <link rel="stylesheet" href="../styles/css/details.css">

</head>

<main>

    <h1>Tipo Usuario | Detalles</h1>

    <?php foreach($tipos as $tipo) : ?>

    <h2>ID:</h2>
    <p><?=$tipo->id_tusuario?></p>

    <h2>Nombre:</h2>
    <p><?=$tipo->nombre_tusuario?></p>

    <?php endforeach; ?>

    <form action="tipoUsuarioController.php">

        <input type="text" name="accion" id="accion" value="" hidden>

        <button type="submit">Volver</button>

    </form>

</main>
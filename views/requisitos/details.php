<head>

    <link rel="stylesheet" href="../styles/css/details.css">

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

    <form action="requisitosController.php">

        <input type="text" name="accion" id="accion" value="" hidden>

        <button type="submit">Volver</button>

    </form>

</main>
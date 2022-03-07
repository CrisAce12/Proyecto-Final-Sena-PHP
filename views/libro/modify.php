<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Libro | Modificar</h1>

        <form action="libroController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($libros as $libro) : ?>

                <p class="pTitulo">ID:</p>
                <p><?=$libro->id_libro?></p>
                <input type="text" name="idLibro" id="idLibro" value="<?=$libro->id_libro?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p><?=$libro->nombre_libro?></p>

                <p class="pTitulo--Modificar">Modificar Libro:</p>
                <input type="text" name="nombreLibro" id="nombreLibro" value="<?=$libro->nombre_libro?>">

                <button type="submit" class="create">Modificar Libro</button>

            <?php endforeach; ?>

        </form>

        <form action="libroController.php">

        <input type="text" name="accion" id="accion" value="" hidden>

        <button type="submit">Volver</button>

        </form>

    </section>

</main>


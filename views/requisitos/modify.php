<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Requisitos | Modificar</h1>

        <form action="requisitosController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($requisitos as $requisito) : ?>

                <p class="pTitulo">ID:</p>
                <p><?=$requisito->id_requisito?></p>
                <input type="text" name="idRequisitos" id="idRequisitos" value="<?=$requisito->id_requisito?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p><?=$requisito->nombre_requisito?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombreRequisito" id="nombreRequisito" value="<?=$requisito->nombre_requisito?>">

                <p class="pTitulo">Descripción: </p>
                <p><?=$requisito->descripcion_requisito?></p>
                <p class="pTitulo--Modificar">Modificar Descripción:</p>
                <textarea name="descripcionRequisito" id="descripcionRequisito" cols="200" rows="20"><?=$requisito->descripcion_requisito?></textarea>

            <?php endforeach; ?>

            <button type="submit" class="create">Modificar Requisito</button>

        </form>

        <a href="requisitosController.php">Volver</a>

    </section>

</main>


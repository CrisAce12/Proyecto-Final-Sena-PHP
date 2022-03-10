<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

    <title>Código De Policía Ya! | Tipo Usuario</title>

</head>

<main>

    <section>

        <h1>Tipo Usuario | Modificar</h1>

        <form action="tipoUsuarioController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($tipos as $tipo) : ?>

                <p class="pTitulo">ID:</p>
                <p><?=$tipo->id_tusuario?></p>
                <input type="text" name="idTipoUsuario" id="idTipoUsuario" value="<?=$tipo->id_tusuario?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p><?=$tipo->nombre_tusuario?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombreTipoUsuario" id="nombreTipoUsuario" value="<?=$tipo->nombre_tusuario?>">

            <?php endforeach; ?>

            <button type="submit" class="create">Modificar Tipo Usuario</button>

        </form>

        <a href="tipoUsuarioController.php">Volver</a>

    </section>

</main>


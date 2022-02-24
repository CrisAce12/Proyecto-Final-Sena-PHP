<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Tipo Usuario | Añadir</h1>

        <form action="tipoUsuarioController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombreTipoUsuario">Nombre:</label>
            <input type="text" name="nombreTipoUsuario" id="nombreTipoUsuario" required>
            <br><br>                  

            <button type="submit" class="create">Crear Tipo Usuario</button>

        </form>
        <br><br>
        
        <form action="tipoUsuarioController.php">

            <input type="text" name="accion" id="accion" value="" hidden>

            <button type="submit">Volver</button>

        </form>

    </section>

</main>
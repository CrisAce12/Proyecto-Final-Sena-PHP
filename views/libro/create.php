<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Libro | Añadir</h1>

        <form action="libroController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombreLibro">Nombre:</label>
            <input type="text" name="nombreLibro" id="nombreLibro" required>
            <br><br>                   

            <button type="submit" class="create">Crear Libro</button>

        </form>
        <br><br>
        
        <form action="libroController.php">

            <input type="text" name="accion" id="accion" value="" hidden>

            <button type="submit">Volver</button>

        </form>

    </section>

</main>
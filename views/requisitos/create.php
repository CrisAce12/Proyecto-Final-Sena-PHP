<head>

    <link rel="stylesheet" href="../styles/css/create.css">

    <title>Código De Policía Ya! | Requisitos</title>

</head>

<main>

    <section>

        <h1>Requisitos | Añadir</h1>

        <form action="requisitosController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombreRequisito">Nombre:</label>
            <input type="text" name="nombreRequisito" id="nombreRequisito" required>
            <br><br>

            <label for="descripcionRequisito">Descripción:</label>
            <input type="text" name="descripcionRequisito" id="descripcionRequisito" required>
            <br><br>                 

            <button type="submit" class="create">Crear Requisitos</button>

        </form>
        
        <a href="requisitosController.php">Volver</a>

    </section>

</main>
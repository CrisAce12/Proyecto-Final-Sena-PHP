<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Título | Añadir</h1>

        <form action="tituloController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombreTitulo">Nombre:</label>
            <input type="text" name="nombreTitulo" id="nombreTitulo" required>
            <br><br>

            <label for="idLibro">Id Libro:</label>
            <select name="idLibro" id="idLibro">

                <?php foreach($libros as $libro): ?>

                    <option value="<?=$libro->id_libro?>"><?php echo $libro->nombre_libro?></option>

                <?php endforeach;?>

            </select>
            <br><br>                    

            <button type="submit" class="create">Crear Título</button>

        </form>
        <br><br>
        
        <form action="tituloController.php">

            <input type="text" name="accion" id="accion" value="" hidden>

            <button type="submit">Volver</button>

        </form>

    </section>

</main>
<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Artículo | Añadir</h1>

        <form action="articuloController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombreArticulo">Nombre:</label>
            <input type="text" name="nombreArticulo" id="nombreArticulo" required>
            <br><br>

            <label for="textoArticulo">Texto:</label>
            <input type="text" name="textoArticulo" id="textoArticulo" required>
            <br><br>

            <label for="estado">Estado:</label>
            <select name="estado" id="estado">

                <option value="0">Inactivo</option>
                <option value="1">Activo</option>

            </select>
            <br><br>

            <label for="idTitulo">Título</label>
            <select name="idTitulo" id="idTitulo">

                <?php foreach($titulos as $titulo): ?>

                    <option value="<?=$titulo->id_titulo?>"><?php echo $titulo->nombre_titulo?></option>

                <?php endforeach;?>

            </select>
            <br><br>
            
            <label for="idLibro">Libro</label>
            <select name="idLibro" id="idLibro">

                <?php foreach($libros as $libro): ?>

                    <option value="<?=$libro->id_libro?>"><?php echo $libro->nombre_libro?></option>

                <?php endforeach;?>

            </select>
            <br><br>   

            <button type="submit" class="create">Crear</button>

        </form>

        <a href="articuloController.php">Volver</a>

    </section>

</main>
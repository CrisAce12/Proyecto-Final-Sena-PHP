<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Noticia | Añadir</h1>

        <form action="noticiaController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombreNoticia">Nombre:</label>
            <input type="text" name="nombreNoticia" id="nombreNoticia" required>
            <br><br>

            <label for="textoNoticia">Texto:</label>
            <input type="text" name="textoNoticia" id="textoNoticia" required>
            <br><br>

            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" id="fecha" required>
            <br><br>
            
            <label for="estado">Estado: </label>
            <select name="estado" id="estado">

                <option value="0">Inactivo</option>
                <option value="1">Activo</option>

            </select>
            <br><br> 
            
            <label for="idArticulo">Artículo</label>
            <select name="idArticulo" id="idArticulo">

                <?php foreach($articulos as $articulo): ?>

                    <option value="<?=$articulo->id_articulo?>"><?php echo $articulo->nombre_articulo?></option>

                <?php endforeach;?>

            </select>
            <br><br>    
            
            <label for="idTramite">Trámite</label>
            <select name="idTramite" id="idTramite">

                <?php foreach($tramites as $tramite): ?>

                    <option value="<?=$tramite->id_tramite?>"><?php echo $tramite->nombre_tramite?></option>

                <?php endforeach;?>

            </select>
            <br><br>

            <button type="submit" class="create">Crear Noticia</button>

        </form>

        <a href="noticiaController.php">Volver</a>

    </section>

</main>
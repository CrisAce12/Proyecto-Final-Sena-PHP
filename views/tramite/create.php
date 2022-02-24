<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Trámite | Añadir Trámite</h1>

        <form action="tramiteController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombreTramite" id="nombreTramite" required>

            <label for="textoTramite">Texto:</label>

            <textarea name="textoTramite" id="textoTramite" cols="200" rows="10" required></textarea>

            <label for="idRequisito">Requisitos</label>
            <select name="idRequisito" id="idRequisito">

                <?php foreach($requisitos as $requisito): ?>

                    <option value="<?=$requisito->id_requisito?>"><?php echo $requisito->nombre_requisito?></option>

                <?php endforeach;?>

            </select> 
            
            <label for="idArticulo">Articulo</label>
            <select name="idArticulo" id="idArticulo">

                <?php foreach($articulos as $articulo): ?>

                    <option value="<?=$articulo->id_articulo?>"><?php echo $articulo->nombre_articulo?></option>

                <?php endforeach;?>

            </select>       

            <button type="submit" class="create">Crear Trámite</button>

        </form>
        <br><br>
        
        <form action="tramiteController.php">

            <input type="text" name="accion" id="accion" value="" hidden>

            <button type="submit">Volver</button>

        </form>

    </section>

</main>
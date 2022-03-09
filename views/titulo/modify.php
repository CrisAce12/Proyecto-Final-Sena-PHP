<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Título | Modificar</h1>

        <form action="tituloController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($titulos as $titulo) : ?>

                <p class="pTitulo">ID:</p>
                <p><?=$titulo->id_titulo?></p>
                <input type="text" name="idTitulo" id="idTitulo" value="<?=$titulo->id_titulo?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p><?=$titulo->nombre_titulo?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombreTitulo" id="nombreTitulo" value="<?=$titulo->nombre_titulo?>">

                <p class="pTitulo">Libro:</p>
                <p>

                    <?php
                    
                        foreach($libros as $libro){

                            if($libro->id_libro == $titulo->id_libro){

                                echo $libro->nombre_libro;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Libro:</p>
                <select name="idLibro" id="idLibro">

                    <?php foreach($libros as $libro): ?>

                        <option <?php if($libro->id_libro==$titulo->id_libro){echo "selected";}?> value="<?=$libro->id_libro?>"><?php echo $libro->nombre_libro?></option>

                    <?php endforeach;?>

                </select>

                <button type="submit" class="create">Modificar Título</button>

            <?php endforeach; ?>

        </form>

        <a href="tituloController.php">Volver</a>

    </section>

</main>


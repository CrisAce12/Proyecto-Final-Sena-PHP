<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Artículo | Modificar Usuario</h1>

        <form action="articuloController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($articulos as $articulo) : ?>

                <p class="pTitulo">ID Usuario:</p>
                <p>Valor Actual: <?=$articulo->id_articulo?></p>
                <input type="text" name="idArticulo" id="idArticulo" value="<?=$articulo->id_articulo?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p>Valor Actual: <?=$articulo->nombre_articulo?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombreArticulo" id="nombreArticulo" value="<?=$articulo->nombre_articulo?>">

                <p class="pTitulo">Texto: </p>
                <p>Valor Actual: <?=$articulo->texto_articulo?></p>
                <p class="pTitulo--Modificar">Modificar Texto:</p>
                <textarea name="textoArticulo" id="textoArticulo" cols="200" rows="10"><?=$articulo->texto_articulo?></textarea>

                <p class="pTitulo">Estado:</p>
                <p>Valor Actual: <?=$articulo->estado?></p>
                <p class="pTitulo--Modificar">Modificar Estado:</p>
                <select name="estado" id="estado">

                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>

                </select>

                <p class="pTitulo">Título:</p>
                <p>

                    <?php
                    
                        foreach($titulos as $titulo){

                            if($titulo->id_titulo == $articulo->id_titulo){

                                echo 'Valor Actual: '.$titulo->nombre_titulo;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Titulo:</p>
                <select name="idTitulo" id="idTitulo">

                    <?php foreach($titulos as $titulo): ?>

                        <option <?php if($titulo->id_titulo==$articulo->id_titulo){echo "selected";}?> value="<?=$titulo->id_titulo?>"><?php echo $titulo->nombre_titulo?></option>

                    <?php endforeach;?>

                </select>

                <p class="pTitulo">Libro:</p>
                <p>

                    <?php
                    
                        foreach($libros as $libro){

                            if($libro->id_libro == $articulo->id_libro){

                                echo 'Valor Actual: '.$libro->nombre_libro;

                            }

                        }
                    
                    ?>

                </p>

                <p class="pTitulo--Modificar">Modificar Libro:</p>
                <select name="idLibro" id="idLibro">

                    <?php foreach($libros as $libro): ?>

                        <option <?php if($libro->id_libro==$articulo->id_libro){echo "selected";}?> value="<?=$libro->id_libro?>"><?php echo $libro->nombre_libro?></option>

                    <?php endforeach;?>

                </select>

                <button type="submit" class="create">Modificar Libro</button>

            <?php endforeach; ?>

        </form>

        <form action="articuloController.php">

        <input type="text" name="accion" id="accion" value="" hidden>

        <button type="submit">Volver</button>

        </form>

    </section>

</main>


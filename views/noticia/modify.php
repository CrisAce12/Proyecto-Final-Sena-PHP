<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Noticia | Modificar</h1>

        <form action="noticiaController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($noticias as $noticia) : ?>

                <p class="pTitulo">ID:</p>
                <p><?=$noticia->id_noticia?></p>
                <input type="text" name="idNoticia" id="idNoticia" value="<?=$noticia->id_noticia?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p><?=$noticia->nombre_notica?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombreNoticia" id="nombreNoticia" value="<?=$noticia->nombre_notica?>">

                <p class="pTitulo">Texto: </p>
                <p><?=$noticia->texto_noticia?></p>
                <p class="pTitulo--Modificar">Modificar Texto:</p>
                <input type="text" name="textoNoticia" id="textoNoticia" value="<?=$noticia->texto_noticia?>">

                <p class="pTitulo">Fecha:</p>
                <p><?=$noticia->fecha?></p>
                <p class="pTitulo--Modificar">Modificar Fecha:</p>
                <input type="text" id="fecha" name="fecha" value="<?=$noticia->fecha?>">

                <p class="pTitulo">Estado:</p>
                <p><?=$noticia->estado?></p>
                <p class="pTitulo--Modificar">Modificar Estado:</p>
                <select name="estado" id="estado">

                    <option value="0">Inactivo</option>
                    <option value="1">Activo</option>

                </select>

                <p class="pTitulo">Artículo:</p>
                <p>

                    <?php
                    
                        foreach($articulos as $articulo){

                            if($articulo->id_articulo == $noticia->id_articulo){

                                echo $articulo->nombre_articulo;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Artículo:</p>
                <select name="idArticulo" id="idArticulo">

                    <?php foreach($articulos as $articulo): ?>

                        <option <?php if($articulo->id_articulo==$noticia->id_articulo){echo "selected";}?> value="<?=$articulo->id_articulo?>"><?php echo $articulo->nombre_articulo?></option>

                    <?php endforeach;?>

                </select>

                <p class="pTitulo">Trámite:</p>
                <p>

                    <?php
                    
                        foreach($tramites as $tramite){

                            if($tramite->id_tramite == $noticia->id_tramite){

                                echo $tramite->nombre_tramite;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Trámite:</p>
                <select name="idTramite" id="idTramite">

                    <?php foreach($tramites as $tramite): ?>

                        <option <?php if($tramite->id_tramite==$noticia->id_tramite){echo "selected";}?> value="<?=$tramite->id_tramite?>"><?php echo $tramite->nombre_tramite?></option>

                    <?php endforeach;?>

                </select>

                <button type="submit" class="create">Modificar Noticia</button>

            <?php endforeach; ?>

        </form>

        <a href="noticiaController.php">Volver</a>

    </section>

</main>


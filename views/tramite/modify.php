<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Trámite | Modificar Trámite</h1>

        <form action="tramiteController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($tramites as $tramite) : ?>

                <p class="pTitulo">ID Trámite:</p>
                <p>Valor Actual: <?=$tramite->id_tramite?></p>
                <input type="text" name="idTramite" id="idTramite" value="<?=$tramite->id_tramite?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p>Valor Actual: <?=$tramite->nombre_tramite?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombreTramite" id="nombreTramite" value="<?=$tramite->nombre_tramite?>">
                
                <p class="pTitulo">Texto Trámite:</p>
                <p>Valor Actual: <?=$tramite->texto_tramite?></p>
                <p class="pTitulo--Modificar">Modificar Trámite:</p>
                <textarea name="textoTramite" id="textoTramite" cols="200" rows="10"><?=$tramite->texto_tramite?></textarea>

                <p class="pTitulo">Requisitos:</p>
                <p>

                    <?php
                    
                        foreach($requisitos as $requisito){

                            if($requisito->id_requisito == $tramite->id_requisito){

                                echo 'Valor Actual: '.$requisito->nombre_requisito;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Requisito:</p>
                <select name="idRequisito" id="idRequisito">

                    <?php foreach($requisitos as $requisito): ?>

                        <option <?php if($requisito->id_requisito == $tramite->id_requisito){echo "selected";}?> value="<?=$requisito->id_requisito?>"><?php echo $requisito->nombre_requisito?></option>

                    <?php endforeach;?>

                </select>

                <p class="pTitulo">Articulos:</p>
                <p>

                    <?php
                    
                        foreach($articulos as $articulo){

                            if($articulo->id_articulo == $tramite->id_articulo){

                                echo 'Valor Actual: '.$articulo->nombre_articulo;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Artículo:</p>
                <select name="idArticulo" id="idArticulo">

                    <?php foreach($articulos as $articulo): ?>

                        <option <?php if($articulo->id_articulo==$tramite->id_articulo){echo "selected";}?> value="<?=$articulo->id_articulo?>"><?php echo $articulo->nombre_articulo?></option>

                    <?php endforeach;?>

                </select>            

                <button type="submit" class="create">Modificar Tramite</button>            

            <?php endforeach; ?>

        </form>

            <form action="tramiteController.php">

            <input type="text" name="accion" id="accion" value="" hidden>

            <button type="submit">Volver</button>

        </form>

    </section>

</main>


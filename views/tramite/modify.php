<head>

    <link rel="stylesheet" href="../tests/modifyTEST.css">

</head>

<main>

    <section>

        <h1>Trámite | Modificar Trámite</h1>

        <form action="tramiteController.php" method="POST" class="form1">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($tramites as $tramite) : ?>

                <div class="div--id">

                    <p class="pTitulo">ID Trámite:</p>
                    <p><?=$tramite->id_tramite?></p>
                    <input type="text" name="idTramite" id="idTramite" value="<?=$tramite->id_tramite?>" hidden>

                </div>

                <div class="div--nombre">

                    <p class="pTitulo">Nombre:</p>
                    <p><?=$tramite->nombre_tramite?></p>
                    <p class="pTitulo--Modificar">Modificar Nombre:</p>
                    <input type="text" name="nombreTramite" id="nombreTramite" value="<?=$tramite->nombre_tramite?>">

                </div>

                <div class="div--texto">

                    <p class="pTitulo">Texto Trámite:</p>
                    <p class="p--long"><?=$tramite->texto_tramite?></p>
                    <p class="pTitulo--Modificar">Modificar Trámite:</p>
                    <textarea name="textoTramite" id="textoTramite" cols="200" rows="20"><?=$tramite->texto_tramite?></textarea>

                </div>
                
                <div class="div--requisito">

                    <p class="pTitulo">Requisitos:</p>
                    <p>

                        <?php
                        
                            foreach($requisitos as $requisito){

                                if($requisito->id_requisito == $tramite->id_requisito){

                                    echo $requisito->nombre_requisito;

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

                </div>
                
                <div class="div--articulo">

                    <p class="pTitulo">Articulos:</p>
                    <p>

                        <?php
                        
                            foreach($articulos as $articulo){

                                if($articulo->id_articulo == $tramite->id_articulo){

                                    echo $articulo->nombre_articulo;

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

                </div>                        

                <button type="submit" class="create div--btn1">Modificar Tramite</button>            

            <?php endforeach; ?>

        </form>

        <a href="tramiteController.php">Volver</a>

    </section>

</main>


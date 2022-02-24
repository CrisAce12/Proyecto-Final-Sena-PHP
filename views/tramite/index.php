<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Trámites</title>

</head>

<main>

    <section>

        <h1>Trámites | Inicio</h1>

        <form action="tramiteController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Trámite</button>

        </form>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Texto</th>
                    <th>Requisitos</th>
                    <th>Articulo</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($tramites as $tramite): ?>

                <tr>

                    <td><?= $tramite->id_tramite ?></td>
                    <td><?= $tramite->nombre_tramite ?></td>
                    <td><?= $tramite->texto_tramite ?></td>
                    <td>

                        <?php
                            
                            foreach($requisitos as $requisito){

                                if($requisito->id_requisito == $tramite->id_requisito){

                                    echo $requisito->nombre_requisito;

                                }

                            }
                        
                        ?>

                    </td>
                    <td>

                        <?php
                            
                            foreach($articulos as $articulo){

                                if($articulo->id_articulo == $tramite->id_articulo){

                                    echo $articulo->nombre_articulo;

                                }

                            }
                        
                        ?>

                    </td>
                    <td>

                        <form action="tramiteController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idTramite" name="idTramite" value="<?=$tramite->id_tramite?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                        <form action="tramiteController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="modificar" hidden>

                            <input type="text" id="idTramite" name="idTramite" value="<?=$tramite->id_tramite?>" hidden>

                            <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                        <form action="tramiteController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idTramite" name="idTramite" value="<?=$tramite->id_tramite?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                        </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
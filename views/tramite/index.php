<head>

    <link rel="stylesheet" href="../styles/css/index.css">
    <title>Código De Policía Ya! | Trámite</title>

    <title>Trámites</title>

</head>

<main>

    <section>

        <h1>Trámites | Inicio</h1>

        <button><a href="tramiteController.php?accion=crear">+ Añadir Trámite</a></button>

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

                        <button class="detalles"><a href="tramiteController.php?accion=detalles&idTramite=<?=$tramite->id_tramite?>">Detalles</a></button>
                        

                    </td>
                    <td>

                        <button class="modificar"><a href="tramiteController.php?accion=modificar&idTramite=<?=$tramite->id_tramite?>">Modificar</a></button>
                        

                    </td>
                    <td>

                        <button class="eliminar"><a href="tramiteController.php?accion=eliminar&idTramite=<?=$tramite->id_tramite?>">Eliminar</a></button>
                        

                    </td>
                    
                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
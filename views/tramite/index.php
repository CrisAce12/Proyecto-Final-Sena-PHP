<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Trámites</title>

</head>

<main>

    <section>

        <h1>Trámites | Inicio</h1>

        <a href="tramiteController.php?accion=crear">+ Añadir Trámite</a>

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

                        <a href="tramiteController.php?accion=detalles&idTramite=<?=$tramite->id_tramite?>">Detalles</a>

                    </td>
                    <td>

                        <a href="tramiteController.php?accion=modificar&idTramite=<?=$tramite->id_tramite?>">Modificar</a>

                    </td>
                    <td>

                        <a href="tramiteController.php?accion=eliminar&idTramite=<?=$tramite->id_tramite?>">Eliminar</a>

                    </td>
                    
                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <section>

        <h1>Noticia | Inicio</h1>

        <button><a href="noticiaController.php?accion=crear">+ Añadir Noticia</a></button>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Texto</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Artículo</th>
                    <th>Trámite</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($noticias as $noticia): ?>

                <tr>

                    <td><?= $noticia->id_noticia ?></td>
                    <td><?= $noticia->nombre_notica ?></td>
                    <td><?= $noticia->texto_noticia ?></td>
                    <td><?= $noticia->fecha ?></td>
                    <td>
                        
                        <?php 

                            switch ($noticia->estado) {
                                                            
                                case '0':
                                    echo 'Inactivo';
                                    break;

                                case '1':
                                    echo 'Activo';
                                    break;
                                
                                default:
                                    echo 'Error';
                                    break;

                            }

                        ?>

                    </td>
                    <td>

                        <?php 
                        
                            foreach($articulos as $articulo){

                                if($articulo->id_articulo==$noticia->id_articulo){

                                    echo $articulo->nombre_articulo;

                                }

                            }

                        ?>

                    </td>
                    <td>

                        <?php 
                        
                            foreach($tramites as $tramite){

                                if($tramite->id_tramite==$noticia->id_tramite){

                                    echo $tramite->nombre_tramite;

                                }

                            }

                        ?>

                    </td>                    
                    <td>

                        <button class="detalles"><a href="noticiaController.php?accion=detalles&idNoticia=<?=$noticia->id_noticia?>">Detalles</a></button>
                        

                    </td>
                    <td>

                        <button class="modificar"><a href="noticiaController.php?accion=modificar&idNoticia=<?=$noticia->id_noticia?>">Modificar</a></button>
                        

                    </td>
                    <td>

                        <button class="eliminar"><a href="noticiaController.php?accion=eliminar&idNoticia=<?=$noticia->id_noticia?>">Eliminar</a></button>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
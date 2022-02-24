<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Noticias</title>

</head>

<main>

    <section>

        <h1>Noticia | Inicio</h1>

        <form action="noticiaController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Noticia</button>

        </form>

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

                        <form action="noticiaController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idNoticia" name="idNoticia" value="<?=$noticia->id_noticia?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                            <form action="noticiaController.php" method="POST">

                                <input type="text" id="accion" name="accion" value="modificar" hidden>

                                <input type="text" id="idNoticia" name="idNoticia" value="<?=$noticia->id_noticia?>" hidden>

                                <button type="submit" class="modificar">Modificar</button>

                            </form>

                    </td>
                    <td>

                        <form action="noticiaController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idNoticia" name="idNoticia" value="<?=$noticia->id_noticia?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                        </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
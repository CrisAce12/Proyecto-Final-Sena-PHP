<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Artículos</title>

</head>

<main>

    <section>

        <h1>Artículo | Inicio</h1>

        <form action="articuloController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Artículo</button>

        </form>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Texto</th>
                    <th>Estado</th>
                    <th>Título</th>
                    <th>Libro</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>                

            </thead>

            <tbody>

                <?php foreach($articulos as $articulo): ?>

                <tr>

                    <td><?= $articulo->id_articulo ?></td>
                    <td><?= $articulo->nombre_articulo ?></td>
                    <td><?= $articulo->texto_articulo ?></td>
                    <td>

                        <?php 
                        
                            switch ($articulo->estado) {
                                
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
                            
                            foreach($titulos as $titulo){

                                if($titulo->id_titulo==$titulo->id_titulo){

                                    echo $titulo->nombre_titulo;

                                }

                            }

                        ?>

                    </td>
                    <td>

                        <?php 
                        
                            foreach($libros as $libro){

                                if($libro->id_libro==$articulo->id_libro){

                                    echo $libro->nombre_libro;

                                }

                            }

                        ?>

                    </td>
                    <td>

                        <form action="articuloController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idArticulo" name="idArticulo" value="<?=$articulo->id_articulo?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                        <form action="articuloController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="modificar" hidden>

                            <input type="text" id="idArticulo" name="idArticulo" value="<?=$articulo->id_articulo?>" hidden>

                            <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                        <form action="articuloController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idArticulo" name="idArticulo" value="<?=$articulo->id_articulo?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                        </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
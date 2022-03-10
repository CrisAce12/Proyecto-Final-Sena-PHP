<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Código De Policía Ya! | Noticias</title>

</head>

<main>

    <section>

        <h1>Artículo | Inicio</h1>

        <button><a href="articuloController.php?accion=crear">+ Añadir Artículo</a></button>

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

                                if($articulo->id_titulo==$titulo->id_titulo){

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
                        
                        <button class="detalles"><a href="articuloController.php?accion=detalles&idArticulo=<?=$articulo->id_articulo?>">Detalles</a></button>
                        

                    </td>
                    <td>

                        <button class="modificar"><a href="articuloController.php?accion=modificar&idArticulo=<?=$articulo->id_articulo?>">Modificar</a></button>

                    </td>
                    <td>

                        <button class="eliminar"><a href="articuloController.php?accion=eliminar&idArticulo=<?=$articulo->id_articulo?>">Eliminar</a></button>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Títulos</title>

</head>

<main>

    <section>

        <h1>Título | Inicio</h1>

        <a href="tituloController.php?accion=crear">+ Añadir Título</a>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre Título</th>
                    <th>Nombre Libro</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($titulos as $titulo): ?>

                <tr>

                    <td><?= $titulo->id_titulo ?></td>
                    <td><?= $titulo->nombre_titulo ?></td>
                    <td>

                        <?php 
                        
                            foreach($libros as $libro){

                                if($libro->id_libro==$titulo->id_libro){

                                    echo $libro->nombre_libro;

                                }

                            }

                        ?>

                    </td>
                    <td>

                        <a href="tituloController.php?accion=detalles&idTitulo=<?=$titulo->id_titulo?>">Detalles</a>

                    </td>
                    <td>

                        <a href="tituloController.php?accion=modificar&idTitulo=<?=$titulo->id_titulo?>">Modificar</a>

                    </td>
                    <td>

                        <a href="tituloController.php?accion=eliminar&idTitulo=<?=$titulo->id_titulo?>">Eliminar</a>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
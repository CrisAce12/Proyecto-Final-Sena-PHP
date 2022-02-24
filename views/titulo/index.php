<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Títulos</title>

</head>

<main>

    <section>

        <h1>Título | Inicio</h1>

        <form action="tituloController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Título</button>

        </form>

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

                        <form action="tituloController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idTitulo" name="idTitulo" value="<?=$titulo->id_titulo?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                        <form action="tituloController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="modificar" hidden>

                        <input type="text" id="idTitulo" name="idTitulo" value="<?=$titulo->id_titulo?>" hidden>

                        <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                        <form action="tituloController.php" method="POST">

                        <input type="text" id="accion" name="accion" value="eliminar" hidden>

                        <input type="text" id="idTitulo" name="idTitulo" value="<?=$titulo->id_titulo?>" hidden>

                        <button type="submit" class="eliminar">Elminiar</button>

                        </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
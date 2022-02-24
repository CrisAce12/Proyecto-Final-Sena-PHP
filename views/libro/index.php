<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Libros</title>

</head>

<main>

    <section>

        <h1>Libro | Inicio</h1>

        <form action="libroController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Libro</button>

        </form>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($libros as $libro): ?>

                <tr>

                    <td><?= $libro->id_libro ?></td>
                    <td><?= $libro->nombre_libro ?></td>
                    <td>

                        <form action="libroController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idLibro" name="idLibro" value="<?=$libro->id_libro?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                        <form action="libroController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="modificar" hidden>

                            <input type="text" id="idLibro" name="idLibro" value="<?=$libro->id_libro?>" hidden>

                            <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                        <form action="libroController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idLibro" name="idLibro" value="<?=$libro->id_libro?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                        </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
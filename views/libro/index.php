<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Libros</title>

</head>

<main>

    <section>

        <h1>Libro | Inicio</h1>

        <a href="libroController.php?accion=crear">+ Añadir Libro</a>

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

                        <a href="libroController.php?accion=detalles&idLibro=<?=$libro->id_libro?>">Detalles</a>

                    </td>
                    <td>

                        <a href="libroController.php?accion=modificar&idLibro=<?=$libro->id_libro?>">Modificar</a>

                    </td>
                    <td>

                        <a href="libroController.php?accion=eliminar&idLibro=<?=$libro->id_libro?>">Eliminar</a>

                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>

<form action="libroController.php" method="POST">

    <input type="text" name="accion" value="invitado" required hidden>
    <input type="submit" value="Vista invitado">

</form>
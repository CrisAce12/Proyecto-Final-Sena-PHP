<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Libros</title>

</head>

<main>

    <section>

        <h1>Libro | Inicio</h1>

        <button><a href="libroController.php?accion=crear">+ Añadir Libro</a></button>

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

                        <button class="detalles"><a href="libroController.php?accion=detalles&idLibro=<?=$libro->id_libro?>">Detalles</a></button>

                    </td>
                    <td>

                        <button class="modificar"><a href="libroController.php?accion=modificar&idLibro=<?=$libro->id_libro?>">Modificar</a></button>

                    </td>
                    <td>
                        
                        <button class="eliminar"><a href="libroController.php?accion=eliminar&idLibro=<?=$libro->id_libro?>">Eliminar</a></button>
                        
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
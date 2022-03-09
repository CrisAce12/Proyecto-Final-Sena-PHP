<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Tipos de Usuarios</title>

</head>

<main>

    <section>

        <h1>Tipo de Usuario | Inicio</h1>

        <a href="tipoUsuarioController.php?accion=crear">+ Añadir Tipo de Usuario</a>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID Usuario</th>
                    <th>Nombre</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($tipos as $tipo): ?>

                <tr>

                    <td><?= $tipo->id_tusuario ?></td>
                    <td><?= $tipo->nombre_tusuario ?></td>
                    <td>

                        <a href="tipoUsuarioController.php?accion=detalles&idTipoUsuario=<?=$tipo->id_tusuario?>">Detalles</a>

                    </td>
                    <td>

                        <a href="tipoUsuarioController.php?accion=modificar&idTipoUsuario=<?=$tipo->id_tusuario?>">Modificar</a>

                    </td>
                    <td>

                        <a href="tipoUsuarioController.php?accion=eliminar&idTipoUsuario=<?=$tipo->id_tusuario?>">Eliminar</a>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
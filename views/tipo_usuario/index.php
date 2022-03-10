<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Código De Policía Ya! | Tipo de Usuario</title>

</head>

<main>

    <section>

        <h1>Tipo de Usuario | Inicio</h1>

        <button><a href="tipoUsuarioController.php?accion=crear">+ Añadir Tipo de Usuario</a></button>

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

                        <button class="detalles"><a href="tipoUsuarioController.php?accion=detalles&idTipoUsuario=<?=$tipo->id_tusuario?>">Detalles</a></button>
                        

                    </td>
                    <td>

                        <button class="modificar"><a href="tipoUsuarioController.php?accion=modificar&idTipoUsuario=<?=$tipo->id_tusuario?>">Modificar</a></button>
                        

                    </td>
                    <td>

                        <button class="eliminar"><a href="tipoUsuarioController.php?accion=eliminar&idTipoUsuario=<?=$tipo->id_tusuario?>">Eliminar</a></button>
                        
                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
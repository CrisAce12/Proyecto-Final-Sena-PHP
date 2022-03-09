<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Usuarios</title>

</head>

<main>

    <section>

        <h1>Usuario | Inicio</h1>

        <a href="usuarioController.php?accion=crear">+ Añadir Usuario</a>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Contraseña</th>
                    <th>Tipo de Usuario</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($usuarios as $usuario): ?>

                <tr>

                    <td><?= $usuario->id_usuario ?></td>
                    <td><?= $usuario->nombre ?></td>
                    <td><?= $usuario->email ?></td>
                    <td><?= $usuario->contraseña ?></td>
                    <td>

                        <?php 
                        
                            switch ($usuario->id_tusuario) {
                                
                                case '1':
                                    echo 'Administrador';
                                    break;

                                case '2':
                                    echo 'Usuario';
                                    break;
                                
                                default:
                                    echo 'Error';
                                    break;

                            }

                        ?>

                    </td>
                    <td>

                        <a href="usuarioController.php?accion=detalles&idUsuario=<?=$usuario->id_usuario?>">Detalles</a>

                    </td>
                    <td>

                        <a href="usuarioController.php?accion=modificar&idUsuario=<?=$usuario->id_usuario?>">Modificar</a>

                    </td>
                    <td>

                        <a href="usuarioController.php?accion=eliminar&idUsuario=<?=$usuario->id_usuario?>">Eliminar</a>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
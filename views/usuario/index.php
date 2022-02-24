<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Usuarios</title>

</head>

<main>

    <section>

        <h1>Usuario | Inicio</h1>

        <form action="usuarioController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Usuario</button>

        </form>

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

                        <form action="usuarioController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idUsuario" name="idUsuario" value="<?=$usuario->id_usuario?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                        <form action="usuarioController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="modificar" hidden>

                            <input type="text" id="idUsuario" name="idUsuario" value="<?=$usuario->id_usuario?>" hidden>

                            <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                        <form action="usuarioController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idUsuario" name="idUsuario" value="<?=$usuario->id_usuario?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                        </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
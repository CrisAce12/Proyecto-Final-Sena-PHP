<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Tipos de Usuarios</title>

</head>

<main>

    <section>

        <h1>Tipo de Usuario | Inicio</h1>

        <form action="tipoUsuarioController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Tipo Usuario</button>

        </form>

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

                        <form action="tipoUsuarioController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idTipoUsuario" name="idTipoUsuario" value="<?=$tipo->id_tusuario?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                            </form>

                        </form>

                    </td>
                    <td>

                        <form action="tipoUsuarioController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="modificar" hidden>

                            <input type="text" id="idTipoUsuario" name="idTipoUsuario" value="<?=$tipo->id_tusuario?>" hidden>

                            <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                            <form action="tipoUsuarioController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idTipoUsuario" name="idTipoUsuario" value="<?=$tipo->id_tusuario?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                            </form>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
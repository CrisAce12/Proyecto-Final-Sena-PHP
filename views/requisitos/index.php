<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Requisitos</title>

</head>

<main>

    <section>

        <h1>Requisitos | Inicio</h1>

        <form action="requisitosController.php" method="POST">

            <input type="text" name="accion" id="accion" value="crear" hidden>

            <button type="submit">+ Añadir Requisito</button>

        </form>

        <br>

        <table>

            <thead>

                <tr>

                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th></th>
                    <th></th>
                    <th></th>

                </tr>

            </thead>

            <tbody>

                <?php foreach($requisitos as $requisito): ?>

                <tr>

                    <td><?= $requisito->id_requisito ?></td>
                    <td><?= $requisito->nombre_requisito ?></td>
                    <td><?= $requisito->descripcion_requisito ?></td>
                    <td>

                        <form action="requisitosController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="detalles" hidden>

                            <input type="text" id="idRequisitos" name="idRequisitos" value="<?=$requisito->id_requisito?>" hidden>

                            <button type="submit" class="detalles">Detalles</button>

                        </form>

                    </td>
                    <td>

                        <form action="requisitosController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="modificar" hidden>

                            <input type="text" id="idRequisitos" name="idRequisitos" value="<?=$requisito->id_requisito?>" hidden>

                            <button type="submit" class="modificar">Modificar</button>

                        </form>

                    </td>
                    <td>

                        <form action="requisitosController.php" method="POST">

                            <input type="text" id="accion" name="accion" value="eliminar" hidden>

                            <input type="text" id="idRequisitos" name="idRequisitos" value="<?=$requisito->id_requisito?>" hidden>

                            <button type="submit" class="eliminar">Eliminar</button>

                        </form> 

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
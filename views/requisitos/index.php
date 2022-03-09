<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Requisitos</title>

</head>

<main>

    <section>

        <h1>Requisitos | Inicio</h1>

        <a href="requisitosController.php?accion=crear">+ Añadir Requisito</a>

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

                        <a href="requisitosController.php?accion=detalles&idRequisitos=<?=$requisito->id_requisito?>">Detalles</a>

                    </td>
                    <td>

                        <a href="requisitosController.php?accion=modificar&idRequisitos=<?=$requisito->id_requisito?>">Modificar</a>

                    </td>
                    <td>

                        <a href="requisitosController.php?accion=eliminar&idRequisitos=<?=$requisito->id_requisito?>">Eliminar</a>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
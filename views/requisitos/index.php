<head>

    <link rel="stylesheet" href="../styles/css/index.css">

    <title>Requisitos</title>

</head>

<main>

    <section>

        <h1>Requisitos | Inicio</h1>

        <button><a href="requisitosController.php?accion=crear">+ Añadir Requisito</a></button>

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

                        <button class="detalles"><a href="requisitosController.php?accion=detalles&idRequisitos=<?=$requisito->id_requisito?>">Detalles</a></button>
                        
                    </td>
                    <td>

                        <button class="modificar"><a href="requisitosController.php?accion=modificar&idRequisitos=<?=$requisito->id_requisito?>">Modificar</a></button>
                        
                    </td>
                    <td>

                        <button class="eliminar"><a href="requisitosController.php?accion=eliminar&idRequisitos=<?=$requisito->id_requisito?>">Eliminar</a></button>

                    </td>
                    

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </section>

</main>
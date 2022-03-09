<head>

    <link rel="stylesheet" href="../styles/css/create.css">

</head>

<main>

    <section>

        <h1>Usuario | Añadir Usuario</h1>

        <form action="usuarioController.php" method="POST">

            <input type="text" id="accion" name="accion" value="insertar" hidden>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>

            <label for="email">Correo:</label>
            <input type="email" name="email" id="email" required>

            <label for="contraseña">Contraseña:</label>
            <input type="password" name="contraseña" id="contraseña" required>

            <label for="tipo_usuario">Tipo de Usuario:</label>
            <select name="tipo_usuario" id="tipo_usuario">

                <?php foreach($roles as $rol): ?>

                    <option value="<?=$rol->id_tusuario?>"><?php echo $rol->nombre_tusuario?></option>

                <?php endforeach;?>

            </select>                   

            <button type="submit" class="create">Crear Usuario</button>

        </form>
        <br><br>
        
        <a href="usuarioController.php">Volver</a>

    </section>

</main>
<head>

    <link rel="stylesheet" href="../styles/css/modify.css">

</head>

<main>

    <section>

        <h1>Usuario | Usuario</h1>

        <form action="usuarioController.php" method="POST">

            <input type="text" name="accion" id="accion" value="actualizar" hidden>

            <?php foreach($usuarios as $usuario) : ?>

                <p class="pTitulo">ID Usuario:</p>
                <p><?=$usuario->id_usuario?></p>
                <input type="text" name="idUsuario" id="idUsuario" value="<?=$usuario->id_usuario?>" hidden>

                <p class="pTitulo">Nombre:</p>
                <p><?=$usuario->nombre?></p>
                <p class="pTitulo--Modificar">Modificar Nombre:</p>
                <input type="text" name="nombre" id="nombre" value="<?=$usuario->nombre?>">

                <p class="pTitulo">Correo Electrónico: </p>
                <p><?=$usuario->email?></p>
                <p class="pTitulo--Modificar">Modificar Correo:</p>
                <input type="text" name="email" id="email" value="<?=$usuario->email?>">

                <p class="pTitulo">Contraseña:</p>
                <p><?=$usuario->contraseña?></p>
                <input type="text" id="contraseña" name="contraseña" value="<?=$usuario->contraseña?>" hidden>

                <p class="pTitulo">Tipo de Usuario:</p>
                <p>

                    <?php
                    
                        foreach($roles as $rol){

                            if($rol->id_tusuario == $usuario->id_tusuario){

                                echo $rol->nombre_tusuario;

                            }

                        }
                    
                    ?>

                </p>
                <p class="pTitulo--Modificar">Modificar Tipo de Usuario:</p>
                <select name="tipo_usuario" id="tipo_usuario">

                    <?php foreach($roles as $rol): ?>

                        <option <?php if($rol->id_tusuario==$usuario->id_tusuario){echo "selected";}?> value="<?=$rol->id_tusuario?>"><?php echo $rol->nombre_tusuario?></option>

                    <?php endforeach;?>

                </select>            

                <button type="submit" class="create">Modificar Usuario</button>

            <?php endforeach; ?>

        </form>

        <a href="usuarioController.php">Volver</a>

    </section>

</main>


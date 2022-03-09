<head>

    <link rel="stylesheet" href="../styles/css/details.css">

</head>

<main>

    <h1>Usuario | Detalles Usuario</h1>

    <?php foreach($usuarios as $usuario) : ?>

    <h2>ID Usuario:</h2>
    <p><?=$usuario->id_usuario?></p>

    <h2>Nombre:</h2>
    <p><?=$usuario->nombre?></p>
    
    <h2>Correo Electrónico:</h2>
    <p><?=$usuario->email?></p>

    <h2>Contraseña:</h2>
    <p><?=$usuario->contraseña?></p>

    <h2>Tipo de Usuario:</h2>
    <p>

        <?php
        
            foreach($roles as $rol){

                if($rol->id_tusuario == $usuario->id_tusuario){

                    echo $rol->nombre_tusuario;

                }

            }
        
        ?>

    </p>

    <?php endforeach; ?>

    <a href="usuarioController.php">Volver</a>

</main>
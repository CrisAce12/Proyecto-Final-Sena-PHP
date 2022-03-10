<head>

    <link rel="stylesheet" href="../styles/css/register/register.css">

    <title>Código De Policía Ya! | Registro</title>

</head>

<main>

    <section class="section1 section1Register">

        <div class="registerImg"></div>

        <h1>Código de Policía Ya!</h1>

        <h2>Registro de Usuario</h2>

        <form class="registerForm" action="registerController.php" method="POST">

            <input type="text" name="accion" value="registrar" required hidden>

            <input type="text" name="nombreUsuario" required placeholder="Nombre de Usuario*">

            <input type="email" name="correoUsuario" required placeholder="Correo Electrónico*">

            <input type="email" name="correoUsuarioCONF" required placeholder="Confirme su Correo Electrónico*">

            <input type="password" name="contraseñaUsuario" required placeholder="Contraseña*">

            <input type="password" name="contraseñaUsuarioCONF" required placeholder="Confirme su Contraseña*">
            
            <div>
                
                <input type="checkbox" name="privacyPolicy" id="" required>
                <label for="privacyPolicy">Acepto las políticas de privacidad.</label>
            
            </div>

            <div>

                <input type="checkbox" name="updates" id="">
                <label for="updates">Acepto recibir notificaciones del Código de Policía a mi correo.</label>

            </div>

            <button type="submit">Registrarme</button>

        </form>

        <a href="landingController.php?accion=privacidad">Ver Política de Privacidad</a>

    </section>

</main>
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

            <input type="text" name="nombreUsuario" required placeholder="Nombre de Usuario*" minlength="3" maxlength="30">

            <input type="email" name="correoUsuario" required placeholder="Correo Electrónico*" minlength="3" maxlength="30">

            <input type="email" name="correoUsuarioCONF" required placeholder="Confirme su Correo Electrónico*" minlength="3" maxlength="30">

            <input type="password" name="contraseñaUsuario" required placeholder="Contraseña*" minlength="3" maxlength="15">

            <input type="password" name="contraseñaUsuarioCONF" required placeholder="Confirme su Contraseña*" minlength="3" maxlength="15">
            
            <div>
                
                <input type="checkbox" name="privacyPolicy" id="" required>
                <label for="privacyPolicy">Acepto las políticas de privacidad.</label>
            
            </div>

            <button type="submit">Registrarme</button>

        </form>

        <a href="https://www.privacypolicies.com/live/d39d2042-e68d-452e-bdb6-d3a9b6c9fa8b">Ver Política de Privacidad</a>

    </section>

</main>
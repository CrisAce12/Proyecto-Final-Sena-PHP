<main>

    <section>

        <h1>Código de Policía Ya!</h1>

        <h2>Registrarme</h2>

        <p>¿Ya tienes una cuenta?</p>

        <a href="loginController.php">Iniciar Sesión</a>

        <form action="registerController.php" method="POST">

            <input type="text" name="accion" value="registrar" required hidden>

            <label for="nombreUsuario">Ingrese su Nombre:</label>
            <input type="text" name="nombreUsuario" required>
            <br><br>   

            <label for="correoUsuario">Ingrese su Correo:</label>
            <input type="email" name="correoUsuario" required>
            <br><br>    

            <label for="correoUsuarioCONF">Confirme su Correo:</label>
            <input type="email" name="correoUsuarioCONF" required>
            <br><br>  

            <label for="contraseñaUsuario">Ingrese su Contraseña:</label>
            <input type="password" name="contraseñaUsuario" required>
            <br><br>  

            <label for="contraseñaUsuarioCONF">Confirme su Contraseña:</label>
            <input type="password" name="contraseñaUsuarioCONF" required>
            <br><br>  
            
            <input type="checkbox" name="privacyPolicy" id="" required>
            <label for="privacyPolicy">Acepto las políticas de privacidad.</label>
            <br><br>  

            <input type="checkbox" name="updates" id="">
            <label for="updates">Acepto recibir notificaciones del Código de Policía a mi correo.</label>
            <br><br>  

            <button type="submit">Registrarme</button>

        </form>

        <a href="landingController.php?accion=privacidad">Ver Política de Privacidad</a>

    </section>

</main>
<main>

    <section>

        <h1>Código de Policía Ya!</h1>

        <h2>Iniciar Sesión</h2>

        <p>¿No tienes una cuenta?</p>

        <a href="registerController.php">Registrarme</a>

        <form action="loginController.php" method="POST">

            <input type="text" name="accion" value="logear" required hidden>

            <label for="correoUsuario">Ingrese su Correo:</label>
            <input type="email" name="correoUsuario" required>
            <br><br>  

            <label for="contraseñaUsuario">Ingrese su Contraseña:</label>
            <input type="password" name="contraseñaUsuario" required>
            <br><br>   

            <button type="submit">Iniciar Sesión</button>

        </form>

    </section>

</main>
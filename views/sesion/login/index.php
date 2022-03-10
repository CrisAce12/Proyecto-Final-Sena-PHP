<head>

    <link rel="stylesheet" href="../styles/css/register/register.css">

    <title>Código De Policía Ya! | Inicio de Sesión</title>

</head>

<main>

    <section class="section1 section1Login">

        <div class="registerImg"></div>

        <h1>Código de Policía Ya!</h1>

        <h2>Iniciar Sesión</h2>

        <form class="loginForm" action="loginController.php" method="POST">

            <input type="text" name="accion" value="logear" required hidden>

            <input type="email" name="correoUsuario" required placeholder="Correo Electrónico*">

            <input type="password" name="contraseñaUsuario" required placeholder="Contraseña*">

            <button type="submit">Iniciar Sesión</button>

        </form>

    </section>

</main>
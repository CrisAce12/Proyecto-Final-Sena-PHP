<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de Policía Ya!</title>

    <link rel="stylesheet" href="../styles/css/correo.css">

</head>
<body>

    <main>

        <section class="section1">

            <h1>Envianos un Correo:</h1>

            <form action="correoController.php" method="POST">

                <input type="text" name="accion" value="enviarCorreo" hidden>

                <input type="text" name="nombre" placeholder="Escribe aquí tu Nombre*" required>
                <input type="text" name="asunto" placeholder="Escribe aquí tu Asunto*" required>
                <textarea name="mensaje" cols="30" rows="10" placeholder="Escribe aquí tu Mensaje*" required></textarea>

                <button type="submit">Enviar Correo</button>

            </form>

        </section>

    </main>    

</body>
</html>
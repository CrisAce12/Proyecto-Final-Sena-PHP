<main>

    <section>

        <h1>Libro | Inicio</h1>

        <br>

        <?php foreach($libros as $libro): ?>

            <form action="articuloController.php" method="POST">

                <input type="text" name="accion" value="index" required hidden>

                <h1><?= $libro->nombre_libro ?></h1>

            </form>

        <?php endforeach; ?>
        
    </section>

</main>
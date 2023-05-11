<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__text">Reestablece tu contraseña</p>

    <?php  
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form method="POST" action="/olvide" class="form">
        <div class="form__field">
            <label for="email" class="form__label">Correo</label>
            <input type="email" name="email" id="email" class="form__input" placeholder="Tu Correo">
        </div>

        <input type="submit" class="form__submit" value="Reestablecer">

        <div class="actions">
            <a href="/login" class="actions__link">¿Tienes cuenta? Entra!</a>
            <a href="/registro" class="actions__link">¿No tienes cuenta? Obten una!</a>
        </div>
    </form>
</main>
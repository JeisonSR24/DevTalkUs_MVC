<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__text">Inicia sesión en DevTalkUs</p>

    <?php  
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form class="form" method="POST" action="/login">
        <div class="form__field">
            <label for="email" class="form__label">Correo</label>
            <input type="email" name="email" id="email" class="form__input" placeholder="Tu Correo">
        </div>
        <div class="form__field">
            <label for="password" class="form__label">Contraseña</label>
            <input type="password" name="password" id="password" class="form__input" placeholder="Tu Contraseña">

        </div>

        <input type="submit" class="form__submit" value="Entrar">

        <div class="actions">
            <a href="/registro" class="actions__link">¿No tienes cuenta? Obten una!</a>
            <a href="/olvide" class="actions__link">¿Olvidaste tu contraseña? Recuperala</a>
        </div>
    </form>
</main>
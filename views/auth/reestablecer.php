<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__text">Coloca tu nueva contraseña</p>

    <?php  
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <?php if($token_valido) { ?>
    <form method="POST" class="form">
        <div class="form__field">
            <label for="password" class="form__label">Nueva Contraseña</label>
            <input type="password" name="password" id="password" class="form__input" placeholder="Tu Nueva Contraseña">
        </div>

        <input type="submit" class="form__submit" value="Reestablecer">

        <div class="actions">
            <a href="/login" class="actions__link">¿Tienes cuenta? Entra!</a>
            <a href="/registro" class="actions__link">¿No tienes cuenta? Obten una!</a>
        </div>
    </form>
    <?php } ?>
</main>
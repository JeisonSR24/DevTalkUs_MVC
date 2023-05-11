<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__text">Registrate en DevTalkUs</p>

    <?php  
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

    <form class="form" method="POST" action="/registro">
        <div class="form__field">
            <label for="name" class="form__label">Nombre</label>
            <input type="name" name="name" id="name" class="form__input" placeholder="Tu Nombre" value="<?php echo $usuario->name; ?>">
        </div>
        <div class="form__field">
            <label for="lastname" class="form__label">Apellido</label>
            <input type="lastname" name="lastname" id="lastname" class="form__input" placeholder="Tu Apellido" value="<?php echo $usuario->lastname; ?>">

        </div>
        <div class="form__field">
            <label for="email" class="form__label">Correo</label>
            <input type="email" name="email" id="email" class="form__input" placeholder="Tu Correo" value="<?php echo $usuario->email; ?>">
        </div>
        <div class="form__field">
            <label for="password" class="form__label">Contraseña</label>
            <input type="password" name="password" id="password" class="form__input" placeholder="Tu Contraseña">
        </div>
        <div class="form__field">
            <label for="password2" class="form__label">Confirmar Contraseña</label>
            <input type="password" name="password2" id="password2" class="form__input" placeholder="Tu Contraseña">
        </div>

        <input type="submit" class="form__submit" value="Crear Cuenta">

        <div class="actions">
            <a href="/login" class="actions__link">¿Tienes cuenta? Entra!</a>
            <a href="/olvide" class="actions__link">¿Olvidaste tu contraseña? Recuperala</a>
        </div>
    </form>
</main>
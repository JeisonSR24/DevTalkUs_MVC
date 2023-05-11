<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo; ?></h2>
    <p class="auth__text">
        Confirmar Cuenta
    </p>
    <?php  
        require_once __DIR__ . "/../templates/alertas.php";
    ?>

<?php if(isset($alertas['exito'])) { ?>
        <div class="actions--center">
            <a href="/login" class="actions__link">Iniciar Sesíon</a>
        </div>
        <?php } ?>

</main>
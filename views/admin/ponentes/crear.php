<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__container-button">
    <a href="/admin/ponentes" class="dashboard__button">
        <i class="fa-solid fa-circle-arrow-left"></i>
        Volver
    </a>
</div>

<div class="dashboard__form">
    <?php  
        require_once __DIR__ . "/../../templates/alertas.php";
    ?>

<form class="form" method="POST" action="/admin/ponentes/crear" enctype="multipart/form-data">

        <?php include_once __DIR__ . "/formulario.php" ?>
        <input type="submit" class="dashboard__button" value="Registrar Ponente">
    </form>
</div>
<div class="evento swiper-slide">
    <p class="evento__hora"><?php echo $evento->hora->hour; ?></p>

    <div class="evento__info">
        <h4 class="evento__nombre"><?php echo $evento->nombre; ?></h4>

    
            <p class="evento__introduccion"><?php echo $evento->descripcion; ?></p>


        <div class="evento__autor-info">
        <picture>
            <source srcset="/img/speakers/<?php echo $evento->ponente->image; ?>.webp">
            <source srcset="/img/speakers/<?php echo $evento->ponente->image; ?>.png">
            <img class="evento__imagen-autor" loading="lazy" width="200" height="300" src="/img/speakers/<?php echo $evento->ponente->image; ?>.png" alt="Ponente">
        </picture>

        <p class="evento__autor-nombre">
            <?php echo $evento->ponente->name . " " . $evento->ponente->lastname; ?>
        </p>
        </div>
    </div>
</div>
<?php 
    include_once __DIR__ . '/conferencias.php';
?>

<section class="resumen">
    <div class="resumen__grid">
        <div class="resumen__bloque" data-aos="fade-right">
            <p class="resumen__texto resumen__texto--numero"><?php echo $ponentes_total; ?></p>
            <p class="resumen__texto">Ponentes</p>
        </div>

        <div class="resumen__bloque" data-aos="fade-left">
            <p class="resumen__texto resumen__texto--numero"><?php echo $conferencias; ?></p>
            <p class="resumen__texto">Conferencias</p>
        </div>

        <div class="resumen__bloque" data-aos="fade-right">
            <p class="resumen__texto resumen__texto--numero"><?php echo $workshops; ?></p>
            <p class="resumen__texto">Workshops</p>
        </div>
        <div class="resumen__bloque" data-aos="fade-left">
            <p class="resumen__texto resumen__texto--numero">500</p>
            <p class="resumen__texto">Asistentes</p>
        </div>

    </div>

</section>

<section class="speakers">
    <h2 class="speakers__heading">Ponentes</h2>
    <p class="speakers__descripcion">Conoce a nuestros expertos de DevTalkUs</p>

    <div class="speakers__grid">
    <?php foreach($ponentes as $ponente) { ?>
        <div class="speaker">
            <picture>
                <source srcset="/img/speakers/<?php echo $ponente->image; ?>.webp">
                <source srcset="/img/speakers/<?php echo $ponente->image; ?>.png">
                <img class="speaker__imagen" loading="lazy" width="200" height="300" src="/img/speakers/<?php echo $ponente->image; ?>.png" alt="Ponente">
            </picture>

            <div class="speaker__informacion">
                <h4 class="speaker__nombre">
                    <?php echo $ponente->name . " " . $ponente->lastname; ?>
                </h4>

                <p class="speaker__ubicacion">
                <?php echo $ponente->city . ", " . $ponente->country; ?>
                </p>

                <nav class="speaker-sociales">
                    <?php $redes = json_decode($ponente->socials); ?>

                    <?php if(!empty($redes->facebook)) { ?>
                        <a class="speaker-sociales__link" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->facebook; ?>">
                        <span class="speaker-sociales__hidden">Facebook</span>
                        </a> 
                    <?php } ?>

                    <?php if(!empty($redes->twitter)) { ?>
                        <a class="speaker-sociales__link" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->twitter; ?>">
                            <span class="speaker-sociales__hidden">Twitter</span>
                        </a> 
                    <?php } ?>

                    <?php if(!empty($redes->youtube)) { ?>
                        <a class="speaker-sociales__link" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->youtube; ?>">
                            <span class="speaker-sociales__hidden">YouTube</span>
                        </a> 
                    <?php } ?>

                    <?php if(!empty($redes->instagram)) { ?>
                        <a class="speaker-sociales__link" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->instagram; ?>">
                            <span class="speaker-sociales__hidden">Instagram</span>
                        </a> 
                    <?php } ?>

                    <?php if(!empty($redes->github)) { ?>
                        <a class="speaker-sociales__link" rel="noopener noreferrer" target="_blank" href="<?php echo $redes->github; ?>">
                            <span class="speaker-sociales__hidden">Github</span>
                        </a>
                    <?php } ?>

                </nav>

                <ul class="speaker__listado-skills">
                    <?php $tags = explode(",", $ponente->tags); foreach($tags as $tag) { ?>
                        <li class="speaker__skill"><?php echo $tag; ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    <?php } ?>
    </div>

</section>

<div class="mapa" id="mapa">
</div>

<section class="boletos">
    <h2 class="boletos__heading">Boletos & Precios</h2>
    <p class="boletos__descripcion">Los precios de los diferentes boletos</p>

    <div class="boletos__grid">
        <div class="boleto boleto--presencial">
            <h4 class="boleto__logo">&#60;DevTalkUs /></h4>
            <p class="boleto__plan">Presencial</p>
            <p class="boleto__precio">$99</p>
        </div>

        <div class="boleto boleto--virtual">
            <h4 class="boleto__logo">&#60;DevTalkUs /></h4>
            <p class="boleto__plan">Virtual</p>
            <p class="boleto__precio">$49</p>
        </div>

        <div class="boleto boleto--gratis">
            <h4 class="boleto__logo">&#60;DevTalkUs /></h4>
            <p class="boleto__plan">Gratis</p>
            <p class="boleto__precio">$0</p>
        </div>

    </div>

    <div class="boleto__link-container">
        <a href="/paquetes" class="boleto__link">Ver Paquetes</a>
    </div>
</section>
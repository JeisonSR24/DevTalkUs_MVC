<main class="registro">
    <h2 class="registro__heading"><?php echo $titulo; ?></h2>
    <p class="registro__descripcion">Tu boleto</p>

    <div class="boleto-virtual">

        <div class="boleto boleto--<?php echo strtolower($registro->paquete->nombre); ?> boleto--acceso">
            <div class="boleto__contenido">
                <h4 class="boleto__logo">&#60;DevTalkUs /></h4>
                <p class="boleto__plan"><?php echo $registro->paquete->nombre; ?></p>
                <p class="boleto__nombre"><?php echo $registro->usuario->name . " " . $registro->usuario->lastname; ?></p>
            </div>

            <p class="boleto__codigo"><?php echo '#' . $registro->token; ?></p>
        </div>
    </div>
</main>
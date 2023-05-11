
<h2 class="pagina__heading"><?php echo $titulo; ?></h2>
<p class="pagina__descripcion">Elige hasta 5 eventos</p>

<div class="eventos-registro">
    <main class="eventos-registro__listado">
        <h3 class="eventos-registro__heading--conferencias">&lt;Conferencias /></h3>
        <p class="eventos-registro__fecha">Sabado 4 De Mayo</p>

        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_s'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
        <p class="eventos-registro__fecha">Domingo 5 De Mayo</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['conferencias_d'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>

        <h3 class="eventos-registro__heading--workshops">&lt;Workshops /></h3>
        <p class="eventos-registro__fecha">Sabado 4 De Mayo</p>

        <div class="eventos-registro__grid eventos--workshops">
            <?php foreach($eventos['workshops_s'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
        <p class="eventos-registro__fecha">Domingo 5 De Mayo</p>
        <div class="eventos-registro__grid">
            <?php foreach($eventos['workshops_d'] as $evento) { ?>
                <?php include __DIR__ . '/evento.php'; ?>
            <?php } ?>
        </div>
    </main>
    <aside class="registro-lista">
            <h2 class="registro-lista__heading">Tu Registro</h2>

            <div class="registro-lista__resumen" id="registro-resumen">
            </div>

            <div class="registro-lista__regalo">
                <label for="regalo" class="registro-lista__label">Selecciona un regalo</label>
                <select id="regalo" class="registro-lista__select">
                    <option value="">-- Selecciona una opcion --</option>
                    <?php foreach($regalos as $regalo) {?>
                        <option value="<?php echo $regalo->id; ?>"><?php echo $regalo->nombre; ?></option>
                    <?php } ?>
                </select>
            </div>

            <form id="registro" class="form">
                <div class="form__field">
                    <input type="submit" class="form__submit form__submit--full" value="Registrarme">
                </div>
            </form>
    </aside>
</div>
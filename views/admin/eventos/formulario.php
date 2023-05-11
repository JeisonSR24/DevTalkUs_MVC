<fieldset class="form__fieldset">
    <legend class="form__legend">Informacion Personal</legend>

    <div class="form__field">
        <label for="nombre" class="form__label">Nombre Evento</label>
        <input type="text" class="form__input" id="nombre" name="nombre" placeholder="Nombre Evento" value="<?php echo $evento->nombre; ?>">
    </div>

    

    <div class="form__field">
        <label for="descripcion" class="form__label">Descripcion Evento</label>
        <textarea class="form__input" id="descripcion" name="descripcion" placeholder="Descripcion Evento" rows="8" style="resize: none;"><?php echo $evento->descripcion; ?></textarea>
    </div>

    <div class="form__field">
        <label for="categoria" class="form__label">Tipo de Evento</label>
        <select class="form__select" id="categoria" name="categoria_id">
            <option value="">-- Selecionar --</option>
            <?php foreach($categorias as $categoria) { ?>
                <option <?php echo ($evento->categoria_id === $categoria->id) ? 'selected' : "" ?> value="<?php echo $categoria->id; ?>"><?php echo $categoria->name; ?></option>
            <?php } ?>
        </select>
    </div>
    
    <div class="form__field">
        <label for="dia" class="form__label">Selecciona el dia</label>

            <div class="form__radio">
                <?php foreach($dias as $dia) { ?>
                    <div>
                        <label for="<?php echo strtolower($dia->name); ?>"><?php echo $dia->name; ?></label>
                        <input type="radio" name="dia" id="<?php echo strtolower($dia->name);?>" value="<?php echo $dia->id; ?>" <?php echo ($evento->dia_id === $dia->id) ? 'checked': ""; ?>/>
                    </div>
                <?php } ?>
            </div>
            <input type="hidden" name="dia_id" value="<?php echo $evento->dia_id; ?>">
    </div>

    <div id="horas" class="form__field">
        <label for="horas" class="form__label">Seleccionar Hora</label>

        <ul class="hours">
            <?php foreach($horas as $hora) { ?>
                <li data-hora-id="<?php echo $hora->id; ?>" class="hours__hour hours__hour--deshabilitada"><?php echo $hora->hour; ?></li>
            <?php } ?>
        </ul>

        <input type="hidden" name="hora_id" value="<?php echo $evento->hora_id; ?>">
    </div>

</fieldset>

<fieldset class="form__fieldset">
    <legend class="form__legend">Informacion Extra</legend>

    <div class="form__field">
        <label for="ponentes" class="form__label">Ponente</label>
        <input type="text" id="ponentes" placeholder="Ponentes" class="form__input">
        <ul id="listado-ponentes" class="listado-ponentes"></ul>

        <input type="hidden" name="ponente_id" value="<?php echo $evento->ponente_id; ?>">
    </div>

    <div class="form__field">
        <label for="disponibles" class="form__label">Lugares disponibles</label>
        <input type="number" id="disponibles" name="disponibles" placeholder="20" class="form__input" min="1" value="<?php echo $evento->disponibles; ?>">
    </div>
</fieldset>
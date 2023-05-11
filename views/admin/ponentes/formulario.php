<fieldset class="form__fieldset">
    <legend class="form__legend">Informacion Personal</legend>

    <div class="form__field">
        <label for="name" class="form__label">Nombre</label>
        <input type="text" class="form__input" id="name" name="name" placeholder="Nombre Ponente" value="<?php echo $ponente->name ?? ""; ?>">
    </div>
    <div class="form__field">
        <label for="lastname" class="form__label">Apellido</label>
        <input type="text" class="form__input" id="lastname" name="lastname" placeholder="Apellido Ponente" value="<?php echo $ponente->lastname ?? ""; ?>">
    </div>
    <div class="form__field">
        <label for="city" class="form__label">Ciudad</label>
        <input type="text" class="form__input" id="city" name="city" placeholder="Ciudad Ponente" value="<?php echo $ponente->city ?? ""; ?>">
    </div>
    <div class="form__field">
        <label for="country" class="form__label">Pais</label>
        <input type="text" class="form__input" id="country" name="country" placeholder="Pais Ponente" value="<?php echo $ponente->country ?? ""; ?>">
    </div>
    <div class="form__field">
        <label for="image" class="form__label">Imagen</label>
        <input type="file" class="form__input form__input--file" id="image" name="image">
    </div>

    <?php if(isset($ponente->actual_image)) { ?>
        <p class="form__text">Imagen Actual</p>
        <div class="form__image">
            <picture>
                <source srcset="<?php echo $_ENV["HOST"] . "/img/speakers/" . $ponente->image; ?>.webp">
                <source srcset="<?php echo $_ENV["HOST"] . "/img/speakers/" . $ponente->image; ?>.png">
                <img src="<?php echo $_ENV["HOST"] . "/img/speakers/" . $ponente->image; ?>.png" alt="Ponente">

            </picture>
        </div>
    <?php } ?>

</fieldset>

<fieldset class="form__fieldset">
    <legend class="form__legend">Informacion Extra</legend>

    <div class="form__field">
        <label for="tags_input" class="form__label">Areas de Experiencia (separas por coma)</label>
        <input type="text" class="form__input" id="tags_input" name="tags_input" placeholder="Ej. Javascript, python, CSS">

        <div id="tags" class="form__list"></div>
            <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? ""; ?>">
    </div>

</fieldset>

<fieldset class="form__fieldset">
    <legend class="form__legend">Redes Sociales</legend>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input type="text" class="form__input--socials" name="socials[facebook]" placeholder="Facebook" value="<?php echo $socials->facebook ?? ""; ?>">
        </div>
    </div>


    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input type="text" class="form__input--socials" name="socials[twitter]" placeholder="Twitter" value="<?php echo $socials->twitter ?? ""; ?>">
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input type="text" class="form__input--socials" name="socials[youtube]" placeholder="YouTube" value="<?php echo $socials->youtube ?? ""; ?>">
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input type="text" class="form__input--socials" name="socials[instagram]" placeholder="Instagram" value="<?php echo $socials->instagram ?? ""; ?>">
        </div>
    </div>

    <div class="form__field">
        <div class="form__container-icon">
            <div class="form__icon">
                <i class="fa-brands fa-github"></i>
            </div>
            <input type="text" class="form__input--socials" name="socials[github]" placeholder="GitHub" value="<?php echo $socials->github ?? ""; ?>">
        </div>
    </div>

</fieldset>
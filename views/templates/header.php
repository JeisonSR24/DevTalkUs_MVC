<header class="header">
    <div class="header__container">
        <nav class="header__nav">

        <?php if(is_auth()) { ?>
            <a href="<?php echo is_admin() ? '/admin/dashboard' : 'finalizar-registro'; ?>" class="header__link">Dashboard</a>
            <form method="POST" action="/logout" class="header__form">
                <input type="submit" value="Cerrar Sesión" class="header__submit">
            </form>
        <?php } else { ?>
            <a href="/registro" class="header__link">Registro</a>
            <a href="/login" class="header__link">Iniciar Sesión</a>
        <?php } ?>
        </nav>
    

        <div class="header__content">
            <a href="/">
                <h1 class="header__logo">&#60;DevTalkUs/></h1>
            </a>

            <p class="header__text">Octubre 5-6 - 2023</p>
            <p class="header__text header__text--modality">En línea - Presencial</p>

            <a href="/registro" class="header__button">Comprar Pase</a>
        </div>
    </div>
</header>
<div class="bar">
    <div class="bar__content">
    <a href="/">
       <h2 class="bar__logo">
            &#60;DevTalkUs/>
       </h2> 
    </a>
    <nav class="nav">
        <a href="/devtalkus" class="nav__link <?php echo pagina_actual('/devtalkus') ? 'nav__link--actual' : ""; ?>">Evento</a>
        <a href="/paquetes" class="nav__link <?php echo pagina_actual('/paquetes') ? 'nav__link--actual' : ""; ?>">Paquetes</a>
        <a href="/workshops-conferencias" class="nav__link <?php echo pagina_actual('/workshops-conferencias') ? 'nav__link--actual' : ""; ?>">workshops / Conferencias</a>
        <a href="/registro" class="nav__link <?php echo pagina_actual('/registro') ? 'nav__link--actual' : ""; ?>">Comprar Pase</a>
    </nav>
    </div>
</div>
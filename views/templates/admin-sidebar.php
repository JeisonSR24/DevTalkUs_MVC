<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">
        <a href="/admin/dashboard" class="dashboard__link <?php echo pagina_actual('/dashboard') ? 'dashboard__link--actual' : ''; ?>">
            <i class="fa-solid fa-house dashboard__icon"></i>
            <span class="dashboard__text-menu">
                Inicio
            </span>
        </a>

        <a href="/admin/ponentes" class="dashboard__link <?php echo pagina_actual('/ponentes') ? 'dashboard__link--actual' : ''; ?>">
            <i class="fa-solid fa-microphone dashboard__icon"></i>
            <span class="dashboard__text-menu">
                Ponentes
            </span>
        </a>
        <a href="/admin/eventos" class="dashboard__link <?php echo pagina_actual('/eventos') ? 'dashboard__link--actual' : ''; ?>">
            <i class="fa-solid fa-calendar dashboard__icon"></i>
            <span class="dashboard__text-menu">
                Eventos
            </span>
        </a>
        <a href="/admin/registrados" class="dashboard__link <?php echo pagina_actual('/registrados') ? 'dashboard__link--actual' : ''; ?>">
            <i class="fa-solid fa-users dashboard__icon"></i>
            <span class="dashboard__text-menu">
                Registrados
            </span>
        </a>
        <a href="/admin/regalos" class="dashboard__link <?php echo pagina_actual('/regalos') ? 'dashboard__link--actual' : ''; ?>">
            <i class="fa-solid fa-gift dashboard__icon"></i>
            <span class="dashboard__text-menu">
                Regalos
            </span>
        </a>
        </a>
    </nav>
</aside>
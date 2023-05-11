<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__container-button">
    <a href="/admin/eventos/crear" class="dashboard__button">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Evento
    </a>
</div>

<div class="dashboard__container">
    <?php if(!empty($eventos)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Evento</th>
                    <th scope="col" class="table__th">Tipo</th>
                    <th scope="col" class="table__th">Dia y hora</th>
                    <th scope="col" class="table__th">Ponente</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($eventos as $evento) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $evento->nombre ?>
                        </td>
                        <td class="table__td">
                            <?php echo $evento->categoria->name ?>
                        </td>
                        <td class="table__td">
                            <?php echo $evento->dia->name . ", " . $evento->hora->hour?>
                        </td>
                        <td class="table__td">
                            <?php echo $evento->ponente->name . ", " . $evento->ponente->lastname?>
                        </td>

                        <td class="table__td--actions">
                            <a class="table__action table__action--edit" href="/admin/eventos/editar?id=<?php echo $evento->id; ?>">
                            <i class="fa-solid fa-pencil"></i>
                            Editar
                            </a>

                            <form class="table__form" action="/admin/eventos/eliminar" method="POST">
                                <input type="hidden" name="id" value="<?php echo $evento->id; ?>">
                                <button class="table__action table__action--delete" type="submit">
                                    <i class="fa-solid fa-circle-xmark"></i>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No Hay Eventos</p>
    <?php } ?>
</div>

<?php echo $paginacion; ?>
<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__container-button">
    <a href="/admin/ponentes/crear" class="dashboard__button">
        <i class="fa-solid fa-circle-plus"></i>
        Añadir Ponente
    </a>
</div>

<div class="dashboard__container">
    <?php if(!empty($ponentes)) { ?>
        <table class="table">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Ubiacion</th>
                    <th scope="col" class="table__th"></th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($ponentes as $ponente) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $ponente->name . " " . $ponente->lastname; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $ponente->city . ", " . $ponente->country; ?>
                        </td>

                        <td class="table__td--actions">
                            <a class="table__action table__action--edit" href="/admin/ponentes/editar?id=<?php echo $ponente->id; ?>">
                            <i class="fa-solid fa-user-pen"></i>
                            Editar
                            </a>

                            <form class="table__form" action="/admin/ponentes/eliminar" method="POST">
                                <input type="hidden" name="id" value="<?php echo $ponente->id; ?>">
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
        <p class="text-center">No Hay Ponentes</p>
    <?php } ?>
</div>

<?php echo $paginacion; ?>
<div class="contact_section layout_padding">
    <h1 class="contact_taital" Align="center">Listado de Clientes</h1>

    <?php if ($clientes) : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CIUDAD</th>
                    <th>TELÉFONO</th>
                    <th>CEDULA</th>
                    <th>E-MAIL</th>
                    <th>LATITUD</th>
                    <th>LONGITUD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody Align="center">
                <?php foreach ($clientes as $filaTempo) : ?>
                    <tr>
                        <td>
                            <?php echo $filaTempo->id_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->nom_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->ape_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->ciu_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->tele_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->cedu_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->mail_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->lati_cli; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->longi_cli; ?>
                        </td>
                        <td class="text-center">
                            <a href="#" title="Editar Cliente">
                                <i class=""><img src="<?php echo base_url(); ?>/assets/images/edit.png" alt=""></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo site_url(); ?>/Clientes/eliminaCli/<?php echo $filaTempo->id_cli; ?>" title="Eliminar Cliente" style="color:red;">
                                <i class=""><img src="<?php echo base_url(); ?>/assets/images/trash.png" alt=""></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <h1 Align="center">No posee Clientes ._.</h1>
    <?php endif; ?>
</div>
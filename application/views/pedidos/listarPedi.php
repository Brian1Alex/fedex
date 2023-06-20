<div class="contact_section layout_padding">
    <h1 class="contact_taital" Align="center">Listado de Clientes</h1>

    <?php if ($pedidos) : ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>NOMBRE DEL DESTINATARIO</th>
                    <th>LATITUD</th>
                    <th>LONGITUD</th>
                </tr>
            </thead>
            <tbody Align="center">
                <?php foreach ($pedidos as $filaTempo) : ?>
                    <tr>
                        <td>
                            <?php echo $filaTempo->id_ped; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->nom_ped; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->desc_ped; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->nom_des_ped; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->lati_ped; ?>
                        </td>
                        <td>
                            <?php echo $filaTempo->longi_ped; ?>
                        </td>
                        <td class="text-center">
                            <a href="#" title="Editar Pedido">
                                <i class=""><img src="<?php echo base_url(); ?>/assets/images/edit.png" alt=""></i>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="<?php echo site_url(); ?>/Sucursales/eliminaSucu/<?php echo $filaTempo->id_suc; ?>" title="Eliminar Cliente" style="color:red;">
                                <i class=""><img src="<?php echo base_url(); ?>/assets/images/trash.png" alt=""></i>
                            </a>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <h1 Align="center">No se encuentran pedidos ._.</h1>
    <?php endif; ?>
</div>
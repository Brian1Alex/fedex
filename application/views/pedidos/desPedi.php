<div class="contact_section layout_padding">
    <h1 class="contact_taital" Align="center">Localizaciones de los pedidos </h1>
    <p class="contact_text" Align="center">Referencia de las ubicaciones y destinatarios registrados</p>
    <div class="container">
        <div class="row">
            <div class="col md-12">
                <div id="mapaCan" style="height:500px; width:100%; border:2px solid black;"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function initMap() {
            var centro = new google.maps.LatLng(-1.3804393775871402, -78.77341064151292);
            var mapaCan = new google.maps.Map(
                document.getElementById('mapaCan'), {
                    center: centro,
                    zoom: 6.5,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
            );

            <?php if ($desPedi) : ?>
                <?php foreach ($desPedi as $lugarProvi) : ?>
                    var coordeTemporal = new google.maps.LatLng(<?php echo $lugarProvi->lati_ped; ?>, <?php echo $lugarProvi->longi_ped; ?>);
                    var marcador = new google.maps.Marker({
                        position: coordeTemporal,
                        title: "<?php echo $lugarProvi->nom_ped; ?>",
                        map: mapaCan,
                        icon: "<?php echo base_url(); ?>/assets/images/iconFD.png"
                    });
                <?php endforeach; ?>
            <?php endif; ?>

        }
    </script>
</div>
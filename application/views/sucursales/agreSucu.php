<div class="contact_section layout_padding">
    <h1 class="contact_taital">NUEVA SUCURSAL</h1>
    <form class="" id="frm_nueva_sucursal" action="<?php echo site_url(); ?>/Sucursales/guardaSucu" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nombre: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="text" placeholder="Ingresar nombre del cliente" class="form-control" required name="nom_suc" value="">
                </div>
                <div class="col-md-4">
                    <label for=""> Telefono: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="number" placeholder="Ingresar el telefono del Cliente" class="form-control"  required min="99999999" name="tele_suc" value="">
                </div>
                <div class="col-md-4">
                    <label for="">Ciudad: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <select class="form-control" required name="ciu_suc" id="">
                        <option value=""></option>
                        <option value="Quito">Quito</option>
                        <option value="Guayaquil">Guayaquil</option>
                        <option value="Cuenca">Cuenca</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for=""> Latitud: </span></label>
                    <br>
                    <input type="text" readonly placeholder="Latitud del cliente" id="lati_suc" class="form-control" name="lati_suc" value="">
                </div>
                <div class="col-md-6">
                    <label for=""> Longitud: </span></label>
                    <br>
                    <input type="text" readonly placeholder="Longitud del cliente" id="longi_suc" class="form-control" name="longi_suc" value="">
                    <br>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12" Align="center">
                            <div id="mapaUbi" style="height: 450px; width:100%; border:2px solid black;" Align="center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>
        <div class="col-md-12 text-center">
            <button type="submit" name="button" class="btn btn-primary">
                GUARDAR
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/clientes/listarClie" class="btn btn-danger">CANCELAR</a>
        </div>

    </form>

    <script type="text/javascript">
        $("#frm_nueva_sucursal").validate({
            rules: {
                nom_suc: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                },
                tele_suc: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true,
                },
                ciu_suc: {
                    required: true,
                    minlength: 5,
                    maxlength: 250,
                    letras: true,
                },
            },
            messages: {
                nom_suc: {
                    required: "Por favor ingresar un nombre",
                    minlength: "El apellido debe tener al menos 3 caracteres",
                    maxlength: "Nombre incorrecto",

                },
                tele_suc: {
                    required: "Por favor ingresa un número de telefono",
                    minlength: "Cédula incorrecta, ingrese 10 digitos",
                    maxlength: "Cédula incorrecta, ingrese 10 digitos",
                    digits: "Este campo solo acepta números",
                    number: "Este campo solo acepta números",
                },
                ciu_suc: {
                    required: "Por favor ingresar la ciudad",
                    minlength: "El apellido debe tener al menos 3 caracteres",
                    maxlength: "Nombre incorrecto",
                }
            }
        });
    </script>

    <script type="text/javascript">
        function initMap() {
            var cen = new google.maps.LatLng(-1.3804393775871402, -78.77341064151292);
            var mapa1 = new google.maps.Map(
                document.getElementById('mapaUbi'), {
                    center: cen,
                    zoom: 7,
                    mapTypeId: google.maps.MapTypeId.HYBRYD
                }
            );

            var marcador = new google.maps.Marker({
                position: cen,
                map: mapa1,
                title: "Seleccione la direccion",
                icon: "<?php echo base_url(); ?>/assets/images/dragg.png",
                draggable: true

            });
            google.maps.event.addListener(marcador, 'dragend', function() {
                //alert("Se acabo de arrastrar")
                document.getElementById('lati_suc').value = this.getPosition().lat();
                document.getElementById('longi_suc').value = this.getPosition().lng();
            });
        }
    </script>
</div>
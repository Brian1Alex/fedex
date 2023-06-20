<div class="contact_section layout_padding">
    <h1 class="contact_taital">NUEVO CLIENTE</h1>
    <form class="" id="frm_nuevo_cliente" action="<?php echo site_url(); ?>/Clientes/guardaCli" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Nombre: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="text" placeholder="Ingresar nombre del cliente" class="form-control" name="nom_cli" value="">
                </div>
                <div class="col-md-4">
                    <label for=""> Apellido: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="text" placeholder="Ingresar el Apellido del cliente" class="form-control" name="ape_cli" value="">
                </div>
                <div class="col-md-4">
                    <label for="">Ciudad: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="text" placeholder="Ingresar la ciudad del cliente" class="form-control" name="ciu_cli" value="">
                </div>
                <div class="col-md-4">
                    <label for=""> Telefono: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="number" placeholder="Ingresar el telefono del Cliente" class="form-control" required min="99999999" name="tele_cli" value="">
                </div>
                <div class="col-md-4">
                    <label for=""> Cédula: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="number" placeholder="Ingresar la cedula del Cliente" class="form-control" required min="99999999" name="cedu_cli" value="">
                </div>
                <div class="col-md-4">
                    <label for=""> Email: <span class="obligatorio">(Campo Requerido)</span></label>
                    <br>
                    <input type="text" placeholder="Ingresar el e-mail del Cliente" class="form-control" name="mail_cli" value="">
                    <br>
                </div>
                <div class="col-md-6">
                    <label for=""> Latitud: </span></label>
                    <br>
                    <input type="text" readonly placeholder="Latitud del cliente" id="lati_cli" class="form-control" name="lati_cli" value="">
                </div>
                <div class="col-md-6">
                    <label for=""> Longitud: </span></label>
                    <br>
                    <input type="text" readonly placeholder="Longitud del cliente" id="longi_cli" class="form-control" name="longi_cli" value="">
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
        $("#frm_nuevo_cliente").validate({
            rules: {
                nom_cli: {
                    required: true,
                    minlength: 3,
                    maxlength: 30,
                },
                ape_cli: {
                    required: true,
                    minlength: 3,
                    maxlength: 20,
                    letras: true,
                },
                ciu_cli: {
                    required: true,
                    minlength: 5,
                    maxlength: 250,
                    letras: true,
                },
                tele_cli: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                },
                cedu_cli: {
                    required: true,
                    minlength: 10,
                    maxlength: 10,
                    digits: true,
                },

                mail_cli: {
                    required: true,
                    minlength: 3,
                    maxlength: 60,
                    letras: true,
                }
            },
            messages: {
                nom_cli: {
                    required: "Por favor ingresar un nombre",
                    minlength: "El apellido debe tener al menos 3 caracteres",
                    maxlength: "Nombre incorrecto",

                },
                ape_cli: {
                    required: "Por favor ingrese el primer apellido",
                    minlength: "El apellido debe tener al menos 3 caracteres",
                    maxlength: "Apellido incorrecto",
                },
                ciu_cli: {
                    required: "Por favor ingresar la ciudad",
                    minlength: "El apellido debe tener al menos 3 caracteres",
                    maxlength: "Nombre incorrecto",
                },
                tele_cli: {
                    required: "Por favor ingresa un número de telefono",
                    minlength: "Cédula incorrecta, ingrese 10 digitos",
                    maxlength: "Cédula incorrecta, ingrese 10 digitos",
                    digits: "Este campo solo acepta números",
                    number: "Este campo solo acepta números",
                },
                cedu_cli: {
                    required: "Por favor ingrese el número de cedula",
                    minlength: "Cédula incorrecta, ingrese 10 digitos",
                    maxlength: "Cédula incorrecta, ingrese 10 digitos",
                    digits: "Este campo solo acepta números",
                    number: "Este campo solo acepta números",
                },
                mail_cli: {
                    required: "Por favor ingresa un correo electronico",
                    minlength: "La dirección debe tener al menos 8 caracteres",
                    maxlength: "Direccion muy Extensa",

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
                document.getElementById('lati_cli').value = this.getPosition().lat();
                document.getElementById('longi_cli').value = this.getPosition().lng();
            });
        }
    </script>
</div>
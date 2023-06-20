<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fedex Ecuador</title>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?php echo base_url('plantilla/css/bootstrap.min.css'); ?>">
  <!-- style css -->
  <link rel="stylesheet" href="<?php echo base_url('plantilla/css/style.css'); ?>">
  <!-- Responsive-->
  <link rel="stylesheet" href="<?php echo base_url('plantilla/css/responsive.css'); ?>">
  <!-- fevicon -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/logo2.png" type="image/gif">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url('plantilla/css/jquery.mCustomScrollbar.min.css'); ?>">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
  <!-- owl stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url('/plantilla/css/owl.carousel.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/plantilla/css/owl.theme.default.min.css'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

  <!-- Importando JQuerry -->
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>

  <!-- Importando JQuerry Validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
    jQuery.validator.addMethod("letras", function(value, element) {
      //return this.optional(element) || /^[a-z]+$/i.test(value);
      return this.optional(element) || /^[A-Za-zÁÉÍÑÓÚáéíñóú]*$/.test(value);

    }, "Este campo solo acepta letras");
  </script>


</head>

<body>
  <!-- header section start -->
  <div class="header_section">
    <div class="header_main">
      <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>/assets/images/logo.png" Alt="Inicio" width="150px"> </a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url() ?>/sucursales/iniSucu">Sucursales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url() ?>/clientes/iniClie">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url() ?>/pedidos/iniPedi">Pedidos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="<?php echo site_url() ?>/contactanos/iniCon">Contactos</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="container-fluid">
        <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo base_url(); ?>/assets/images/logo.png" Alt="Inicio" width="150px"></a></div>
        <div class="menu_main">
          <ul>
            <li><a href="<?php echo site_url() ?>/sucursales/iniSucu">Sucursales</a></li>
            <li><a href="<?php echo site_url() ?>/clientes/iniClie">Clientes</a></li>
            <li><a href="<?php echo site_url() ?>/pedidos/iniPedi">Pedidos</a></li>
            <li><a href="<?php echo site_url() ?>/contactanos/iniCon">Contactos</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
  <!-- header section end -->
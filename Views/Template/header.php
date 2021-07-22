<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de usuarios</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs-->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <input type="hidden" id="url" value="<?php echo base_url(); ?>">
                    <!-- Navbar Header--><a href="<?php echo base_url(); ?>Admin/Listar" class="navbar-brand">
                        <div class="brand-text brand-big visible"><strong class="text-white">System </strong> <strong class="text-white"> Mejia</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-white">S</strong> <strong>M</strong></div>
                    </a>
                    <!-- Sidebar Toggle Btn-->
                    <button class="sidebar-toggle"><i class="fas fa-arrow-alt-circle-left"></i></button>
                </div>
                <div class="right-menu list-inline no-margin-bottom">
                    <h4>Registro de usuarios</h4>
                </div>
                <!-- Log out               -->
                <div class="list-inline-item logout">
                    <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#logout">Salir</button>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        <nav id="sidebar">
            <!-- Sidebar Header-->
            <div class="sidebar-header d-flex align-items-center p-1">
                <div class="avatar" data-toggle="modal" data-target="#cambiarPass"><img src="<?php echo base_url(); ?>/Assets/img/mejia.png" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h5 class="h5 text-white"><?php echo $_SESSION['rol']; ?></h5>
                </div>
            </div>
            <ul class="list-unstyled">
                <?php if ($_SESSION['rol'] == "Administrador") { ?>
                    <li><a href="<?php echo base_url(); ?>Usuarios/Listar"> <i class="fas fa-user text-white"></i> <strong class="text-white"> Usuarios </strong></a></li>
                    <li><a href="<?php echo base_url(); ?>Configuracion/Listar"> <i class="fas fa-cogs text-white"></i> <strong class="text-white"> Configuración </strong></a></li>
                    <li><a href="<?php echo base_url(); ?>Clientes/Listar"> <i class="fas fa-users text-white"></i> <strong class="text-white"> Clientes </strong></a></li>
                <li><a href="<?php echo base_url(); ?>Productos/Listar"> <i class="fab fa-product-hunt text-white"></i> <strong class="text-white"> Productos </strong></a></li>
                <li><a href="<?php echo base_url(); ?>Usuarios/"> <i class="fas fa-users text-white"></i> <strong class="text-white"> Proveedores </strong></a></li>
                <?php } ?>
                <?php if ($_SESSION['rol'] == "Vendedor") { ?>
                    <li><a href="<?php echo base_url(); ?>Usuarios/Listar"> <i class="fas fa-user text-white"></i> <strong class="text-white"> Usuarios </strong></a></li>
                    <?php } ?>
                
        </nav>
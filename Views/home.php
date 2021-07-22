<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
</head>

<body class="">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4 m-auto">
                <div class="card mt-5">
                    <div class="card-header bg-dark text-center">
                        <strong class="text-white">Iniciar Sesión</strong><br>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['msg'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Usuario o contraseña Incorrecta</strong>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url(); ?>Usuarios/login" method="post" autocomplete="off">
                            <div class="form-group">
                                <strong class="text-dark">Usuario</strong>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario" required>
                            </div>
                            <div class="form-group">
                                <strong class="text-dark">Contraseña</strong>
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña" required>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Iniciar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
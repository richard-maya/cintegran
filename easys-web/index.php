<?php
    /**
     * Copyright (C) 2013 peredur.net
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU General Public License for more details.
     *
     * You should have received a copy of the GNU General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

    sec_session_start();

    if (login_check($mysqli) == true) {
        $logged = 'in';
    } else {
        $logged = 'out';
    }
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=copyright content="Copyright © 2017 GEM Cintegran">
    <meta name="keywords" content="easysweb, facturacion electronica, cfdi, administración, contabilidad electrónica">
    <meta name="description" content="Easysweb es una plataforma web con la que podrás emitir comprobantes electrónicos CFDi y te ayuda a llevar una mejor administración de tu negocio.">

    <title>EASYSWEB REGISTRO 3.3</title>
    <link href="launcher0317/assets/css/bootstrap.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="styles/main.css" /> -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <style type="text/css">
        body {
            height: 100vh;
            background-image: url('img/slider-1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /*background-position: center;*/
            font-family: 'Open Sans', sans-serif;
        }
        .col-md-6{
            background-color: rgba(255,255,255,0.9);
            padding: 1rem;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }
        footer{
            background: #262626;
            color: white;
            padding-top: 1rem;
        }
    </style>
</head>
<body>
    <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error al iniciar sesión!</p>';
        }
        ?>
    <!-- <form action="includes/process_login.php" method="post" name="login_form">
        Usuario: <input type="text" name="email" />
        Password: <input type="password"
            name="password"
            id="password"/>
        <input type="button"
            value="Login"
            id="btsubmit"
            onclick="formhash(this.form, this.form.password);" />
    </form> -->

    <div class="container">
        <div class="row" style="height:5vh;"></div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="display-3">Iniciar Sesión</h1>

                <div class="clearfix"></div>

                <form action="includes/process_login.php" method="post" name="login_form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario:</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresar Usuario">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña:</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Recordarme
                        </label>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                    <!-- <input type="button"
                        role="button"
                        class="btn btn-primary"
                        value="Login"
                        id="btsubmit"
                        onclick="formhash(this.form, this.form.password);" /> -->
                    <div class="form-group">
                        <div class="col-xs-4 col-xs-offset-4 col-md-offset-5 col-md-2">
                            <input type="button"
                                role="button"
                                class="btn btn-primary"
                                value="Login"
                                id="btsubmit"
                                onclick="formhash(this.form, this.form.password);" />
                        </div>
                    </div>
                </form>

                <div class="clearfix"></div>

                <br>

                <div class="col-xs-12">
                    <p class="help-block">Si no tiene una cuenta de acceso, por favor <a href="register.php">registrate</a></p>
                    <p class="help-block">Si ha terminado, por favor <a href="includes/logout.php">log out</a>.</p>
                    <p class="help-block">Estás conectado actualmente<?php echo $logged ?>.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="navbar-fixed-bottom">
        <div class="container">
            <p class="text-center">&copy; 2017. GEM Cintegran. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <script src="launcher0317/assets/js/jquery.js"></script>
    <script src="launcher0317/assets/js/bootstrap.js"></script>

</body>
</html>

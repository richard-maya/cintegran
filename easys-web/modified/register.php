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
    include_once 'includes/register.inc.php';
    include_once 'includes/functions.php';
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=copyright content="Copyright © 2017 GEM Cintegran">
    <title>EASYSWEB REGISTRO 3.3</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/manifest.json">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="favicons/favicon.ico">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link href="launcher0317/assets/css/bootstrap.css" rel="stylesheet">

    <style media="screen">
        body {
            background:#ddd;
            font-family: 'Open Sans', sans-serif;
        }
        .container{
            background-color: white;
            padding: 1rem 1rem 2rem 1rem;
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }
        footer{
            background: #262626;
            color: white;
            padding-top: 1rem;
        }
        footer .container{
            background-color: #262626;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Registration form to be output if the POST variables are not
            set or if the registration script caused an error. -->
        <div class="row">
            <div class="col-xs-12">
                <h1 class="display-3 text-left">Regístrate para usar la nueva Plataforma EASySWEB 7.0 CFDi 3.3</h1>
            </div>
        </div>
        <?php
            if (!empty($error_msg)) {
                echo $error_msg;
            }
            ?>
        <div class="row">
            <div class="col-xs-12">
                <p class="lead">Registra tu RFC y Número de Cliente, ¡Recuerda que debes ser Cliente EASyS Web!</p>
            </div>
        </div>

        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            <div class="form-group col-md-4">
                <label for="nocliente">No. Cliente</label>
                <input type="number" class="form-control" name="nocliente" id="nocliente" minlength="1" maxlength="3" placeholder="No. Cliente" onKeyPress="return validarn(event)">
            </div>
            <div class="form-group col-md-4">
                <label for="rfccliente">RFC</label>
                <input type="text" class="form-control" name="rfccliente" id="rfccliente" maxlength="13" placeholder="RFC">
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-md-4">
                <label for="username">Usuario</label>
                <input type="text" class="form-control" name="username" id="username">
                <p class="help-block">Puede contener sólo digitos, letras mayúsculas y minúsculas.</p>
            </div>

            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" id="email">
                <p class="help-block">Ingresa un formato válido de correo.</p>
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-md-4">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password">
                <p class="help-block">La contraseña debe tener al menos 6 caractéres y contener: <br> <ul>
                    <li class="help-block">Al menos una letra mayuscula (A..Z)</li>
                    <li class="help-block">Al menos una letra minúscula (a..z)</li>
                    <li class="help-block">Al menos un número (0..9)</li>
                </ul></p>
            </div>

            <div class="form-group col-md-4">
                <label for="confirmpwd">Confirmar Contraseña</label>
                <input type="password" class="form-control" name="confirmpwd" id="confirmpwd">
                <p class="help-block">Su contraseña y confirmación deben coincidir exactamente.</p>
            </div>

            <div class="clearfix"></div>

            <div class="form-group col-md-2 col-md-offset-6">
                <input type="button" role="button" class="btn btn-primary"
                    value="Registrar"
                    id="btsubmit"
                    onclick="return regformhash(this.form,
                    this.form.nocliente,
                    this.form.rfccliente,
                    this.form.username,
                    this.form.email,
                    this.form.password,
                    this.form.confirmpwd);" />
            </div>
        </form>

        <div class="clearfix"></div>

        <p>Regresa a <a href="index.php">Página Inicio</a>.</p>
    </div>

    <div class="row" style="height:5vh"></div>

    <footer>
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

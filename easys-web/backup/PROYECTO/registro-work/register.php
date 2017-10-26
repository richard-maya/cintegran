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
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Registrate para usar la nueva Plataforma EASySWEB 7.0 CFDi 3.3</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
        	<li>Recuerda que debes ser Cliente EASySWEB</li>
        	<li>Registra tu RFC o Numero de Cliente</li>
            <li>
Los nombres de usuario pueden contener sólo dígitos, letras mayúsculas y minúsculas.</li>
            <li>Emails must have a valid email format</li>
            <li>La contraseña debe tener al menos 6 caracteres</li>
            <li>La contraseña debe contener
                <ul>
                    <li>Al menos una letra mayuscula (A..Z)</li>
                    <li>Al menos una letra minúscula (a..z)</li>
                    <li>Al menos un número (0..9)</li>
                </ul>
            </li>
            <li>Su contraseña y confirmación deben coincidir exactamente</li>
        </ul>
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
        	RFC: <input type="text" 
        				name="rfccliente" id="rfccliente" maxlength="13" placeholder=" "/><br />
            Usuario: <input type='text' 
            					name='username' id='username' /><br>
            Email: <input type="text" name="email" id="email" /><br>
            Contraseña: <input type="password"
                             name="password" 
                             id="password"/><br>
            Confirma Contraseña: <input type="password" 
                                     name="confirmpwd" 
                                     id="confirmpwd" /><br>
            <input type="button" 
                   value="Register" 
                   onclick="return regformhash(this.form,
                   				   this.form.rfccliente,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,                                   
                                   this.form.confirmpwd);" /> 
        </form>
        <p>Regresa a <a href="index.php">pagina inicio</a>.</p>
    </body>
</html>

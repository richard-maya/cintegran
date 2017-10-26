<?php session_start()  

include("../../herramientas/clases/class.mysqlex.php");
include("../../herramientas/clases/class.combos.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SITE TITLE -->
    <title>Agregar Usuario | Cintegran</title>

    <!-- FAVICONS AND APPLE ICONS -->
    <link rel="shortcut icon" href="../favicons/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../favicons/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="../favicons/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="../favicons/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="../favicons/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="../favicons/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="../favicons/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="../favicons/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="../favicons/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicons/apple-touch-icon-180x180.png" />

    <!-- META INFORMATION -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="copyright" content="Copyright © 2017 GEM Cintegran">
    <meta name="author" content="GEM Cintegran S.A. de C.V., Richard Maya">
    <meta name="designer" content="Richard Maya">

    <!-- STYLESHEETS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

<!-- NAV BAR
================================================== -->
<!-- <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        Cintegran
    </a>
</nav> -->

<main>


<!-- FORM
================================================== -->
<section id="add-users-section">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="required-tab" data-toggle="tab" href="#required-info" role="tab" aria-controls="home" aria-expanded="true">Información Requerida</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="aditional-tab" data-toggle="tab" href="#aditional-info" role="tab" aria-controls="profile">Información Adicional</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">

            <!-- === Información Requerida ===  -->
            <div class="tab-pane fade show active" id="required-info" role="tabpanel" aria-labelledby="required-tab">
                <form action="../SQL/registro_cliente_sql.php" method="post" name="required-form" enctype="multipart/form-data" class="form" role="form">

                    <!-- Nombre o Razón Social -->
                    <div class="form-group row justify-content-center">
                        <label for="razonSocial" class="col-md-2 col-form-label wow fadeInUp"> Nombre o Razón Social *</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control wow fadeIn" id="razonSocial" placeholder="" required data-toggle="tooltip" name="txtnombre" data-placement="bottom" title="Nombre o Razón Social">
                        </div>
                    </div>

                    <!-- RFC -->
                    <div class="form-group row justify-content-center">
                        <label for="rfc" class="col-md-2 col-form-label wow fadeInUp">RFC *</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control wow fadeIn" id="rfc" placeholder="" maxlength="13" required data-toggle="tooltip" data-placement="bottom" title="RFC" name="txtrfc">
                        </div>
                    </div>

                    <!-- Código Postal -->
                    <div class="form-group row justify-content-center">
                        <label for="cp" class="col-md-2 col-form-label wow fadeInUp">Código Postal *</label>
                        <!--<div class="col-md-4">
                            <input type="text" class="form-control wow fadeIn" id="cp" placeholder="" maxlength="5" required data-toggle="tooltip" data-placement="bottom" title="Código Postal">
                        </div>-->
                        <div class="col-md-4">
                                    <select class="custom-select wow fadeIn" id="cp" name="c_cp">
                                        <?php
                                            $selects = new selects();
                                            $paises = $selects->cargarCodigoPostal();
                                            foreach($paises as $key=>$value)
                                            {
                                                    echo "<option value=\"$key\">$value</option>";
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                    </div>

                    <!-- Uso CFDi -->
                    <!--<div class="form-group row justify-content-center" id="uso-cfdi-div">
                        <label for="uso-cfdi" class="col-md-2 col-form-label wow fadeInUp">Uso CFDi *</label>
                        <div class="col-md-4">
                            <select class="custom-select wow fadeIn" id="uso-cfdi" required>
                                <option selected>Selecciona</option>
                                <option value="G01">Adquisición de mercancias</option>
                                <option value="G02">Devoluciones, descuentos o bonificaciones</option>
                                <option value="G03">Gastos en general</option>
                                <option value="G04">Construcciones</option>
                            </select>
                        </div>
                    </div>-->

                    <!-- Next Button -->
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary wow fadeInUp">Siguiente <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>

                </form>
            </div>

            <!-- === Información Adicional === -->
            <div class="tab-pane fade" id="aditional-info" role="tabpanel" aria-labelledby="aditional-tab">
                <form action="" method="post" name="aditional-form" enctype="multipart/form-data" class="form" role="form">
                    <div class="row">

                        <!-- Left Side -->
                        <div class="col-md-6">

                            <!-- Estado -->
                            <div class="form-group row">
                                <label for="estado" class="col-md-4 col-form-label wow fadeInUp">Estado</label>
                                <div class="col-md-8">
                                    <select class="custom-select wow fadeIn" id="estado" name="estado_d">
                                        <?php
                                            $selects = new selects();
                                            $paises = $selects->cargarPaises();
                                            foreach($paises as $key=>$value)
                                            {
                                                    echo "<option value=\"$key\">$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Ciudad -->
                            <div class="form-group row">
                                <label for="ciudad" class="col-md-4 col-form-label wow fadeInUp">Ciudad</label>
                                <div class="col-md-8">
                                    <select class="custom-select wow fadeIn" id="ciudad" name="c_ciudad">
                                        <?php
                                            $ciudades = new selects();
                                            $ciudades->code = $_GET["code"];
                                            $ciudades = $ciudades->cargarCiudades();
                                            foreach($ciudades as $key=>$value)
                                            {
                                                    echo "<option value=\"$key\">$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Delegación o Municipio -->
                            <div class="form-group row">
                                <label for="municipio" class="col-md-4 col-form-label wow fadeInUp">Delegación o Municipio</label>
                                <div class="col-md-8">
                                    <select class="custom-select wow fadeIn" id="municipio" name="c_delmun">
                                        <?php
                                            $estados = new selects();
                                            $estados->code = $_GET["code"];
                                            $estados = $estados->cargarEstados();
                                            foreach($estados as $key=>$value)
                                            {
                                                    echo "<option value=\"$key\">$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Colonia -->
                            <div class="form-group row">
                                <label for="colonia" class="col-md-4 col-form-label wow fadeInUp">Colonia</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control wow fadeIn" id="colonia" placeholder="" data-toggle="tooltip" data-placement="bottom" title="Colonia" name="txtcol">
                                </div>
                            </div>

                            <!-- Calle -->
                            <div class="form-group row">
                                <label for="calle" class="col-md-4 col-form-label wow fadeInUp">Calle</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control wow fadeIn" id="calle" placeholder="" data-toggle="tooltip" data-placement="bottom" title="Calle" name="txtcalle">
                                </div>
                            </div>

                            <!-- Correo electrónico -->
                            <div class="form-group row">
                                <label for="correo" class="col-md-4 col-form-label wow fadeInUp">Correo Electrónico</label>
                                <div class="col-md-8">
                                    <input type="email" class="form-control wow fadeIn" id="correo" placeholder="" data-toggle="tooltip" data-placement="bottom" title="Correo Electrónico" name="txtmail">
                                </div>
                            </div>

                            <!-- Teléfono -->
                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label wow fadeInUp">Teléfono</label>
                                <div class="col-md-8">
                                    <input type="tel" class="form-control wow fadeIn" id="telefono" placeholder="" maxlength="10" data-toggle="tooltip" data-placement="bottom" title="Teléfono" name="txttels">
                                </div>
                            </div>

                            <!-- Giro -->
                            <div class="form-group row">
                                <label for="giro" class="col-md-4 col-form-label wow fadeInUp">Giro</label>
                                <div class="col-md-8">
                                    <select class="custom-select wow fadeIn" id="giro" name="Giro">
                                        <option selected></option>
                                        <option value="1">Física</option>
                                        <option value="2">Moral</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side -->
                        <div class="col-md-6">

                            <!-- Número Exterior -->
                            <div class="form-group row">
                                <label for="exterior" class="col-md-4 col-form-label wow fadeInUp">Número Exterior</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control wow fadeIn" id="exterior" placeholder="" maxlength="5" data-toggle="tooltip" data-placement="bottom" title="Número Exterior" name="txtnoext">
                                </div>
                            </div>

                            <!-- Número Interior -->
                            <div class="form-group row">
                                <label for="interior" class="col-md-4 col-form-label wow fadeInUp">Número Interior</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control wow fadeIn" id="interior" placeholder="" maxlength="5" data-toggle="tooltip" data-placement="bottom" title="Número Interior" name="txtnoint">
                                </div>
                            </div>

                            <!-- País -->
                            <div class="form-group row">
                                <label for="pais" class="col-md-4 col-form-label wow fadeInUp">País</label>
                                <div class="col-md-8">
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input class="form-check-input wow fadeIn" type="radio" name="pais" id="mexico" value="mexico" checked name="pais_d">
                                        México
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label">
                                        <input class="form-check-input wow fadeIn" type="radio" name="pais" id="otro" value="otro" name="pais_d">
                                        Otro
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Residencia Fiscal -->
                            <div class="form-group row" id="residencia-fiscal-div">
                                <label for="residencia-fiscal" class="col-md-4 col-form-label wow fadeInUp">Residencia Fiscal</label>
                                <div class="col-md-8">
                                    <select class="custom-select wow fadeIn" id="residencia-fiscal" name="c_resdfis">
                                        <?php
                                            $selects = new selects();
                                            $paises = $selects->cargarPais();
                                            foreach($paises as $key=>$value)
                                            {
                                                    echo "<option value=\"$key\">$value</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- Número de Registro de Identificación Fiscal -->
                            <div class="form-group row" id="identificacion-fiscal-div">
                                <label for="identificacion-fiscal" class="col-md-4 col-form-label wow fadeInUp">No. Registro de Identificación Fiscal</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control wow fadeIn" id="identificacion-fiscal" placeholder="" maxlength="40" data-toggle="tooltip" data-placement="bottom" title="Identificación Fiscal" name="txtnoidfis">
                                </div>
                            </div>

                            <!-- IVA -->
                            <div class="form-group row">
                                <label for="iva" class="col-md-4 col-form-label wow fadeInUp">% IVA por aplicar</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control wow fadeIn" id="iva" placeholder="" maxlength="" data-toggle="tooltip" data-placement="bottom" title="IVA">
                                </div>
                            </div>

                            <!-- Límite de Crédito -->
                            <div class="form-group row">
                                <label for="limite-credito" class="col-md-4 col-form-label wow fadeInUp">Límite de Crédito</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control wow fadeIn" id="limite-credito" placeholder="" maxlength="" data-toggle="tooltip" data-placement="bottom" title="Límite de Crédito">
                                </div>
                            </div>

                            <!-- Días de Crédito -->
                            <div class="form-group row">
                                <label for="dias-credito" class="col-md-4 col-form-label wow fadeInUp">Días de Crédito</label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control wow fadeIn" id="dias-credito" placeholder="" maxlength="" data-toggle="tooltip" data-placement="bottom" title="Días de Crédito">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Next Button -->
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary wow fadeInUp">Siguiente <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>

</main>


<!-- FOOTER
================================================== -->
<!-- <footer class="fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p>Copyright © 2017 <a href="http://www.cintegran.com.mx" rel="author" target="_blank">GEM Cintegran</a></p>
            </div>
        </div>
    </div>
</footer> -->


<!-- SCRIPTS
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="../SQL/registro_cliente_sql.php"></script>
<script src="js/wow/wow.min.js"></script>
<script src="js/form.js"></script>
</body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include '../../controller/con_session.php'; ?>
<html>
    <head>
        <?php include '../html/head.php'; ?>
        <link href="../css/registro.css" rel="stylesheet">

    </head>
    <body>
        <?php include '../html/navbar.php'; ?>

        <div class="container">
            
            <?php echo $mensaje_login; ?>

            <?php
            
            $datoscargados = false;
            $usuario = NULL;
            $email = NULL;
            $password = NULL;
            $cedula = NULL;
            $nombres = NULL;
            $apellidos = NULL;
            $fecha = NULL;
            $telefono = NULL;
            $codigo = NULL;
            $pais = "Ecuador";
            $provincia = NULL;
            $ciudad = NULL;
            $uno = NULL;
            $dos = NULL;
            $referencia = NULL;
            $numero = NULL;

            if (isset($_POST["opcion"])) {

                $carga = true;
                $usuario = $_POST["usuario"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $cedula = $_POST["cedula"];
                $nombres = $_POST["nombres"];
                $apellidos = $_POST["apellidos"];
                $fecha = $_POST["fecha"];
                $telefono = $_POST["telefono"];
                $codigo = $_POST["codigo"];
                $pais = $_POST["pais"];
                $provincia = $_POST["provincia"];
                $ciudad = $_POST["ciudad"];
                $uno = $_POST["uno"];
                $dos = $_POST["dos"];
                $referencia = $_POST["referencia"];
                $numero = $_POST["numero"];
            }
            ?>
            
            <form method="post">
                <!-- DATOS DE USUARIO -->
                <div class="row">
                    <div class="col col-lg-3">
                        <h6 class="text-uppercase font-weight-bold">DATOS DE CUENTA</h6>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="datos">
                    <div class="form-group">
                        <label ><i class="icon-s fa fa-user"></i>Usuario</label>
                        <input type="text" class="form-control" id="us" name="usuario" minlength="3" placeholder="Nombre de usuario" value="<?php echo $usuario; ?>" required/>
                        <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números. Mínimo 3 caracteres.</small>
                    </div>
                    <div class="form-group">
                        <label><i class="icon-s fas fa-envelope"></i></i>Correo electrónico</label>
                        <input type="email" class="form-control" id="co" placeholder="Correo electrónico" name="email" value="<?php echo $email; ?>" required/>
                        <small  class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label ><i class="icon-s fa fa-lock"></i>Contraseña</label>
                        <input type="password" class="form-control" id="ps" name="password" minlength="3"  placeholder="Contraseña" required/>
                        <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números. Mínimo 3 caracteres.</small>
                    </div>
                </div>
                <div class="line">
                </div>
                <!-- DATOS PERSONALES -->
                <div class="row">
                    <div class="col col-lg-3">
                        <h6 class="text-uppercase font-weight-bold">DATOS PERSONALES</h6>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="datos">

                    <div class="form-group">
                        <label ><i class="icon-s fa fa-id-card"></i>Cédula</label>
                        <input type="text" class="form-control" id="ce" minlength="10" maxlength="10"  placeholder="Cédula" name="cedula" value="<?php echo $cedula; ?>" onkeypress="return solonumeros(event)"  required/>
                        <small  class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label ><i class="icon-s fa fa-user"></i>Nombres y apellidos</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="no"  minlength="3" placeholder="Nombres" name="nombres" value="<?php echo $nombres; ?>" onkeypress="return sololetra(event)" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="ap"  minlength="3" placeholder="Apellidos" name="apellidos" value="<?php echo $apellidos; ?>" onkeypress="return sololetra(event)" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label ><i class="icon-s fa fa-calendar-alt"></i>Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="fe" name="fecha" value="<?php echo $fecha; ?>" required/>
                        <small  class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="line">
                </div>
                <!-- DATOS DE CONTACTO -->
                <div class="row">
                    <div class="col col-lg-3">
                        <h6 class="text-uppercase font-weight-bold">DATOS DE CONTACTO</h6>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="datos">
                    <div class="form-group">
                        <label><i class="icon-s fas fa-mobile-alt"></i>Teléfono</label>
                        <input type="text" class="form-control" id="te" minlength="10" maxlength="10" placeholder="Teléfono" name="telefono" value="<?php echo $telefono; ?>" onkeypress="return numcar(event)" required/>
                        <small  class="form-text text-muted"></small>
                    </div>

                </div>
                <div class="line">
                </div>
                <!-- DATOS DE DOMICILIO -->
                <div class="row">
                    <div class="col col-lg-3">
                        <h6 class="text-uppercase font-weight-bold">DATOS DE DOMICILIO</h6>
                    </div>
                    <div class="col">
                    </div>
                </div>
                <div class="datos">
                    <div class="form-group">
                        <label><i class="icon-s fa fa-flag"></i>Código postal</label>
                        <input type="text" class="form-control" id="cp"  minlength="4" placeholder="Código postal" name="codigo" value="<?php echo $codigo; ?>" required/>
                        <small  class="form-text text-muted">Mínimo 4 caracteres.</small>
                    </div>
                    <div class="form-group">
                        <label><i class="icon-s fas fa-city"></i>País - Provincia - Ciudad</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="pa"  minlength="3" placeholder="País" name="pais" value="<?php echo $pais; ?>" onkeypress="return sololetra(event)" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="po" minlength="3" placeholder="Provincia" name="provincia" value="<?php echo $provincia; ?>" onkeypress="return sololetra(event)" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="ci" minlength="3" placeholder="Ciudad" name="ciudad" value="<?php echo $ciudad; ?>" onkeypress="return sololetra(event)" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><i class="icon-s fas fa-map-marker-alt"></i>Calle 1 - Calle 2</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="c1" minlength="3" placeholder="Calle 1" name="uno" value="<?php echo $uno; ?>" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="c2" minlength="3"placeholder="Calle 2" name="dos" value="<?php echo $dos; ?>" required/>
                                <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label><i class="icon-s fas fa-map-marker-alt"></i>Referencia</label>
                        <input type="text" class="form-control" id="re" minlength="3" maxlength="29"placeholder="Referencia" name="referencia" value="<?php echo $referencia; ?>" required/>
                        <small  class="form-text text-muted">Mínimo 3 caracteres, máximo 30 caracteres</small>
                    </div>
                    <div class="form-group">
                        <label><i class="icon-s fas fa-home"></i>N° de casa</label>
                        <input type="number" class="form-control" id="nc" placeholder="N° de casa" name="numero" value="<?php echo $numero; ?>" required/>
                        <small  class="form-text text-muted"></small>
                    </div>
                </div>
                <div class="line">
                </div>
                <input type="hidden" value="signup" name="opcion">
                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Registrarse</button>

            </form>
        </div>

    </body>

    <?php include '../html/footer.php'; ?>
</html>

<script>
    function solonumeros(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key);
        numeros = "0123456789";
        especiales = "8-37-38-46";
        teclado_especial = false;
        for (var i in especiales) {
            if (key == especiales[i]) {
                teclado_especial = true;
            }
        }
        if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }
    }
    function numcar(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key);
        numeros = "0123456789-";
        especiales = "8-37-38-46";
        teclado_especial = false;
        for (var i in especiales) {
            if (key == especiales[i]) {
                teclado_especial = true;
            }
        }
        if (numeros.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }
    }
    function sololetra(e) {
        key = e.keyCode || e.which;
        teclado = String.fromCharCode(key).toLowerCase();
        letra = " abcdefghijklmnñopqrstuvwxyz";
        especiales = "8-37-38-46-164-95";
        teclado_especial = false;
        for (var i in especiales) {
            if (key == especiales[i]) {
                teclado_especial = true;
                break;
            }
        }
        if (letra.indexOf(teclado) == -1 && !teclado_especial) {
            return false;
        }
    }

</script>

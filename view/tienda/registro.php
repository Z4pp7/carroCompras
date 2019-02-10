<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include '../../controller/con_session.php';?>
<html>
    <head>
    <?php include '../html/head.php'; ?>
    <link href="../css/registro.css" rel="stylesheet">
    </head>
    <body>
        <?php include '../html/navbar.php'; ?>

        <div class="container">
          <?php echo $mensaje_login; ?>
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
                     <input type="text" class="form-control" id="us" name="usuario" minlength="3" placeholder="Nombre de usuario" required/>
                     <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números. Mínimo 3 caracteres.</small>
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
                     <input type="text" class="form-control" id="ce" minlength="10" maxlength="10"  placeholder="Cédula"name="cedula" required/>
                     <small  class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                       <label ><i class="icon-s fa fa-user"></i>Nombres y apellidos</label>
                       <div class="row">
                         <div class="col">
                           <input type="text" class="form-control" id="no"  minlength="3" placeholder="Nombres" name="nombres" required/>
                           <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                         </div>
                         <div class="col">
                           <input type="text" class="form-control" id="ap"  minlength="3" placeholder="Apellidos" name="apellidos" required/>
                           <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                         </div>
                       </div>
                    </div>
                    <div class="form-group">
                     <label ><i class="icon-s fa fa-calendar-alt"></i>Fecha de nacimiento</label>
                     <input type="date" class="form-control" id="fe" name="fecha" required>
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
                    <input type="text" class="form-control" id="te" minlength="10" maxlength="10" placeholder="Teléfono" name="telefono" required/>
                    <small  class="form-text text-muted"></small>
                   </div>
                   <div class="form-group">
                    <label><i class="icon-s far fa-envelope"></i>Correo electrónico</label>
                    <input type="email" class="form-control" id="co" placeholder="Correo electrónico" name="email" required/>
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
                      <input type="text" class="form-control" id="cp"  minlength="4" placeholder="Código postal" name="codigo" required/>
                      <small  class="form-text text-muted">Mínimo 4 caracteres.</small>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-city"></i>País - Provincia - Ciudad</label>
                      <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" id="pa"  minlength="3" placeholder="País" name="pais" required/>
                            <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" id="po" minlength="3" placeholder="Provincia" name="provincia" required/>
                            <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" id="ci" minlength="3" placeholder="Ciudad" name="ciudad" required/>
                            <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-map-marker-alt"></i>Calle 1 - Calle 2</label>
                      <div class="row">
                        <div class="col">
                         <input type="text" class="form-control" id="c1" minlength="3" placeholder="Calle 1" name="uno" required/>
                         <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                        </div>
                        <div class="col">
                           <input type="text" class="form-control" id="c2" minlength="3"placeholder="Calle 2" name="dos" required/>
                            <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-map-marker-alt"></i>Referencia</label>
                      <input type="text" class="form-control" id="re" minlength="3" maxlength="29"placeholder="Referencia" name="referencia" required/>
                      <small  class="form-text text-muted">Mínimo 3 caracteres, máximo 30 caracteres</small>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-home"></i>N° de casa</label>
                      <input type="number" class="form-control" id="nc" placeholder="N° de casa" name="numero" required/>
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

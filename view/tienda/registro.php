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
                     <input type="text" class="form-control" id="us" name="usuario" placeholder="Nombre de usuario"/>
                     <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números</small>
                    </div>
                    <div class="form-group">
                    <label ><i class="icon-s fa fa-lock"></i>Contraseña</label>
                    <input type="password" class="form-control" id="ps" name="password" placeholder="Contraseña"/>
                    <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números</small>
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
                     <input type="text" class="form-control" id="ce"placeholder="Cédula"name="cedula"/>
                     <small  class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                       <label ><i class="icon-s fa fa-user"></i>Nombres y apellidos</label>
                       <div class="row">
                         <div class="col">
                           <input type="text" class="form-control" id="no"placeholder="Nombres" name="nombres"/>
                           <small  class="form-text text-muted"></small>
                         </div>
                         <div class="col">
                           <input type="text" class="form-control" id="ap"placeholder="Apellidos" name="apellidos"/>
                           <small  class="form-text text-muted"></small>
                         </div>
                       </div>
                    </div>
                    <div class="form-group">
                     <label ><i class="icon-s fa fa-calendar-alt"></i>Fecha de nacimiento</label>
                     <input type="date" class="form-control" id="fe" name="fecha">
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
                    <input type="text" class="form-control" id="te" placeholder="Teléfono" name="telefono"/>
                    <small  class="form-text text-muted"></small>
                   </div>
                   <div class="form-group">
                    <label><i class="icon-s far fa-envelope"></i>Correo electrónico</label>
                    <input type="email" class="form-control" id="co" placeholder="Correo electrónico" name="email"/>
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
                      <input type="text" class="form-control" id="cp" placeholder="Código postal" name="codigo"/>
                      <small  class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-city"></i>País - Provincia - Ciudad</label>
                      <div class="row">
                          <div class="col">
                            <input type="text" class="form-control" id="pa" placeholder="País" name="pais"/>
                            <small  class="form-text text-muted"></small>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" id="po" placeholder="Provincia" name="provincia"/>
                            <small  class="form-text text-muted"></small>
                          </div>
                          <div class="col">
                            <input type="text" class="form-control" id="ci" placeholder="Ciudad" name="ciudad"/>
                            <small  class="form-text text-muted"></small>
                          </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-map-marker-alt"></i>Calle 1 - Calle 2</label>
                      <div class="row">
                        <div class="col">
                         <input type="text" class="form-control" id="c1" placeholder="Calle 1" name="uno"/>
                         <small  class="form-text text-muted"></small>
                        </div>
                        <div class="col">
                           <input type="text" class="form-control" id="c2" placeholder="Calle 2" name="dos"/>
                            <small  class="form-text text-muted"></small>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-map-marker-alt"></i>Referencia</label>
                      <input type="text" class="form-control" id="re" placeholder="Referencia" name="referencia"/>
                      <small  class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label><i class="icon-s fas fa-home"></i>N° de casa</label>
                      <input type="text" class="form-control" id="nc" placeholder="N° de casa" name="numero"/>
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

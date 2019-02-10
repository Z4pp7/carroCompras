<!DOCTYPE html>
<?php
  include '../../controller/con_carrito.php';
  require_once '../../model/Mod_Usuario.php';
  if(!empty($_SESSION['session'])){
 ?>
<html lang="en" dir="ltr">
  <head>
    <?php include '../html/head.php'; ?>
    <link href="../css/sidebar.css" rel="stylesheet">
    <link href="../css/datos.css" rel="stylesheet">

  </head>
  <body>
    <?php include '../html/navbar-l.php'; ?>
    <div class="wrapper">
      <!-- Sidebar -->
      <nav id="sidebar">

          <!--<div class="sidebar-header">
            <h5>Mi cuenta</h5>
        </div>-->

        <ul class="list-unstyled components">

          <li class="active">
              <a href="datos.php"><i class="icon-s fas fa-user-cog"></i>Mis datos</a>
          </li>
          <li>
              <a href="compras.php"><i class="icon-s fas fa-shopping-bag"></i>Compras</a>
          </li>

        </ul>
      </nav>
      <!-- Page Content -->
      <div id="content">
        <!-- HABILITA CAMPOS PARA EDITAR -->
        <script>
            function habilitar(campo)
            {
                campo.disabled = !campo.disabled;
            }
            function editar(campo)
            {
              if(campo==='cuenta'){
                habilitar(document.getElementById('us'));
                habilitar(document.getElementById('ps'));
                habilitar(document.getElementById('co'));
                habilitar(document.getElementById('gc'));
              }else if(campo==='personal'){
                habilitar(document.getElementById('ce'));
                habilitar(document.getElementById('no'));
                habilitar(document.getElementById('ap'));
                habilitar(document.getElementById('fe'));
                habilitar(document.getElementById('gp'));
              }else if(campo==='contacto'){
                habilitar(document.getElementById('te'));
                habilitar(document.getElementById('go'));
              }else if(campo==='domicilio'){
                habilitar(document.getElementById('cp'));
                habilitar(document.getElementById('pa'));
                habilitar(document.getElementById('po'));
                habilitar(document.getElementById('ci'));
                habilitar(document.getElementById('c1'));
                habilitar(document.getElementById('c2'));
                habilitar(document.getElementById('re'));
                habilitar(document.getElementById('nc'));
                habilitar(document.getElementById('gd'));
              }

            }

          </script>
        <!-- DATOS DE USUARIO -->
        <form action="">
          <?php
          if (isset($_SESSION['user_session'])) {
              $user_session = unserialize($_SESSION['user_session']);

          ?>
          <div class="row">
                <div class="col col-lg-3">
                  <h6 class="text-uppercase font-weight-bold">DATOS DE CUENTA</h6>
                </div>
                <div class="col">
                   <input type="hidden" class="form-control" id="cuenta" disabled="true"/>
                    <input type="checkbox" id="cbx" style="display:none" onclick="editar('cuenta');" />
                    <label for="cbx" class="toggle"><span></span></label>
                </div>
            </div>
          <div class="datos">
            <div class="form-group">
             <label ><i class="icon-s fa fa-user"></i>Usuario</label>
             <input type="text" class="form-control" id="us" placeholder="Nombre de usuario" value="<?php echo $user_session->getUsuario_us();?>" minlength="3" disabled="true" required/>
             <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números. Mínimo 3 caracteres.</small>
            </div>
            <div class="form-group">
             <label><i class="icon-s fas fa-envelope"></i>Correo electrónico</label>
             <input type="email" class="form-control" id="co" placeholder="Correo electrónico" value="<?php echo $user_session->getCorreo_us();?>" disabled required/>
             <small  class="form-text text-muted"></small>
            </div>
            <div class="form-group">
            <label ><i class="icon-s fa fa-lock"></i>Contraseña</label>
            <input type="password" class="form-control" id="ps" placeholder="Contraseña" minlength="3"  disabled required/>
            <small  class="form-text text-muted">Utilice combinación de mayúsculas, minúsculas y números. Mínimo 3 caracteres.</small>
          </div>
          </div>

           <button class="btn btn-outline-secondary my-2 my-sm-0" id="gc" type="submit" disabled>Guardar</button>

          <div class="line"></div>
        </form>
        <!-- DATOS PERSONALES -->
        <form action="">
          <div class="row">
            <div class="col col-lg-3">
              <h6 class="text-uppercase font-weight-bold">DATOS PERSONALES</h6>
            </div>
            <div class="col">
               <input type="hidden" class="form-control" id="personal"/>
              <input type="checkbox" id="cbx1" style="display:none" onclick="editar('personal')"/>
              <label for="cbx1" class="toggle"><span></span></label>
            </div>
           </div>
          <div class="datos">
            <div class="form-group">
             <label ><i class="icon-s fa fa-id-card"></i>Cédula</label>
             <input type="text" class="form-control" minlength="10" maxlength="10" id="ce"placeholder="Cédula" value="<?php echo $user_session->getCedula_us();?>" disabled required/>
             <small  class="form-text text-muted"></small>
            </div>
            <div class="form-group">
               <label ><i class="icon-s fa fa-user"></i>Nombres y apellidos</label>
               <div class="row">
                 <div class="col">
                   <input type="text" class="form-control" id="no"minlength="3" placeholder="Nombres" value="<?php echo $user_session->getNombres_us();?>" disabled required/>
                   <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                 </div>
                 <div class="col">
                   <input type="text" class="form-control" id="ap"placeholder="Apellidos" minlength="3" value="<?php echo $user_session->getApellidos_us();?>" disabled required/>
                   <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                 </div>
               </div>
            </div>
            <div class="form-group">
             <label ><i class="icon-s fa fa-calendar-alt"></i>Fecha de nacimiento</label>
             <input type="date" class="form-control" id="fe" value="<?php echo $user_session->getFecha_nacimiento_us();?>" disabled required>
             <small  class="form-text text-muted"></small>
             </div>
           </div>
           <button class="btn btn-outline-secondary my-2 my-sm-0" id="gp" type="submit" disabled>Guardar</button>
          <div class="line"></div>
        </form>
        <!-- DATOS DE CONTACTO -->
        <form action="">
          <div class="row">
            <div class="col col-lg-3">
              <h6 class="text-uppercase font-weight-bold">DATOS DE CONTACTO</h6>
            </div>
            <div class="col">
              <input type="hidden" class="form-control" id="contacto"/>
              <input type="checkbox" id="cbx2" style="display:none" onclick="editar('contacto')"/>
              <label for="cbx2" class="toggle"><span></span></label>
            </div>
          </div>
          <div class="datos">
           <div class="form-group">
            <label><i class="icon-s fas fa-mobile-alt"></i>Teléfono</label>
            <input type="text" class="form-control" id="te" placeholder="Teléfono"  minlength="10" maxlength="10"value="<?php echo $user_session->getTelefono_us();?>" disabled required/>
            <small  class="form-text text-muted"></small>
           </div>

          </div>
          <button class="btn btn-outline-secondary my-2 my-sm-0" id="go" type="submit" disabled>Guardar</button>
          <div class="line"></div>
        </form>
        <!-- DATOS DE DOMICILIO -->
        <form action="">
          <div class="row">
              <div class="col col-lg-3">
                <h6 class="text-uppercase font-weight-bold">DATOS DE DOMICILIO</h6>
              </div>
              <div class="col">
                  <input type="hidden" class="form-control" id="domicilio"/>
                  <input type="checkbox" id="cbx3" style="display:none" onclick="editar('domicilio')"/>
                  <label for="cbx3" class="toggle"><span></span></label>
              </div>
          </div>
          <div class="datos">
            <div class="form-group">
              <label><i class="icon-s fa fa-flag"></i>Código postal</label>
              <input type="text" class="form-control" id="cp" minlength="4" placeholder="Código postal" value="<?php echo $user_session->getCodigo_postal_us();?>" disabled required/>
              <small  class="form-text text-muted">Mínimo 4 caracteres.</small>
            </div>
            <div class="form-group">
              <label><i class="icon-s fas fa-city"></i>País - Provincia - Ciudad</label>
              <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" id="pa" minlength="3" placeholder="País" value="<?php echo $user_session->getPais_us();?>" disabled required />
                    <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="po" minlength="3" placeholder="Provincia" value="<?php echo $user_session->getProvincia_us();?>"disabled required/>
                    <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" id="ci" minlength="3" placeholder="Ciudad" value="<?php echo $user_session->getCiudad_us();?>" disabled required />
                    <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label><i class="icon-s fas fa-map-marker-alt"></i>Calle 1 - Calle 2</label>
              <div class="row">
                <div class="col">
                 <input type="text" class="form-control" id="c1" minlength="3" placeholder="Calle 1" value="<?php echo $user_session->getCalle_uno_us();?>" disabled required/>
                 <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                </div>
                <div class="col">
                   <input type="text" class="form-control" id="c2" minlength="3" placeholder="Calle 2" value="<?php echo $user_session->getCalle_dos_us();?>" disabled required/>
                    <small  class="form-text text-muted">Mínimo 3 caracteres.</small>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label><i class="icon-s fas fa-map-marker-alt"></i>Referencia</label>
              <input type="text" class="form-control" id="re" minlength="3" maxlength="29" placeholder="Referencia" value="<?php echo $user_session->getReferencia_us();?>" disabled required/>
              <small  class="form-text text-muted">Mínimo 3 caracteres, máximo 30 caracteres</small>
            </div>
            <div class="form-group">
              <label><i class="icon-s fas fa-home"></i>N° de casa</label>
              <input type="number" class="form-control" id="nc" placeholder="N° de casa" value="<?php echo $user_session->getNumero_casa_us();?>" disabled required/>
              <small  class="form-text text-muted"></small>
            </div>
          </div>
          <button class="btn btn-outline-secondary my-2 my-sm-0" id="gd" type="submit" disabled>Guardar</button>
          <div class="line"></div>
        </form>
      </div>
     </div>
     <?php
   }
      ?>
  </body>
  <?php include '../html/footer.php'; ?>
</html>
<?php
}else{
    header('Location: http://localhost/tienda-online/view/tienda/index.php');
}
?>

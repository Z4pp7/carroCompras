<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <?php include '../html/head.php'; ?>
      <link href="../css/carrito.css" rel="stylesheet">
  </head>
  <body>
      <?php include '../html/navbar-l.php'; ?>
      <div class="container">
        <nav class="navbar navbar-light bg-light">
          <span class="navbar-text">

          </span>
        </nav>
        <table class="table table-hover table-bordered text-center">
          <thead>
            <tr>
              <th width="5%">#</th>
              <th width="15%">Código</th>
              <th width="40%">Nombre</th>
              <th width="10%">Precio</th>
              <th width="10%">Cantidad</th>
              <th width="10%">Subtotal</th>
              <th width="10%">--</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button></td>

            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button></td>

            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td>@mdo</td>
              <td><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Eliminar</button></td>

            </tr>
            <tr>

              <td colspan="5" align="right"><h4>Total</h4></td>
              <td >800</td>
              <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Comprar</button></td>

            </tr>
          </tbody>
        </table>
      </div>

  </body>
    <?php include '../html/footer.php'; ?>
</html>

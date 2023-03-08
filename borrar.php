<?php

    $config = include 'config.php';

    $resultado = [
        'error' => false,
        'mensaje' => ''
    ];
    if (isset($_POST['submit'])) {
      try {
          $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
          $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
              
          $id = $_GET['ID'];
          $consultaSQL = "DELETE FROM miembros WHERE ID =" . $id;

          $sentencia = $conexion->prepare($consultaSQL);
          $sentencia->execute();

          header('Location: /index.php');

      } catch(PDOException $error) {
          $resultado['error'] = true;
          $resultado['mensaje'] = $error->getMessage();
      }
    }

    try {
      $dsn = 'mysql:host=' . $config['db']['host'] . ';dbname=' . $config['db']['name'];
      $conexion = new PDO($dsn, $config['db']['user'], $config['db']['pass'], $config['db']['options']);
          
      $id = $_GET['ID'];
      $consultaSQL = "SELECT * FROM miembros WHERE ID =" . $id;

      $sentencia = $conexion->prepare($consultaSQL);
      $sentencia->execute();

      $cliente = $sentencia->fetch(PDO::FETCH_ASSOC);

      if (!$cliente) {
          $resultado['error'] = true;
          $resultado['mensaje'] = 'No se ha encontrado el cliente';
      }

  } catch(PDOException $error) {
      $resultado['error'] = true;
      $resultado['mensaje'] = $error->getMessage();
  }
?>

<?php require "header.php"; ?>
<?php
    if ($resultado['error']) {
?>
<div class="container mt-2">
  <div class="row">
    <div class="col-md-6">
      <div class="alert alert-danger" role="alert">
        <?= $resultado['mensaje'] ?>
      </div>
    </div>
  </div>
</div>
<?php
    }
?>

<div class="container">
  <div class="container-fluid parent">
    <div class="row">
      <div class="col-md-12">
        <h2 class="mt-4">Eliminando el cliente</h2>
          <form method="post">
              <p>¿Esta seguro?</p>
              <p style="text-align:center">
                <input type="submit" name="submit" value="Si"class="btn btn-danger">              
                <a href="index.php" class="btn btn-secondary ml-2">No</a>
              </p>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

<?php require "footer.php"; ?>
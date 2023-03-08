<?php 

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "bomverde"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

    if (isset($_POST['update'])) {

    $Nombre = $_POST['nombre'];

    $Apellido = $_POST['apellido'];

    $Dni = $_POST['dni'];

    $Email = $_POST['correo'];

    $Ingreso = $_POST['ingreso'];

    $Sueldo = $_POST['sueldo'];

    $user_id = $_GET['ID'];


        $sql = "UPDATE `miembros` SET `nombre`='$Nombre',`apellido`='$Apellido',`dni`='$Dni',`correo`='$Email',`ingreso`='$Ingreso',`sueldo`='$Sueldo' WHERE `ID`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Datos del cliente actualizados con exito!.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['ID'])) {

    $user_id = $_GET['ID']; 

    $sql = "SELECT * FROM `miembros` WHERE `ID`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $Nombre = $row['nombre'];

            $Apellido = $row['apellido'];

            $Dni = $row['dni'];

            $Email  = $row['correo'];

            $Ingreso = $row['ingreso'];

            $Sueldo = $row['sueldo'];

            $id = $row['ID'];

        } 

    ?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <section class="vh-100" style="background: linear-gradient(to bottom, #ffffff 0%, #663300 100%)">
  <div class="container py-1080 h-1080">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-sm-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://bavette.es/wp-content/uploads/bombones-san-valentin.jpg"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />

            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-200 p-lg-5 text-black">


        <h2>Actualizar datos del cliente</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Escribir nueva informacion:</legend>

            Nombre:<br>

            <input type="text" name="nombre" value="<?php echo $Nombre; ?>">

            <input type="hidden" name="ID" value="<?php echo $id; ?>">

            <br>

            Apellido:<br>

            <input type="text" name="apellido" value="<?php echo $Apellido; ?>">

            <br>

            Dni:<br>

            <input type="text" name="dni" value="<?php echo $Dni; ?>">

            <br>

            mail:<br>

            <input type="text" name="correo" value="<?php echo $Email; ?>">

            <br>

            Ingreso:<br>

            <input type="text" name="ingreso" value="<?php echo $Ingreso; ?>">

            <br>

            Sueldo:<br>

            <input type="num" name="sueldo" value="<?php echo $Sueldo; ?>">

            <br><br>

            <input type="submit" value="Actualizar" name="update">
               <br><br>
            <a href="index.php">haz click aqui luego de haber actualizado tus datos</a>


          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: index.php');

    } 

}

?> 
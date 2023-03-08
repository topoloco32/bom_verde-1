<?php 

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "bomverde"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

  if (isset($_POST['submit'])) {

    $Nombre = $_POST['nombre'];

    $Apellido = $_POST['apellido'];

    $Dni = $_POST['dni'];

    $Email = $_POST['correo'];

    $Ingreso = $_POST['ingreso'];

    $Sueldo = $_POST['sueldo'];

    $sql = "INSERT INTO `miembros`(`nombre`, `apellido`, `dni`, `correo`, `ingreso`,`sueldo`) VALUES ('$Nombre','$Apellido','$Dni','$Email','$Ingreso','$Sueldo')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "Cliente Agregado Correctamente";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>


<body>

  <section class="vh-100" style="background-color: #7622BB;">
  <div class="container py-1080 h-1080">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-sm-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://i.pinimg.com/originals/fe/19/45/fe19452873fe2a6c4d435a1ebe2d0233.jpg"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />

            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-200 p-lg-5 text-black">

<h2>Crear Nuevo empleado</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Datos a Ingresar:</legend>

    Nombre:<br>

    <input type="text" name="nombre">

    <br>

    Apellido:<br>

    <input type="text" name="apellido">

    <br>

    Dni:<br>

    <input type="text" name="dni">

    <br>

    Email:<br>

    <input type="text" name="correo">

    <br>

    Ingreso:<br>

    <input type="text" name="ingreso">

    <br>

    Sueldo:<br>

    <input type="num" name="sueldo">

    <br><br>

    <input type="submit" name="submit" value="AGREGAR">

  </fieldset>

</form>

</body>

</html>
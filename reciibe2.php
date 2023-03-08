<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bom_verde Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    
<section class="vh-100" style="background-color:#873600;">
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
                  <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Bom_Verde</h4>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">CONTACTANOS</h5>

                 

<?php 
      if(isset($_POST['boton'])){
        $mensaje = $_POST['nombre'];
      }



 ?>

   <form action="entrega1.php" method="POST">
    <p>hola!!!</p>
     <div class="form-outline mb-4">
     <input type="text"name="nombre"value="<?php echo $mensaje ?>"disabled style="background-color:#873600; color: white;border-color: white;border-radius:4px ;">
      <p>Realiza Tu Pedido Aqui</p>
     

  <div class="form-outline mb-4">
    <textarea class="form-control" id="formMsg" rows="2"></textarea>
    <label class="form-label" for="formMsg">Cantidad Y Tipo De Bombones</label>
  </div>

 
  <div class="form-outline mb-4">
    <input type="email" id="formPedido" class="form-control" />
    <label class="form-label" for="formPedido">Indiicar Fecha De Entrega</label>
  </div>
     <p> <mark> Muchas Gracias Por ComunicarseCon Nosotros... </mark> </p>
      <p>  <mark>Nos Estaremos Comunicando Con Usted...</mark> </p>

  <button type="submit" class="btn btn-primary btn-block mb-4"style="background-color:#873600;border-color:#873600;">Enviar</button>

</form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

              </div>         
          </div>
        </div>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
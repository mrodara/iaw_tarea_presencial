<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://tpiaw.com/css/bootstrap.min.css" rel="stylesheet">
    <title>Tarea Presencial IAW</title>
</head>
<body>
    <!-- HEADER-->
    <?php include("./layouts/header.php"); ?>
    <!-- END HEADER-->

    <!-- ENUNCIADO TAREA -->
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Enunciado de la Tarea</h1>
        <p class="col-md-10 fs-4">
            Realiza un CRUD completo con la tabla Usuarios que has importado tal y como se indicó en las instrucciones enviadas 
            para ello dispones de los ficheros <b>show.php (lo usarás para listar todos los usuarios de la BBDD), create.php, edit.php y delete.php</b> en los 
            que deberás incluir el código correspondiente en los lugares indicados.
        </p>
        <p class="col-md-10 fs-4 text-danger">
            Es importante que el código sea lo más legible y eficiente posible. Tenlo presente.
        </p>
      </div>
    </div>
    <!-- FIN ENUNCIADO TAREA -->


    <?php include("./layouts/footer.php") ?>


    <script src="http://tpiaw.com/js/bootstrap.min.js"></script>
</body>
</html>
<!-- INSERTA AQUÍ TU CÓDIGO -->
<?php 

    include("../conexion.php");

    function deleteUser($conexion, $id){

        $sentencia = $conexion->prepare("DELETE FROM users WHERE id = ? ");

        $sentencia->bind_param('i', $id);

        if($sentencia->execute()){

            $url = 'Location:http://tpiaw.com/users/deleteok.php';    
        }else{
            
            $url = 'Location:http://tpiaw.com/users/deleteko.php';
        }

        $sentencia->close();
        $conexion->close();

        header($url);
    }

    if(isset($_POST['txtId'])){
        
       deleteUser($conexion, $_POST['txtId']);
    }

?>
<!-- FIN INSERTA AQUÍ TU CÓDIGO -->

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
    <main>

    
    <!-- HEADER-->
    <?php include("../layouts/header.php"); ?>
    <!-- END HEADER-->

    
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                
            </div>
        </div>
    </div>
    

    <?php include("../layouts/footer.php") ?>

    <script src="http://tpiaw.com/js/bootstrap.min.js"></script>
</body>
</html>
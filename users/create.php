<!-- INSERTA AQUÍ TU CÓDIGO -->
<?php 

    include("../conexion.php");

    function insertUser($conexion, $data){

        $sentencia = $conexion->prepare("INSERT INTO users (name, last_name, email, age) VALUES (?, ?, ?, ?)");

        $sentencia->bind_param('sssi', $data['txtName'], $data['txtLastName'], $data['txtEmail'], $data['txtAge']);

        if($sentencia->execute()){

            $url = 'Location:http://tpiaw.com/users/insertok.php';    
        }else{
            
            $url = 'Location:http://tpiaw.com/users/insertko.php';
        }

        $sentencia->close();
        $conexion->close();

        header($url);
    }

    if(isset($_POST['txtName'])){
        
        insertUser($conexion, $_POST);
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
                <div class="card">                    
                    <div class="card-body">
                        <h5 class="card-title">Creación de Usuario</h5>
                        <p class="card-text">Formulario para la creación de un nuevo usuario en BBDD</p>
                        <form action="create.php" method="post">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name" required>
                                <label for="txtName">Name</label>                                
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Last Name" >
                                <label for="txtLastName">Last Name</label>                                
                            </div>
                            <div class="form-floating  mb-2">
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="name@example.com" required> 
                                <label for="txtEmail">Email address</label>
                            </div>
                            <div class="form-floating  mb-2 col-md-3">
                                <input type="number" class="form-control" id="txtAge" name="txtAge" placeholder="Age">
                                <label for="txtAge">Age</label>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-info">Save</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <?php include("../layouts/footer.php") ?>

    <script src="http://tpiaw.com/js/bootstrap.min.js"></script>
</body>
</html>
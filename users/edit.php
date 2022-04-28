<!-- INSERTA AQUÍ TU CÓDIGO -->
<?php 

    include("../conexion.php");

    function getUser($conexion, $id){

        $user = mysqli_query($conexion,"SELECT * FROM users WHERE id=" .$id);

        $conexion->close();

        return $user->fetch_assoc();
    }

    function updateUser($conexion, $data){

        $sentencia = $conexion->prepare("UPDATE users set name = ?, last_name = ?, email = ?, age = ? WHERE id = ? ");

        $sentencia->bind_param('sssii', $data['txtName'], $data['txtLastName'], $data['txtEmail'], $data['txtAge'], $data['txtIdForm']);

        if($sentencia->execute()){

            $url = 'Location:http://tpiaw.com/users/updateok.php';    
        }else{
            
            $url = 'Location:http://tpiaw.com/users/updateko.php';
        }

        $sentencia->close();
        $conexion->close();

        header($url);
    }

    if(isset($_POST['txtId'])){
        
       $resultado = getUser($conexion, $_POST['txtId']);
    }

    if(isset($_POST['txtIdForm'])){
        updateUser($conexion, $_POST);
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
                        <h5 class="card-title">Edición de Usuario</h5>
                        <p class="card-text">Formulario para la edición de un usuario existente en BBDD</p>
                        <form action="edit.php" method="post">
                            <input type="hidden" name="txtIdForm" value="<?php echo $resultado['id'] ?>">
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Name" 
                                    value="<?php echo $resultado['name'] ?>" required>
                                <label for="txtName">Name</label>                                
                            </div>
                            <div class="form-floating mb-2">
                                <input type="text" class="form-control" id="txtLastName" name="txtLastName" placeholder="Last Name" 
                                    value="<?php echo $resultado['last_name'] ?>" >
                                <label for="txtLastName">Last Name</label>                                
                            </div>
                            <div class="form-floating  mb-2">
                                <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="name@example.com" 
                                    value="<?php echo $resultado['email'] ?>" required> 
                                <label for="txtEmail">Email address</label>
                            </div>
                            <div class="form-floating  mb-2 col-md-3">
                                <input type="number" class="form-control" id="txtAge" name="txtAge" placeholder="Age" 
                                    value="<?php echo $resultado['age'] ?>">
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
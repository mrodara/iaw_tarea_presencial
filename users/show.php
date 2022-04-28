<!-- INSERTA AQUÍ TU CÓDIGO -->
<?php 

    include("../conexion.php");

    function getUsers($conexion){

        $users = mysqli_query($conexion, "SELECT * FROM users");

        $conexion->close();

        return $users;
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
    <!-- HEADER-->
    <?php include("../layouts/header.php"); ?>
    <!-- END HEADER-->

    
    <div class="container m-3 text-center">
        <div class="row">
            <div class="col-md-12">
                <h4>LISTADO DE USUARIOS</h4>
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>LastName</td>
                            <td>Email</td>
                            <td>Age</td>
                            <td colspan="2">Accions</td>
                        </tr>
                    </thead>
                    <tbody>
                    <!-- INSERTA AQUÍ TU CÓDIGO -->
                    <?php 

                        $resultado = getUsers($conexion);
                        
                        if(isset($resultado)){
                            while($user = $resultado->fetch_assoc()){
                                //Añadimos una fila por cada uno de los usuarios obtenidos
                                echo "<tr><td>" .$user['id']. "</td><td>".$user['name']. "</td><td>" .$user['last_name']. 
                                    "</td><td>" .$user['email']. "</td><td>" .$user['age']. 
                                    "</td><td>
                                        <form action='edit.php' method='post'>
                                            <input type='hidden' name='txtId' value='" .$user['id']. "'>
                                            <button type='submit' class='btn btn-primary btn-sm'>Edit</button>
                                        </form>
                                        </td>
                                        <td>
                                            <form action='delete.php' method='post'>
                                                <input type='hidden' name='txtId' value='" .$user['id']. "'>
                                                <button type='submit' class='btn btn-danger btn-sm'>Delete</button>
                                            </form>
                                        </td>
                                    </tr>";
                            }
                        }
                    
                    ?>
                    <!-- FIN INSERTA AQUÍ TU CÓDIGO -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    


    <?php include("../layouts/footer.php") ?>

    <script src="http://tpiaw.com/js/bootstrap.min.js"></script>
</body>
</html>
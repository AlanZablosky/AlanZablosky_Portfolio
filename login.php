<?php
session_start(); //  -> esto me muestra si esta logueado aun

if($_POST){ // Aca dice, si se inicia el metodo _POST, y si usuario es == "Alan Zablosky" y contraseña == " 1234" entonces ...
    if( ($_POST['Usuario'] == "Alan Zablosky") && ($_POST ['Contraseña'] == "1234") ){ /* si esto es valido, se va a logear*/ 
            
            $_SESSION['Usuario'] = "Alan Zablosky"; //asi guardo la variable del nombre de usuario
        
     header("location:index.php"); // si se logeo, lo mando al index
    }else{ // puse una alerta de javascript 
        echo "<script> alert('pone bien tus datos, BOBO'); </script>"; 
    }
    
}

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Inicio de Sesion</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <body>

    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="col"></div>
            <div class="col">
                <br>
                <div class="card">
                    <div class="card-header">Iniciar Sesion</div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                Usuario: <input type="text" class="form-control" name="Usuario" id="">
                                        <br>
                                Contraseña: <input type="password" class="form-control" name="Contraseña" id="">
                                        <br>
                                <button type="submit" class="btn btn-success">
                                    Entrar al portafolio
                                </button>
                            </form>
                        </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    </body>
</html>

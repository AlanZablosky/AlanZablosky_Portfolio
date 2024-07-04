<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<br>
<?php

if($_POST){
    //print_r($_POST);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion']; // recepcion

    $fecha= new DateTime(); // si se suben 2 imagens con el mismo nombre, a la segunda imagen se le agrega numeros de la hora en que se subio

    $imagen = $fecha->getTimestamp() ."_". $_FILES['archivo']['name']; // guarda el nombre y la imagen del archivo
    
    $imagen_temporal = $_FILES['archivo']['tmp_name']; // guarda la imagen como archivos temporal

    move_uploaded_file($imagen_temporal,"img/".$imagen); //mueve la imagen a la carpeta que denominemos
    
    $objConexion = new conexion();
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion-> ejecutar($sql); // ejecutar resive lo de sql y genera una conexxion a ese vinculo insertar
    //si yo le agrego $id = me dice el numero de veces qe se ejecuto la conexion
    header("location:portafolio.php"); //redirecciona a la pagina original

}  
if($_GET){
    // "DELETE FROM proyectos WHERE `proyectos`.`id` = 19"
    
    $id=$_GET['borrar'];
    $objConexion = new conexion(); // se conecta a la base de datos 1) 

    $imagen =$objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id); //buscando en base de datos
    unlink("img/".$imagen[0]['imagen']); // borramos la imagen
    
    $sql ="DELETE FROM proyectos WHERE `proyectos`.`id` = ".$id; // acciona delete buscando por id 2)
    $objConexion-> ejecutar($sql); //cuando lo encuentra, ejecuta
    header("location:portafolio.php");
}
$objConexion = new conexion();
$proyectos = $objConexion-> consultar("SELECT * FROM `proyectos`");
//print_r($proyectos);

?>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Datos del proyecto</div>
                    <div class="card-body">
                        <form action="portafolio.php" method="post" enctype="multipart/form-data">
    
                            Nombre: <input type="text" class="form-control" name="nombre" id=""> 
                            <br> 
                            Imagen: <input type="file" class="form-control"  name="archivo" id=""> 
                            <br> 
                            Descripcion:
                            <textarea class="form-control" name="descripcion" id="" rows="3"></textarea>
                            <br>
                            
                            <button
                                type="submit" class="btn btn-success">
                                Enviar proyecto
                            </button>
                        </form>
                    </div>
            </div>
        </div>
            <div class="col-md-7 ">
                <did class="table-responsive">
                    <table class="table table-sm table-hover"> 
                    <thead class="table-light">      
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php foreach($proyectos as $proyecto) {  ?> <!-- //un ciclo que lee de uno en uno pero todo lo va a leer deacuerdo a un proyecto -->  
                    <tr>
                        <td><?php echo $proyecto['id']; ?></td>
                        <td><?php echo $proyecto['nombre']; ?></td>
                        <td>
                            <img width="100" src="img/<?php echo $proyecto['imagen']; ?>" alt="" srcset="">
                            </td>
                        <td><?php echo $proyecto['descripcion']; ?></td>
                        <td><a class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0); " href="?borrar=<?php echo $proyecto ['id']; ?>"><i class="bi bi-trash"></i></a> </td>
                    </tr>
                    <?php } //6:52:59  ?>
                </tbody>
                    </table>
                </did>
            </div>  
        </div>
</div>







<?php include ("pie.php");?>
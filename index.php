<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php 
$objConexion = new conexion();
$proyectos = $objConexion-> consultar("SELECT * FROM `proyectos`");
?>
<hr id="SobreMi" class=" text-white-50 ">

<div class="container">
    <div  class="p-5 mb-4 rounded-3" >
        <div id="sobremi" class="text-center py-5">
        <h1 class="display-5 fw-bold">
            Me llamo Alan Zablosky
        </h1>
        <p class="col-md-8 fs-4">
        </p>
        <a href="img/Fy.webp">
            <button  class="btn btn-primary btn-lg">Mas info ?</button>
        </a>
        <div class="container-fluid">
            <p>Hola, soy Alan Fernando Zablosky. 
            Este es mi portafolio donde subiré proyectos de práctica con el fin
            de adquirir más conocimiento en el mundo de la programación de páginas web.
            </p>
        </div>
    </div>
    </div>

    <hr id="project" class=" text-white-50">

<div  class="row row-cols-1 row-cols-md-3 g-4 mt-5">

    <?php foreach($proyectos as $proyecto) {  ?>
        <div class="col">
            <a href="">
            <div class="card">
                <img src="img/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
                    <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
                </div>
            </div></a>
        </div>
    <?php } ?> 

</div>

<hr class=" text-white-50 mt-5">

<div id="separar"></div>
<?php include("email.php"); 
include ("pie.php"); ?> 
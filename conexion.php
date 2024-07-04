<?php
// todos datos necesarios para la conexion
class conexion{
    private $servidor = "localhost";
    private $usuario = "root";
    private $contrasenia = "";
    private $conexion;

    public function __construct(){ //envia archivos al servidor / coneccion
        try{
            $this->conexion = new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);    
        }catch( PDOException $e){
            return "falla de conexion".$e;
        }
    }
    public function ejecutar($sql){ // puedes insertar/deletear/actualizar
        $this-> conexion-> exec($sql);
        return $this-> conexion-> lastInsertId();
    }
    public function consultar($sql){ //consulta la base de datos y me trae registros
        $sentencia = $this->conexion->prepare($sql); // prepare guarda la ejecucion en sentencia
        $sentencia-> execute();
        return $sentencia-> fetchAll();
    }
}

?>
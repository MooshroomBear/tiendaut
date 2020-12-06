<?php
class Conexion{
    var $conn;
    function conectar(){
        $conn=NULL;
    

    try{
        $conn = new PDO('mysql:host=localhost;dbname=tiendaout',
        'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //echo 'conectado a la  base de datos <br><br>';
        
    }catch(PDOException $e){
        die(print_r('Error conectando con la base de datos: '. $e -> getMesaje()));
    }
    return $conn;
}// fin func. conectar()
    



}
?>
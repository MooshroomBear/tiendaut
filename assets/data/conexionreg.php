<?php

 class Conexion{
  var $conn;

  function conectar(){
    $conn=NULL;
    try{
      $conn = new PDO ('mysql:host=localhost;dbname=tiendaut',
      'root','');

      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo 'Conectando a la base de datos <br> <br>';

    }catch(PDOException $e){
      die(print_r ('Error conectando con la base de datos: '. $e-> getMessage()));
    }return $conn;
  }

  function buscarUsuario($user, $pass){
    $con = $this->conectar();
    $consulta = 'SELECT * FROM usuario WHERE user=:usuario AND pass=:pass';
    
    $stmt = $con->prepare($consulta);
    $stmt->execute(array(':usuario'=> $user,':pass'=>$pass));
    $registro = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $numRegistros = count($registro);

    return $numRegistros;
}

    function insertarUsuario($user, $pass, $nombre, $correo){
        $con = $this->conectar();

        /*$consulta = 'INSERT INTO usuario(usuario, contrasena, nombre, correo_e)
                     VALUES (:user, :pass, :nombre, :correo)';

        $stmt = $con->prepare($consulta);
        $rows = $stmt->execute(array(':user'=>$user, ':nombre'=>$nombre, ':pass'=>$pass, ':correo'=>$correo));*/

        $stmt = $con->prepare('INSERT INTO usuario(user, pass, nombre, correo) VALUES (:user, :pass, :nombre, :correo)');
        $rows = $stmt->execute(array(':user'=>$user, ':pass'=>$pass, ':nombre'=>$nombre, ':correo'=>$correo));
        
  
        return $rows;
  }

}

function buscarProducto(){

}

?>
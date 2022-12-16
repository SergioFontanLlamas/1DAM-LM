<?php
    /**
     * Para crear una funcion necesito la palabra reservada "function" ademas del nombre que doy
     * 
     * function nombre(parametros){}
     */

     /**
      * Funcion que realiza la conexion a la base de datos con la configuracion que necesitamos
      * @return conexion
      */
     function conectar(){
        $conexion = new mysqli('localhost', 'root', '', 'NBA');
        return $conexion;
     }

     /**
      * Funcion que retorna el array de una elemento filtrado por id
      * @param $id - Contiene el id con el que filtar
      * @param $table - Contiene la tabla en la que realizar la busqueda
      * @return jugador
      */
     function findById($id, $table){
        $conexion = conectar();
        $sql = "SELECT * FROM ". $table ." WHERE id = ".$id;
        return $conexion->query($sql)->fetch_assoc();
     }

     /**
      * Funcion que retorna el array de un elemento filtrado por nombre
      * @param $name - Contiene el nombre con el que filtar
      * @param $table - Contiene la tabla en la que realizar la busqueda
      * @return 
      *         - Array si query correcta. 
      *         - False si query no correcta
      */
     function findByName($name, $table){
        $conexion = conectar();
        $sql = "SELECT * FROM ". $table . " WHERE nombre = '".$name ."'" ;
        $resultado = $conexion->query($sql);
        if($resultado != null){
            return $resultado->fetch_assoc();
        }else{
            return false;
        }
     }

     /**
      * Funcion que retorna todos los elementos
      * @param $table - Contiene la tabla en la que realizar la busqueda
      * @return 
      *         - Array si query correcta. 
      *         - False si query no correcta
      */
     function findAll($table){
        $conexion = conectar();
        $sql = "SELECT * FROM ". $table;
        $resultado = $conexion->query($sql);
        if($resultado != null){
            return $resultado;
        }else{
            return false;
        }
     }

     /**
      * COMPROBACIONES
      */
      // Me devuelve el equipo con id = 1
    //   var_dump(findById(1, 'equipos'));
      // Me devuelve el equipo filtrado con el nombre 'Lebron James'  
    //   var_dump(findByName('Lebron James', 'equipos'));
      // Me devuelve todas las temporadas
    //   var_dump(findAll('temporadas'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
        }
        main{
            background-color: beige;
            width: 100%;
            height: 100%;
            
            display: grid;
            grid-template-columns: repeat(6,auto);
            grid-template-rows: repeat(5,auto);
        }

        .card{
            margin: auto auto;
            background-color: white;
            height: 80%;
            width: 80%;

            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <main>
        <?php
            $resultado = findAll('equipos');

            while($fila = $resultado->fetch_assoc()){
                echo '<div class="card">';
                echo    $fila['nombre'];
                echo '</div>';
            }
        ?>
    </main>
</body>
</html>
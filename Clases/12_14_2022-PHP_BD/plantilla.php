<?php
    /**
     * Para poder recoger el id de la url, necesito utilizar el $_GET[VARIABLE]
     * En este caso, para coger el id, necesito utilizar $_GET['id']
     */
    $id = $_GET['id'];

    // var_dump($id);

    /**
     * getJugadores recibe como parametro una variable llamada localmente $id
     * Esta variable $id debe ser el id que recibo en la URL correspondiente al equipo
     */
    function getJugadores($id){
        /**
         * La variable $conexion contiene la configuracion de la conexion a la base de datos NBA con usuario root, 
         * contraseña vacia y ubicacion en localhost
        */
        $conexion = new mysqli('localhost', 'root', '', 'NBA');

        /**
         * La variable $sql contiene la query que voy a realizar en mi base de datos
        */
        $sql = "SELECT * FROM jugadores WHERE equipo_id = " . $id;

        return $conexion->query($sql);
     }

     function tablaJugadores($id){
        /**
         * Realizamos la query con la sentencia $sql sobre la configuracion de la $conexion.
        * Almaceno en $resultado el retorno de la query
        */
        $resultado = getJugadores($id);
        /**
         * Por cada iteracion del bucle (por cada $fila) genero una fila en la tabla (tr con td).
         */
        while ($fila = $resultado->fetch_assoc()) {
            echo '<tr>';
                echo '<td class="dato">'. $fila['id'] . '</td>';
                echo '<td class="dato">'. $fila['nombre'] . '</td>';
                echo '<td class="dato">'. $fila['procedencia'] . '</td>';
                echo '<td class="dato">'. $fila['altura'] . '</td>';
                echo '<td class="dato">'. $fila['peso'] . '</td>';
            echo '</tr>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dato{
            background-color: beige;
            color: black;
        }
    </style>
</head>
<body>
    <h1>HOLA ESTOY EN PLANTILLAS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Procedencia</th>
                <th>Altura</th>
                <th>Peso</th>
            </tr>
        </thead>
        <tbody>
            <?php
               tablaJugadores($id);
            ?>
        </tbody>
    </table>
</body>
</html>
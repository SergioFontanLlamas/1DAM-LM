<?php
    /**
     * En este fichero nos vamos a conectar a la base de datos y realizar una query determinada.
     * 
     * Una vez se realiza la query y recibo los datos, necesito pintarlos en una tabla o una card
     * 
     * Estos son los pasos:
     * 1. Conexion a la base de datos.
     * 2. Realizacion de la query
     * 3. Recorrido de los datos (foreach)
     * 4. Pintar los datos donde lo necesito
     * 
     * MYSQLI()
     * Es un metodo que conecta con una base de datos determinada en una ubicacion determinada
     * mysqli(UBICACION_BD, USUARIO, PASSWORD, BASE_DATOS)
     * 
     * Ejemplo: new mysqli('localhost', 'root', '', 'NBA');
     * 
     * QUERY()
     * Es un metodo que realiza la query en la base de datos
     * query("QUERY")
     * 
     * Ejemplo: query("SELECT * FROM jugadores")
     * 
     * FETCH_ASSOC()
     * Es un metodo que me formatea el resultado a un array calve-valor que puedo interpretar
     * 
     * Ejemplo: $resultado->fetch_assoc(RESULTADO)
     * 
     */

     function getEquipos(){
        /**
         * La variable $conexion contiene la configuracion de la conexion a la base de datos NBA con usuario root, 
         * contraseña vacia y ubicacion en localhost
        */
        $conexion = new mysqli('localhost', 'root', '', 'NBA');

        /**
         * La variable $sql contiene la query que voy a realizar en mi base de datos
        */
        $sql = "SELECT * FROM equipos";

        return $conexion->query($sql);
     }
     
     

    //  var_dump($resultado);

    /**
     * Recorremos el contenido de $resultado con un bucle while y convertimos cada fila en una iteracion.
     * Para poder interpretarlo correctamente con $clave-$valor, utilizamos la funcion fetch_assoc().
     */
    // while ($fila = $resultado->fetch_assoc()) {
    //     echo $fila['nombre'] . '<br>';
    // }

        function tablaEquipos(){
            /**
             * Realizamos la query con la sentencia $sql sobre la configuracion de la $conexion.
            * Almaceno en $resultado el retorno de la query
            */
            $resultado = getEquipos();
            /**
             * Por cada iteracion del bucle (por cada $fila) genero una fila en la tabla (tr con td).
             */
            while ($fila = $resultado->fetch_assoc()) {
                echo '<tr>';
                    echo '<td class="dato">'. $fila['id'] . '</td>';
                    echo '<td class="dato">'. $fila['nombre'] . '</td>';
                    echo '<td class="dato">'. $fila['ciudad'] . '</td>';
                    echo '<td class="dato">'. $fila['conferencia'] . '</td>';
                    echo '<td class="dato">'. $fila['division'] . '</td>';
                    echo '<td class="dato">
                            <a href="plantilla.php?id='. $fila['id'] . '">' .
                                'ver'.
                            '</a>' .
                        '</td>';
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
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>Conferencia</th>
                <th>Division</th>
                <th>VER PLANTILLA</th>
            </tr>
        </thead>
        <tbody>
            <?php
               tablaEquipos();
            ?>
        </tbody>
    </table>
</body>
</html>
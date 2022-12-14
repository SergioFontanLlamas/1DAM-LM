<?php

    $personajes = array(
        "personaje1" => 'Batman',
        "personaje2" => 'Spiderman',
        "personaje3" => 'Superman',
        "personaje4" => 'Flash',
        "personaje5" => array(
            'nombre' => 'Carlos',
            'apellido' => 'Rufiangel',
            'rol' => 'profesor'
        )
    );

    $coche = array(
        "marca" => "Toyota",
        "modelo" => "CHR",
        "matricula" => "1453MBR",
        "color" => "gris"
    );

    $concesionario = array(
        "coche 1" => array(
            "marca" => "Toyota",
            "modelo" => "CHR",
            "matricula" => "1453MBR",
            "color" => "gris"
        ),
        "coche 2" => array(
            "marca" => "Toyota",
            "modelo" => "CHR",
            "matricula" => "1453MBR",
            "color" => "gris"
        ),
        "coche 3" => array(
            "marca" => "Toyota",
            "modelo" => "CHR",
            "matricula" => "1453MBR",
            "color" => "gris"
        )
    );
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
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <h1>HOLA SOY PHP </h1>
    <h2> MI PERSONAJE FAVORITO ES <?php echo $personajes['personaje5']['nombre'] . ' ' . $personajes['personaje5']['apellido'] ?> pero el mas fuerte es <?php echo $personajes['personaje1']?></h2>

    <?php
        /**
         * foreach es un bucle que recorre el array $personajes y cada iteracion se almacena en una vairbale interna
         * llamada $sergio. Por tanto, $sergio contiene cada valor de cada iteracion.
         * primera iteracion---> $value = 'Batman',
         * segunda iteracion---> $value = 'Spiderman',
         * tercera iteracion---> $value = 'Superman',
         * cuarta  iteracion---> $value = 'Flash',
         * quinta iteracion---> NO HACE NADA PORQUE ES ARRAY. SI FUERA STRING LO PONDRIA 
         */
        foreach ($personajes as $key => $value) {
            if(!is_array($value)){
                echo 'en la posicion '. $key . ' tenemos el valor ' .$value .'<br>';
            }else{
                echo 'en la posicion ' . $key . ' tienes un array, asi que no puedes imprimirlo <br>';
            }
        }
        
        /**
         * Para poner los datos del coche, recorro el array $coche con un foreach
         * Iteracion 1. La $key es marca y el $value es Toyota
         * Iteracion 2. La $key es modelo y el $value es CHR
         * Iteracion 3. La $key es matricula y el $value es 1453MBR
         * Iteracion 4. La $key es color y $value es gris
         */
        foreach ($coche as $key => $value) {
            echo 'La ' . $key . ' de mi coche es ' . $value.'<br>';
        }

        /**
         * Para imprimir los datos del $concesionario, debo utilizar el foreach para recorrer todos los coches.
         * Dentro de este foreach, debo realizar otro foreach para obtener los datos del coche de cada iteracion
         */

         // Empiezo a recorrer el $concesionario
        foreach ($concesionario as $key => $value) {
            // Por cada iteracion del concesionario, el $value es un array.
            // Cada $value tiene los datos de un coche, por lo que debo recorrerlo con otro foreach
            echo $key . ' tiene los siguientes datos: <br> 
                <ol>    
            ';
            foreach ($value as $key_coche => $value_coche) {
                echo '<li> ' . $key_coche . ' es '. $value_coche .'</li>';
            }
            echo '</ol>';
        }
    ?>
        <!-- 
            Realizamos una tabla con el contenido del foreach con los datos del concesionario
        -->
        <table>
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Matricula</th>
                    <th>Color</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Recorremos los datos del concesionario y realizamos una fila (tr) por cada coche con sus datos (td)
                    // Empiezo a recorrer el $concesionario
                    foreach ($concesionario as $key => $value) {
                        // Por cada iteracion del concesionario, el $value es un array.
                        // Cada $value tiene los datos de un coche, por lo que debo recorrerlo con otro foreach
                        echo '<tr>';
                        // Ponemos los datos del coche (td)
                        foreach ($value as $key_coche => $value_coche) {
                            echo '<td class="dato"> ' . $value_coche .'</td>';
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>

</body>
</html>
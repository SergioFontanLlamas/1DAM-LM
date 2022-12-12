<?php
    /**
     * VARIABLES 
     * 
     * Para crear variables, no tengo en cuenta su tipo.
     * unicamente con el simbolo $ se genera una variable 
     * 
     * IMPRIMIR DATOS
     * Para imprimir variables necesito poner una palabra especial "echo"
     * Ejemplo: echo $a;
     * 
     * TIPOS DE DATOS
     * Enteros                                          ---> 5
     * Coma flotante (float) y decimales (double)       ---> 5.5555
     * String                                           ----> "5"
     * boolean                                          ----> true/false
     * Valor nulo                                       ----> null
     * array o coleccion de datos                       ----> array()
     * objetos                                          ----> ¿?
     * 
     * CONSTANTES
     * Son variables que tienen un contenido fijo en el proyecto. No se puede cambiar su contenido
     * La estructura es la siguiente:                   ----> define (NOMBRE, CONTENIDO)
     * 
     * OPERADORES
     * +
     * -
     * *
     * /
     * MOD
     * ++
     * --
     * = 
     * +=
     * -=
     * 
     * COMPARADORES
     * ==               ----> compara el contenido de dos elementos 
     * 5 == 5           ----> true
     * 5 == '5'         ----> en java, Error/warning/false                  
     * ===              ----> compara el contenido y el tipo, es decir, estrictamente iguales
     * 5 == 5           ----> true
     * 5 == '5'         ----> true
     * 5 === '5'        ----> false
     * 5 === 5          ----> true
     * 
     * 
     * ARRAYS
     * Dos tipos:
     * $nombre = [valor, valor, valor, valor];
     * $nombre = array(
     *      clave => valor,
     *      clave => valor,
     *      clave => valor
     * );
     * 
     * BUCLES
     * for(INICIO; CONDICION_FINAL; AVANCE){}
     * foreach($ELEMENTO_ITERACION as ELEMENTO_GRANDE){}
     * 
     * CONDICIONALES
     * if(CONDICION) {} else {}
     * 
     * FUNCIONES PREDEFINIDAS
     * empty(ELEMENTO)                  ----> el elemento es vacio
     * is_integer(ELEMENTO)             ----> el elemento es numero
     * is_array(ELEMENTO)               ----> el elemento es array
     * is_bool(ELEMENTO)                ----> el elemento es booleano
     * is_string(ELEMENTO)              ----> el elemento es string
     */

    $a = 5;
    $b = "hola";
    $c = true;
    $d = null;
    $e = array();
    $f = "https://www.google.es";

    define('URL', 'http://localhost/PROYECTOS/inicio-php/');

    $g = ['Batman', 'Spiderman', 'Superman', 'Flash'];

    $h = array(
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HOLA SOY PHP </h1>
    <p> <?php echo $a?> </p>
    <a href="<?php echo $f?>">ENTRAR EN GOOGLE.ES</a>
    <p> <?php echo URL?> </p>
    <h2> MI PERSONAJE FAVORITO ES <?php echo $h['personaje5']['nombre'] . ' ' . $h['personaje5']['apellido'] ?> pero el mas fuerte es <?php echo '<br>'. $h['personaje1']?></h2>
    <ol>
        <?php
            for($i = 0; $i < count($g); $i++){
                echo '<li>'.$g[$i].'</li>';
            }
        ?>
    </ol>

    <?php
        if(is_array($g)) {
            echo 'TRUE';
        } else if (is_string($g)){
            echo 'FALSE';
        }
    ?>
    <?php
        /**
         * foreach es un bucle que recorre el array $h y cada iteracion se almacena en una vairbale interna
         * llamada $sergio. Por tanto, $sergio contiene cada valor de cada iteracion.
         * primera iteracion---> $value = 'Batman',
         * segunda iteracion---> $value = 'Spiderman',
         * tercera iteracion---> $value = 'Superman',
         * cuarta  iteracion---> $value = 'Flash',
         * quinta iteracion---> NO HACE NADA PORQUE ES ARRAY. SI FUERA STRING LO PONDRIA 
         */
        foreach ($h as $key => $value) {
            if(!is_array($value)){
                echo $value .'<br>';
            }
        }        
    ?>

</body>
</html>
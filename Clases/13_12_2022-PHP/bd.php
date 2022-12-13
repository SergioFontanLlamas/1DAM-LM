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
     * MYSQLI_CONNECT()
     * Es un metodo que conecta con una base de datos determinada en una ubicacion determinada
     * mysqli_connect(UBICACION_BD, USUARIO, PASSWORD, BASE_DATOS)
     * 
     * Ejemplo: mysqli_connect('localhost', 'root', '', 'NBA');
     * 
     * MYSQLI_QUERY()
     * Es un metodo que realiza la query en la base de datos
     * mysqli_query("QUERY", "CONEXION")
     * 
     * Ejemplo: mysqli_query("SELECT * FROM jugadores")
     * 
     * MYSQLI_FETCH_ROW()
     * Es un metodo que me formatea el resultado a un array que puedo interpretar
     * 
     * Ejemplo: mysqli_fetch_row(RESULTADO)
     * 
     * FECTCH_ASSOC revisar
     */

     /**
      * Guardo en la variable $conexion los datos de configuracion de mi conexion a la base de datos
      */
     $conexion = mysqli_connect('localhost', 'root', '', 'NBA');

     // Guardo en la variable $sql la query que voy a realizar
     $sql = "SELECT * FROM jugadores";

     // Guardo en la variable resultado la coleccion de datos resultante de la sentencia de la variable $sql en la $conexion correspondiente
     $resultado = mysqli_query($conexion, $sql);

    // Recooro el resultado y realizo una conversion fila por fila a un formato que entiendo
    while($r = mysqli_fetch_row($resultado)){
        // En mi variable $r tengo cada iteracion de mi resultado en un formato legible (formato de objeto)
        $r['nombre'];
        $r['apellido'];
        $r['altura'];
        // ...
    }
?>
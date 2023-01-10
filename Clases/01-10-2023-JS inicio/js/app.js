/**
 * CONSOLE.LOG
 * 
 * Para imprimir datos en la consola del navegador utilizamos console.log()
 * 
 * Para ver el contenido del console.log() es necesario abrir el navegador con el inspeccionador y dentro de ahi la consola
 */
console.log("me llamo sergio");
console.log(5);
console.log("Hoy estamos a dia "+ 10);

/**
 * PROMPT
 * 
 * El prompt es una herramienta que pide un dato al usuario.
 * Lo utilizamos al principio para mostrar interaccion
 * 
 * prompt('Mensaje')
 * - 'Mensaje' es una frase o cadena de caracteres que le muestro al usuario al pedirle el dato
 */
// prompt('Dame un numero del 1 al 10');
// console.log(prompt('Dame un numero del 1 al 10'));

/**
 * ALERT
 * 
 * Muestra una alerta. Muestra un mensaje en mi navegador.
 * 
 * alert('texto');
 * 
 */

/**
 * VARIABLES
 * 
 * Tenemos tres tipos de palabras para crear las variables:
 * - var: variable normal.
 * - let: variable normal.
 * - const: variable constante (se mantiene con el mismo valor durante todo el codigo).
 * 
 * Las diferencias entre var y let son minimas.
 * Nosotros utilizamos let siempre que podamos.
 * 
 * La sintaxis para crear una variable es:
 * let nombre;
 * let nombre = contenido;
 * 
 * Ejemplos:
 * let numero = 5;
 * var caracteres = "hola";
 * let booleano = true;
 * const pi = 3.14;
 * let indefinido;
 * let cosaNula = null;
 * 
 * 1. Nombres de las variables.
 * - Pueden estar formados por caracteres y numeros. Adicionalmente tambien pueden estar formados por simbolos: dolar ($) y guion bajo (_).
 * - El primer caracter NO puede ser un numero.
 * 
 * Ejemplos:
 * let variable;            // correcto
 * let variable$;           // correcto
 * let _variable;           // correcto
 * let 1variable;           // incorrecto
 * 
 * 2. Variables. TIPOS.
 * En JavaScript tenemos dos grupos de variables: tipos primitivos y tipos de referencia o clases.
 * 
 * 2.1. Variables. Tipos. PRIMITIVOS.
 * Los cinco tipos primitivos que existen en JavaScript son: boolean, number y string. Ademas de estos dos tenemos: null, undefined.
 * - el valor NULL: variable que o bien tiene asignado el valor null o se utiliza para objetos que en ese momento no existen.
 * - el valor UNDEFINED: variable que ha sido definida pero que no contiene valor.
 * 
 * 2.2. Variables. Tipos. CONVERSION.
 * En JavaScript existen metodos que realizan la conversion de tipos.
 *
 * - toString():        convierte cualquier variable a tipo de cadena de caracteres.
 * - parseInt():        convierte un valor string a un valor numerico.
 * - parseFloat():      converte un valor string (o entero) a un valor numerico con decimales.
 * 
 * *NOTA: tanto parseInt() como parseFloat() cumplen dos casos especiales:
 * - devuelven NaN (NotANumber) si su contenido NO es un valor numerico.
 * - se el primer caracter es un numero, continua con los siguientes hasta encontrar uno que no sea numerico
 * 
 */

// Prueba del parseInt que devuelve NaN
let cosa = 'a123asofh';
console.log(parseInt(cosa));

// Prueba con alert que suma dos numeros y los muestra por ventana emergente
let valor = prompt('Dame un numero del 1 al 10');
let valor2 = prompt('Dame un numero del 1 al 10');
console.log(parseInt(valor) + parseInt(valor2));
alert('La suma de los valores que has introducido es: ' + (parseInt(valor) + parseInt(valor2)));
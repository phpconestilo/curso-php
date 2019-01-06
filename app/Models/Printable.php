<?php
/**
 * Es una buena práctica empleaar espacios de nombres en los archivos de nuestro proyecto.
 * Nada garantiza que existan clases con el mismo nombre en diferentes directorios de nuestro proyecto
 * o peeor aun, que requiramos clases de terceros que coincidan con el noombre de nuestras clases.
 * 
 * El problema viene a relucir cuando se importan clases con el mismo nombre...
 * Por convención no se pueden redeclarar las clases o funciones (error fatal)
 * 
 * Para ello se emplean los espacios de nombres. (es como indicar a PHP que las clases aunque lleven el mismo nombre
 * estas se localizan en diferentes espacios de trabajo, y de ser necesario, pueden renombrarse con un sobrenombre
 * al momento de usarlas "use")
 * 
 * Por convención se sigue la estructura de directorios donde se encuentra alojada la clase para el nomre del namespace
 * 
 * Debe ser la primera definición en el script
 */
namespace App\Models;

/**
 * Las interfaces son como contratos, donde se declaran (pero no se definen) los métodos que han
 * de implementar las clases que IMPLEMENTEN dicha interfaz
 * 
 * Todos los metodos deben ser publicos 
 */
interface Printable {
    public function getDescription();
}
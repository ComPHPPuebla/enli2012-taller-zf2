# Taller de Zend Framework 2 ENLi 2012

Este proyecto es un ejemplo de uso del manejador de eventos de ZF2, el cual utiliza los 
siguiente paquetes:

* zendframework/zend-log
* zendframework/zend-eventmanager

## Instalación

Este ejemplo se puede instalar usando Composer. Si no tienes instalado Composer el primer 
paso es instalarlo:

    curl -s http://getcomposer.org/installer | php
    
Una vez instalado, creamos el proyecto

    php composer.phar create-project comphppuebla/zf2ws zf2eventmanager dev-event-manager
    
Esto creará una carpeta llamada `zf2eventmanager` con los archivos necesarios para ejecutar
la prueba de manejo de eventos.

## Modo de uso

Este ejemplo demuestra el uso de logging al recuperar los datos de un autor, desde una 
clase 'mapper'.  

Dentro del archivo `test-event-manager.php` creamos un objeto de la clase `AuthorMapper`
y le pasamos un objeto `Logger` (el cual escribirá entradas en el archivo ubicado en 
`logs/app-log.txt`) y también le asociamos dos eventos uno se ejecutará antes de recuperar
los datos de un autor y el otro después.
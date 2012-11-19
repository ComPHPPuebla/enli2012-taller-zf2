# Taller de Zend Framework 2 ENLi 2012

Este proyecto es un ejemplo de uso del contenedor de inyección de dependencia de ZF2, el 
cual utiliza los siguiente paquetes:

* zendframework/zend-di
* zendframework/zend-eventmanager

## Instalación

Este ejemplo se puede instalar usando Composer. Si no tienes instalado Composer el primer 
paso es instalarlo:

    curl -s http://getcomposer.org/installer | php
    
Una vez instalado, creamos el proyecto

    php composer.phar create-project comphppuebla/zf2ws zf2di dev-dependency-injection
    
Esto creará una carpeta llamada `zf2di` con los archivos necesarios para ejecutar
la prueba de inyección de dependencia.

## Modo de uso

El proyecto contiene dos clases `Author` y `Book` dentro del namespace
`ComPHPPuebla\Model`, el constructor de la clase `Author` define dos parámetros `firstName` 
y `lastName` y la clase `Book` requiere de un objeto de la clase `Author`. 

Dentro del archivo `test-di.php` (que se encuentra en la raíz del proyecto) definimos
las dependencias para crear un objeto de la clase `Book` el cual obtenemos del contenedor. 
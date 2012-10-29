# Taller de Zend Framework 2 ENLi 2012

Este proyecto es un ejemplo de uso del autoloading con classmaps de ZF2 que hace uso de 
los siguiente paquetes:

* zendframework/zend-loader
* zendframework/zend-console
* zendframework/zend-file 

## Instalación

Este ejemplo se puede instalar usando Composer. Si no tienes instalado Composer el primer 
paso es instalarlo:

    curl -s http://getcomposer.org/installer | php
    
Una vez instalado, creamos el proyecto

    php composer.phar create-project comphppuebla/zf2ws zf2autoloading dev-autoloader-classmaps
    
Esto creará una carpeta llamada `zf2autoloading` con los archivos necesarios para ejecutar
la prueba de autloading.

## Modo de uso

Parar poder ejecutar el ejemplo primero debes generar el classmap de las clases que hay
en la carpeta `library`, la cual contiene dos clases Author y Book dentro del namespace
`ComPHPPuebla\Model`.

Dentro de la carpeta `bin` está el archivo `classmap_generator.php` el cual es una versión
modificada que utiliza el autoloader de Composer, ya que no estamos usando ZF2 completo,
solo los paquetes necesarios para nuestro ejemplo. El archivo original está disponible
en el repositorio oficial en Github:

* [classmap_generator.php](https://github.com/zendframework/zf2/blob/master/bin/classmap_generator.php)

Para generar el classmap debemos ejecutar desde nuestra carpeta `library` el siguiente
comando:

    php ../bin/classmap-generator.php -w
    
Esto generará el classmap correspondiente en el archivo `autoload_classmap.php` dentro de
library.

Una vez generado el mapa, ya puedes ejecutar el ejemplo en `test-classmap.php` que se 
encuentra en la raíz del proyecto. Este archivo utiliza un objeto `ClassMapAutoloader` y 
el mapa que acabas de generar, para el autoloading y la creación dos objetos uno de la 
clase `Author` y otro de la clase `Book` y al final se hace un dump de las variables. 
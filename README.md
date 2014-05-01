# Taller de Zend Framework 2 ENLi 2012

Este es un módulo para ZF2 que demuestra la creación e instalacion de Módulos. Contiene
un solo controlador y una ruta que dirige a dos acciones una muestra una lista de autores
de libros de PHP y la segunda muestra los datos personales de un autor en específico.

## Instalación

Este ejemplo se instala usando Composer. Si no tienes instalado Composer el primer paso es
instalarlo:

```bash
$ curl -s http://getcomposer.org/installer | php
```

Una vez instalado creamos el proyecto, usando como base `ZendSkeletonApplication`

```bash
$ php composer.phar create-project -s dev zendframework/skeleton-application zf2
```

Esto creará una carpeta llamada `zf2` con los archivos necesarios para instalar nuestro 
módulo. Para una descripción mas detallada sobre la instalación de 
`ZendSkeletonApplication` visita el repositorio:

* [ZendSkeletonApplication](https://github.com/zendframework/ZendSkeletonApplication)

El siguiente paso es crear un host virtual con la siguiente configuración.

```apache
<VirtualHost *:80>
  ServerName zf2.dev

  DocumentRoot /var/www/zf2/public

  <Directory /var/www/zf2/public>
    Options Indexes FollowSymLinks MultiViews
    AllowOverride All
    Order allow,deny
    Allow from all
  </Directory>

</VirtualHost>
```

Verifica que puedes acceder a tu aplicación 

* [http://zf2.dev](http://zf2.dev)

El siguiente paso es instalar el módulo, modifica el archivo `composer.json` agregando 
como dependencia el módulo de este taller (`BookStore`):

```json
{
    "name": "zendframework/skeleton-application",
    "description": "Skeleton Application for ZF2",
    "license": "BSD-3-Clause",
    "keywords": [
        "framework",
        "zf2"
    ],
    "homepage": "http://framework.zend.com/",
    "require": {
        "php": ">=5.3.3",
        "zendframework/zendframework": "2.*",
        "comphppuebla/zf2ws": "dev-master"
    }
}
```
    
Actualiza las dependencias de tu proyecto ejecutando el siguiente comando:

```bash
$ php composer.phar update
```

Al finalizar deberás tener dentro de la carpeta `vendor` el siguiente archivo 
`vendor/comphppuebla/zf2ws/data/sql/database.sql` el cual debes ejecutar para crear la 
base de datos, el usuario de la base de datos y algunos datos de ejemplo (reemplaza los valores
de usuario y contraseña).

```bash
$ mysql --user=root --password="root" --default-character-set=utf8 < vendor/comphppuebla/zf2ws/data/sql/database.sql
```

El siguiente paso es registrar el módulo en el archivo 
`config/autoload/application.config.php` para que el `ModuleManager` lo pueda inicializar
y configurar.

```php
return array(
    'modules' => array(
        'Application',
        'BookStore',
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
```
    
Como último paso debemos agregar la configuración a nuestra base de datos, para ello 
agregamos los datos de configuración  para el `Zend\Db\Adapter\Adapter` en el archivo
`config/autoload/global.php`

```php
return array(
    'db' => array(
        'driver'         => 'Pdo',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ),
    ),
);
```

Y agregamos la información más sensitiva como usuario, password, nombre de la base de 
datos en el archivo `config\autoload\local.php`, por default el nombre del archivo es
`local.php.dist` puedes crear un archivo nuevo o cambiar la extensión a este último 
archivo.

```php
return array(
    'db' => array(
        'dsn' => 'mysql:dbname=book_store;host=localhost',
        'username' => 'bstore_user',
        'password' => 'book_store_us3r',
    ),
);
```

## Modo de uso

Para comprobar el correcto funcionamiento del módulo `BookStore` abre las siguientes
direcciones:

* [http://zf2.dev/author](http://zf2.dev/author)
* [http://zf2.dev/author/show/1](http://zf2.dev/author/show/1)

La primera muestra la lista de autores completa y la segunda muestra los datos del autor
con ID 1.

<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'BookStore\Controller\Author' => 'BookStore\Controller\AuthorController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'author' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/author[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'BookStore\Controller\Author',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'book-store' => __DIR__ . '/../view',
        ),
    ),
);

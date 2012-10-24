<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'BookStore\Controller\Author' => 'BookStore\Controller\AuthorController',
        ),
    ),
	'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/author[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Author\Controller\Album',
                        'action'     => 'index',
                    ),
                ),
            ),
			'home' => array(
				'type' => 'Zend\Mvc\Router\Http\Literal',
				'options' => array(
					'route'    => '/',
					'defaults' => array(
						'controller' => 'Author\Controller\Album',
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

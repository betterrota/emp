<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Rota\Controller\Rota' => 'Rota\Controller\RotaController',
        ),
    ),
	// The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'rota' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/rota[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Rota\Controller\Rota',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'rota' => __DIR__ . '/../view',
        ),
    ),
);
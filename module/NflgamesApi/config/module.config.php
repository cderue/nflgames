<?php
return array(
    'router' => array(
        'routes' => array(
            'nflgames-api' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/nflgames-api',
                    'defaults' => array(
                        '__NAMESPACE__' => 'NflgamesApi\Controller',
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action][/:id]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array()
                        )
                    )
                )
            ),
        ),
    ),
    
    'service_manager' => array(
      
    ),
    
    'controllers' => array(
        'invokables' => array(
            'NflgamesApi\Controller\Players' => 'NflgamesApi\Controller\PlayersController',
            'NflgamesApi\Controller\Games' => 'NflgamesApi\Controller\GamesController',
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'nflgames-api' => __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    )
);

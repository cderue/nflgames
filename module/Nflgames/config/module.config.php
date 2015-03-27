<?php
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Nflgames\Model\TeamTable;
use Nflgames\Model\PlayerTable;
use Nflgames\Model\GameTable;
use Nflgames\Model\Team;
use Nflgames\Model\Player;
use Nflgames\Model\Game;

return array(
    'router' => array(
        'routes' => array(
            'nflgames' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/games',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Nflgames\Controller',
                        'controller' => 'Index',
                        'action' => 'index'
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
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array()
                        )
                    )
                )
            )
        )
    ),
    
    'service_manager' => array(
        'factories' => array(
            'Nflgames\Model\TeamTable' => function ($sm) {
                $tableGateway = $sm->get('TeamTableGateway');
                $table = new TeamTable($tableGateway);
                return $table;
            },
            'Nflgames\Model\PlayerTable' => function ($sm) {
                $tableGateway = $sm->get('PlayerTableGateway');
                
                $table = new PlayerTable($tableGateway);
                return $table;
            },
            'Nflgames\Model\GameTable' => function ($sm) {
                $tableGateway = $sm->get('GameTableGateway');
                $table = new GameTable($tableGateway);
                return $table;
            },
            'TeamTableGateway' => function ($sm) {
                $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                $resultSetPrototype = new ResultSet();
                $resultSetPrototype->setArrayObjectPrototype(new Team());
                return new TableGateway('team', $dbAdapter, null, $resultSetPrototype);
            },
            'PlayerTableGateway' => function ($sm) {
                $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                $resultSetPrototype = new ResultSet();
                $resultSetPrototype->setArrayObjectPrototype(new Player());
                return new TableGateway('player', $dbAdapter, null, $resultSetPrototype);
            },
            'GameTableGateway' => function ($sm) {
                $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                $resultSetPrototype = new ResultSet();
                $resultSetPrototype->setArrayObjectPrototype(new Game());
                return new TableGateway('game', $dbAdapter, null, $resultSetPrototype);
            }
        )
    ),
    
    'controllers' => array(
        'invokables' => array(
            'Nflgames\Controller\Dashboard' => 'Nflgames\Controller\DashboardController'
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    )
);

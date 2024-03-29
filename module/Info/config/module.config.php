<?php
return [
    'controllers' => [
        'invokables' => [
            'Info\Controller\Info' => 'Info\Controller\InfoController',
        ],
    ],
    'router' => [
        'routes' => [
            'info' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/info',
                    'defaults' => [
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller'    => 'Info',
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => [
                        'type'    => 'Segment',
                        'options' => [
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => [
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                            ],
                        ],
                    ],
                ],
            ],
            'about' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/about',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'about',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
            'charity' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/charity',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'charity',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
            'friends' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/friends',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'friends',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
            'join' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/join',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'join',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
            'contact' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/contact',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'contact',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
            'concerts' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/concerts',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'concerts',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
            'newsletter' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/newsletter',
                    'defaults' => [
                        '__NAMESPACE__' => 'Info\Controller',
                        'controller' => 'Info',
                        'action' => 'newsletter',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'default' => [
                        'type' => 'Segment',
                        'options' => [
                            'route' => '/[:action]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'Info' => __DIR__ . '/../view',
        ],
    ],
];

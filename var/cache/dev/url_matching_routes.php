<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/messages' => [[['_route' => 'messages', '_controller' => 'App\\Controller\\MessagesController::messages'], null, ['POST' => 0], null, false, false, null]],
        '/test2' => [[['_route' => 'test2', '_controller' => 'App\\Controller\\MessagesController::test2'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/all' => [[['_route' => 'all', '_controller' => 'App\\Controller\\TestController::all'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'test', '_controller' => 'App\\Controller\\TestController::test'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'create-task', '_controller' => 'App\\Controller\\TestController::create'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/messages/([^/]++)/recipients/([^/]++)(*:45)'
                .'|/updateStatus/([^/]++)(*:74)'
                .'|/deleteTask/([^/]++)(*:101)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:137)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        45 => [[['_route' => 'get_messages', '_controller' => 'App\\Controller\\MessagesController::getBySenderID'], ['id', 'toId'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'update-status', '_controller' => 'App\\Controller\\TestController::updateTaskStatus'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'delete-task', '_controller' => 'App\\Controller\\TestController::delete'], ['id'], null, null, false, true, null]],
        137 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

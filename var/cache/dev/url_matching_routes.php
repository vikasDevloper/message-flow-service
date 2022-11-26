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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/messages/([^/]++)/recipients(?'
                    .'|(*:39)'
                    .'|/([^/]++)(*:55)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:91)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => '/messages/{id}/recipientss', '_controller' => 'App\\Controller\\MessagesController::get'], ['id'], ['GET' => 0], null, false, false, null]],
        55 => [[['_route' => 'get_messages', '_controller' => 'App\\Controller\\MessagesController::getBySenderID'], ['id', 'toId'], ['GET' => 0], null, false, true, null]],
        91 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

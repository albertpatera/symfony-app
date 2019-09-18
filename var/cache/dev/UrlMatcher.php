<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/lucky/number' => [[['_route' => 'app_lucky_number', '_controller' => 'App\\Controller\\LuckyController::number'], null, null, null, false, false, null]],
        '/article/edit' => [[['_route' => 'edit_article', '_controller' => 'App\\Controller\\ArticleController::editor'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)?(*:52)'
                .'|/a(?'
                    .'|rticle(?'
                        .'|/detail(?:/([^/]++))?(*:94)'
                        .'|(*:101)'
                    .')'
                    .'|bout(*:114)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        52 => [[['_route' => 'article', 'url' => 'uvod', '_controller' => 'App\\Controller\\ArticleController::index'], ['url'], null, null, false, true, null]],
        94 => [[['_route' => 'app_article_detail', 'id' => '1', '_controller' => 'App\\Controller\\ArticleController::detailAction'], ['id'], null, null, false, true, null]],
        101 => [[['_route' => 'app_article', '_controller' => 'App\\Controller\\ArticleController::index'], [], null, null, false, false, null]],
        114 => [
            [['_route' => 'about', '_controller' => 'App\\Controller\\ArticleController::aboutAction'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

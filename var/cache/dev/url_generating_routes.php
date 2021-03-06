<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_blog_index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/']], [], [], []],
    'app_lucky_number' => [[], ['_controller' => 'App\\Controller\\LuckyController::number'], [], [['text', '/moja_liczba']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blog/index']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\BlogController::about'], [], [['text', '/blog/about']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\BlogController::login'], [], [['text', '/blog/login']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\BlogController::list'], [], [['text', '/blog/list']], [], [], []],
    'view' => [['id'], ['_controller' => 'App\\Controller\\BlogController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog/view']], [], [], []],
    'newcat' => [[], ['_controller' => 'App\\Controller\\BlogController::newcat'], [], [['text', '/blog/newcat']], [], [], []],
    'newpost' => [[], ['_controller' => 'App\\Controller\\BlogController::newpost'], [], [['text', '/blog/newpost']], [], [], []],
    'showpost' => [['id'], ['_controller' => 'App\\Controller\\BlogController::showpost'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blog/showpost']], [], [], []],
];

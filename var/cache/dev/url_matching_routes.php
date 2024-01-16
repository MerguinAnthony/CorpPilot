<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/admin/gestion-des-conges' => [[['_route' => 'app_leave_management', '_controller' => 'App\\Controller\\LeaveManagementController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/staff/Demande-de-conges' => [[['_route' => 'app_staff_vacation', '_controller' => 'App\\Controller\\StaffVacationController::index'], null, null, null, false, false, null]],
        '/admin/gestion-des-Employes' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/admin/gestion-des-Employes/ajouter' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/gestion\\-des\\-(?'
                    .'|conges/(?'
                        .'|validation/([^/]++)(*:255)'
                        .'|refus/([^/]++)(*:277)'
                        .'|en\\-attente/([^/]++)(*:305)'
                        .'|suppression/([^/]++)(*:333)'
                    .')'
                    .'|Employes/(?'
                        .'|details/([^/]++)(*:370)'
                        .'|modifier/([^/]++)(*:395)'
                        .'|supprimer/([^/]++)(*:421)'
                    .')'
                .')'
                .'|/staff/vacation/([^/]++)/(?'
                    .'|modify(*:465)'
                    .'|delete(*:479)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        255 => [[['_route' => 'app_leave_management_validation', '_controller' => 'App\\Controller\\LeaveManagementController::validation'], ['id'], null, null, false, true, null]],
        277 => [[['_route' => 'app_leave_management_refus', '_controller' => 'App\\Controller\\LeaveManagementController::refus'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'app_leave_management_en_attente', '_controller' => 'App\\Controller\\LeaveManagementController::enAttente'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'app_leave_management_suppression', '_controller' => 'App\\Controller\\LeaveManagementController::suppression'], ['id'], null, null, false, true, null]],
        370 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        421 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        465 => [[['_route' => 'app_staff_vacation_modify', '_controller' => 'App\\Controller\\StaffVacationController::modify'], ['id'], null, null, false, false, null]],
        479 => [
            [['_route' => 'app_staff_vacation_delete', '_controller' => 'App\\Controller\\StaffVacationController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

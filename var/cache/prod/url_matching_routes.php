<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/gestion\\-des\\-(?'
                    .'|conges/(?'
                        .'|validation/([^/]++)(*:60)'
                        .'|refus/([^/]++)(*:81)'
                        .'|en\\-attente/([^/]++)(*:108)'
                        .'|suppression/([^/]++)(*:136)'
                    .')'
                    .'|Employes/(?'
                        .'|details/([^/]++)(*:173)'
                        .'|modifier/([^/]++)(*:198)'
                        .'|supprimer/([^/]++)(*:224)'
                    .')'
                .')'
                .'|/staff/vacation/([^/]++)/(?'
                    .'|modify(*:268)'
                    .'|delete(*:282)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        60 => [[['_route' => 'app_leave_management_validation', '_controller' => 'App\\Controller\\LeaveManagementController::validation'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'app_leave_management_refus', '_controller' => 'App\\Controller\\LeaveManagementController::refus'], ['id'], null, null, false, true, null]],
        108 => [[['_route' => 'app_leave_management_en_attente', '_controller' => 'App\\Controller\\LeaveManagementController::enAttente'], ['id'], null, null, false, true, null]],
        136 => [[['_route' => 'app_leave_management_suppression', '_controller' => 'App\\Controller\\LeaveManagementController::suppression'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        198 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        224 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        268 => [[['_route' => 'app_staff_vacation_modify', '_controller' => 'App\\Controller\\StaffVacationController::modify'], ['id'], null, null, false, false, null]],
        282 => [
            [['_route' => 'app_staff_vacation_delete', '_controller' => 'App\\Controller\\StaffVacationController::delete'], ['id'], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

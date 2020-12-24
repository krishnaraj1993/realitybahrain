<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/application/config' => [[['_route' => 'config', '_controller' => 'App\\Controller\\AdminController::config'], null, null, null, false, false, null]],
        '/api/properties' => [[['_route' => 'api_property_list', '_controller' => 'App\\Controller\\Api\\PropertyController::index'], null, null, null, false, false, null]],
        '/api/properties/search' => [[['_route' => 'api_property', '_controller' => 'App\\Controller\\Api\\PropertyController::search'], null, null, null, false, false, null]],
        '/application/users' => [[['_route' => 'agency_users', '_controller' => 'App\\Controller\\ApplicationUsersController::index'], null, null, null, false, false, null]],
        '/application/new-users' => [[['_route' => 'application_new_users', '_controller' => 'App\\Controller\\ApplicationUsersController::newUser'], null, null, null, false, false, null]],
        '/application/admin/dashboard' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\ApplicationUsersController::adminDashboard'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/application/search' => [[['_route' => 'user_search', '_controller' => 'App\\Controller\\SearchController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\SecurityController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/application/plans' => [[['_route' => 'user_plans', '_controller' => 'App\\Controller\\UserPlansController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/ap(?'
                    .'|plication/(?'
                        .'|admin/approve\\-plan/([^/]++)/([^/]++)(*:98)'
                        .'|([^/]++)/(?'
                            .'|profile(*:124)'
                            .'|change\\-password(*:148)'
                        .')'
                        .'|a(?'
                            .'|gen(?'
                                .'|t/([^/]++)(?'
                                    .'|(*:180)'
                                    .'|/(?'
                                        .'|new\\-users(*:202)'
                                        .'|user\\-update(*:222)'
                                        .'|dashboard(*:239)'
                                    .')'
                                .')'
                                .'|cy/([^/]++)/(?'
                                    .'|dashboard(*:273)'
                                    .'|update\\-plan/([^/]++)(*:302)'
                                .')'
                            .')'
                            .'|dd\\-to\\-featured\\-list(?:/([^/]++))?(*:348)'
                        .')'
                        .'|fsbo/([^/]++)/dashboard(*:380)'
                        .'|propert(?'
                            .'|ies(?'
                                .'|(?:/([^/]++))?(*:418)'
                                .'|/add(?:/([^/]++))?(*:444)'
                            .')'
                            .'|y(?'
                                .'|(?:/([^/]++))?(*:471)'
                                .'|/([^/]++)/(?'
                                    .'|edit(*:496)'
                                    .'|delete(*:510)'
                                .')'
                            .')'
                        .')'
                        .'|delete\\-assets(?:/([^/]++))?(*:549)'
                        .'|new\\-plan(?:/([^/]++))?(*:580)'
                    .')'
                    .'|i/properties/([^/]++)/status/([^/]++)(*:626)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        98 => [[['_route' => 'plan_approve', '_controller' => 'App\\Controller\\AdminController::adminPlanChange'], ['plan', 'user'], null, null, false, true, null]],
        124 => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\AdminController::userProfile'], ['id'], null, null, false, false, null]],
        148 => [[['_route' => 'user_change_password', '_controller' => 'App\\Controller\\AdminController::userChangePassword'], ['id'], null, null, false, false, null]],
        180 => [[['_route' => 'agent', '_controller' => 'App\\Controller\\AgentController::index'], ['id'], null, null, false, true, null]],
        202 => [[['_route' => 'new_agent', '_controller' => 'App\\Controller\\AgentController::newUser'], ['id'], null, null, false, false, null]],
        222 => [[['_route' => 'update_agent', '_controller' => 'App\\Controller\\AgentController::updateUser'], ['id'], null, null, false, false, null]],
        239 => [[['_route' => 'agent_dashashboard', '_controller' => 'App\\Controller\\AgentController::agentDashboard'], ['id'], null, null, false, false, null]],
        273 => [[['_route' => 'agency_profile', '_controller' => 'App\\Controller\\ApplicationUsersController::agencyDashboard'], ['id'], null, null, false, false, null]],
        302 => [[['_route' => 'agency_plan_update', '_controller' => 'App\\Controller\\ApplicationUsersController::agencyPlanChange'], ['id', 'plan'], null, null, false, true, null]],
        348 => [[['_route' => 'property_featured', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::addToFeaturedList'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'agent_dash', '_controller' => 'App\\Controller\\FsboController::agentDashboard'], ['id'], null, null, false, false, null]],
        418 => [[['_route' => 'property', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::index'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'property_new', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::add'], ['id'], null, null, false, true, null]],
        471 => [[['_route' => 'property_view', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::singleView'], ['id'], null, null, false, true, null]],
        496 => [[['_route' => 'property_edit', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::Propertyedit'], ['id'], null, null, false, false, null]],
        510 => [[['_route' => 'property_delete', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::propertyDelete'], ['id'], null, null, false, false, null]],
        549 => [[['_route' => 'property_assets', 'id' => null, '_controller' => 'App\\Controller\\PropertyController::deleteAssets'], ['id'], null, null, false, true, null]],
        580 => [[['_route' => 'new_plans', 'id' => null, '_controller' => 'App\\Controller\\UserPlansController::newPlan'], ['id'], null, null, false, true, null]],
        626 => [
            [['_route' => 'api_property_status', '_controller' => 'App\\Controller\\Api\\PropertyController::changeStatus'], ['pid', 'status'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'app_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/article/new' => [[['_route' => 'app_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\SecurityController::home'], null, ['GET' => 0], null, false, false, null],
        ],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/denied_access' => [[['_route' => 'denied_access', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/forgotten-password' => [[['_route' => 'app_forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPass'], null, null, null, false, false, null]],
        '/choice' => [[['_route' => 'choice', '_controller' => 'App\\Controller\\SecurityController::choice'], null, null, null, false, false, null]],
        '/user/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\UserController::profile'], null, ['GET' => 0], null, false, false, null]],
        '/user/ActivateAccountWithCode' => [[['_route' => 'ActivateAccountWithCode', '_controller' => 'App\\Controller\\UserController::ActivateAccountWithCode'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/DisabledAccount' => [[['_route' => 'DisabledAccount', '_controller' => 'App\\Controller\\UserController::DisabledAccount'], null, null, null, false, false, null]],
        '/user/profile/delete' => [[['_route' => 'delete_profile', '_controller' => 'App\\Controller\\UserController::delete_profile'], null, ['GET' => 0], null, false, false, null]],
        '/user/profile/edit' => [[['_route' => 'edit_profile', '_controller' => 'App\\Controller\\UserController::edit_profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/all/users' => [[['_route' => 'users_mobile', '_controller' => 'App\\Controller\\UserController::mobile_all_users'], null, ['GET' => 0], null, false, false, null]],
        '/user/login/mobile' => [[['_route' => 'api_loginn', '_controller' => 'App\\Controller\\UserController::api_login'], null, ['POST' => 0], null, false, false, null]],
        '/user/signup/mobile' => [[['_route' => 'api_signup', '_controller' => 'App\\Controller\\UserController::api_signup'], null, ['POST' => 0], null, false, false, null]],
        '/user/resetPasswordUser/mobile' => [[['_route' => 'api_resetPasswordUser', '_controller' => 'App\\Controller\\UserController::api_resetPasswordUser'], null, ['POST' => 0], null, false, false, null]],
        '/user/UpdatePassword/mobile' => [[['_route' => 'api_UpdatePasswordMobile', '_controller' => 'App\\Controller\\UserController::UpdatePassword_Mobile'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/article/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/resetPassword/([^/]++)(*:242)'
                .'|/user/(?'
                    .'|disable_user/([^/]++)(*:280)'
                    .'|ena ble_user/([^/]++)(*:309)'
                    .'|([^/]++)(?'
                        .'|(*:328)'
                        .'|/edit(*:341)'
                    .')'
                    .'|delete/([^/]++)(*:365)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'app_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['idarticle'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['idarticle'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['idarticle'], ['POST' => 0], null, false, true, null]],
        242 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::verifyUserEmail'], ['token'], null, null, false, true, null]],
        280 => [[['_route' => 'disable_user', '_controller' => 'App\\Controller\\UserController::disable_user'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        309 => [[['_route' => 'enable_user', '_controller' => 'App\\Controller\\UserController::enable_user'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        328 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        341 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        365 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

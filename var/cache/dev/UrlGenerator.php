<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'app_article_index' => [[], ['_controller' => 'App\\Controller\\ArticleController::index'], [], [['text', '/article/']], [], []],
    'app_article_new' => [[], ['_controller' => 'App\\Controller\\ArticleController::new'], [], [['text', '/article/new']], [], []],
    'app_article_show' => [['idarticle'], ['_controller' => 'App\\Controller\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'idarticle'], ['text', '/article']], [], []],
    'app_article_edit' => [['idarticle'], ['_controller' => 'App\\Controller\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idarticle'], ['text', '/article']], [], []],
    'app_article_delete' => [['idarticle'], ['_controller' => 'App\\Controller\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'idarticle'], ['text', '/article']], [], []],
    'connect_google' => [[], ['_controller' => 'App\\Controller\\GoogleController::connectAction'], [], [['text', '/connect/google']], [], []],
    'connect_google_check' => [[], ['_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], [], [['text', '/connect/google/check']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_verify_email' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], [], [['text', '/verify/email']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'denied_access' => [[], ['_controller' => 'App\\Controller\\SecurityController::index'], [], [['text', '/denied_access']], [], []],
    'app_forgotten_password' => [[], ['_controller' => 'App\\Controller\\SecurityController::forgottenPass'], [], [['text', '/forgotten-password']], [], []],
    'app_reset_password' => [['token'], ['_controller' => 'App\\Controller\\SecurityController::verifyUserEmail'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/resetPassword']], [], []],
    'choice' => [[], ['_controller' => 'App\\Controller\\SecurityController::choice'], [], [['text', '/choice']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\SecurityController::home'], [], [['text', '/login']], [], []],
    'profile' => [[], ['_controller' => 'App\\Controller\\UserController::profile'], [], [['text', '/user/profile']], [], []],
    'ActivateAccountWithCode' => [[], ['_controller' => 'App\\Controller\\UserController::ActivateAccountWithCode'], [], [['text', '/user/ActivateAccountWithCode']], [], []],
    'disable_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::disable_user'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/disable_user']], [], []],
    'enable_user' => [['id'], ['_controller' => 'App\\Controller\\UserController::enable_user'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/enable_user']], [], []],
    'DisabledAccount' => [[], ['_controller' => 'App\\Controller\\UserController::DisabledAccount'], [], [['text', '/user/DisabledAccount']], [], []],
    'delete_profile' => [[], ['_controller' => 'App\\Controller\\UserController::delete_profile'], [], [['text', '/user/profile/delete']], [], []],
    'edit_profile' => [[], ['_controller' => 'App\\Controller\\UserController::edit_profile'], [], [['text', '/user/profile/edit']], [], []],
    'app_user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'app_user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'app_user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/delete']], [], []],
    'captcha_handler' => [[], ['_controller' => 'CaptchaBundle:CaptchaHandler:index'], [], [['text', '/captcha-handler']], [], []],
    'simple_captcha_handler' => [[], ['_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], [], [['text', '/simple-captcha-handler']], [], []],
];

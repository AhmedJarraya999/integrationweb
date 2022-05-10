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
        '/admin/profile' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\AdminAccountController::profile'], null, null, null, false, false, null]],
        '/admin/admin/login' => [[['_route' => 'admin_account_login', '_controller' => 'App\\Controller\\AdminAccountController::login'], null, null, null, false, false, null]],
        '/admin/admin/logout' => [[['_route' => 'admin_account_logout', '_controller' => 'App\\Controller\\AdminAccountController::logout'], null, null, null, false, false, null]],
        '/admin/booking' => [[['_route' => 'app_admin_booking', '_controller' => 'App\\Controller\\AdminBookingController::index'], null, null, null, false, false, null]],
        '/admins' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminDashboardController::index'], null, null, null, false, false, null]],
        '/admin/stay' => [[['_route' => 'app_admin_stay', '_controller' => 'App\\Controller\\AdminStayController::index'], null, null, null, false, false, null]],
        '/booking' => [
            [['_route' => 'app_booking_index', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, true, false, null],
            [['_route' => 'MyBookings', '_controller' => 'App\\Controller\\BookingController::MyBookings'], null, ['GET' => 0], null, true, false, null],
        ],
        '/booking/print' => [[['_route' => 'printBooking', '_controller' => 'App\\Controller\\BookingController::ImprimerCommande'], null, null, null, false, false, null]],
        '/booking/new' => [[['_route' => 'app_booking_new', '_controller' => 'App\\Controller\\BookingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/comment' => [[['_route' => 'app_comment_index', '_controller' => 'App\\Controller\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/comment/new' => [[['_route' => 'app_comment_new', '_controller' => 'App\\Controller\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/experience/Front' => [[['_route' => 'app_experience_index_front', '_controller' => 'App\\Controller\\ExperienceController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/experience/Front/new' => [[['_route' => 'app_experience_new_front', '_controller' => 'App\\Controller\\ExperienceController::newFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/experience/Back' => [[['_route' => 'app_experience_index_back', '_controller' => 'App\\Controller\\ExperienceController::indexBack'], null, ['GET' => 0], null, false, false, null]],
        '/experience/Back/new' => [[['_route' => 'app_experience_new_back', '_controller' => 'App\\Controller\\ExperienceController::newBack'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/experience/searchAll' => [[['_route' => 'app_experience_searchAll', '_controller' => 'App\\Controller\\ExperienceController::finAllExperiences'], null, ['GET' => 0], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/profile/update' => [[['_route' => 'update_profile', '_controller' => 'App\\Controller\\ProfileController::profile'], null, null, null, false, false, null]],
        '/profile/account' => [[['_route' => 'account_index', '_controller' => 'App\\Controller\\ProfileController::myAccount'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stay' => [[['_route' => 'app_stay_index', '_controller' => 'App\\Controller\\StayController::index'], null, ['GET' => 0], null, true, false, null]],
        '/stay/search' => [[['_route' => 'app_stay_search', '_controller' => 'App\\Controller\\StayController::search'], null, ['POST' => 0], null, false, false, null]],
        '/stay/new' => [[['_route' => 'app_stay_new', '_controller' => 'App\\Controller\\StayController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/search' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\UserController::search'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/([^/]++)/admin/(?'
                    .'|booking/(?'
                        .'|edit(*:203)'
                        .'|delete(*:217)'
                    .')'
                    .'|stay/(?'
                        .'|edit(*:238)'
                        .'|delete(*:252)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|stay/([^/]++)/delete(*:292)'
                    .'|user/([^/]++)(?'
                        .'|(*:316)'
                        .'|/edit(*:329)'
                        .'|(*:337)'
                        .'|(*:345)'
                    .')'
                .')'
                .'|/booking/([^/]++)(?'
                    .'|/(?'
                        .'|book(*:383)'
                        .'|edit(*:395)'
                    .')'
                    .'|(*:404)'
                .')'
                .'|/comment/(?'
                    .'|new/([^/]++)(*:437)'
                    .'|([^/]++)(?'
                        .'|(*:456)'
                        .'|/edit(*:469)'
                        .'|(*:477)'
                    .')'
                .')'
                .'|/experience/(?'
                    .'|Front(?'
                        .'|showDetail/([^/]++)(*:529)'
                        .'|/([^/]++)(?'
                            .'|(*:549)'
                            .'|/edit(*:562)'
                            .'|(*:570)'
                        .')'
                    .')'
                    .'|Back/([^/]++)(?'
                        .'|(*:596)'
                        .'|/edit(*:609)'
                        .'|(*:617)'
                    .')'
                    .'|sayebni/([^/]++)(*:642)'
                .')'
                .'|/profile/accounthost/([^/]++)(*:680)'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:724)'
                .'|/stay/([^/]++)(?'
                    .'|(*:749)'
                    .'|/edit(*:762)'
                    .'|(*:770)'
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
        203 => [[['_route' => 'app_admin_booking_edit', '_controller' => 'App\\Controller\\AdminBookingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        217 => [[['_route' => 'app_admin_booking_delete', '_controller' => 'App\\Controller\\AdminBookingController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'app_admin_stay_edit', '_controller' => 'App\\Controller\\AdminStayController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        252 => [[['_route' => 'app_admin_stay_delete', '_controller' => 'App\\Controller\\AdminStayController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        292 => [[['_route' => 'admin_ads_delete', '_controller' => 'App\\Controller\\AdminStayController::delete2'], ['stay'], null, null, false, false, null]],
        316 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        329 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        337 => [[['_route' => 'app_user_remove', '_controller' => 'App\\Controller\\UserController::remove'], ['user'], ['GET' => 0], null, false, true, null]],
        345 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        383 => [[['_route' => 'app_booking_stay', '_controller' => 'App\\Controller\\BookingController::create'], ['stay'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        395 => [[['_route' => 'app_booking_edit', '_controller' => 'App\\Controller\\BookingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        404 => [
            [['_route' => 'app_booking_show', '_controller' => 'App\\Controller\\BookingController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        437 => [[['_route' => 'comment_exp', '_controller' => 'App\\Controller\\CommentController::comment'], ['experience'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        456 => [[['_route' => 'app_comment_show', '_controller' => 'App\\Controller\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'app_comment_edit', '_controller' => 'App\\Controller\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'app_comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        529 => [[['_route' => 'app_experience_show_front-details', '_controller' => 'App\\Controller\\ExperienceController::seeMore'], ['id'], ['GET' => 0], null, false, true, null]],
        549 => [[['_route' => 'app_experience_show_front', '_controller' => 'App\\Controller\\ExperienceController::showFront'], ['id'], ['GET' => 0], null, false, true, null]],
        562 => [[['_route' => 'app_experience_edit_front', '_controller' => 'App\\Controller\\ExperienceController::editFront'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        570 => [[['_route' => 'app_experience_delete_front', '_controller' => 'App\\Controller\\ExperienceController::deleteFront'], ['id'], ['POST' => 0], null, false, true, null]],
        596 => [[['_route' => 'app_experience_show_back', '_controller' => 'App\\Controller\\ExperienceController::showBack'], ['id'], ['GET' => 0], null, false, true, null]],
        609 => [[['_route' => 'app_experience_edit_back', '_controller' => 'App\\Controller\\ExperienceController::editBack'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        617 => [[['_route' => 'app_experience_delete_back', '_controller' => 'App\\Controller\\ExperienceController::deleteBack'], ['id'], ['POST' => 0], null, false, true, null]],
        642 => [[['_route' => 'app_experience_searchByTitle', '_controller' => 'App\\Controller\\ExperienceController::findByTitle'], ['title'], ['GET' => 0], null, false, true, null]],
        680 => [[['_route' => 'accounthoststay', '_controller' => 'App\\Controller\\ProfileController::AccountHost'], ['stay'], null, null, false, true, null]],
        724 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        749 => [[['_route' => 'app_stay_show', '_controller' => 'App\\Controller\\StayController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        762 => [[['_route' => 'app_stay_edit', '_controller' => 'App\\Controller\\StayController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        770 => [
            [['_route' => 'app_stay_delete', '_controller' => 'App\\Controller\\StayController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

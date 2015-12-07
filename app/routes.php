<?php

/*
 * This is where you add your own custom routes
 */

use Cymbaline\Route;

Route::addRoute('get', '/hello/[:id]', function($request) {
    $controller = new UserController();
    $controller->test_custom_route($request->id);
});

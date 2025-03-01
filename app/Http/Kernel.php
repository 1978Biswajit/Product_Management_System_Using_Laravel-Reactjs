<?php

namespace App\Http\Kernel;
abstract class Kernel
{
    protected $routeMiddleware = [
        // অন্যান্য middleware গুলি এখানে থাকবে
        'role' => \App\Http\Middleware\RoleMiddleware::class,
    ];
}

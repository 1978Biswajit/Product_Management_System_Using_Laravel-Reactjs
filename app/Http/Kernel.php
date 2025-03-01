<?php

namespace App\Http\Kernel;
abstract class Kernel
{
    protected $routeMiddleware = [
        // অন্যান্য middleware গুলি এখানে থাকবে
        'role' => \App\Http\Middleware\RoleMiddleware::class,
        'api' => [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        
    ];
    
}

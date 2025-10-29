<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function(): void {
            Route::middleware( ['web'] )
                ->group(base_path('routes/backend.php'));
        }
    )
        
        
    
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'customer'=> \App\Http\Middleware\CustomerMiddleware::class,
        ]);
            $middleware->validateCsrfTokens(except: [
         '/success',
         '/cancel',
         '/fail',
         '/ipn',
        '/pay-via-ajax', 
        '/payment',
    ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();

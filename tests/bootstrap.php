<?php

require_once __DIR__ . '/../vendor/autoload.php';

(new Laravel\Lumen\Bootstrap\LoadEnvironmentVariables(
    dirname(__DIR__)
))->bootstrap();

$app = new Laravel\Lumen\Application(
    dirname(__DIR__)
);

$app->withFacades();

$app->withEloquent();

$app->configure('address');

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    \Laravel\Lumen\Exceptions\Handler::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    \Laravel\Lumen\Console\Kernel::class
);

$app->register(Integratrcorp\AzamoraAddress\AddressServiceProvider::class);

$app->router->group([
    'namespace' => 'Integratrcorp\AzamoraAddress\Http\Controllers',
], function ($router) {
    require __DIR__ . '/../routes/web.php';
});

return $app;

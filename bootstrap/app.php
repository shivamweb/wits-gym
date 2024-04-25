<?php
use Illuminate\Foundation\Application;

$app = Application::getInstance();
$app->singleton(
    \Illuminate\Contracts\Http\Kernel::class,
    \App\Http\Kernel::class
);

$app->singleton(
    \Illuminate\Contracts\Console\Kernel::class,
    \App\Console\Kernel::class
);

$app->singleton(
    \Illuminate\Contracts\Debug\ExceptionHandler::class,
    \App\Exceptions\Handler::class
);

// Configure the application with custom route directories
return $app->configure('development')->withRouting([
    'web' => [
        __DIR__.'/../routes/web.php',
    ],
    'api' => [
        __DIR__.'/../routes/api.php',
    ],
    'admin' => [
        __DIR__.'/../routes/admin/admin.php',
    ],
])->create();

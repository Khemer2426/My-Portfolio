<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

$tmpPath = '/tmp/laravel';
$runtimePaths = [
    'VIEW_COMPILED_PATH' => $tmpPath.'/views',
    'APP_SERVICES_CACHE' => $tmpPath.'/cache/services.php',
    'APP_PACKAGES_CACHE' => $tmpPath.'/cache/packages.php',
    'APP_CONFIG_CACHE' => $tmpPath.'/cache/config.php',
    'APP_ROUTES_CACHE' => $tmpPath.'/cache/routes.php',
    'APP_EVENTS_CACHE' => $tmpPath.'/cache/events.php',
];

foreach (array_unique(array_map('dirname', $runtimePaths)) as $directory) {
    if (! is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

foreach ($runtimePaths as $name => $value) {
    if (empty($_ENV[$name]) && empty($_SERVER[$name]) && getenv($name) === false) {
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
        putenv($name.'='.$value);
    }
}

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

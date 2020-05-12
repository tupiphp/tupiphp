<?php

/*
|--------------------------------------------------------------------------
| Valid PHP Version
|--------------------------------------------------------------------------
|
| Minimum version of php to run the application is 7.2.
|
*/
$minVersionPHP = '7.2';
if (version_compare(phpversion(), $minVersionPHP, '<')) {
    die("Your PHP version must be {$minVersionPHP} or higher. Current version: " . phpversion());
}
unset($minVersionPHP);

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class
| loader for our application.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Create a new application instance.
|
*/

$app = new Tupi\Application(APP_PATH);

/*
|---------------------------------------------------------------
| Run The Application
|---------------------------------------------------------------
|
| Responsible for starting the execution of your application.
|
*/

$app->run();
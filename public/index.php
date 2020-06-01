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

const COMPOSER_PATH = __DIR__.'/../vendor/autoload.php';

if (! is_file(COMPOSER_PATH)) {
	die("Vendor folder does not exist");
}

require COMPOSER_PATH;

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| Create a new application instance.
|
*/

$app = new Tupi\Application(__DIR__);

/*
|---------------------------------------------------------------
| Run The Application
|---------------------------------------------------------------
|
| Responsible for starting the execution of your application.
|
*/

$app->run();
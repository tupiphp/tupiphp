<?php

namespace App\Configs;

class App
{

    /*
    |--------------------------------------------------------------------------
    | Base Site URL
    |--------------------------------------------------------------------------
    |
    | URL to your Tupi root. This will be your base URL,
    | WITH a trailing slash:
    |
    |	http://example.com/
    |
    */
    public $baseURL = 'http://localhost:8080/';

    /*
    |--------------------------------------------------------------------------
    | Index File
    |--------------------------------------------------------------------------
    |
    | This will be your index.php file, unless you've renamed it to
    | something else. If you are using mod_rewrite to remove the page set this
    | variable so that it is blank.
    |
    */
    public $indexPage = 'index.php';

    /*
    |--------------------------------------------------------------------------
    | URI PROTOCOL
    |--------------------------------------------------------------------------
    |
    | This item determines which getServer global should be used to retrieve the
    | URI string.
    |
    */
    public $requestURI = 'REQUEST_URI';

    /*
    |--------------------------------------------------------------------------
    | Default Locale
    |--------------------------------------------------------------------------
    |
    | The Locale roughly represents the language and location that your visitor
    | is viewing the site from.
    |
    */
    public $locale = 'pt-br';

     /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | The default timezone that will be used in your application to display
    | dates with the date helper, and can be retrieved through app_timezone()
    |
    */
    public $timezone = "America/Brasilia";

    /*
    |--------------------------------------------------------------------------
    | Default Character Set
    |--------------------------------------------------------------------------
    |
    | This determines which character set is used by default in various methods
    | that require a character set to be provided.
    |
    | See http://php.net/htmlspecialchars for a list of supported charsets.
    |
    */
    public $charset = 'UTF-8';
}

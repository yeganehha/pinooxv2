<?php

/**
 * This file doesn't do anything but load essential files.
 */


/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

#boot pinoox
include_once  dirname(__FILE__) . DIRECTORY_SEPARATOR . 'pincore' . DIRECTORY_SEPARATOR . "boot" . DIRECTORY_SEPARATOR . 'boot.php';

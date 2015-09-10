<?php
/**
 * Create the class loader
 */
define( 'LARAVEL_START', microtime( true ) );

//  Composer
require __DIR__ . '/../vendor/autoload.php';

//  Our pre-compiled classes
if ( file_exists( $compiledPath = __DIR__ . '/../vendor/compiled.php' ) )
{
    /** @noinspection PhpIncludeInspection */
    require $compiledPath;
}
elseif ( file_exists( $compiledPath = __DIR__ . '/../storage/framework/compiled.php' ) )
{
    /** @noinspection PhpIncludeInspection */
    require $compiledPath;
}

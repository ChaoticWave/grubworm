<?php
/**
 * Create the app
 *
 * @return Illuminate\Foundation\Application
 */
if ( !function_exists( '__bootstrap' ) )
{
    function __bootstrap()
    {
        static $_app;

        if ( !$_app )
        {
            $_app = new Illuminate\Foundation\Application( realpath( __DIR__ . '/../' ) );
            $_app->singleton( 'Illuminate\Contracts\Console\Kernel', 'DreamFactory\Laravel\Grubworm\Console\Kernel' );
            $_app->singleton( 'Illuminate\Contracts\Debug\ExceptionHandler', 'DreamFactory\Laravel\Grubworm\Exceptions\Handler' );
        }

        //  Return the application instance
        return $_app;
    }
}

return __bootstrap();
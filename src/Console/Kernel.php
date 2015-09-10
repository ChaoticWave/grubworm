<?php namespace DreamFactory\Laravel\Grubworm\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    //******************************************************************************
    //* Methods
    //******************************************************************************

    /** @type array Our artisan commands */
    protected $commands = [
        'DreamFactory\Laravel\Grubworm\Console\Commands\Burrow',
    ];

    //******************************************************************************
    //* Methods
    //******************************************************************************

    /** @inheritdoc */
    protected function schedule( Schedule $schedule )
    {
        //  Nada
    }
}

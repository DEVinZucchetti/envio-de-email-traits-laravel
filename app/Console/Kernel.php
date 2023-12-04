<?php

namespace App\Console;

use App\Console\Commands\SendEmailWithGamesToUser;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{   
    protected $commands =[
        SendEmailWithGamesToUser::class
     ];
     
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        $schedule->command('app:send-email-with-games-to-user')
     /* ->everyMinute()*/
     ->timezone('America/Sao Paulo')
     ->at('18:00');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}

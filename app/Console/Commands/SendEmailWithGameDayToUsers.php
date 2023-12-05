<?php

namespace App\Console\Commands;

use App\Mail\SendEmailWithGameDay;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailWithGameDayToUsers extends Command
{

    protected $signature = 'app:send-email-with-game-day-to-users';


    protected $description = 'Envia um email com um pdf contendo o jogo do dia. Todos os dias as 12h';


    public function handle()
    {

        $products = Product::query()
            ->inRandomOrder()
            ->take(1)
            ->get();

        Mail::to('metzdorfgabriel@gmail.com', 'Gabriel Valadão')->send(New SendEmailWithGameDay($products));
    }
}

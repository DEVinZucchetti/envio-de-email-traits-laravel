<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendEmailWithGameDayToUsers extends Command
{

    protected $signature = 'app:send-email-with-game-day-to-users';


    protected $description = 'Envia um email com um pdf contendo o jogo do dia. Todos os dias as 12h';


    public function handle()
    {

       $products = Product::query()->inRandomOrder()->take(1)->get();

       foreach ($products as $product) {
        Log::info($product->name);
       }
    }
}

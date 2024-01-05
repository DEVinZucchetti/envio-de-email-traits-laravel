<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\SendEmailWithGames;

class SendEmailWithGamesToUsers extends Command
{

    protected $signature = 'app:send-email-with-games-to-users';

    protected $description = 'Envia um Email com um PDF com 10 jogos aleatórios às 08:00 todos os dias';

    public function handle()
    {

            Log::info('entrou no handle');

        $products = Product::query()
            ->inRandomOrder()
            ->take(10)
            # ->whereBetween('price',  [20 , 100]) questao 2
            ->get();

            Mail::to('vdrewbtc@gmail.com', 'Drew Vieira')
            ->send(new SendEmailWithGames($products));

        /*foreach($products as $product) {
            Log::info($product->name);
        }
     */
    }
}
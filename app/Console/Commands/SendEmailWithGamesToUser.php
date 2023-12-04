<?php

namespace App\Console\Commands;

use App\Mail\SendEmailWithGames;
use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailWithGamesToUser extends Command
{  
    protected $signature = 'app:send-email-with-games-to-user';
        
    protected $description = 'Envia email com pdf contendo 10 jogos aleatorios as 8:00 todos os dias';
   
    public function handle()
    {
        Log::info('entrou no handle');


        $products= Product::query()
        ->inRandomOrder()
        ->take(10)
        ->whereBetween('price',[20,100])
        ->get();

        Mail::to('elianamorillo@gmail.com', 'Eliana Morillo')
        ->send(new SendEmailWithGames($products));

        /*foreach($products as $product){
            Log::info($product->name);

        }*/
    }
}

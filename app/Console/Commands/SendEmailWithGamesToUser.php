<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class SendEmailWithGamesToUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email-with-games-to-user';

    /**
     * The console command description.
     *
     * @var string
     */

    
     
    protected $description = 'Envia email com pdf contendo 10 jogos aleatorios as 8:00 todos os dias';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products= Product::query()
        ->inRandomOrder()
        ->take(10)
        ->get();

        foreach($products as $product){
            Log::info($product->name);

        }
    }
}

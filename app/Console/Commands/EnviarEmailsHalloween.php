<?php

namespace App\Console\Commands;

use App\Mail\SendGameEmail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EnviarEmailsHalloween extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:enviar-emails-halloween';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $result =  DB::select('
       select
       count(product_id) as count_avaliation,
       a.product_id,
       p.name as game,
       p.price as price,
       p.description as description ,
       p.cover as cover
       from avaliations a
           join products p on p.id = a.product_id
               where a.recommended = true
               group by
                   product_id,
                   p.name,
                   p.price,
                   p.description,
                   p.cover
               order by count_avaliation desc
               limit 1
            ');

            if(count($result) > 0) {

                Mail::to('rossih726@gmail.com', 'Henrique Rossi')
                ->send(new SendGameEmail($result[0]));
            } 
    }
}


<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateStocks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-stocks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update stock prices';

    /**
     * Execute the console command.
     */
    public function handle()
    {

//    a. Tomar vía API cotizaciones de activos
        return $this->comment('Updated!');
    }
}

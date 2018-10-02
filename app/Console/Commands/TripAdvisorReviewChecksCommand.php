<?php

namespace App\Console\Commands;

use App\Client;
use App\Repositories\TripAdvisorRepository;
use Illuminate\Console\Command;

class TripAdvisorReviewChecksCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ninecloud:tareviewcheck';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs a review check for all active clients with a Trip Advisor source url';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $repo = new TripAdvisorRepository;
        $clients = Client::active()->with('sources')->whereHas('sources',function($q){
            $q->where('source_name','Trip Advisor');
        })->get();
        $data = collect();
        foreach($clients as $c)
        {
            $reviewCheck = $repo->reviewCheck($c);
            $response = $repo->appendSheet($c,$reviewCheck);
            $this->info($c->name . ": " . $response);
        }
            
    }
}

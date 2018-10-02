<?php

namespace App\Http\Controllers;

use App\Client;
use App\Repositories\TripAdvisorRepository;
use Illuminate\Http\Request;
use PulkitJalan\Google\Facades\Google;
use Revolution\Google\Sheets\Facades\Sheets;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('home',[
            'clients' => $clients,
        ]);
    }

    public function sheets()
    {
        Sheets::setService(Google::make('sheets'));
        $sheet = Sheets::spreadsheet('1Anm8GOvRo0RjbbSsatI1qhsy7zq1rzvowYUpqkIh1lI')->sheet('Trip Advisor');

        return $sheet->all();
    }

    public function test()
    {
        $repo = new TripAdvisorRepository;
        $clients = Client::whereHas('sources',function($q){
            $q->where('source_name','Trip Advisor');
        })->get();
        $data = collect();
        foreach($clients as $c)
        {
            
            $taSource = $c->sources()->where('source_name','Trip Advisor')->first();

            if(!empty($taSource))
            {
                $url = $taSource->url;
                $parts = parse_url($url);
                // dd($parts);
                // parse_str($parts['path'], $query);
                preg_match('~-d(.*?)-~', $parts['path'], $result);
                // echo $result[1] . "<br>";  
                $taSource->source_identifier = $result[1];
                $taSource->save();       
                // $data->put($c->name,$repo->getLocationData($taSource->source_identifier));           
            }
            $data->put($c->name,$repo->reviewCheck($c));
    
        }
        return $data;


        return $repo->getLocationData(1791067);
        // $url = 'http://api.tripadvisor.com/api/partner/2.0/location/1791067?key=f0936ff8990e4bc7b625439e547aad0a';
        // $data = json_decode(file_get_contents($url), true);
        // // dd($data);
        // return $data;
    }
}

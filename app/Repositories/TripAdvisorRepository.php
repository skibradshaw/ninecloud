<?php

namespace App\Repositories;

use App\Client;
use App\ReviewCheck;
use Carbon\Carbon;

class TripAdvisorRepository {

	public function getLocationData($location_id)
	{
		$url = $url = 'http://api.tripadvisor.com/api/partner/2.0/location/'.$location_id.'?key='.env('TRIP_ADVISOR_API_KEY');
		$data = json_decode(file_get_contents($url), true);
        // dd($data);
        return collect($data);

	}

	public function reviewCheck(Client $client)
	{
		$taSource = $client->sources()->where('source_name','Trip Advisor')->first();
		$data = null;
		if(!empty($taSource->source_identifier))
		{
			
			$data = $this->getLocationData($taSource->source_identifier);
			$reviewCheck = ReviewCheck::create([
				'source_id' => $taSource->id,
				'check_date' => Carbon::now()->startOfDay(),
				'review_count' => $data['num_reviews'],
				'current_rating' => $data['rating'],
				'current_rank' => $data['ranking_data']['ranking'],
				'ranking_out_of' => $data['ranking_data']['ranking_out_of'],
			]);		
		}
		return $data;
	}

}
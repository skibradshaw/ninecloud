<?php

namespace App\Repositories;

use App\Client;
use App\ReviewCheck;
use Carbon\Carbon;
use PulkitJalan\Google\Facades\Google;
use Revolution\Google\Sheets\Facades\Sheets;

class TripAdvisorRepository {

	public function updateSourceId(ReviewSource $taSource)
	{
        if(!empty($taSource) && !empty($taSource->url))
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
	}

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
		$reviewCheck = null;

		if(empty($taSource->source_identifier)) {
			$this->updateSourceId($taSource);
			$taSource = $taSource->fresh();
		} 
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
		return $reviewCheck;
	}

	/**
	 * Append a Review Check to the client Review Spreadsheet
	 * @param  Client      $client      [description]
	 * @param  ReviewCheck $reviewCheck [description]
	 * @return [type]                   [description]
	 * https://github.com/kawax/laravel-google-sheets
	 * [
		"Date",
		"Current Trip Advisor Reviews",
		"New Trip Advisor Reviews",
		"Trip Advisor Rating",
		"Your TA Rank",
		"Total Tours TA Listings",
		"Original Trip Advisor Reviews",
		"Original Trip Advisor Rating",
		"Original Trip Advisor Rank",
		"Original Trip Advisor Listings",
		"Link"
		]
	 */
	public function appendSheet(Client $client, ReviewCheck $reviewCheck)
	{
		$prevReviewCheck = ReviewCheck::where('source_id',$reviewCheck->source_id)->where('check_date','<',$reviewCheck->source_id)->orderBy('check_date','desc')->first();
		if(!empty($prevReviewCheck))
		{
			$newReviews = $reviewCheck->review_count-$prevReviewCheck->review_count;
		} else {
			$newReviews = 0;
		}

		try {
			Sheets::setService(Google::make('sheets'));
	        $sheet = Sheets::spreadsheet($client->review_sheet_id)->sheet('Trip Advisor');
	        $sheet->append([
				[
				$reviewCheck->check_date->format('n/j/Y'),
				$reviewCheck->review_count,
				$newReviews,
				$reviewCheck->current_rating,
				$reviewCheck->current_rank,
				$reviewCheck->ranking_out_of,
				"",
				"",
				"",
				"",
				$reviewCheck->source->url,
				]
	        ]);
	        return 'Success!';
		} catch (\Exception $e){
			return $e->getMessage();
		}

	}

}
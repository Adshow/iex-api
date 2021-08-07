<?php
namespace App\Services;

use GuzzleHttp\Client;

class SearchService
{
    public function getLatestPrice($company_name)
    {
        try
        {
            $client = new Client(['base_uri' => env('BASE_URI')]);
    
            $response = $client->request('GET', '/stable/stock/'.$company_name.'/quote/latestPrice?token='.env('TOKEN'));
    
            $response = $response->getBody()->getContents();
       
            return array('latestprice' => json_decode($response, true));

        }
        catch(\Exception $e)
        {
            return $e->getResponse()->getBody(true);
        }
    }

}
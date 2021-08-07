<?php
namespace App\Services;

use GuzzleHttp\Client;
use App\Repositories\CompanyRepository;

class SearchService
{
    public function __construct(CompanyRepository $CompanyRepository)
    {
        $this->CompanyRepository = $CompanyRepository;
    }
    
    public function getLatestPrice($company_simbol)
    {
        try
        {
            $client = new Client(['base_uri' => env('BASE_URI')]);
    
            $response = $client->request('GET', '/stable/stock/'.$company_simbol.'/quote/latestPrice?token='.env('TOKEN'));
    
            $response = $response->getBody()->getContents();
       
            return array('latestPrice' => json_decode($response, true));

        }
        catch(\Exception $e)
        {
            return $e->getResponse()->getBody(true);
        }
    }

    public function getCompanyDetails($company_simbol)
    {
        try
        {
            $company_simbol = strtoupper(trim($company_simbol));
            $company = $this->CompanyRepository->getCompany($company_simbol);

            if($company)
            {
                return([
                    'details' => $company,
                    'tags' => $this->CompanyRepository->getTags($company->id)->toArray()
                ]);
            }
            else
            {
                $client = new Client(['base_uri' => env('BASE_URI')]);
                $response = $client->request('GET', '/stable/stock/'.$company_simbol.'/company?token='.env('TOKEN'));
    
                $response = $response->getBody()->getContents();
                
                $details = json_decode($response, true);

                $company = $this->CompanyRepository->saveCompany($details);

               return([
                    'details' => $company,
                    'tags' => $this->CompanyRepository->getTags($company->id)->toArray()
                ]);
            }

        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
<?php

namespace App\Http\Controllers;

use App\Services\SearchService;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    
    public function __construct(SearchService $SearchService)
    {
        $this->SearchService = $SearchService;
    }
    
    public function searchCompany(Request $request)
    {
        if(isset($request->latest))
        {
            return $this->SearchService->getLatestPrice($request->name);
        }
        else if(isset($request->details))
        {
            return $this->SearchService->getCompanyDetails($request->name);
        }
        else
            return response()->json('Erro', 500);
    }
}

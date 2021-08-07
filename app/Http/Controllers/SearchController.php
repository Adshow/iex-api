<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchCompany(Request $request)
    {
        dd($request->all());
    }
}

<?php

namespace App\Repositories;
use Illuminate\Support\Facades\DB;

use App\Models\Company;

use App\Models\CompanyTag;

class CompanyRepository
{
    public function getCompany($company_simbol)
    {
        return Company::where('symbol', $company_simbol)->first();
    }

    public function getTags($company_id)
    {
        return CompanyTag::select('description')->where('company_id', $company_id)->get();
    }

    public function saveCompany($details)
    {
        $company = new Company($details);
        DB::beginTransaction();

        try{

            $company->save();

            foreach($details['tags'] as $tag)
            {
                $company_tag = new CompanyTag();

                $company_tag->company_id = $company->id;
                $company_tag->description = $tag;

                $company_tag->save();
            }
            DB::commit();
            return $company;

        }
        catch (\Exception $e) {
            DB::rollback();
            dd($e);
        }

    }
}
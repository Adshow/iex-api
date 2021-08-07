<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CompanyTag extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
           'company_id',
           'description'
    ];

    protected $table = 'company_tags';
}

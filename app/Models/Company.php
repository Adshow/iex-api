<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
           'symbol',
           'companyName',
           'employees',
           'exchange',
           'industry',
           'website',
           'description',
           'CEO',
           'securityName',
           'issueType',
           'sector',
           'primarySicCode',
           'address',
           'address2',
           'state',
           'city',
           'zip',
           'country',
           'phone',
    ];

    protected $table = 'companies';
}

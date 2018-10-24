<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class countries extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'name',
        'code',
        'currency_code',
        'country_symbol'
    ];
}

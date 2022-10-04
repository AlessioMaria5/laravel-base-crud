<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comics extends Model
{
    protected $fillable = [

        'title',
        'description',
        'thumb',
        'price',
        'sale_date',
        'type'
    ];
}

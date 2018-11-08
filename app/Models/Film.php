<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['name','description','release_date','country','genre','rating','photo','ticket_price', 'slug'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    protected $fillable = ['name', 'contact', 'email', 'business_name', 'business_description', 'address'];
}

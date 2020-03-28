<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class settings extends Model
{
    protected $table = 'settings';
    protected $fillable = ['name', 'tagline', 'logo', 'address', 'city', 'state', 'pin', 'tags', 'phone', 'alt_phone', 'email', 'alt_email', 'added_by', 'timezone', 'homepage', 'blogpage'];

}

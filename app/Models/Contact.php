<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = [
            'fullname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion',
    ];
}

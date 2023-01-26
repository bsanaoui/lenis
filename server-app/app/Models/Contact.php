<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'contact';

    // $fillable to define the model's fields
    protected $fillable = [
        'email',
        'name',
    ];
}

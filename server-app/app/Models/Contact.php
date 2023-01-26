<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'contacts';

    // $fillable to define the model's fields
    protected $fillable = [
        'email',
        'name',
    ];
}

<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Card extends Model
{
    protected $connection = 'mongodb';
	protected $collection = 'card';

    // $fillable to define the model's fields
    protected $fillable = [
        'text',
    ];
}

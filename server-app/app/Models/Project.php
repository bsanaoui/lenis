<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Project extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'project';
    // $fillable to define the model's fields
    protected $fillable = [
        'title',
        'source',
        'href',
    ];
}
<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Project extends Eloquent
{
    protected $connection = 'mongodb';
    protected $fillable = ['title', 'team', 'views', 'manager', 'createdAt', 'lastUpdate', 'history', 'isPublished'];
}

<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Testando extends Eloquent
{
    protected $connection = 'mongodb';

    protected $fillable = [
        'name', 'email', 'password',
    ];
}

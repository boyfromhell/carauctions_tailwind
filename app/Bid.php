<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    use SoftDeletes;

    protected $table = 'bids';
    protected $fillable = [
        'name', 'email', 'password',
    ];

}

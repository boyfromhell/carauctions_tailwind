<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'category_name', 'category_description'
    ];

    public function auctions() {
        return $this->belongsTo(Auction::class);
    }
}

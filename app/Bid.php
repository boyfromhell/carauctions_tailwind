<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bid extends Model
{
    use SoftDeletes;

    protected $table = 'bids';
    protected $fillable = [
        'auction_id', 'user_id', 'bid_value'
    ];

    public function auction() {
        return $this->belongsTo(Auction::class);
    }

     public function user() {
        return $this->belongsTo(User::class);
    }
}

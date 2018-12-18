<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Auction extends Model implements HasMedia
{
    use SoftDeletes;
     use HasMediaTrait;

    protected $table = 'auctions';

    protected $fillable = [
        'category_id', 'auction_name', 'auction_short_description','auction_long_description', 'auction_startbid', 'auction_reserved_price','auction_startdate', 'auction_enddate', 'auction_visitdate', 'auction_collectiondate'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'auction_startdate' => 'datetime',
        'auction_enddate' => 'datetime',
        'auction_visitdate' => 'datetime',
        'auction_collectiondate' => 'datetime',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function bids()
    {
        return $this->hasMany(Bid::class);
    }

    public function car()
    {
        return $this->hasOne(Car::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('auction-main-image')->singleFile();       
    }

}

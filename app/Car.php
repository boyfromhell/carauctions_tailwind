<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Car extends Model implements HasMedia
{
   use SoftDeletes;
   use HasMediaTrait;

   protected $fillable = [
        'name', 'email', 'password',
    ];

    public function auction()
    {
        return $this->belongsTo('App\Auction');
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(130)
            ->height(130);
    }

    public function registerMediaCollections()
    {
        $this->addMediaCollection('car-main-image')->singleFile();   
        $this->addMediaCollection('car-all-images');      
    }
}

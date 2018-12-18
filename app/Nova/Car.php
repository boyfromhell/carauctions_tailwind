<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\BelongsTo;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Car extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Car';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(),

            Images::make('Main image', 'car-main-image')
                ->thumbnail('thumb')
                ->rules('required'),// second parameter is the media collection name 
          
            Images::make('All car images', 'car-all-images')
                ->conversion('medium-size')
                ->multiple()
                ->fullSize() 
                ->rules('required', 'size:3'),

            BelongsTo::make('Auction'),

            Text::make('Car Brand')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car Model')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car Type')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car Buildyear')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car KM')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car VIN')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car Motor')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            Text::make('Car Cilinder')
                ->rules('required', 'string', 'max:255')
                ->sortable(),
        ];

    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}

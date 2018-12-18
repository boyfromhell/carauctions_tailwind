<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Auction extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Auction';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'auction_name';

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

            BelongsTo::make('Category'),

            Images::make('Auction image', 'auction-main-image')
                ->thumbnail('thumb')
                ->rules('required'),// second parameter is the media collection name 

            Text::make('Auction Name')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

            BelongsTo::make('Car'),

             Text::make('Auction Short Description')
                ->rules('required', 'string', 'max:255')
                ->sortable(),

             Markdown::make('Auction Long Description')
                ->rules('required')
                ->onlyOnForms()
                ->sortable(),

             Currency::make('Auction Startbid')
                ->rules('required', 'integer')
                ->onlyOnForms()
                ->sortable(),

             Currency::make('Auction Reserved Price')
                ->rules('required', 'integer')
                ->onlyOnForms()
                ->sortable(),


            DateTime::make('Auction Startdate')
                ->rules('required', 'date')
                ->format('DD MMM YYYY')
                ->sortable(),

            DateTime::make('Auction Enddate')
                ->rules('required', 'date')
                ->format('DD MMM YYYY')
                ->sortable(),

            DateTime::make('Auction Visitdate')
                ->rules('required', 'date')
                ->hideFromIndex()
                ->format('DD MMM YYYY')
                ->sortable(),

            DateTime::make('Auction Collectiondate')
                ->rules('required', 'date')
                 ->hideFromIndex()
                ->format('DD MMM YYYY')
                ->sortable(),

            DateTime::make('Created At')
                ->rules('required', 'date')
                ->exceptOnForms()
                ->hideFromIndex()
                ->format('DD MMM YYYY')
                ->sortable(),

            DateTime::make('Updated At')
                ->rules('required', 'date')
                ->exceptOnForms()
                ->hideFromIndex()
                ->format('DD MMM YYYY')
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

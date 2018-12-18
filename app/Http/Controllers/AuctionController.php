<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Category;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions = Auction::paginate(5);
        $categories = Category::all();

        return view('admin.auctions.index', [
            'auctions' => $auctions,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'auction_name'                  => 'required|min:5|max:50',
            'auction_category_id'              => 'required',
            'auction_short_description'     => 'required|max:255',
            'auction_long_description'      => 'required|max:255',
            'auction_startbid'              => 'required',
            'auction_reserved_price'        => 'required',
            'auction_startdate'             => 'required|date|after:today',
            'auction_enddate'               =>  'required|date|after:auction_startdate',
            'auction_visitdate'             => 'required|date',
        ]);


        if ($request->isMethod('post')) {
            $auction = new Auction;
            $auction->auction_name = request()->auction_name;
            $auction->category_id = request()->auction_category;
            $auction->auction_short_description = request()->auction_short_description;
            $auction->auction_long_description = request()->auction_long_description;
            $auction->auction_startdate = Carbon::parse(request()->auction_startdate);
            $auction->auction_planned_closedate = Carbon::parse(request()->auction_planned_closedate);

            $auction->save();
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function show(Auction $auction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function edit(Auction $auction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auction $auction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auction  $auction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auction $auction)
    {
        //
    }
}

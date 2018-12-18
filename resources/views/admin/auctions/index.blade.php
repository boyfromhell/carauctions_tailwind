@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">
        <div class="rounded shadow">
            <div class="font-medium text-lg text-teal-darker bg-teal p-3 rounded-t">
                Auctions
            </div>
            <div class="bg-white p-3 rounded-b">
                

                <p class="text-grey-dark">
            <table class="table table-striped table-bordered table-list">
                <thead>
                    <tr>
                        <th class="hidden-xs">Auction id</th>
                        <th>Auction name</th>
                        <th>Auctions description</th>
                        <th><em class="fa fa-cog"></em>   Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $auctions as $auction )
                    <tr>
                        <td align="center" class="hidden-xs">{{ $auction->id }}</td>
                        <td>{{ $auction->auction_name }}</td>
                        <td>{{ $auction->auction_short_description }}</td>
                        
                        <td align="center">
                       
                            
                          
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

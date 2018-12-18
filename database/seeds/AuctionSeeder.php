<?php

use Illuminate\Database\Seeder;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auctions')->delete();
        $auctions = [
            [
                'id'                        => 1, 
                'category_id'               => 1, 
                'auction_name'              => 'Veiling 1', 
                'auction_short_description' => 'Veiling 1 - short description', 
                'auction_long_description'  => 'Veiling 1 - long description', 
                'auction_startbid'          =>  50000,
                'auction_reserved_price'    =>  55000,
                'auction_startdate'         => new DateTime('2018-11-01'), 
                'auction_enddate'           => new DateTime('2018-11-31'), 
                'auction_visitdate'         => new DateTime('2018-11-05'), 
                'auction_collectiondate'    => new DateTime('2018-12-20'),  
                'created_at'                => new DateTime, 
                'updated_at'                => new DateTime
            ],
            [
                'id'                        => 2, 
                'category_id'               => 2, 
                'auction_name'              => 'Veiling 2', 
                'auction_short_description' => 'Veiling 2 - short description', 
                'auction_long_description'  => 'Veiling 2 - long description', 
                'auction_startbid'          =>  20000,
                'auction_reserved_price'    =>  25000,
                'auction_startdate'         => new DateTime('2018-12-01'), 
                'auction_enddate'           => new DateTime('2018-12-31'), 
                'auction_visitdate'         => new DateTime('2018-12-05'), 
                'auction_collectiondate'    => new DateTime('2019-01-20'),  
                'created_at'                => new DateTime, 
                'updated_at'                => new DateTime
            ],
        
        
        
        ];
        DB::table('auctions')->insert($auctions);
    }
}

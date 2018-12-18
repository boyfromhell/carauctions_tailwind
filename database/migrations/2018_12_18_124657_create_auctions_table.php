<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                    ->references('id')->on('categories')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->string('auction_name');
            $table->string('auction_short_description');
            $table->text('auction_long_description');
            $table->integer('auction_startbid');
            $table->integer('auction_reserved_price');
            $table->datetime('auction_startdate');
            $table->datetime('auction_enddate');
            $table->datetime('auction_visitdate');
            $table->datetime('auction_collectiondate');
            $table->timestamps();
            $table->softDeletes();
 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
}

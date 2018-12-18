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
            $table->increments('id');
            $table->integer('category_id')->unsigned()->index();
            $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');
            $table->string('auction_name');
            $table->string('auction_short_description');
            $table->text('auction_long_description');
            $table->integer('auction_startbid');
            $table->integer('auction_reserved_price');
            $table->timestamp('auction_startdate');
            $table->timestamp('auction_enddate');
            $table->timestamp('auction_visitdate');
            $table->timestamp('auction_collectiondate');
            $table->timestamps();
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

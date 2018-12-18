<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id')->unsigned();
            $table->integer('auction_id')->unsigned();
            $table->foreign('auction_id')
                    ->references('id')
                    ->on('auctions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->unsigned()
                    ->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->integer('bid_value');
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
        Schema::dropIfExists('bids');
    }
}

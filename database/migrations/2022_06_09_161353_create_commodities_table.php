<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('current_price');
            $table->integer('old_price')->default(0);
            $table->integer('no_of_deals')->default(0);
            $table->integer('no_of_buys')->default(0);
            $table->integer('no_of_sells')->default(0);
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
        Schema::dropIfExists('commodities');
    }
};

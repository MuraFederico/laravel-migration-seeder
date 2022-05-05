<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->char('company', 100)->nullable();
            $table->char('departure_station', 100);
            $table->char('arrival_staion', 100);
            $table->dateTime('departure_time', 0);
            $table->dateTime('arrival_time', 0);
            $table->smallInteger('train_code');
            $table->tinyInteger('cart_number')->nullable();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name_tic', 255);
            $table->string('status_tic', 1)->default('A');
            $table->string('city_start', 255)->nullable();
            $table->string('city_end', 255)->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_return')->nullable();
            $table->integer('scale_number')->default(0);
            $table->decimal('price_tic', 10, 2)->default(0, 00);
            $table->decimal('duration_tic', 10, 2)->default(0, 00);
            $table->unsignedBigInteger('id_air');
            $table->foreign('id_air')->references('id')->on('airlines');
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
        Schema::dropIfExists('tickets');
    }
}
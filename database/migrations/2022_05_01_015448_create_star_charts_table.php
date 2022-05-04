<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * sail artisan make:migration create_star_charts_table
     * @return void
     */
    public function up()
    {
        Schema::create('star_charts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('month');
            $table->string('image_name');
            $table->string('download_bw');
            $table->string('download_c');
            $table->text('details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('star_charts');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * sail artisan make:migration create_constellations_table
     * @return void
     */
    public function up()
    {
        Schema::create('constellations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('image_name');
            $table->string('alias');
            $table->text('details');
            $table->text('myth');
            $table->string('hemisphere');
            $table->string('season');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('constellations');
    }
};

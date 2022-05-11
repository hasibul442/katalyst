<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDyestuffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dyestuffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dyestuff_name')->nullable();
            $table->string('dyestuff_image')->nullable();
            $table->longText('description')->nullable();
            $table->string('application')->nullable();
            $table->enum("status",['Active', 'Deactive'])->nullable();
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
        Schema::dropIfExists('dyestuffs');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position_name')->nullable();
            $table->string('vacancy')->nullable();
            $table->string('salary')->nullable();
            $table->string('exprience')->nullable();
            $table->string('application_dead_line')->nullable();
            $table->longText('description')->nullable();
            $table->enum('status',['Active', 'Deactive'])->nullable();
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
        Schema::dropIfExists('jobposts');
    }
}

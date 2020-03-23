<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContestantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contestants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug'); // Field name same as your `saveSlugsTo`
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->integer('sn');
            $table->string('image')->nullable();
            $table->string('votes')->default(0);
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
        Schema::dropIfExists('contestants');
    }
}

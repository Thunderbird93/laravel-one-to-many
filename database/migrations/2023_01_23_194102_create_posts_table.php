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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->date('date');
            $table->string('image');
            $table->text('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return voidphp
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
};

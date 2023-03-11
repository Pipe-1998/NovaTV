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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->text('description');
            $table->enum('quality', ['easy', 'hard']);
            $table->String('image');
            $table->date('release_year');
            $table->integer('reproduction_number');
            $table->String('language');
            $table->String('video_link');
            $table->String('download_link');
            $table->timestamps();

            // foreign keys
            $table->usignedBinteger('role_id');
            $table->foreogn('user_id')->references(id)->on('users');
            
            $table->unsignedB1integer('category_id');
            $table->foreogn('category_id')->references(id)->on('users')
                                                    ->on('categories')
                                                    ->onUpdate('cascade')
                                                    ->onDelete('cascade');

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
        Schema::dropIfExists('movies');
    }
};

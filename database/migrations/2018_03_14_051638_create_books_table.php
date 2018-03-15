<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('author');
            $table->integer('page_number');
            $table->text('description');
            $table->unsignedInteger('category_id');
            $table->tinyInteger('status');
            $table->unsignedInteger('activity_id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

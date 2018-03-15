<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('list_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('book_id');
            $table->string('name');
            $table->date('borrowed_day');
            $table->date('pay_day');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('list_requests');
    }
}

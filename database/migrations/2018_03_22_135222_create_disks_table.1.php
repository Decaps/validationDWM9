<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisksTable extends Migration
{
    
    public function up()
    {
        Schema::create('disks', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('author');
            $table->date('year');
            $table->text('genre');
            $table->integer('stock');
            $table->select('cd, vinyl');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('disks');
    }
}

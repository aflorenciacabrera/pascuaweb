<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');  
            $table->string('tipo'); 
            $table->string('tamano');  
            $table->string('medida'); 
            $table->string('peso'); 
            $table->string('sabor');         
            $table->string('precio');  
            $table->string('avatar')->default('default.jpg');  
             $table->integer('User_id')->unsigned();
             $table->foreign('User_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}

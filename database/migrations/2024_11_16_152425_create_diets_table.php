<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //al ser relacion un cliente puede tener muchas dietas, ponemos en dietas la clave foranea de client
    //ya que dietas es la N
    public function up(): void
    {
        Schema::create('diets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->integer('totalCalories');
            $table->date('date')->default(now());

            $table->unsignedBigInteger('id_client');//FK
            $table->foreign('id_client')->references('id')->on('users');//FK
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diets');
    }
};

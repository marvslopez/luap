<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employeetable', function (Blueprint $table) {
            $table->id('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('address');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->integer('zip');
            $table->integer('age');
            $table->date('birthdate');
            $table->date('datehired');
            $table->string('department');
            $table->string('division');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employeetable');
    }
};

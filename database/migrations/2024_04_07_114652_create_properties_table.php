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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table ->string('Name')->nullable();
            $table ->string('Desc')->nullable();
            $table ->string('Price')->nullable();
            $table ->string('Type')->nullable();
            $table ->string('Status')->nullable();
            $table ->string('Area')->nullable();
            $table ->string('Room')->nullable();
            $table ->string('Bath')->nullable();
            $table ->string('Features')->nullable();
            $table ->string('NearBy')->nullable();
            $table ->string('Location')->nullable();
            $table ->string('MainPic')->nullable();
            $table ->string('SubPic1')->nullable();
            $table ->string('SubPic2')->nullable();
            $table ->string('SubPic3')->nullable();
            $table ->string('SubPic4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

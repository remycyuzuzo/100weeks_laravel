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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('personnel_type');
            $table->string('tel_number');
            $table->string('gender');
            $table->string('status')->default('active');
            $table->string('profile_image')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('address')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnels');
    }
};

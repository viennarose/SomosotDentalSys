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
        Schema::create('patient_records', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthdate');
            $table->integer('age');
            $table->string('sex');
            $table->string('nickname')->nullable();
            $table->string('homeNum')->nullable();
            $table->string('officeNum')->nullable();
            $table->string('faxNum')->nullable();
            $table->string('contact')->nullable();
            $table->string('email')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('address')->nullable();
            $table->string('occupation')->nullable();
            $table->string('insurance')->nullable();
            $table->date('effectDate')->nullable();
            $table->string('parentName')->nullable();
            $table->string('parentJob')->nullable();
            $table->string('referral')->nullable();
            $table->string('visitReason')->nullable();
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
        Schema::dropIfExists('patient_records');
    }
};

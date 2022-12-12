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
        Schema::create('treatment_records', function (Blueprint $table) {
            $table->id();
            $table->date('dateToday');
            $table->integer('toothNum');
            $table->unsignedBigInteger('procedure');
            $table->string('dentist');
            $table->bigInteger('amountCharged');
            $table->bigInteger('amountPaid');
            $table->bigInteger('balance');
            $table->date('nextAppt')->nullable();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patient_records')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('procedure')->references('id')->on('services');
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
        Schema::dropIfExists('treatment_records');
    }
};

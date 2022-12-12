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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            //dental history
            $table->string('prevDentist')->nullable();
            $table->date('lastDental')->nullable();
            //medical history
            $table->string('physician')->nullable();
            $table->string('specialty')->nullable();
            $table->string('physicianAdd')->nullable();
            $table->string('officeNum')->nullable();
            $table->string('goodHealth')->nullable();
            $table->string('medTreatment')->default('No');
            $table->string('surgicalOp')->default('No');
            $table->string('hospitalized')->default('No');
            $table->string('medications')->default('No');
            $table->string('tobacco')->nullable();
            $table->string('dangerousDrug')->default('No');
            $table->string('allergies')->default('No');
            $table->string('bleeding')->nullable();
            $table->string('pregnant')->nullable();
            $table->string('nursing')->nullable();
            $table->string('birthControl')->nullable();
            $table->string('bloodType')->nullable();
            $table->string('bloodPressure')->nullable();
            $table->string('conditions')->nullable();
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id')->on('patient_records')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('histories');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CareOperational extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('allergies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->index();
            $table->string('allergies');
        });

        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->index();
            $table->integer('doctor_id')->nullable();
            $table->integer('clinic_id')->nullable();
            $table->integer('payment_id')->default(0);
            $table->integer('status_id')->default(0);
            $table->float('weight')->default(0);
            $table->float('height')->default(0);
            $table->float('bp_sys')->default(0);
            $table->float('bp_dia')->default(0);
            $table->text('subjective')->nullable();
            $table->text('physical_check')->nullable();
            $table->text('assessment')->nullable();
            $table->text('planning')->nullable();
            $table->text('diagnosis')->nullable();
            $table->string('icd10')->nullable();
            $table->string('refer_to')->nullable();
            $table->enum('status', ['Booked', 'Queued', 'Examination', 'Lab Test', 'Cashier', 'Pharmacy', 'Finished', 'Canceled'])->default('Queued');
            $table->timestamps();
        });

        Schema::create('drug_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appointment_id')->index();
            $table->integer('drug_id')->index();
            $table->string('dosage')->nullable();
            $table->string('qty')->default(0);
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::create('procedure_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('appointment_id')->index();
            $table->integer('procedure_id')->index();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('allergies');
        Schema::drop('appointments');
        Schema::drop('drug_records');
        Schema::drop('procedure_records');
    }
}

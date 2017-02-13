<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('med_rec');
            $table->string('allergies');
            $table->timestamps();
        });

        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('med_rec');
            $table->integer('payment_id')->default('0');
            $table->integer('status_id')->default('0');
        });

        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('med_rec');
            $table->integer('visit_id');
            $table->text('subjective');
            $table->text('objective');
            $table->timestamps();
        });

        Schema::create('assesments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id');
            $table->integer('visit_id');
            $table->string('icd10');
            $table->string('diagnosis');
            $table->timestamps();
        });

        Schema::create('rec_drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('med_rec');
            $table->integer('drug_id');
            $table->integer('record_id');
            $table->integer('visit_id');
            $table->string('drug');
            $table->timestamps();
        });

        Schema::create('rec_procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('med_rec');
            $table->integer('record_id');
            $table->integer('visit_id');
            $table->integer('procedure_id');
            $table->timestamps();
        });
        Schema::create('patients',function(Blueprint $patient){
            $patient->increments('id');
            $patient->integer('med_rec')->unique();
            $patient->string('ktp')->nullable();
            $patient->string('name');
            $patient->string('phone')->nullable();
            $patient->string('address')->nullable();
            $patient->date('birth_date')->nullable();
            $patient->enum('gender', ['Male', 'Female']);
            $patient->enum('religion', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'])->nullable();
            $patient->string('job');
            $patient->enum('marriage',['belum','menikah','janda','duda']);
            $patient->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('patients');
        Schema::drop('allergies');
        Schema::drop('visits');
        Schema::drop('records');
        Schema::drop('assesments');
        Schema::drop('rec_drugs');
        Schema::drop('rec_procedures');
    }
}

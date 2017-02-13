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
            $table->string('date');
            $table->integer('med_rec');
            $table->integer('payment_id');
            $table->integer('status_id');
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
            $table->integer('drug_id');
            $table->integer('record_id');
            $table->integer('visit_id');
            $table->string('drug');
            $table->timestamps();
        });

        Schema::create('rec_procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('record_id');
            $table->integer('visit_id');
            $table->integer('procedure_id');
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
        Schema::drop('patients');
        Schema::drop('allergies');
        Schema::drop('visits');
        Schema::drop('records');
        Schema::drop('assesments');
        Schema::drop('rec_drugs');
        Schema::drop('rec_procedures');
    }
}

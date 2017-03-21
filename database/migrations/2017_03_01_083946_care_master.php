<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CareMaster extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('doctor_id')->nullable();
            $table->integer('patient_id')->nullable();
            $table->timestamps();
        });

        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nik')->nullable();
            $table->string('name');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('religion', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'])->nullable();
            $table->string('occupation')->nullable();
            $table->enum('marriage_status', ['Belum Menikah', 'Menikah', 'Janda/Duda']);
            $table->timestamps();
        });

        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('barcode')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('composition')->nullable();
            $table->string('preparation')->nullable();
            $table->string('unit')->nullable();
            $table->double('price', 18, 2);
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('diagnoses', function (Blueprint $table) {
            $table->string('icd10')->primary();
            $table->string('description')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('procedures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price', 18, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('clinics');
        Schema::drop('patients');
        Schema::drop('drugs');
        Schema::drop('diagnoses');
        Schema::drop('insurances');
        Schema::drop('procedures');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MasterData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tmark');
            $table->string('composition');
            $table->string('preparation');
            $table->string('unit');
            $table->integer('price');
            $table->integer('stock');
            $table->timestamps();
        });

        Schema::create('diagnosis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icd10');
            $table->string('desc');
            $table->string('desc_id');
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
            $table->integer('price');
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
        Schema::drop('clinics');
        Schema::drop('doctors');
        Schema::drop('employes');
        Schema::drop('drugs');
        Schema::drop('diagnosis');
        Schema::drop('insurances');
        Schema::drop('procedures');
    }
}

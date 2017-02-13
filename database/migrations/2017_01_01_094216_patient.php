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
        Schema::create('patients', function(Blueprint $Patient){
            $Patient->increments('id');
            $Patient->integer('med_rec');
            $Patient->string('name');
            $Patient->string('birth');
            $Patient->enum('gender',['male','female']);
            $Patient->enum('religion',['islam','katolik','protestan', 'hindu','budha','konghucu','lainnya']);
            $Patient->string('address');
            $Patient->string('phone');
            $Patient->timestamps();
        });
        Schema::create('allergies', function(Blueprint $al){
            $al->increments('id');
            $al->integer('med_rec');
            $al->string('allergies');
            $al->timestamps();
        });
        Schema::create('visits', function(Blueprint $visit){
            $visit->increments('id');
            $visit->string('date');
            $visit->integer('med_rec');
            $visit->integer('payment_id');
            $visit->integer('status_id');
        });
        Schema::create('records',function(Blueprint $record){
            $record->increments('id');
            $record->integer('med_rec');
            $record->integer('visit_id');
            $record->text('subjective');
            $record->text('objective');
            $record->timestamps();
        });
        Schema::create('assesments',function(Blueprint $a){
            $a->increments('id');
            $a->integer('record_id');
            $a->integer('visit_id');
            $a->string('icd10');
            $a->string('diagnosis');
            $a->timestamps();
        });
        Schema::create('rec_drugs', function(Blueprint $drug){
            $drug->increments('id');
            $drug->integer('drug_id');
            $drug->integer('record_id');
            $drug->integer('visit_id');
            $drug->string('drug');
            $drug->timestamps();
        });
        Schema::create('rec_procedures', function(Blueprint $proc){
            $proc->increments('id');
            $proc->integer('record_id');
            $proc->integer('visit_id');
            $proc->integer('procedure_id');
            $proc->timestamps();
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

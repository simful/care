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
        
        Schema::create('mClinics',function(Blueprint $clinic){
            $clinic->increments('id');
            $clinic->string('cName');
            $clinic->string('cAddress');
            $clinic->string('cPhone');
            $clinic->string('cMail');
            $clinic->timestamps();
        });
        Schema::create('mDoctors',function(Blueprint $dr){
            $dr->increments('id');
            $dr->string('name');
            $dr->string('phone');
            $dr->string('address');
            $dr->string('email');
            $dr->string('sip');
            $dr->timestamps();
        });
        Schema::create('mEmployes',function(Blueprint $emp){
            $emp->increments('id');
            $emp->string('name');
            $emp->string('phone');
            $emp->string('address');
            $emp->string('email');
            $emp->string('sip');
            $emp->timestamps(); 
        });
        Schema::create('mDrugs',function(Blueprint $drug){
            $drug->increments('id');
            $drug->string('tmark');
            $drug->string('composition');
            $drug->string('preparation');
            $drug->string('unit');
            $drug->integer('price');
            $drug->integer('stock');
            $drug->timestamps();
        });
        Schema::create('mDiagnosis',function(Blueprint $dx){
            $dx->increments('id');
            $dx->string('icd10');
            $dx->string('desc');
            $dx->string('desc_id');
            $dx->timestamps();
        });
        Schema::create('mInsurances',function(Blueprint $ins){
            $ins->increments('id');
            $ins->string('name');
            $ins->timestamps();
        });
        Schema::create('mProcedures',function(Blueprint $pro){
            $pro->increments('id');
            $pro->string('name');
            $pro->integer('price');
            $pro->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mClinics');
        Schema::drop('mDoctors');
        Schema::drop('mEmployes');
        Schema::drop('mDrugs');
        Schema::drop('mDiagnosis');
        Schema::drop('mInsurances');
        Schema::drop('mProcedures');
    }
}

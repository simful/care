<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agent_id')->index();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['Male', 'Female']);
            $table->enum('religion', ['Islam', 'Katolik', 'Protestan', 'Hindu', 'Buddha', 'Konghucu', 'Lainnya'])->nullable();
            $table->enum('role', ['Administrator', 'Doctor', 'Nurse', 'Accounting', 'Pharmacist', 'Laboratorist', 'Staff', 'Patient'])->default('Patient');
            $table->string('sip')->nullable();

            // prefs
            $table->json('settings')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('users');
    }
}

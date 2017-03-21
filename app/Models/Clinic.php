<?php

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    protected $guarded = ['_token'];

    public function patient()
    {
        return $this->belongsTo('Patient');
    }

    public function doctor()
    {
        return $this->belongsTo('User', 'doctor_id');
    }

    public function appointments()
    {
        return $this->hasMany('Appointment');
    }
}

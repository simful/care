<?php

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
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

    public function clinic()
    {
        return $this->belongsTo('Clinic');
    }

    public function drugRecords()
    {
        return $this->hasMany('DrugRecord');
    }
}

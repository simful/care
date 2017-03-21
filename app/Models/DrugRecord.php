<?php

use Illuminate\Database\Eloquent\Model;

class DrugRecord extends Model
{
    public function drug()
    {
        return $this->belongsTo('Drug');
    }
}

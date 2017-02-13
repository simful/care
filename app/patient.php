<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $fillable=['med_rec','name','phone','address','birth_date','gender','religion','job','marriage','ktp'];
}

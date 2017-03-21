<?php

use Illuminate\Database\Eloquent\Model;

class AccountGroup extends Model
{
    public $connection = 'tenant';
    public $guarded = [];
    public static $rules = [];

    public $timestamps = false;
}

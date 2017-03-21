<?php

use Illuminate\Database\Eloquent\Model;

class Tax extends Model
{
	public $connection = 'tenant';
	public $guarded = [];
	public $timestamps = false;
}

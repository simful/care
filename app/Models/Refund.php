<?php

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    public $guarded = [];

    public static $rules = [
        //'customer_id' => 'required',
    ];

    public $dates = [
        'created_at',
        'updated_at'
    ];

	function invoice() {
		return $this->belongsTo('Invoice');
	}
}

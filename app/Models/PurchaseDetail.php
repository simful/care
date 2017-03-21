<?php

use Illuminate\Database\Eloquent\Model;

class PurchaseDetail extends Model
{
    public $connection = 'tenant';
    public $guarded = [];
    public static $rules = [];

    function purchase() {
        return $this->belongsTo('Purchase');
    }

    function company() {
        return $this->belongsTo('Company', 'company_id');
    }

    function supplier() {
        return $this->belongsTo('Company', 'supplier_id');
    }

    function product() {
        return $this->belongsTo('Product', 'product_id');
    }
}

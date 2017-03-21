<?php

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    protected $appends = ['avatar'];

    public function getAvatarAttribute()
    {
        if (App::environment('local')) {
            return '/img/default-avatar-female.png';
        } else {
            return '//www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
        }
    }
}

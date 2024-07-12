<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $fillable = [
            'phone_number'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function topics()
    {
        //grab all $this->>users
        //iterate over users
        //extract user topics
        //return topics

        return $this->hasManyThrough(Topic::class,User::class);
//      return $this->hasManyThrough(Topic::class,User::class,'groupe_id','user_id','id');
    }
}

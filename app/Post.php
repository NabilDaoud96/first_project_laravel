<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    //whne we use Model::create([]) we must put our attribut in fillable Carbon.php
    protected $fillable = [
        'title',
        'content'
    ];

//   1 whre we create a new date in db we must add it here to use it diffForUmans()
    protected $dates = [
        'new_date'
    ];


//   2 methodes witout condition
      public function getTitle()
      {
          return $this->title;
      }



//   3 Scope(query builde) with condition
      public function scopeTitle($query,$title)
      {
          return $query->where('title','=',$title);
      }

    public function scopeOrderByCreatedAt($query)
    {
        return $query->OrderBy('created_at','desc');
    }


//   4 route model bunding  (id it works a default )
      public function getRouteKeyName()
      {
          return 'slug'; // TODO: Change the autogenerated stub
      }

//   5 accessors (the affiche them we yse response->json())

    protected $appends = [
       'humanCreatedAt'
    ];
    public function getHumanCreatedAtAttribute()
    {
        return $this->created_at->diffForHummans;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }




}

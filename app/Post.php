<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{ 
    use Sluggable;
    protected $fillable=[
        'title','description','user_id','imge',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

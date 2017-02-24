<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    /**
     * scope returns only online article and by DESC date (Last article first)
     * @param $query
     * @return mixed
     */

    protected $fillable = ['title', 'body'];


    public function scopeOrderDateDesc($query){
        return $query->orderBy('created_at', 'desc');
    }
}

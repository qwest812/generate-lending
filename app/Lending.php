<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lending extends Model
{
    //

    protected $guarded = [];

    public function comments()
    {
        return $this->belongsToMany('App\Comment', 'comments', 'lending_id', 'id');
    }

    public function statistics()
    {
        return $this->belongsToMany('App\Statistic', 'statistics', 'lending_id', 'id');
    }
}

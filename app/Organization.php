<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


    protected $dates = [
        'deleted_at'
    ];

    public function creator(){
        return $this->belongsTo('App\User');
    }

    public function teems(){
        return $this->hasMany('App\Teem');
    }

    public function users(){
        return $this->hasManyThrough('App\User', 'App\Teem');
    }

}

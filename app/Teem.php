<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teem extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'organization_id',
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

    public function organization(){
        return $this->belongsTo('App\Organization');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }

}

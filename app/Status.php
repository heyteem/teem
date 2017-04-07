<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    protected $table = 'statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'status_type_id',
        'until',
        'user_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];


    protected $dates = [
        'deleted_at',
        'until'
    ];

    public function statusType(){
        return $this->belongsTo('App\StatusType');
    }

    public function user(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

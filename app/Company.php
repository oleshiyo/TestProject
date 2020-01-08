<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $table = 'companies';

    protected $fillable = array('name', 'description');

    public function persons(){
        return $this->hasMany('App\Person');
    }

    public function contact(){
        return $this->morphMany(Contact::class, 'owner');
    }

    public function tasks(){
        return $this->hasMany('App\Task');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use SoftDeletes;

    protected $table = 'persons';

    protected $fillable = array('name', 'surname', 'position');

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function contact(){
        return $this->morphMany(Contact::class, 'owner');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'tasks';

    protected $fillable = array('name', 'description', 'priority', 'status', 'date_start', 'date_end');

    public function company(){
        return $this->belongsTo(Company::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getUser(){
        return $this->belongsTo(Task::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $timestamps = false;
    public function statusid()
    {
        return $this->belongsTo(Statuse::Class);
    }
}
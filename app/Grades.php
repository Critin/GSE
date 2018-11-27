<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    protected $table = 'grades';

    protected $fillable = [
        'name', 'level'
    ];

    public function study(){
        return $this->hasMany(Studies::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = [ 
        'name', 'lastname', 'age'
    ];

    public function study(){
        return $this->hasOne(Studies::class);
    }
}

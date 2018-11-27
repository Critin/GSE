<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';

    protected $fillable = [ 
        'name', 'city', 'pc'
    ];

    public function owner(){
        return $this->hasMany(Students::class, 'id');
    }
}

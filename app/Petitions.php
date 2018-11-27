<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petitions extends Model
{
    protected $table = 'petitions';

    protected $fillable = [ 
        'id_company','id_grade','type','n_students'
    ];

    public function owner(){
        return $this->belongsTo(Companies::class, 'id_company');
    }

    public function grades(){
        return $this->belongsTo(Grades::class, 'id_grade');
    }
}

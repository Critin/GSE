<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    protected $table = 'studies';

    protected $fillable = [ 
        'id_student','id_grade'
    ];

    public function grades(){
        return $this->belongsTo(Grades::class, 'id_grade');
    }

    public function owner(){
        return $this->belongsTo(Students::class, 'id_student');
    }
}

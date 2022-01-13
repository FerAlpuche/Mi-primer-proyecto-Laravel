<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //fillable: Contiene los atributos que se pueden asignar masivamente 
    //guarded:  Sirve para definir los campos que no queremos que se asignen masivamente 
    //protected $fillable = ['title', 'url', 'description'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }

}

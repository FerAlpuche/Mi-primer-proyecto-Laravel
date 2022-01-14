<?php

namespace App\Models;

use App\Project;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

        //Define la relacion entre project y category
        public function projects()
        {
            //Retornamos la relacion entre las dos tablas
            return $this->hasMany(Project::class);
        }

}

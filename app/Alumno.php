<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
   protected $fillable = [
   		'nombre', 'semestre', 'porcentajeCarrera','disponiblidad','idCarrera','email','password'
   ];
   
   public function cursos(){
      return $this->belongsToMany('App\Curso', 'cursos_alumnos');
   }

   public function carreras(){
      return $this->belongsTo('App\Carrera', 'carrera_alumnos');
   }
    public function users(){
      return $this->belongsTo('App\User', 'users_alumnos');
   }
}

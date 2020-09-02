<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table='Posts';
    //primary key
    public $primaryKey='id';
     //Timestamps
     public $timestamps= true; 
    
     public function user(){
         return $this->belongsTo('App\User');
     }
}

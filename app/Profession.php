<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    // para definir una table distinta ===== protected $table = 'nombre_de_table';
    //para quitar columna created_at ======= public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];


    //metodo hasmany
    public function users(){
      return $this->hasMany(User::class);
    }
}

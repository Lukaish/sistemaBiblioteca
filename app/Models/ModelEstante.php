<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEstante extends Model
{
    use HasFactory;

    protected $table = 'estante';
    protected $fillable = ['id', 'identificador'];

    public function relLivro(){
        return $this->hasMany('App\Models\ModelLivros','id');

    }
}

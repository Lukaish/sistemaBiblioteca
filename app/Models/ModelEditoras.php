<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEditoras extends Model
{
    use HasFactory;
    protected $table = 'editora';
    protected $fillable = ['id', 'nome', 'cnpj', 'dataCriacao'];

    public function relLivro(){
        return $this->hasMany('App\Models\ModelLivros','id');

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAutores extends Model
{
    use HasFactory;
    protected $table = 'autor';
    protected $fillable = ['id', 'nome', 'cpf', 'dataNascimento'];

    public function relLivro(){
        return $this->hasMany('App\Models\ModelLivros','id');

    }
}

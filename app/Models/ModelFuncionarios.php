<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelFuncionarios extends Model
{
    use HasFactory;
    protected $table = 'funcionarios';
    protected $fillable = ['id', 'nome', 'cpf', 'dataNascimento', 'salario'];

    public function relLivro(){
        return $this->hasMany('App\Models\ModelLivros','id');

    }
}

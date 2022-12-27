<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRegistroVendas extends Model
{
    use HasFactory;
    protected $table = 'registro_vendas';
    protected $fillable = ['id', 'nome', 'nomeLivro', 'email', 'valor', 'dataVenda'];

}

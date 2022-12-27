<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelLivros extends Model
{
    use HasFactory;
    protected $table = 'livros';
    protected $fillable = ['id', 'nome', 'dataPublicacao', 'genero', 'valor','id_estante', 'id_autor', 'id_editora'];

    public function relEstante()
    {
        return $this->hasOne('App\Models\ModelEstante', 'id', 'id_estante');
    }

    public function relAutor()
    {
        return $this->hasOne('App\Models\ModelAutores', 'id', 'id_autor');
    }

    public function relEditora()
    {
        return $this->hasOne('App\Models\ModelEditoras', 'id', 'id_editora');
    }
}

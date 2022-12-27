<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\EditorasController;
use App\Http\Controllers\EstanteController;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegristroVendasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



/*Rotas Estantes*/ 
Route::post('/createEstantes', [EstanteController::class, 'create'])->middleware(['auth', 'verified'])->name('createEstante');
Route::get('/estante/create', [EstanteController::class, 'returnCreate'])->middleware(['auth', 'verified'])->name('returnCretae');
Route::get('/showEstantes', [EstanteController::class, 'show'])->middleware(['auth', 'verified'])->name('estante');
Route::get('/estantes/{id_estante}/visualizar', [EstanteController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('visualizarEstante');
Route::get('/estantes/{id_estante}/delete', [EstanteController::class, 'delete'])->middleware(['auth', 'verified'])->name('deletarEstante');
Route::get('/estantes/{id_estante}/edit', [EstanteController::class, 'edit'])->middleware(['auth', 'verified'])->name('editEstante');
Route::put('/estantes/{id_estante}/update', [EstanteController::class, 'update'])->middleware(['auth', 'verified'])->name('updateEstante');


/*Rotas Autor*/ 
Route::get('/showAllAutores', [AutoresController::class, 'show'])->middleware(['auth', 'verified'])->name('showAllAutores');
Route::get('/returnAutores', [AutoresController::class, 'returnAutores'])->middleware(['auth', 'verified'])->name('redirectllAutores');
Route::post('/createAutores', [AutoresController::class, 'create'])->middleware(['auth', 'verified'])->name('createAutores');
Route::get('/autores/create', [AutoresController::class, 'returnCreate'])->middleware(['auth', 'verified'])->name('returnCreate');
Route::get('/autores/{id_autor}/visualizar', [AutoresController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('visualizarAutor');
Route::get('/autores/{id_autor}/delete', [AutoresController::class, 'delete'])->middleware(['auth', 'verified'])->name('deletarAutor');
Route::get('/autores/{id_autor}/edit', [AutoresController::class, 'edit'])->middleware(['auth', 'verified'])->name('editAutor');
Route::put('/autores/{id_autor}/update', [AutoresController::class, 'update'])->middleware(['auth', 'verified'])->name('updateAutor');

/*Rotas Editora*/ 
Route::get('/showAllEditoras', [EditorasController::class, 'show'])->middleware(['auth', 'verified'])->name('showAllEditoras');
Route::get('/returnEditoras', [EditorasController::class, 'returnEditoras'])->middleware(['auth', 'verified'])->name('redirectAllEditoras');
Route::post('/createEditoras', [EditorasController::class, 'create'])->middleware(['auth', 'verified'])->name('createEditoras');
Route::get('/editoras/create', [EditorasController::class, 'returnCreate'])->middleware(['auth', 'verified'])->name('returnCreate');
Route::get('/editoras/{id_editora}/visualizar', [EditorasController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('visualizarEditora');
Route::get('/editoras/{id_editora}/delete', [EditorasController::class, 'delete'])->middleware(['auth', 'verified'])->name('deletarEditora');
Route::get('/editoras/{id_editora}/edit', [EditorasController::class, 'edit'])->middleware(['auth', 'verified'])->name('editEditora');
Route::put('/editoras/{id_editora}/update', [EditorasController::class, 'update'])->middleware(['auth', 'verified'])->name('updateEditora');

/*Rotas Funcionarios*/ 
Route::get('/showAllFuncionarios', [FuncionariosController::class, 'show'])->middleware(['auth', 'verified'])->name('showAllFuncionarios'); 
Route::get('/returnFuncionarios', [FuncionariosController::class, 'returnFuncionarios'])->middleware(['auth', 'verified'])->name('redirectAllFuncionarios');
Route::post('/createFuncionarios', [FuncionariosController::class, 'create'])->middleware(['auth', 'verified'])->name('createFuncionarios');
Route::get('/funcionarios/create', [FuncionariosController::class, 'returnCreate'])->middleware(['auth', 'verified'])->name('returnCreate');
Route::get('/funcionarios/{id_funcionario}/visualizar', [FuncionariosController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('visualizarFuncionario');
Route::get('/funcionarios/{id_funcionario}/delete', [FuncionariosController::class, 'delete'])->middleware(['auth', 'verified'])->name('deletarFuncionario');
Route::get('/funcionarios/{id_funcionario}/edit', [FuncionariosController::class, 'edit'])->middleware(['auth', 'verified'])->name('editFuncionario');
Route::put('/funcionarios/{id_funcionario}/update', [FuncionariosController::class, 'update'])->middleware(['auth', 'verified'])->name('updateFuncionario');

/*Rotas Livros*/
Route::get('/showAllLivros', [LivrosController::class, 'show'])->middleware(['auth', 'verified'])->name('showAllLivros'); 
Route::get('/returnLivros', [LivrosController::class, 'returnLivros'])->middleware(['auth', 'verified'])->name('redirectAllLivros');
Route::post('/createLivros', [LivrosController::class, 'create'])->middleware(['auth', 'verified'])->name('createLivros');
Route::get('/livros/create', [LivrosController::class, 'returnCreate'])->middleware(['auth', 'verified'])->name('returnCreate');
Route::get('/livros/{id_livro}/visualizar', [LivrosController::class, 'visualizar'])->middleware(['auth', 'verified'])->name('visualizarLivro');
Route::get('/livros/{id_livro}/delete', [LivrosController::class, 'delete'])->middleware(['auth', 'verified'])->name('deletarLivro');
Route::get('/livros/{id_livro}/edit', [LivrosController::class, 'edit'])->middleware(['auth', 'verified'])->name('editLivro');
Route::put('/livros/{id_livro}/update', [LivrosController::class, 'update'])->middleware(['auth', 'verified'])->name('updateLivro');
Route::get('/comprarLivro', [LivrosController::class, 'buy'])->middleware(['auth', 'verified'])->name('buyLivro');

Route::get('/livros/{id_livro}/comprar', [RegristroVendasController::class, 'comprarLivro'])->middleware(['auth', 'verified'])->name('comprarLivro');
Route::get('/registroVendas', [RegristroVendasController::class, 'vendas'])->middleware(['auth', 'verified'])->name('relatorio');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

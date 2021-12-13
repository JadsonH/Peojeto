<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Serie;
use App\Models\Livro;
use App\Models\Anime;
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
    return view('home');
});

Route::post('/salvar', function (Request $request) {
 
  //FILMES
	$nome = $request->post('nome');
	$ano = $request->post('ano');
	$pais = $request->post('pais');
	$genero = $request->post('genero');
	$diretor = $request->post('diretor');
	$faixa_etaria = $request->post('faixa_etaria');
	$atores = $request->post('atores');
	$sinopse = $request->post('sinopse');
	$critica = $request->post('critica');
	
    $filme = new Filme;
    $filme->nome = $nome;
    $filme->save();

    $filme = new Filme;
    $filme->ano = $ano;
    $filme->save();

    $filme = new Filme;
    $filme->pais = $pais;
    $filme->save();

    $filme = new Filme;
    $filme->genero = $genero;
    $filme->save();

    $filme = new Filme;
    $filme->diretor = $diretor;
    $filme->save();

    $filme = new Filme;
    $filme->faixa_etaria = $faixa_etaria;
    $filme->save();

    $filme = new Filme;
    $filme->atores = $atores;
    $filme->save();

    $filme = new Filme;
    $filme->sinopse = $sinopse;
    $filme->save();

    $filme = new Filme;
    $filme->critica = $critica;
    $filme->save();
   
    return redirect()->to(url('/principal'));

})->name('salvar');

Route::get('/principal', function () {
$lista_filmes = Filme::all();

    return view('principal.principal', ['filmes'=>$lista_filmes]);
});

?>